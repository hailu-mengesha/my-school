@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Manage Profile</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
				<form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data">
						@csrf
					  <div class="row">
						<div class="col-12">






<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<h5>User Name <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" id="name" name="name" class="form-control" value="{{$editData->name}}" required="" > 
			</div>
		</div>
	</div>
	<!--End COL-6-->
	<div class="col-md-6">
		<div class="form-group">
			<h5>User Email <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="email" id="email" name="email" class="form-control" value="{{$editData->email}}" required="" > 
			</div>
		</div>
	</div>
	<!--End COL-6-->
</div>


<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<h5>User Mobile <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" id="mobile" name="mobile" class="form-control" value="{{$editData->mobile}}" required="" > 
			</div>
		</div>
	</div>
	<!--End COL-6-->
	<div class="col-md-6">
		<div class="form-group">
			<h5>User Address <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" id="address" name="address" class="form-control" value="{{$editData->address}}" required="" > 
			</div>
		</div>
	</div>
	<!--End COL-6-->
</div>


<div class="row">
	<div class="col-md-6">

		<div class="form-group">
			<h5>User Gender <span class="text-danger">*</span></h5>
			<div class="controls">
				<select name="usertype" id="usertype" required="" class="form-control">
					<option value="" selected="" disabled="">Select Gender</option>
					<option value="Male" {{($editData->gender == "Male" ? "selected":"" )}}>Male</option>
					<option value="Female" {{($editData->gender == "Female" ? "selected":"")}}>Female</option>
				</select>
			</div>
		</div>				
	</div>
	<!--End COL-6-->

	<div class="col-md-6">
		<div class="form-group">
			<h5>Profile Image <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="file" name="image" id="image"> 
			</div>
		</div>

		<div class="form-group">
			<div class="controls">
				<img id="show_images" src="{{(!empty($user->image)) ? url('upload/user_images/'.$user->image):url('upload/no_image.jpg')}}" style="width: 100px;height: 100px border:1px solid #000000;">
			</div>
		</div>
	</div>
	<!--End COL-6-->

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

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload=function(e){
				$('#show_images').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);


		});
	});
</script>



@endsection