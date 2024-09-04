@extends('template.pasang')
@section('content')
    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
    <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  <div class="col-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Tambah Data</h3>
				  </div>
				  <div class="box-body">
					<form action="/edit-kategori/{{ $data->id }}" method="post">
						@csrf
						<div class="mb-3">
							<label for="brand" class="form-label">Kategori</label>
							<input type="text" class="form-control" id="brand" value="{{ $data->kategori }}" name="kategori">
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Slug</label>
							<input type="text" class="form-control" id="slug" value="{{ $data->slug }}" name="slug">
						</div>
						<div class="mb-3">
							<input type="submit" value="Edit" class="btn btn-primary">
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