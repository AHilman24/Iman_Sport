<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Iman Sport</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('tmpt/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('tmpt/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/bootstrap-select.min.css') }}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('tmpt/css/font-awesome.css') }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
                            <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                            <li><a href="/check"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                            <?php
                                if (Auth::check()) {
                                    # code..
                                     ?>
                            <li><a href="/logout"><i class="fi fi-rs-sign-out-alt"></i>Logout</a></li>
                            <?php 
                                }
                                else {
                                    ?>
                            <li><a href="/login"><i class="icon fa fa-lock"></i>Login</a></li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </div>
                    <!-- /.cnt-account -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->
        <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo" style="margin-top: -10px"> <a href="/"> <img src="../images/imas.png"
                                    alt="logo" style="width: 150px"> </a> </div>
                        <!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div>
                    <!-- /.logo-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form method="post" action="/search">
                                @csrf
                                <div class="control-group">
                                    <input class="search-field" name="cari" placeholder="Search here..." />
                                    {{-- <a class="search-button" href="#"></a> --}}
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div>
                    <!-- /.top-search-holder -->

                    <?php
                        if (Auth::check()) {
                            # code...
                            ?>
                    <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                        <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                                data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                                    <div class="basket-item-count"><span class="count">
                                            {{ $total_keranjang }}
                                        </span></div>
                                    <div class="total-price-basket"> <span class="lbl">cart -</span> <span
                                            class="total-price"> <span class="sign">$</span><span class="value">
                                                @php
                                                    $total = 0;
                                                    foreach ($keranjang as $key => $value) {
                                                        $total += $value->produk->harga;
                                                    }
                                                    echo $total;
                                                @endphp
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    @foreach ($keranjang as $item)
                                        <div class="cart-item product-summary">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <div class="image"> <a href="detail.html"><img
                                                                src="{{ asset('storage/foto/' . $item->produk->foto) }}"
                                                                alt=""></a> </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <h3 class="name"><a
                                                            href="index.php?page-detail">{{ $item->produk->nama_produk }}</a>
                                                    </h3>
                                                    <div class="price">{{ $item->produk->harga }}</div>
                                                </div>
                                                <div class="col-xs-1 action"> <a
                                                        href="/delete-cart/{{ $item->id }}"><i
                                                            class="fa fa-trash"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="clearfix cart-total">
                                            <div class="pull-right"> <span class="text">Sub Total :</span><span
                                                    class='price'>Rp. {{ $item->produk->harga }}</span> </div>
                                            <div class="clearfix"></div>
                                            <a href="/check/{{ $item->id }}"
                                                class="btn btn-upper btn-primary btn-block m-t-20">Shop Chart</a>
                                        </div>
                                    @endforeach
                                    <!-- /.cart-item -->

                                    <!-- /.cart-total-->

                                </li>
                            </ul>
                            <!-- /.dropdown-menu-->
                        </div>
                        <!-- /.dropdown-cart -->

                        <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                    </div>
                    <?php 
                        }
                        else {
                            ?>
                    <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                        <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                                data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                                    <div class="basket-item-count"><span class="count">
                                            0
                                        </span></div>
                                    <div class="total-price-basket"> <span class="lbl">cart -</span> <span
                                            class="total-price"> <span class="sign">$</span><span class="value">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <!-- /.dropdown-menu-->
                        </div>
                        <!-- /.dropdown-cart -->

                        <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                    </div>
                    <?php
                        }
                    ?>
                    <!-- /.top-cart-row -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.main-header -->

        <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="active dropdown yamm-fw"> <a href="home.html" data-hover="dropdown"
                                            class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                                    <li class="dropdown mega-menu">
                                        <a href="category.html" data-hover="dropdown" class="dropdown-toggle"
                                            data-toggle="dropdown">Alat-alat <span
                                                class="menu-label hot-menu hidden-xs">hot</span> </a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Laptops</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Gaming</a></li>
                                                                <li><a href="#">Laptop Skins</a></li>
                                                                <li><a href="#">Apple</a></li>
                                                                <li><a href="#">Dell</a></li>
                                                                <li><a href="#">Lenovo</a></li>
                                                                <li><a href="#">Microsoft</a></li>
                                                                <li><a href="#">Asus</a></li>
                                                                <li><a href="#">Adapters</a></li>
                                                                <li><a href="#">Batteries</a></li>
                                                                <li><a href="#">Cooling Pads</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Desktops</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Routers & Modems</a></li>
                                                                <li><a href="#">CPUs, Processors</a></li>
                                                                <li><a href="#">PC Gaming Store</a></li>
                                                                <li><a href="#">Graphics Cards</a></li>
                                                                <li><a href="#">Components</a></li>
                                                                <li><a href="#">Webcam</a></li>
                                                                <li><a href="#">Memory (RAM)</a></li>
                                                                <li><a href="#">Motherboards</a></li>
                                                                <li><a href="#">Keyboards</a></li>
                                                                <li><a href="#">Headphones</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Cameras</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Binoculars</a></li>
                                                                <li><a href="#">Telescopes</a></li>
                                                                <li><a href="#">Camcorders</a></li>
                                                                <li><a href="#">Digital</a></li>
                                                                <li><a href="#">Film Cameras</a></li>
                                                                <li><a href="#">Flashes</a></li>
                                                                <li><a href="#">Lenses</a></li>
                                                                <li><a href="#">Surveillance</a></li>
                                                                <li><a href="#">Tripods</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Mobile Phones</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Apple</a></li>
                                                                <li><a href="#">Samsung</a></li>
                                                                <li><a href="#">Lenovo</a></li>
                                                                <li><a href="#">Motorola</a></li>
                                                                <li><a href="#">LeEco</a></li>
                                                                <li><a href="#">Asus</a></li>
                                                                <li><a href="#">Acer</a></li>
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Headphones</a></li>
                                                                <li><a href="#">Memory Cards</a></li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner">
                                                            <a href="#"><img alt=""
                                                                    src="tmpt/images/banners/banner-side.png"></a>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.yamm-content -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown"
                                            class="dropdown-toggle" data-toggle="dropdown">Jersey</a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Men</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Shoes </a></li>
                                                                <li><a href="#">Jackets</a></li>
                                                                <li><a href="#">Sunglasses</a></li>
                                                                <li><a href="#">Sport Wear</a></li>
                                                                <li><a href="#">Blazers</a></li>
                                                                <li><a href="#">Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Women</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Handbags</a></li>
                                                                <li><a href="#">Jwellery</a></li>
                                                                <li><a href="#">Swimwear </a></li>
                                                                <li><a href="#">Tops</a></li>
                                                                <li><a href="#">Flats</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">Winter Wear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Boys</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Toys & Games</a></li>
                                                                <li><a href="#">Jeans</a></li>
                                                                <li><a href="#">Shirts</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">School Bags</a></li>
                                                                <li><a href="#">Lunch Box</a></li>
                                                                <li><a href="#">Footwear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Girls</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Sandals </a></li>
                                                                <li><a href="#">Shorts</a></li>
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Jwellery</a></li>
                                                                <li><a href="#">Bags</a></li>
                                                                <li><a href="#">Night Dress</a></li>
                                                                <li><a href="#">Swim Wear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive"
                                                                src="tmpt/images/banners/top-menu-banner.jpg"
                                                                alt="">
                                                        </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown"
                                            class="dropdown-toggle" data-toggle="dropdown">Aksesoris <span
                                                class="menu-label new-menu hidden-xs">New</span></a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Men</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Shoes </a></li>
                                                                <li><a href="#">Jackets</a></li>
                                                                <li><a href="#">Sunglasses</a></li>
                                                                <li><a href="#">Sport Wear</a></li>
                                                                <li><a href="#">Blazers</a></li>
                                                                <li><a href="#">Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Women</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Handbags</a></li>
                                                                <li><a href="#">Jwellery</a></li>
                                                                <li><a href="#">Swimwear </a></li>
                                                                <li><a href="#">Tops</a></li>
                                                                <li><a href="#">Flats</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">Winter Wear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Boys</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Toys & Games</a></li>
                                                                <li><a href="#">Jeans</a></li>
                                                                <li><a href="#">Shirts</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">School Bags</a></li>
                                                                <li><a href="#">Lunch Box</a></li>
                                                                <li><a href="#">Footwear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">Girls</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Sandals </a></li>
                                                                <li><a href="#">Shorts</a></li>
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Jwellery</a></li>
                                                                <li><a href="#">Bags</a></li>
                                                                <li><a href="#">Night Dress</a></li>
                                                                <li><a href="#">Swim Wear</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive"
                                                                src="tmpt/images/banners/top-menu-banner.jpg"
                                                                alt="">
                                                        </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown navbar-right special-menu"> <a href="#">Todays offer</a>
                                    </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->

                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
            </div>
            <!-- /.container-class -->

        </div>
        <!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->

    </header>

</body>

</html>
