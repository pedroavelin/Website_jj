<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Empresa JJ</title>
    <meta name="description"
        content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords"
        content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template" />
    <!-- Mobile specific metas  , -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet'
        type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- CSS Style -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/simple-line-icons.css') }}" media="all">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- font-awesome & simple line icons CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" media="all">

    <!-- owl.carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.transitions.css') }}">

    <!-- animate CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" media="all">

    <!-- flexslider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">

    <!-- jquery-ui.min CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}">

    <!-- Revolution Slider CSS -->
    <link href="{{ asset('assets/css/revolution-slider.css') }}" rel="stylesheet">

    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/quick_view_popup.css') }}" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--=====JQUERY=======-->
    {{-- <script src="{{ asset('assets/js/jquery-3-7-1.min.js') }}"></script> --}}
</head>

<body class="cms-index-index cms-home-page">
    <!-- mobile menu -->
    <div id="mobile-menu">
        <ul>
            <li><a href="{{ route('home') }}" class="home1">Início</a>
                <ul>
                    <li><a href="../Version1/index.html"><span>Home Version 1</span></a></li>
                    <li><a href="../Version2/index.html"><span>Home Version 2</span></a></li>
                    <li><a href="../Version3/index.html"><span>Home Version 3</span></a></li>
                    <li><a href="../Version4/index.html"><span>Home Version 4</span></a></li>
                    <li><a href="../Version5/index.html"><span>Home Version 5</span></a></li>
                    <li><a href="../rtl-version/index.html"><span>RTL Version</span></a></li>
                    <li><a href="../rtl-version1/index.html"><span>Home Version 1 RTL</span></a></li>
                </ul>
            </li>
            <li><a href="shop_grid.html">Pages</a>
                <ul>
                    <li><a href="#" class="">Shop Pages </a>
                        <ul>
                            <li> <a href="shop_grid.html"> Shop grid </a> </li>
                            <li> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a> </li>
                            <li> <a href="shop_list.html"> Shop list </a> </li>
                            <li> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a> </li>
                            <li> <a href="shop_grid_full_width.html"> Shop Full width </a> </li>
                        </ul>
                    </li>
                    <li><a href="#">Ecommerce Pages </a>
                        <ul>
                            <li> <a href="wishlist.html"> Wishlists </a> </li>
                            <li> <a href="checkout.html"> Checkout </a> </li>
                            <li> <a href="compare.html"> Compare </a> </li>
                            <li> <a href="shopping_cart.html"> Shopping cart </a> </li>
                            <li> <a href="{{ route('quickview') }}"> Quick View </a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Static Pages </a>
                        <ul>
                            <li> <a href="account_page.html"> Create Account Page </a> </li>
                            <li> <a href="about_us.html"> About Us </a> </li>
                            <li> <a href="contact_us.html"> Contact us </a> </li>
                            <li> <a href="404error.html"> Error 404 </a> </li>
                            <li> <a href="faq.html"> FAQ </a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Product Categories </a>
                        <ul>
                            <li> <a href="cat-3-col.html"> 3 Column Sidebar </a> </li>
                            <li> <a href="cat-4-col.html"> 4 Column Sidebar</a> </li>
                            <li> <a href="cat-4-col-full.html"> 4 Column Full width </a> </li>
                            <li> <a href="cat-6-col.html"> 6 Columns Full width</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Single Product Pages </a>
                        <ul>
                            <li><a href="single_product.html"> single product </a> </li>
                            <li> <a href="single_product_left_sidebar.html"> single product left sidebar</a> </li>
                            <li> <a href="single_product_right_sidebar.html"> single product right sidebar</a> </li>
                            <li> <a href="single_product_magnify_zoom.html"> single product magnify zoom</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#"> Blog Pages </a>
                        <ul>
                            <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
                            <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
                            <li><a href="blog_full_width.html">Blog_ - Full width</a></li>
                            <li><a href="single_post.html">Single post </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="contact_us.html">Contact us</a></li>
            <li><a href="about_us.html">About us</a></li>
            <li><a href="blog.html">Blog</a>
                <ul>
                    <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
                    <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
                    <li><a href="blog_full_width.html">Blog_ - Full width</a></li>
                    <li><a href="single_post.html">Single post </a></li>
                </ul>
            </li>
            <li><a href="#!">Cameras</a>
                <ul>
                    <li><a href="#" class="">Accessories</a>
                        <ul>
                            <li><a href="shop_grid.html">Cocktail</a></li>
                            <li><a href="shop_grid.html">Day</a></li>
                            <li><a href="shop_grid.html">Evening</a></li>
                            <li><a href="shop_grid.html">Sundresses</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Dresses</a>
                        <ul>
                            <li><a href="shop_grid.html">Accessories</a></li>
                            <li><a href="shop_grid.html">Hats and Gloves</a></li>
                            <li><a href="shop_grid.html">Lifestyle</a></li>
                            <li><a href="shop_grid.html">Bras</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Shoes</a>
                        <ul>
                            <li> <a href="shop_grid.html">Flat Shoes</a> </li>
                            <li> <a href="shop_grid.html">Flat Sandals</a> </li>
                            <li> <a href="shop_grid.html">Boots</a> </li>
                            <li> <a href="shop_grid.html">Heels</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Jwellery</a>
                        <ul>
                            <li> <a href="shop_grid.html">Bracelets</a> </li>
                            <li> <a href="shop_grid.html">Necklaces &amp; Pendent</a> </li>
                            <li> <a href="shop_grid.html">Pendants</a> </li>
                            <li> <a href="shop_grid.html">Pins &amp; Brooches</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Dresses</a>
                        <ul>
                            <li> <a href="shop_grid.html">Casual Dresses</a> </li>
                            <li> <a href="shop_grid.html">Evening</a> </li>
                            <li> <a href="shop_grid.html">Designer</a> </li>
                            <li> <a href="shop_grid.html">Party</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Swimwear</a>
                        <ul>
                            <li> <a href="shop_grid.html">Swimsuits</a> </li>
                            <li> <a href="shop_grid.html">Beach Clothing</a> </li>
                            <li> <a href="shop_grid.html">Clothing</a> </li>
                            <li> <a href="shop_grid.html">Bikinis</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#!">Softwares</a>
                <ul>
                    <li> <a href="#" class="">Clothing</a>
                        <ul class="level1">
                            <li class="level2"><a href="shop_grid.html">Coats &amp; Jackets</a> </li>
                            <li class="level2"><a href="shop_grid.html">Raincoats</a> </li>
                            <li class="level2"><a href="shop_grid.html">Blazers</a> </li>
                            <li class="level2"><a href="shop_grid.html">Jackets</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Dresses</a>
                        <ul class="level1">
                            <li class="level2"><a href="shop_grid.html">Casual Dresses</a> </li>
                            <li class="level2"><a href="shop_grid.html">Evening</a> </li>
                            <li class="level2"><a href="shop_grid.html">Designer</a> </li>
                            <li class="level2"><a href="shop_grid.html">Party</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#" class="">Shoes</a>
                        <ul class="level1">
                            <li class="level2"><a href="shop_grid.html">Sport Shoes</a> </li>
                            <li class="level2"><a href="shop_grid.html">Casual Shoes</a> </li>
                            <li class="level2"><a href="shop_grid.html">Leather Shoes</a> </li>
                            <li class="level2"><a href="shop_grid.html">canvas shoes</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Jackets</a>
                        <ul class="level1">
                            <li class="level2"><a href="shop_grid.html">Coats</a> </li>
                            <li class="level2"><a href="shop_grid.html">Formal Jackets</a> </li>
                            <li class="level2"><a href="shop_grid.html">Leather Jackets</a> </li>
                            <li class="level2"><a href="shop_grid.html">Blazers</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">Accesories</a>
                        <ul class="level1">
                            <li class="level2"><a href="shop_grid.html">Backpacks</a> </li>
                            <li class="level2"><a href="shop_grid.html">Wallets</a> </li>
                            <li class="level2"><a href="shop_grid.html">Laptops Bags</a> </li>
                            <li class="level2"><a href="shop_grid.html">Belts</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li hidden><a href="#!">Apple Store</a>
                <ul>
                    <li> <a href="shop_grid.html">Mobiles</a>
                        <ul>
                            <li> <a href="shop_grid.html">iPhone</a> </li>
                            <li> <a href="shop_grid.html">Samsung</a> </li>
                            <li> <a href="shop_grid.html">Nokia</a> </li>
                            <li> <a href="shop_grid.html">Sony</a> </li>
                        </ul>
                    </li>
                    <li> <a href="shop_grid.html" class="">Music &amp; Audio</a>
                        <ul>
                            <li> <a href="shop_grid.html">Audio</a> </li>
                            <li> <a href="shop_grid.html">Cameras</a> </li>
                            <li> <a href="shop_grid.html">Appling</a> </li>
                            <li> <a href="shop_grid.html">Car Music</a> </li>
                        </ul>
                    </li>
                    <li> <a href="shop_grid.html">Accessories</a>
                        <ul>
                            <li> <a href="shop_grid.html">Home &amp; Office</a> </li>
                            <li> <a href="shop_grid.html">TV &amp; Home Theater</a> </li>
                            <li> <a href="shop_grid.html">Phones &amp; Radio</a> </li>
                            <li> <a href="shop_grid.html">All Electronics</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end mobile menu -->
    <div id="page">
        <!-- Header -->
        <header>
            <div class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 hidden-xs">
                                <!-- Default Welcome Message -->
                                <div class="welcome-msg "> Olá! Seja bem vindo. </div>
                                <span class="phone hidden-sm">Tel: +244 928 973 909</span>
                            </div>

                            <!-- top links -->
                            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12" style="display: none">
                                <div class="links">
                                    <div class="myaccount"><a title="My Account" href="account_page.html"><i
                                                class="fa fa-user"></i><span class="hidden-xs">My Account</span></a>
                                    </div>
                                    <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><i
                                                class="fa fa-heart"></i><span class="hidden-xs">Wishlist</span></a>
                                    </div>
                                    <div class="blog"><a title="Blog" href="blog.html"><i
                                                class="fa fa-rss"></i><span class="hidden-xs">Blog</span></a></div>
                                    <div class="login"><a href="account_page.html"><i
                                                class="fa fa-unlock-alt"></i><span class="hidden-xs">Log In</span></a>
                                    </div>
                                </div>
                                <div class="language-currency-wrapper">
                                    <div class="inner-cl">
                                        <div class="block block-language form-language">
                                            <div class="lg-cur"> <span> <img
                                                        src="{{ asset('assets/images/flag-default.jpg') }}"
                                                        alt="French"> <span class="lg-fr">French</span> <i
                                                        class="fa fa-angle-down"></i> </span> </div>
                                            <ul>
                                                <li> <a class="selected" href="#"> <img
                                                            src="{{ asset('assets/images/flag-english.jpg') }}"
                                                            alt="flag">
                                                        <span>English</span> </a> </li>
                                                <li> <a href="#"> <img
                                                            src="{{ asset('assets/images/flag-default.jpg') }}"
                                                            alt="flag"> <span>French</span> </a> </li>
                                                <li> <a href="#"> <img
                                                            src="{{ asset('assets/images/flag-german.jpg') }}"
                                                            alt="flag"> <span>German</span> </a> </li>
                                                <li> <a href="#"> <img
                                                            src="{{ asset('assets/images/flag-brazil.jpg') }}"
                                                            alt="flag"> <span>Brazil</span> </a> </li>
                                                <li> <a href="#"> <img
                                                            src="{{ asset('assets/images/flag-chile.jpg') }}"
                                                            alt="flag"> <span>Chile</span> </a> </li>
                                                <li> <a href="#"> <img
                                                            src="{{ asset('assets/images/flag-spain.jpg') }}"
                                                            alt="flag"> <span>Spain</span> </a> </li>
                                            </ul>
                                        </div>
                                        <div class="block block-currency">
                                            <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i>
                                            </div>
                                            <ul>
                                                <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                                                <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                                                <li> <a class="selected" href="#"><span
                                                            class="cur_icon">$</span> USD</a> </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- End Default Welcome Message -->
                                </div>
                            </div>
                            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
                                <div class="links">
                                    <div class="myaccount">
                                        <a title="My Account" href="#!">
                                            <i class="fa fa-user"></i>
                                            <span class="hidden-xs">Angola - Luanda, Cacuaco Bairro Nova
                                                Urbanização</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-12">
                            <!-- Header Logo -->
                            <div class="logo"><a title="e-commerce" href="{{ route('home') }}"><img
                                        alt="responsive theme logo" src="{{ asset('assets/images/logo.png') }}"></a>
                            </div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-xs-9 col-sm-6 col-md-6">
                            <!-- Search -->

                            <div class="top-search">
                                <div id="search">
                                    <form>
                                        <div class="input-group">
                                            <select class="cate-dropdown hidden-xs" name="category_id">
                                                <option>Ver Categorias</option>
                                                <option>women</option>
                                                <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                                                <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                                                <option>&nbsp;&nbsp;&nbsp;Top</option>
                                                <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                                                <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                                                <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                                                <option>Men</option>
                                                <option>Electronics</option>
                                                <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                                                <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                                            </select>
                                            <input type="text" class="form-control" placeholder="Pesquisar"
                                                name="search">
                                            <button class="btn-search" type="button"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- End Search -->
                        </div>
                        <!-- top cart -->

                        <div class="col-lg-3 col-xs-3 top-cart">
                            <div class="top-cart-contain">
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                        <a href="#">
                                            <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="shoppingcart-inner hidden-xs"><span
                                                    class="cart-title">Carrinho</span> <span class="cart-total">4
                                                    Item(s): 1.520.00.00Kz</span></div>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="top-cart-content">
                                            <div class="block-subtitle hidden-xs">Recently added item(s)</div>
                                            <ul id="cart-sidebar" class="mini-products-list">
                                                <li class="item odd"> <a href="shopping_cart.html"
                                                        title="Ipsums Dolors Untra" class="product-image"><img
                                                            src="{{ asset('assets/images/products/img07.jpg') }}"
                                                            alt="html template" width="65"></a>
                                                    <div class="product-details"> <a href="#"
                                                            title="Remove This Item" class="remove-cart"><i
                                                                class="icon-close"></i></a>
                                                        <p class="product-name"><a href="shopping_cart.html">Lorem
                                                                ipsum dolor sit amet
                                                                Consectetur</a> </p>
                                                        <strong>1</strong> x <span class="price">$20.00</span>
                                                    </div>
                                                </li>
                                                <li class="item even"> <a href="shopping_cart.html"
                                                        title="Ipsums Dolors Untra" class="product-image"><img
                                                            src="{{ asset('assets/images/products/img11.jpg') }}"
                                                            alt="html template" width="65"></a>
                                                    <div class="product-details"> <a href="#"
                                                            title="Remove This Item" class="remove-cart"><i
                                                                class="icon-close"></i></a>
                                                        <p class="product-name"><a
                                                                href="shopping_cart.html">Consectetur utes anet
                                                                adipisicing
                                                                elit</a> </p>
                                                        <strong>1</strong> x <span class="price">$230.00</span>
                                                    </div>
                                                </li>
                                                <li class="item last odd"> <a href="shopping_cart.html"
                                                        title="Ipsums Dolors Untra" class="product-image"><img
                                                            src="{{ asset('assets/images/products/img10.jpg') }}"
                                                            alt="html template" width="65"></a>
                                                    <div class="product-details"> <a href="#"
                                                            title="Remove This Item" class="remove-cart"><i
                                                                class="icon-close"></i></a>
                                                        <p class="product-name"><a href="shopping_cart.html">Sed do
                                                                eiusmod tempor incidist</a> </p>
                                                        <strong>2</strong> x <span class="price">$420.00</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="top-subtotal">Subtotal: <span class="price">$520.00</span>
                                            </div>
                                            <div class="actions">
                                                <button class="btn-checkout" type="button"><i
                                                        class="fa fa-check"></i><span>Checkout</span></button>
                                                <button class="view-cart" type="button"><i
                                                        class="fa fa-shopping-cart"></i> <span>View
                                                        Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <!-- Navbar -->
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="mm-toggle-wrap">
                            <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
                            <span class="mm-label">Categories</span>
                        </div>
                        <div class="mega-container visible-lg visible-md visible-sm">
                            <div class="navleft-container">
                                <div class="mega-menu-title">
                                    <h3>Categorias</h3>
                                </div>
                                <div class="mega-menu-category">
                                    <ul class="nav">
                                        <li> <a href="#"><i class="icon fa fa-camera fa-map"></i> GPS</a>
                                            <div class="wrap-popup">
                                                <div class="popup">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <ul class="nav">
                                                                <li><a href="shop_grid.html"><span>Tipo</span></a></li>
                                                                <li><a href="shop_grid.html"><span>Tipo</span></a></li>
                                                                <li><a href="shop_grid.html"><span>Tipo</span> </a>
                                                                </li>
                                                                <li><a href="shop_grid.html"><span>Tipo</span> </a>
                                                                </li>
                                                                <li> <a href="shop_grid.html"><span>Tipo</span></a>
                                                                </li>
                                                                <li><a href="shop_grid.html"><span>Tipo </span></a>
                                                                </li>
                                                                <li><a href="shop_grid.html"><span>Tipo</span></a></li>
                                                                <li><a href="shop_grid.html"><span>Tipo </span></a>
                                                                </li>
                                                                <li><a href="shop_grid.html"><span>Tipo</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                            <div class="custom-menu-right">
                                                                <div class="box-banner menu-banner">
                                                                    <div class="add-right"><a href="#"><img
                                                                                src="{{ asset('assets/images/menu-img4.jpg') }}"
                                                                                alt="html template"></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                            <div class="custom-menu-right">
                                                                <div class="box-banner menu-banner">
                                                                    <div class="add-right"><a href="#"><img
                                                                                src="{{ asset('assets/images/menu-img4.jpg') }}"
                                                                                alt="html template"></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li> <a href="#"><i class="icon fa fa-desktop fa-fw"></i> Softwares</a>
                                            <div class="wrap-popup">
                                                <div class="popup">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <h3>Desktop</h3>
                                                            <ul class="nav">
                                                                <li><a href="#!">Lorem ipsum dolor sit amet
                                                                        consectetur adipisicing elit. Officiis quae
                                                                        placeat suscipit odio tenetur adipisci ad,
                                                                        debitis consequuntur ab eaque, repellendus id
                                                                        dolore, natus dolorem minima expedita atque.
                                                                        Libero, voluptatibus!</a></li>
                                                            </ul>
                                                            <br>
                                                            <h3>Web</h3>
                                                            <ul class="nav">
                                                                <li> <a href="#!">Lorem ipsum dolor sit amet
                                                                        consectetur adipisicing elit. Voluptates odit
                                                                        molestias velit soluta fugit quibusdam, ipsa
                                                                        voluptatum saepe quasi, rem itaque commodi
                                                                        repellat eveniet ipsam! Sunt culpa neque ex
                                                                        quod.</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                            <h3>Mobile</h3>
                                                            <ul class="nav">
                                                                <li> <a href="#!">Lorem ipsum dolor sit amet
                                                                        consectetur adipisicing elit. Fugit repudiandae
                                                                        facilis perferendis blanditiis similique. Nam
                                                                        beatae ullam ipsa aliquam dolor, quia reiciendis
                                                                        veritatis nemo, ex delectus officiis similique
                                                                        incidunt consequuntur.</a> </li>
                                                            </ul>
                                                            <br>
                                                            <h3>Personalizado</h3>
                                                            <ul class="nav">
                                                                <li> <a href="#!">Lorem ipsum dolor sit amet
                                                                        consectetur adipisicing elit. Enim voluptatem,
                                                                        perspiciatis corporis quo eos repellendus odit
                                                                        sint quaerat veniam voluptatum ipsam quos, error
                                                                        nemo eaque! Aspernatur obcaecati maxime voluptas
                                                                        deleniti.</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                            <div class="custom-menu-right">
                                                                <div class="box-banner media">
                                                                    <div class="add-desc">
                                                                        <h3>Computer <br>
                                                                            Services </h3>
                                                                        <div class="price-sale">2016</div>
                                                                        <a href="#">Shop Now</a>
                                                                    </div>
                                                                    <div class="add-right"><a href="#"><img
                                                                                src="{{ asset('assets/images/menu-img1.jpg') }}"
                                                                                alt="html template"></a></div>
                                                                </div>
                                                                <div class="box-banner media">
                                                                    <div class="add-desc">
                                                                        <h3>Save up to</h3>
                                                                        <div class="price-sale">75
                                                                            <sup>%</sup><sub>off</sub>
                                                                        </div>
                                                                        <a href="#">Shopping Now</a>
                                                                    </div>
                                                                    <div class="add-right"><a href="#"><img
                                                                                src="{{ asset('assets/images/menu-img2.jpg') }}"
                                                                                alt="html template"></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="display:none"> <a href="shop_grid.html"><i
                                                    class="icon fa fa-apple fa-fw"></i> Apple Store</a>
                                            <div class="wrap-popup column2">
                                                <div class="popup">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h3>iPhone</h3>
                                                            <ul class="nav">
                                                                <li> <a href="shop_grid.html"> iPhone SE </a> </li>
                                                                <li> <a href="shop_grid.htmls"> iPhone 6s Plus </a>
                                                                </li>
                                                                <li> <a href="shop_grid.html"> iPhone 3G </a> </li>
                                                                <li> <a href="shop_grid.html"> iPad Pro </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 has-sep">
                                                            <h3> Watch </h3>
                                                            <ul class="nav">
                                                                <li> <a href="shop_grid.html"> Quartz Watches </a>
                                                                </li>
                                                                <li> <a href="shop_grid.html"> Lover's Watches</a>
                                                                </li>
                                                                <li> <a href="shop_grid.html"> Digital Watches </a>
                                                                </li>
                                                                <li> <a href="shop_grid.html"> Sport Watch </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-12"> <a class="ads1" href="#"><img
                                                                    class="img-responsive"
                                                                    src="{{ asset('assets/images/menu-img3.jpg') }}"
                                                                    alt="html template"></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="display:none" class="nosub"><a href="#"><i
                                                    class="icon fa fa-location-arrow fa-fw"></i> Car Electronic</a>
                                        </li>
                                        <li style="display:none"> <a href="shop_grid.html"><i
                                                    class="icon fa fa-headphones fa-fw"></i> Headphones</a>
                                            <div class="wrap-popup column1">
                                                <div class="popup">
                                                    <ul class="nav">
                                                        <li><a href="shop_grid.html"><span>Envent Stereo</span></a>
                                                        </li>
                                                        <li><a href="shop_grid.html"><span>Sennheiser</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Philips</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Sony</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Avantree</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Bajaao</span></a></li>
                                                        <li><a href="shop_grid.html"><span>FiiO</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Audio-Technica</span></a>
                                                        </li>
                                                        <li><a href="shop_grid.html"><span>LUXA2</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Geekria</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="display:none"><a href="#"><i
                                                    class="icon fa fa-microphone fa-fw"></i> Accessories</a>
                                            <div class="wrap-popup column1">
                                                <div class="popup">
                                                    <ul class="nav">
                                                        <li> <a href="shop_grid.html"> Vacuum Cleaner </a> </li>
                                                        <li> <a href="shop_grid.html"> Memore Bluetooth</a> </li>
                                                        <li> <a href="shop_grid.html"> On-Ear Headphones </a> </li>
                                                        <li> <a href="shop_grid.html"> Digital MP3 Player </a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="display:none" class="nosub"><a href="shop_grid.html"><i
                                                    class="icon fa fa-gamepad fa-fw"></i> Game &amp;
                                                Video</a></li>
                                        <li style="display:none" class="nosub"><a href="shop_grid.html"><i
                                                    class="glyphicon glyphicon-time"></i> Watches</a></li>
                                        <li style="display:none" class="nosub"><a href="shop_grid.html"><i
                                                    class="icon fa fa-lightbulb-o fa-fw"></i> Lights &amp;
                                                Lighting</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="mtmegamenu">
                            <ul>
                                <li class="mt-root demo_custom_link_cms">
                                    <div class="mt-root-item"><a href="{{ route('home') }}">
                                            <div class="title title_font"><span class="title-text">Início</span></div>
                                        </a></div>
                                </li>
                                <li class="mt-root">
                                    <div class="mt-root-item"><a href="{{ route('about') }}">
                                            <div class="title title_font"><span class="title-text">Sobre</span></div>
                                        </a></div>
                                </li>
                                <li class="mt-root">
                                    <div class="mt-root-item"><a href="{{ route('solucoes') }}">
                                            <div class="title title_font"><span class="title-text">Soluções</span>
                                            </div>
                                        </a></div>
                                </li>
                                <li class="mt-root">
                                    <div class="mt-root-item"><a href="#!">
                                            <div class="title title_font"><span class="title-text">Recrutamento</span>
                                            </div>
                                        </a></div>
                                </li>
                                <li class="mt-root">
                                    <div class="mt-root-item"><a href="{{ route('contact') }}">
                                            <div class="title title_font"><span class="title-text">Contacto</span>
                                            </div>
                                        </a></div>
                                </li>
                                <li class="mt-root d00emo_custom_link_cms" style="display: none">
                                    <div class="mt-root-item"><a href="#!">
                                            <div class="title title_font"><span class="title-text">Blog</span></div>
                                        </a></div>
                                </li>
                                <li class="mt-root">
                                    <div class="mt-root-item">
                                        <div class="title title_font"><span class="title-text"
                                                style="color:aliceblue">Mais vendidos</span></div>
                                    </div>
                                    <ul class="menu-items col-xs-12">
                                        <li class="menu-item depth-1 product menucol-1-3 withimage">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="#!">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('assets/images/products/img06.jpg') }}"
                                                                        alt="html template">
                                                                    <img class="hover-img"
                                                                        src="{{ asset('assets/images/products/img06.jpg') }}"
                                                                        alt="html template">
                                                                </figure>
                                                            </a>
                                                            <button type="button" class="add-to-cart-mt"> <i
                                                                    class="fa fa-shopping-cart"></i><span>
                                                                    Add to Cart</span> </button>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html"> <i
                                                                            class="fa fa-signal"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="{{ route('quickview') }}"> <i
                                                                            class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                                    href="single_product.html">Ipsums
                                                                    Dolors Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">125.00 Kz</span> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item depth-1 product menucol-1-3 withimage">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('assets/images/products/img02.jpg') }}"
                                                                        alt="html template">
                                                                    <img class="hover-img"
                                                                        src="{{ asset('assets/images/products/img02.jpg') }}"
                                                                        alt="html template">
                                                                </figure>
                                                            </a>
                                                            <button type="button" class="add-to-cart-mt"> <i
                                                                    class="fa fa-shopping-cart"></i><span>
                                                                    Add to Cart</span> </button>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html"> <i
                                                                            class="fa fa-signal"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="{{ route('quickview') }}"> <i
                                                                            class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                                    href="single_product.html">Ipsums
                                                                    Dolors Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">125.00 Kz</span> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item depth-1 product menucol-1-3 withimage">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                    <div class="icon-new-label new-right">New</div>
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('assets/images/products/img03.jpg') }}"
                                                                        alt="html template">
                                                                    <img class="hover-img"
                                                                        src="{{ asset('assets/images/products/img03.jpg') }}"
                                                                        alt="html template">
                                                                </figure>
                                                            </a>
                                                            <button type="button" class="add-to-cart-mt"> <i
                                                                    class="fa fa-shopping-cart"></i><span>
                                                                    Add to Cart</span> </button>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html"> <i
                                                                            class="fa fa-signal"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="{{ route('quickview') }}"> <i
                                                                            class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                                    href="single_product.html">Ipsums
                                                                    Dolors Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">125.00 Kz</span> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav -->
        @yield('content')
        <!-- Footer -->

        <footer>
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <form id="newsletter-validate-detail" method="post" action="#">
                                <h3 class="hidden-sm" style="color:aliceblue">Sign up for newsletter</h3>
                                <div class="newsletter-inner">
                                    <input class="newsletter-email" name='Email'
                                        placeholder='Digite o seu email' />
                                    <button class="button subscribe" type="submit"
                                        title="Subscribe">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        <div class="social col-md-4 col-sm-5">
                            <ul class="inline-mode">
                                <li class="social-network fb"><a title="Connect us on Facebook" target="_blank"
                                        href="#!"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-network googleplus"><a title="Connect us on Google+"
                                        target="_blank" href="#!"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-network tw"><a title="Connect us on Twitter" target="_blank"
                                        href="#!"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank"
                                        href="#!"><i class="fa fa-linkedin"></i></a></li>
                                <li class="social-network rss"><a title="Connect us on Instagram" target="_blank"
                                        href="#!"><i class="fa fa-rss"></i></a></li>
                                <li class="social-network instagram"><a title="Connect us on Instagram"
                                        target="_blank" href="#!"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
                        <div class="footer-logo"><a href="{{ route('home') }}"><img
                                    src="{{ asset('assets/images/footer-logo.png') }}" alt="fotter logo"></a>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the print and typesetting industry.</p>
                        <div class="footer-content">
                            <div class="email"> <i class="fa fa-envelope"></i>
                                <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="b2e1c7c2c2ddc0c6f2c6dad7dfd7c19cd1dddf">[email&#160;protected]</a>
                                </p>
                            </div>
                            <div class="phone"> <i class="fa fa-phone"></i>
                                <p>(800) 0123 456 789</p>
                            </div>
                            <div class="address"> <i class="fa fa-map-marker"></i>
                                <p> My Company, 12/34 - West 21st Street, New York, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
                        <div class="footer-links">
                            <h3 class="links-title">Information<a class="expander visible-xs"
                                    href="#TabBlock-1">+</a></h3>
                            <div class="tabBlock" id="TabBlock-1">
                                <ul class="list-links list-unstyled">
                                    <li><a href="#s">Delivery Information</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="sitemap.html">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="#">Terms &amp; Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
                        <div class="footer-links">
                            <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a>
                            </h3>
                            <div class="tabBlock" id="TabBlock-3">
                                <ul class="list-links list-unstyled">
                                    <li> <a href="sitemap.html"> Sites Map </a> </li>
                                    <li> <a href="#">News</a> </li>
                                    <li> <a href="#">Trends</a> </li>
                                    <li> <a href="about_us.html">About Us</a> </li>
                                    <li> <a href="contact_us.html">Contact Us</a> </li>
                                    <li> <a href="#">My Orders</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
                        <div class="footer-links">
                            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a>
                            </h3>
                            <div class="tabBlock" id="TabBlock-4">
                                <ul class="list-links list-unstyled">
                                    <li> <a href="account_page.html">Account</a> </li>
                                    <li> <a href="wishlist.html">Wishlist</a> </li>
                                    <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                                    <li> <a href="#">Return Policy</a> </li>
                                    <li> <a href="#">Special</a> </li>
                                    <li> <a href="#">Lookbook</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-coppyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2024 <a href="#"> JJ </a>.Todos
                            os direitos reservados. </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="payment">
                                <ul>
                                    <li><a href="#"><img title="Visa" alt="Visa"
                                                src="{{ asset('assets/images/visa.png') }}"></a></li>
                                    <li><a href="#"><img title="Paypal" alt="Paypal"
                                                src="{{ asset('assets/images/paypal.png') }}"></a></li>
                                    <li><a href="#"><img title="Discover" alt="Discover"
                                                src="{{ asset('assets/images/discover.png') }}"></a></li>
                                    <li><a href="#"><img title="Master Card" alt="Master Card"
                                                src="{{ asset('assets/images/master-card.png') }}"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a href="#" class="totop"> </a>
        <!-- End Footer -->
    </div>
    {{-- <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script> --}}
    <!-- JS -->

    <!-- jquery js -->
    <script data-cfasync="false"
        src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/cloud-zoom.js') }}"></script>  --}}

    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


    <!-- owl.carousel.min js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- bxslider js -->
    <script src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>

    <!-- Slider Js -->
    <script src="{{ asset('assets/js/revolution-slider.js') }}"></script>

    <!-- megamenu js -->
    <script src="{{ asset('assets/js/megamenu.js') }}"></script>
    <script>
        /* <![CDATA[ */
        var mega_menu = '0';
        /* ]]> */
    </script>

    <!-- jquery.mobile-menu js -->
    <script src="{{ asset('assets/js/mobile-menu.js') }}"></script>

    <!--jquery-ui.min js -->
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- countdown js -->
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <!-- Revolution Slider -->
    <!--cloud-zoom js -->
    <!-- TimeCircles js -->
    <script src="{{ asset('assets/js/TimeCircles.js') }}"></script>
    <script>
        jQuery("#DateCountdown").TimeCircles({
            fg_width: 0.05, //  sets the width of the foreground circle.
            bg_width: 1, // sets the width of the backgroundground circle.
            text_size: 0.07, // This option sets the font size of the text in the circles.
            total_duration: "Auto", // This option can be set to change how much time will fill the largest visible circle.
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('.tp-banner').revolution({
                delay: 9000,
                startwidth: 1170,
                startheight: 530,
                hideThumbs: 10,

                navigationType: "bullet",
                navigationStyle: "preview1",

                hideArrowsOnMobile: "on",

                touchenabled: "on",
                onHoverStop: "on",
                spinner: "spinner4"
            });
        });
    </script>

    <!-- Hot Deals Timer 1-->
    <script>
        var dthen1 = new Date("12/25/20 11:59:00 PM");
        start = "06/04/18 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);
    </script>

</body>

</html>
