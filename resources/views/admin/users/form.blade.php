
<div class="card ml-xl-5">
<div class="card-header">
  <h3 class="card-title text-center">
	<i class="fas fa-info-circle"></i>
  		&nbsp; User Information
	</h3>
  <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fas fa-minus"></i></button>
  </div>
</div>
<div class="card-body">
    <div class="row">
    	<div class="col">

		  <div class="form-group">
	        <label for="inputEmail">Email Address <span style="color: red; font-size: 20px;">*</span> </label>
	        <input type="text" id="email" name="email" data-toggle="tooltip"  data-placement="left" title="Required" tabindex="0" class="form-control {{ $errors->has('email') ? 'has-error' : ''}} border-top-0 border-left-0 border-right-0 rounded-0 border-dark" required="on" autocomplete="off">
	        
	        <div>
	        	@if($errors->has('email'))
	        			
	        	@endif
	        </div>
	      </div>
	      <div class="form-group">
                  <label>Role</label>
                  <select name="roles" data-toggle="tooltip" title="Required" data-placement="left" class="form-control custom-select select2" style="width: 100%;">
                    <option selected="selected" disabled>---Select----</option>
                 	@foreach( $data as $key => $userRole )
                 		<option value="{{ $key }}">{{ $userRole}} </option>
                 	@endforeach
                  </select>
                  <div class="">
                  	
                  </div>
            </div>
		<div class="row">
			<div class="col-md-6">
				 <div class="form-group">
			        <label for="inputPassword">Password <span style="color: red; font-size: 20px;">*</span> </label>
					<div class="input-group-prepend">
			        	<input type="password" id="password" name="password" data-toggle="tooltip" title="Required" data-placement="left" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 border-dark" required="on" autocomplete="off">
			        	<span class="input-group-append">
		                    <span toggle="#password" class="toggle-password btn btn-outline-default border-top-0 border-left-0 border-right-0 rounded-0 border-dark far fa-eye">
		                    </span>
	                  	</span>
					</div>
		      	</div>
			</div>
			<div class="col-md-6">
				 <div class="form-group">
		 		   <label for="inputPassword">Confirm Password<span style="color: red; font-size: 20px;">*</span> </label>
				 	<div class="input-group-prepend">
			        <input type="password" id="c-password" name="c-password" data-toggle="tooltip" title="Required" data-placement="left" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 border-dark" required="on" autofocus="on" autocomplete="off">
			        	<span class="input-group-append">
		                    <span toggle="#c-password" class="toggle-c-password btn btn-outline-default border-top-0 border-left-0 border-right-0 rounded-0 border-dark far fa-eye">
		                    </span>
	                  	</span>
				 	</div>
			      </div>
			</div>
      	
		</div>
		<br>
		<center>
			<input type="submit" class="btn btn-primary" value="Submit" />
			&nbsp;
			&nbsp;
			&nbsp;
			<input type="reset" class="btn btn-success" value="Clear" />
		</center>	      	
    	</div>
    </div>

</div>
<!-- /.card-body -->
</div>
          <!-- /.card -->
