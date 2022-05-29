@extends('admin.admin_master')
@section('admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
		  <div class="row">
	
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">User List</h3>
				  <a href="{{route('users.add')}}" style="float: right;" class=" btn btn-rounded btn-success mb-5">Add User<a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>
								<th>Role</th>
								<th>Name</th>
								<th>Email</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key=>$user)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$user->usertype}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								
								<td>
									<a href="{{route('users.edit',$user->id)}}" class="btn btn-info">Edit</a>
									<a href="{{route('users.delete',$user->id)}}" class="btn btn-danger" id="delete">Delete</a>
								</td>
							@endforeach
							
						</tbody>
						<tfoot>
							
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
  
  
  
 
</div>
<!-- ./wrapper -->

	<!-- Vendor JS -->
	<script src="{{('backend/js/vendors.min.js')}}"></script>
    <script src="{{('../assets/icons/feather-icons/feather.min.js')}}"></script>	<script src="{{('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{('backend/js/pages/data-table.js')}}"></script>
	
	<!-- Sunny Admin App -->
	<script src="{{('backend/js/template.js')}}"></script>
	

</body>
</html>



@endsection