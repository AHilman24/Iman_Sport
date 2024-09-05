@extends('user-template.masang')
@section('konten')
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">

                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    <div id="hero">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            @foreach ($slider as $key => $item)
                                <div class="item"
                                    style="background-image: url({{ asset('storage/foto/' . $item->foto) }});">
                                    <div class="container-fluid">
                                        <div class="caption bg-color vertical-center text-left">
                                            {{-- <div class="slider-header fadeInDown-1">Top Brands</div> --}}
                                            <div class="big-text fadeInDown-1"> {{ $item->judul }} </div>
                                            <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{ $item->deskripsi }}</span>
                                            </div>
                                            <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product"
                                                    class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                                    Now</a> </div>
                                        </div>
                                        <!-- /.caption -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </div>
                            @endforeach
                        </div>
                        <!-- /.owl-carousel -->
                    </div>

                    <!-- ========================================= SECTION – HERO : END ========================================= -->

                    <!-- ============================================== INFO BOXES ============================================== -->
                    <div class="info-boxes wow fadeInUp">
                        <div class="info-boxes-inner">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">money back</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">30 Days Money Back Guarantee</h6>
                                    </div>
                                </div>
                                <!-- .col -->

                                <div class="hidden-md col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">free shipping</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Shipping on orders over $99</h6>
                                    </div>
                                </div>
                                <!-- .col -->

                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">Special Sale</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Extra $5 off on all items </h6>
                                    </div>
                                </div>
                                <!-- .col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.info-boxes-inner -->

                    </div>
                    <!-- /.info-boxes -->
                    <!-- ============================================== INFO BOXES : END ============================================== -->
                    <!-- ============================================== SCROLL TABS ============================================== -->
                    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                        <div class="more-info-tab clearfix ">
                            <h3 class="new-product-title pull-left">Semua Produk</h3>
                            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                <li class="active"><a data-transition-type="backSlide" href="#all"
                                        data-toggle="tab">All</a></li>
                                <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a>
                                </li>
                                <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a>
                                </li>
                                <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
                            </ul>
                            <!-- /.nav-tabs -->
                        </div>
                        <div class="tab-content outer-top-xs">
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        @foreach ($produk as $key => $item)
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"> <a
                                                                    href="/detail-produk/{{ $item->id }}"><img
                                                                        src="{{ asset('storage/foto/' . $item->foto) }}"
                                                                        style="" alt=""></a> </div>
                                                            <!-- /.image -->
                                                            <div class="tag new"><span>new</span></div>
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a
                                                                    href="detail.html">{{ $item->nama_produk }}</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>
                                                            <div class="product-price"> <span class="price"> Rp.
                                                                    {{ $item->harga }} </span> <span
                                                                    class="price-before-discount">$ 800</span> </div>
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="lnk">
                                                                        <form action="/cart/{{ $item->id }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <input type="submit" value="Add Cart"
                                                                                class="btn btn-primary">

                                                                        </form>
                                                                    </li>
                                                                    {{-- <li class="lnk wishlist"> <a class="add-to-cart"
                                                                            href="/cart/{id}" title="Wishlist"> <i
                                                                                class="icon fa fa-heart"></i> </a> </li>
                                                                    <li class="lnk"> <a class="add-to-cart"
                                                                            href="/cart" title="Compare"> <i
                                                                                class="fa fa-signal"
                                                                                aria-hidden="true"></i> </a>
                                                                    </li> --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.products -->
                                            </div>
                                        @endforeach
                                        <!-- /.item -->
                                    </div>
                                    <!-- /.home-owl-carousel -->
                                </div>
                                <!-- /.product-slider -->
                            </div>
                        </div>
                    </div>
                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Sepatu</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @foreach ($produk as $key => $item)
                                @if ($item->kategori_id === 1)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="/detail-produk/{{ $item->id }}"><img
                                                                src="{{ asset('storage/foto/' . $item->foto) }}"
                                                                style="" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">{{ $item->nama_produk }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price"> <span class="price"> Rp.
                                                            {{ $item->harga }} </span> <span
                                                            class="price-before-discount">$ 800</span> </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="lnk">
                                                                <form action="/cart/{{ $item->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="submit" value="Add Cart"
                                                                        class="btn btn-primary">

                                                                </form>
                                                            </li>
                                                            {{-- <li class="lnk wishlist"> <a class="add-to-cart"
                                                                    href="/cart/{produk}" title="Wishlist"> <i
                                                                        class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart"
                                                                    href="/cart" title="Compare"> <i
                                                                        class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- /.home-owl-carousel -->
                    </section>
                    <!-- /.section -->

                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Jersey</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @foreach ($produk as $key => $item)
                                @if ($item->kategori_id === 2)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="/detail-produk/{{ $item->id }}"><img
                                                                src="{{ asset('storage/foto/' . $item->foto) }}"
                                                                style="" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">{{ $item->nama_produk }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price"> <span class="price"> Rp.
                                                            {{ $item->harga }} </span> <span
                                                            class="price-before-discount">$ 800</span> </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="lnk">
                                                                <form action="/cart/{{ $item->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="submit" value="Add Cart"
                                                                        class="btn btn-primary">

                                                                </form>
                                                            </li>
                                                            {{-- <li class="lnk wishlist"> <a class="add-to-cart"
                                                                    href="/cart/{produk}" title="Wishlist"> <i
                                                                        class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart"
                                                                    href="/cart" title="Compare"> <i
                                                                        class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- /.home-owl-carousel -->
                    </section>

                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Bola</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @foreach ($produk as $key => $item)
                                @if ($item->kategori_id === 3)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="/detail-produk/{{ $item->id }}"><img
                                                                src="{{ asset('storage/foto/' . $item->foto) }}"
                                                                style="" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">{{ $item->nama_produk }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price"> <span class="price"> Rp.
                                                            {{ $item->harga }} </span> <span
                                                            class="price-before-discount">$ 800</span> </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="lnk">
                                                                <form action="/cart/{{ $item->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="submit" value="Add Cart"
                                                                        class="btn btn-primary">

                                                                </form>
                                                            </li>
                                                            {{-- <li class="lnk wishlist"> <a class="add-to-cart"
                                                                    href="/cart/{produk}" title="Wishlist"> <i
                                                                        class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart"
                                                                    href="/cart" title="Compare"> <i
                                                                        class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- /.home-owl-carousel -->
                    </section>
                    <!-- /.section -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Aksesoris</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @foreach ($produk as $key => $item)
                                @if ($item->kategori_id === 4)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="/detail-produk/{{ $item->id }}"><img
                                                                src="{{ asset('storage/foto/' . $item->foto) }}"
                                                                style="" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">{{ $item->nama_produk }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price"> <span class="price"> Rp.
                                                            {{ $item->harga }} </span> <span
                                                            class="price-before-discount">$ 800</span> </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="lnk">
                                                                <form action="/cart/{{ $item->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="submit" value="Add Cart"
                                                                        class="btn btn-primary">

                                                                </form>
                                                            </li>
                                                            {{-- <li class="lnk wishlist"> <a class="add-to-cart"
                                                                    href="/cart/" title="Wishlist"> <i
                                                                        class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart"
                                                                    href="/cart" title="Compare"> <i
                                                                        class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- /.home-owl-carousel -->
                    </section>
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Kerudung Sport</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @foreach ($produk as $key => $item)
                                @if ($item->kategori_id === 5)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="/detail-produk/{{ $item->id }}"><img
                                                                src="{{ asset('storage/foto/' . $item->foto) }}"
                                                                style="" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">{{ $item->nama_produk }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price"> <span class="price"> Rp.
                                                            {{ $item->harga }} </span> <span
                                                            class="price-before-discount">$ 800</span> </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="lnk">
                                                                <form action="/cart/{{ $item->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="submit" value="Add Cart"
                                                                        class="btn btn-primary">

                                                                </form>
                                                            </li>
                                                            {{-- <li class="lnk wishlist"> <a class="add-to-cart"
                                                                    href="/cart/{produk}" title="Wishlist"> <i
                                                                        class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart"
                                                                    href="/cart" title="Compare"> <i
                                                                        class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- /.home-owl-carousel -->
                    </section>
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                </div>
                <!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->
            </div>
            <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        @foreach ($merek as $key => $item)
                            <div class="item m-t-15"><img src="{{ asset('storage/foto/' . $item->foto) }}"
                                    alt="" style="width: 50%"></div>
                        @endforeach
                        {{-- <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="tmpt/images/brands/brand1.png" src="tmpt/images/blank.gif" alt=""> </a> </div> --}}
                        <!--/.item-->
                    </div>
                    <!-- /.owl-carousel #logo-slider -->
                </div>
                <!-- /.logo-slider-inner -->

            </div>
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
        <!-- /.container -->
    </div>
@endsection
