@extends('template.pasang')
@section('content')
    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
		@include('sweetalert::alert')

    <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Kategori</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  	<table id="complex_header" class="table table-bordered table-striped" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Kategori</th>
									<th>Slug</th>
									<th>Action</th>
								</tr>
								</thead>
							<tbody>
								@foreach ($kategori as $key => $item)	
									<tr>
										<td>{{ $key+1 }}</td>
										<td>{{ $item->kategori }}</td>
										<td>{{ $item->slug }}</td>
										<td>
											<a href="/edit-kategori/{{ $item->id }}" class="btn btn-warning"><i class="fi fi-rr-edit"></i></a>
											<a href="/delete-kategori/{{ $item->id }}" class="btn btn-danger"><i class="fi fi-rs-trash"></i></a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					</div>
				</div>
			  </div>
			  <div class="col-4">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Tambah Data</h3>
				  </div>
				  <div class="box-body">
					<form action="/create-kategori" method="post">
						@csrf
						<div class="mb-3">
							<label for="brand" class="form-label">Kategori</label>
							<input type="text" class="form-control" id="brand" name="kategori">
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Slug</label>
							<input type="text" class="form-control" id="slug" name="slug">
						</div>
						<div class="mb-3">
							<input type="submit" value="Tambah" class="btn btn-primary">
						</div>
					</form>
				  </div>
				</div>
			</div>
		  </div>
		</section>
	  </div>
  </div>
    </body>
@endsection