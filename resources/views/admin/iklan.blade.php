@extends('template.pasang')
@section('content')
<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
    <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  	<div class="row">
				<div class="col-8">
			 		<div class="box">
						<div class="box-header with-border">
					  		<h3 class="box-title">Data Iklan</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example5" class="table table-bordered table-striped" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Gambar</th>
											<th>Judul</th>
											<th>Deskripsi</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($promo as $key => $item)
                                        <tr>
											<td>{{ $key+1 }}</td>
											<td><img src="{{ asset('storage/foto/'.$item->foto) }}" alt="" style="width: 50px"></td>
											<td>{{ $item->judul }}</td>
											<td>{{ $item->deskripsi }}</td>
											<td>
												<a href="/update-slider/{{ $item->id }}" class="btn btn-warning"><i class="fi fi-rr-edit"></i></a>
												<a href="/delete-slider/{{ $item->id }}" class="btn btn-danger"><i class="fi fi-rs-trash"></i></a>
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
						<form action="/create-slider" method="post" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
								<label for="judul" class="form-label">Judul</label>
								<input type="text" class="form-control" id="judul" name="judul">
							</div>
							<div class="mb-3">
								<label for="deskripsi" class="form-label">Deskripsi</label>
								<input type="text" class="form-control" id="deskripsi" name="deskripsi">
							</div>
							<div class="mb-3">
								<label for="formFile" class="form-label">Gambar</label>
								<input class="form-control" type="file" id="formFile" name="foto">
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