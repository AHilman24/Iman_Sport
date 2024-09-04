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
						<form action="/update-slider/{{ $promo->id }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
								<label for="brand" class="form-label">Judul</label>
								<input type="text" class="form-control" id="brand" value="{{ $promo->judul }}" name="judul">
                            </div>
                            <div class="mb-3">
								<label for="formFile" class="form-label">Gambar</label>
								<input class="form-control" type="file" id="formFile" name="foto" value="{{ asset('storage/foto/'.$promo->foto) }}">
							</div>
                            <div class="mb-3">
								<label for="formFile" class="form-label">Deskripsi</label>
								<input class="form-control" type="text" id="formFile" value="{{ $promo->deskripsi }}" name="deskripsi">
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