<div class="header">
    <!--Header-Top-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="left"> H-FURNITURE <span><i class="fa fa-phone"></i>Call us</span> +84 1234 5678 9 </div>
                    <!--/.left-->
                </div>
                <!--/.col-md-6-->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="right">
                        <ul>
                            <li class="cart">
                                <a href="#"> <img alt="cart" src="assets/images/cart.png"> giỏ hàng <span>2</span> </a>
                                <div class="cart-list hidden-xs">
                                    <h5 class="title">giỏ hàng của bạn <span>(2 sản phẩm)</span></h5>
                                    <div class="cart-item">
                                        <div class="cart-item-image">
                                            <img class="img-responsive" alt="Single product" src="assets/images/small_gallery/03.jpg">
                                        </div>
                                        <div class="product-info">
                                            <h5>New Yorker Suit</h5>
                                            <div class="star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                            <div class="price"> <del> $399 </del> $259 </div>
                                            <div class="cart-delete-button"> <a href="#" class="delete-btn btn">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="cart-item-image">
                                            <img class="img-responsive" alt="Single product" src="assets/images/small_gallery/04.jpg">
                                        </div>
                                        <div class="product-info">
                                            <h5>New Yorker Suit</h5>
                                            <div class="star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                            <div class="price"> <del> $399 </del> $259 </div>
                                            <div class="cart-delete-button"> <a href="#" class="delete-btn btn">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-total">
                                        <h5 class="title">Tổng đơn hàng</h5>
                                    </div>
                                    <div class="last-line">
                                        <h4> <span class="amount">$166</span></h4>
                                        <a href="checkout.html" class="groham-btn btn black-bordered">Thanh toán</a>
                                    </div>
                                </div>
                            </li>
                            <li class="toggle">
                                <span>USD</span> <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li><a href="#">USD</a>
                                    </li>
                                    <li><a href="#">EUR</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Tài khoản</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.right-->
                </div>
                <!--/.col-md-6-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-top-->
    <!--Header-Middle-->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 site-logo">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{asset('assets/images/logo.png')}}" alt="logo" />
                        </a>
                    </div>
                    <div class="cart-text"> <img src="{{asset('assets/images/cart-2.png')}}" alt="cart-2"> Dự án chuỗi cửa hàng nội thất | H-Furniture </div>
                </div>
                <!--/.site-logo-->
                <div class="col-md-4 col-sm-4 col-xs-12 header-search">
                    <div class="search default">
                        <form class="searchform" action="#" method="get">
                            <div class="input-group">
                                <input type="search" id="dsearch" name="s" class="form-control" placeholder="Tìm kiếm..."> <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" id="submit-btn"><span class="arrow_right"></span>
                                </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--/.search-->
                </div>
                <!--/.header-search-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-middle-->
    <!--Navbar-->
    <div class="navbar groham-nav megamenu">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trang chủ</a>
                        {{-- <ul class="dropdown-menu">
                            <li class="active"><a href="home01.html">Home 1</a>
                            </li>
                            <li><a href="home02.html">Home 2</a>
                            </li>
                            <li><a href="home03.html">Home 3</a>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="dropdown megamenu-fw second">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Thể loại</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <h5 class="title">Shop Pages</h5>
                                        <ul>
                                            <li><a href="{{url('product-by-category')}}">Test sản phẩm theo thể loại</a>
                                            </li>
                                            <li><a href="shop-list-sidebar.html">Shop List With Sidebar</a>
                                            </li>
                                            <li><a href="shop-grid.html">Shop Grid</a>
                                            </li>
                                            <li><a href="shop-grid-sidebar.html">Shop Grid With Sidebar</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h5 class="title">Shop Pages</h5>
                                        <ul>
                                            <li><a href="single-product.html">Product Details </a>
                                            </li>
                                            <li><a href="single-product-sidebar.html">Product Details With Sidebar</a>
                                            </li>
                                            <li><a href="cart.html">Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h5 class="title">Other Pages</h5>
                                        <ul>
                                            <li><a href="about01.html">About 1</a>
                                            </li>
                                            <li><a href="about02.html">About 2</a>
                                            </li>
                                            <li><a href="login.html">Login</a>
                                            </li>
                                            <li><a href="checkout.html">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 menuimg"> <img src="assets/images/blog_listed1.jpg" alt="" class="img-responsive"> </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    {{-- <li><a href="shop-grid.html">Men</a>
                    </li> --}}
                    {{-- <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SHOP</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <h5 class="title">our fashion shop</h5>
                                        <ul>
                                            <li class="active"><a href="home01.html">Home Website</a>
                                            </li>
                                            <li><a href="about01.html">About Us</a>
                                            </li>
                                            <li><a href="shop-grid.html">Fashion Trends</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h5 class="title">Men's Wear</h5>
                                        <ul>
                                            <li><a href="shop-grid.html">Shorts<span class="sell">Sell</span></a>
                                            </li>
                                            <li><a href="shop-grid.html">Suits & Blazers</a>
                                            </li>
                                            <li><a href="shop-grid.html">Swimwear</a>
                                            </li>
                                            <li><a href="shop-grid.html">Trousers & Chinos<span class="new">New</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <h5 class="title">Women's Wear</h5>
                                        <ul>
                                            <li><a href="shop-grid.html">Jackets<span class="sell">Sell</span></a>
                                            </li>
                                            <li><a href="shop-grid.html">Bouses</a>
                                            </li>
                                            <li><a href="shop-grid.html">Night Wear<span class="hot">Hot</span></a>
                                            </li>
                                            <li><a href="shop-grid.html">Jeans & Trousers</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 menuimg"> <img src="assets/images/blog_listed1.jpg" alt="" class="img-responsive"> </div>
                                </div>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li><a href="shop-grid.html">Women</a>
                    </li> --}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('news')}}">Tin tức</a>
                            {{-- </li>
                            <li><a href="blog-archive.html">Blog Archive</a>
                            </li>
                            <li><a href="blog-single.html">Blog Single</a>
                            </li> --}}
                        </ul>
                    </li>
                    <li><a href="contact.html">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!--/.navbar-->
</div>
<!--/.header-->
