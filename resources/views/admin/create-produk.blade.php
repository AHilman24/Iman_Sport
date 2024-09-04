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
						<form action="/create-produk" method="post" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
								<label for="brand" class="form-label">Nama Produk</label>
								<input type="text" class="form-control" id="brand" name="nama_produk">
							</div>
							<div class="mb-3">
								<label for="formFile" class="form-label">Harga</label>
								<input class="form-control" type="number" id="formFile" name="harga">
							</div>
                            <div class="mb-3">
								<label for="formFile" class="form-label">Stok</label>
								<input class="form-control" type="number" id="formFile" name="stok">
							</div>
                            <div class="mb-3">
								<label class="form-label">Merek</label>
                                <select name="merek_id" class="form-select border-dark form-control" id="">
                                    @foreach ($merek as $item)
                                        <option value="{{$item->id}}">{{$item->merek}}</option>
                                    @endforeach
                                </select>
							</div>
                            <div class="mb-3">
								<label class="form-label">Kategori</label>
                                <select name="kategori_id" class="form-select form-control" id="">
                                    @foreach ($data as $item)
                                        <option value="{{$item->id}}">{{$item->kategori}}</option>
                                    @endforeach
                                </select>
							</div>
                            <div class="mb-3">
								<label for="formFile" class="form-label">Gambar</label>
								<input class="form-control" type="file" id="formFile" name="foto">
							</div>
                            <div class="mb-3">
								<label for="formFile" class="form-label">Deskripsi</label>
								<input class="form-control" type="text" id="formFile" name="deskripsi">
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