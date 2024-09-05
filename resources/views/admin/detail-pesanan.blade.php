@extends('template.pasang')
@section('content')
    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
		@include('sweetalert::alert')
    <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  	<div class="row">
				<div class="col-6">
			 		<div class="box">
						<div class="box-header with-border">
					  		<h3 class="box-title">Data Pembayaran</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="" class="table table-striped" style="width:100%">
									<thead>
										<tr>
											<td>Nama </td>
                                            <td>: {{ $user->name }} | {{ $user->email }}</td>
										</tr>
                                        <tr>
											<td>No Hp </td>
                                            <td>: {{ $user->no_hp }}</td>											
										</tr>
                                        <tr>
											<td>Tanggal Pesanan </td>
                                            <td>: {{ $user->created_at->format('d F Y ') }}</td>											
										</tr>
                                        <tr>
											<td>Metode Pembayaran </td>
                                            <td>: {{ $pesanan->metode_bayar }}</td>											
										</tr>
                                        <tr>
											<td>Total Harga </td>
                                            <td>: Rp. {{ $produk->harga }}</td>											
										</tr>
                                        <tr>
											<td>Total Belanja </td>
                                            <td>: Rp. {{ $produk->harga }}</td>											
										</tr>
									</thead>
									
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
                    <div class="box">
                       <div class="box-header with-border">
                             <h3 class="box-title">Data Pengiriman</h3>
                       </div>
                       <!-- /.box-header -->
                       <div class="box-body">
                           <div class="table-responsive">
                               <table id="" class="table table-striped" style="width:100%">
                                   <thead>
                                       <tr>
                                           <td>Nama </td>
                                           <td>: {{ $user->name }}</td>
                                       </tr>
                                       <tr>
                                           <td>No Hp </td>
                                           <td>: {{ $user->no_hp }}</td>											
                                       </tr>
                                       <tr>
                                           <td>Alamat </td>
                                           <td>: {{ $user->alamat }}</td>											
                                       </tr>
                                       <tr>
                                           <td>Metode Pembayaran </td>
                                           <td>: {{ $pesanan->metode_bayar }}</td>											
                                       </tr>
                                       
                                   </thead>
                                   
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
			</div>
            <div class="row">
                <div class="col-12">
                    <div class="box">
                       <div class="box-header with-border">
                             <h3 class="box-title">Detail Produk</h3>
                       </div>
                       <!-- /.box-header -->
                       <div class="box-body">
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped" style="width:100%">
                              <thead>
                                  <tr>
                                      {{-- <th>No</th> --}}
                                      <th>Foto</th>
                                      <th>Produk</th>
                                      <th>Harga</th>
                                      <th>Merek</th>
                                      <th>Kategori</th>
                                      <th>Total Belanja</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      {{-- <td>1</td> --}}
                                      <td><img src="{{ asset('storage/foto/'.$produk->foto) }}" style="width: 50px" alt=""></td>
                                      <td>{{ $produk->nama_produk }}</td>
                                      <td>Rp. {{ $produk->harga }}</td>
                                      <td>{{ $produk->merek->merek }}</td>
                                      <td>{{ $produk->kategori->kategori }}</td>

                                      <td>Rp. {{ $produk->harga }}</td>
                                      
                                  </tr>
                                  {{-- @foreach ($barang as $key => $item)
                                  @endforeach --}}
                              </tbody>
                          </table>
                          </div>
                       </div>
                   </div>
               </div>
            </div>
		</section>
	  	</div>
  	</div>
    </body>
@endsection