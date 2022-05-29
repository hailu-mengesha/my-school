@extends('admin.admin_master')
@section('admin')
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update User</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{route('users.update',$editData->id)}}" novalidate="">
						@csrf
					  <div class="row">
						<div class="col-12">

<div class="row">
	<div class="col-md-6">

		<div class="form-group">
			<h5>User Role <span class="text-danger">*</span></h5>
			<div class="controls">
				<select name="usertype" id="usertype" required="" class="form-control">
					<option value="" selected="" disabled="">Select Role</option>
					<option value="Admin" {{ ($editData->usertype == "Admin" ? "selected":"") }}>Admin</option>
					<option value="User" {{ ($editData->usertype == "User" ? "selected":"") }}>User</option>
				</select>
			</div>
		</div>				
	</div>
	<!--End COL-6-->

	<div class="col-md-6">
		<div class="form-group">
			<h5>User Name <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="name" id="name" class="form-control" value="{{$editData->name}}" required="" > 
			</div>
		</div>
	</div>
	<!--End COL-6-->
</div>	
	<!--End ROw-->




<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<h5>User Email <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="email" id="email" name="email" class="form-control" value="{{$editData->email}}" required="" > 
			</div>
		</div>
	</div>
	
	<!--End COL-6-->

	<div class="col-md-6">
		
	</div>
	<!--End COL-6-->
</div>
</div>

	
								
	<div class="text-xs-right">
		<input type="submit" class="btn btn-rounded btn-info mb-5" value="Update"></input>
	</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
  </div>
</div>




@endsection