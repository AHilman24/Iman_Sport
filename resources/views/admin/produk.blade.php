@extends('template.pasang')
@section('content')
    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
		@include('sweetalert::alert')

    <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Produk</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="complex_header" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Produk</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Foto</th>
								<th>Deskripsi</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($produk as $key => $item)
							<tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>{{ $item->stok }}</td>
                                <td><img src="{{ asset('storage/foto/'.$item->foto) }}" style="width: 50px" alt=""></td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                    <a href="/update-produk/{{ $item->id }}" class="btn btn-warning"><i class="fi fi-rr-edit"></i></a>
                                    <a href="/delete-produk/{{ $item->id }}" class="btn btn-danger"><i class="fi fi-rs-trash"></i></a>
                                </td>
                            </tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->      
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
    </body>
@endsection