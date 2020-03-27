<?php

namespace App\Http\Traits\profiling;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\User as UserModel;

trait UserTraits
{
	public function emptySearch($START, $LIMIT, $ORDER, $DIR)
	{
		return $posts = UserModel::offset($START)
								->limit($LIMIT)
								->orderBy($ORDER, $DIR)
								->get();
	}

	public function ifNotEmptySearch($SEARCH, $LIMIT, $ORDER, $DIR, $START)
	{
		return $posts = UserModel::where('email','like',"%{$SEARCH}%")
								->limit($LIMIT)
								->orderBy($ORDER, $DIR)
								->get();
	}

	public function serverProcessFunction( Request $request )
	{
		$show_url = 'show/';
		$edit_url = 'edit/';
		$delete_url = 'delete/';
		$column = array (
			0 => 'email', 
			1 => 'action'
		);

		$totalData = UserModel::count();
		$limit = $request->input('length');
		$start = $request->input('start');
	    $order = $column[$request->input('order.0.column')];
		$dir = $request->input('order.0.dir');

		$searchValue = $request->input('search.value');

		if(empty($searchValue))
		{
			$posts = $this->emptySearch($start, $limit, $order, $dir);
			$totalFiltered = UserModel::count();
		} else {
			
			$search = $searchValue;
			$posts = $this->ifNotEmptySearch($search, $limit, $order, $dir, $start);

			$query = UserModel::where('email','like',"%{$search}%")
								->count();

			$totalFiltered = $query;
		
		}

		$data = array();

		if($posts)
		{

			foreach($posts as $key => $value)
			{
				$code = Crypt::encrypt($value->id);
				$nestedData['email'] = $value->email;
				$nestedData['action'] = '';


				$nestedData['action'] .= '<a href="'.$show_url.$code;
				$nestedData['action'] .= '"style="font-size: 12px;" data-toggle="tooltip" data-placement="top" title="Show Profile" class="btn btn-info btn-xs "><i class="far fa-eye fa-2x"></i></a>';


				$nestedData['action'] .= '<a href="'.$edit_url.$code;
				$nestedData['action'] .= '"style="font-size: 12px;" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-xs ml-2"><i class="fa fa-edit fa-2x"></i></a>';
				
				$nestedData['action'] .= '<a href="'.$delete_url.$code;
				$nestedData['action'] .= '"style="font-size: 12px;" data-toggle="tooltip" data-placement="top" title="Trashed" class="btn btn-danger ml-2"><i class="fa fa-trash fa-2px"></a>';
				$data[] = $nestedData;

			}

			$json_data = array(
				'draw' => intval($request->input('draw')),
				'recordsTotal' => intval($totalData),
				'recordsFiltered' => intval($totalFiltered),
				'data' => $data
			);

			echo json_encode($json_data);

		}


	}



 	

}


?>