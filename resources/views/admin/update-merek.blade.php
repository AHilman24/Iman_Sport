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
							  <h3 class="box-title">Edit Data</h3>
						</div>
						<div class="box-body">
						  <form action="/edit-merek/{{ $merek->id }}" method="post" enctype="multipart/form-data">
							  @csrf
							  <div class="mb-3">
								  <label for="brand" class="form-label">Nama Merek</label>
								  <input type="text" class="form-control" id="brand" name="merek" value="{{ $merek->merek }}">
							  </div>
							  <div class="mb-3">
								  <label for="slug" class="form-label">Slug</label>
								  <input type="text" class="form-control" id="slug" name="slug" value="{{ $merek->slug }}">
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



