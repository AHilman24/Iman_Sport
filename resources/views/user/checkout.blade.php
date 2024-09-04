@extends('user-template.masang')
@section('konten')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Checkout</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="checkout-box ">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-group checkout-steps" id="accordion">
                            <!-- checkout-step-01  -->
                            <div class="panel panel-default checkout-step-01">

                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">
                                        <a data-toggle="collapse" class="" data-parent="#accordion"
                                            href="#collapseOne">
                                            <span><i class="fi fi-rr-calculator-bill"></i></span>Checkout
                                        </a>
                                    </h4>
                                </div>
                                <!-- panel-heading -->

                                <div id="collapseOne" class="panel-collapse collapse in">

                                    <!-- panel-body  -->
                                    <div class="panel-body">
                                        <div class="row">
                                            <!-- guest-login -->
                                            {{-- <div class="col-md-6 col-sm-6 guest-login">
                                                
                                            </div> --}}
                                            <!-- guest-login -->

                                            <!-- already-registered-login -->
                                            <div class="col-md-12 col-sm-12 already-registered-login">
                                                <form class="/checkout/{{ $cart->id }}" role="form">
                                                    <div class="form-group">
                                                        <label class="info-title" for="penerima">Nama Penerima </label>
                                                        <input type="text"
                                                            class="form-control unicase-form-control text-input"
                                                            id="penerima" placeholder="" value="{{ $cart->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="info-title" for="exampleInputEmail1">Email Address
                                                        </label>
                                                        <input type="email"
                                                            class="form-control unicase-form-control text-input"
                                                            id="exampleInputEmail1" placeholder="" value="{{ $cart->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="info-title" for="telepon">No Telepon </label>
                                                        <input type="number"
                                                            class="form-control unicase-form-control text-input"
                                                            id="telepon" placeholder=""  value="{{ $cart->no_hp }}">
                                                    </div>
                                                </form>


                                                <form action="/checkout/proccess" class="register-form" role="form" method="POST" >
                                                    @csrf
                                                    {{-- <div class="form-group">
                                                        <label class="info-title ">Pilih Provinsi <span>*</span></label>
                                                        <select name="" id=""
                                                            class="form-control form-select">
                                                            <option value="1">coba</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="info-title ">Pilih Kota/Kabupaten
                                                            <span>*</span></label>
                                                        <select name="" id=""
                                                            class="form-control form-select">
                                                            <option value="1">coba</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="info-title">Pilih Kecamatan <span>*</span></label>
                                                        <select name="" id=""
                                                            class="form-control form-select">
                                                            <option value="1">coba</option>
                                                        </select>
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label class="info-title" for="exampleInputEmail1">Alamat
                                                            <span>*</span></label>
                                                        <textarea name="alamat" class="form-control" id="" cols="20" rows="5" placeholder="alamat"></textarea>
                                                    </div>
                                                    <input type="hidden" name="cart" value="{{ json_encode($cart) }}">
                                                    <input type="hidden" name="produk" value="{{ json_encode($produk) }}">
                                                    <button type="submit"
                                                        class="btn-upper btn btn-primary checkout-page-button">Submit</button>
                                                </form>
                                            </div>
                                            <!-- already-registered-login -->
                                        </div>
                                    </div>
                                    <!-- panel-body  -->
                                </div><!-- row -->
                            </div>
                        </div><!-- /.checkout-steps -->
                    </div>
                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Pesanan</h4>
                                    </div>
                                    <div class="col">
                                        <div class="content">
                                            <div class="mb-2">
                                                <p class="text" style="font-size: 15px;font-weight: bold">Gambar:</p>
                                                <img class="img-responsive" alt="" src="{{ asset('storage/foto/'.$produk->foto) }}" style="width: 80px">
                                                <p class="text" style="font-size: 15px">Kuantitas </p>
                                            </div>
                                            <div class="mb-2">
                                                <p class="text" style="font-size: 15px;font-weight: bold">Subtotal : Rp. {{ $produk->harga }}</p>
                                            </div>
                                            <div class="mb-2">
                                                <p class="text" style="font-size: 15px;font-weight: bold">Total Pembayaran : Rp. {{ $produk->harga }}</p>
                                            </div>
                                            <div class="mb-2">
                                                <p class="text" style="font-size: 15px;font-weight: bold">Coba</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.checkout-box -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div>
@endsection
