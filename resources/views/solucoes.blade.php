@extends('layouts.main_layout')
@section('content')
    <!-- Breadcrumbs -->

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
                        <li class=""> <a title="Go to Home Page" href="shop_grid.html">Computers</a><span>&raquo;</span>
                        </li>
                        <li><strong> Camera & Photo</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Main Container -->
    <div class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-12 col-xs-12">
                    <div class="shop-inner">
                        <div class="page-title">
                            <h2> Camera & Photo</h2>
                        </div>
                        <div class="toolbar column">
                            <div class="sorter">
                                <div class="short-by">
                                    <label>Sort By:</label>
                                    <select>
                                        <option selected="selected">Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                        <option>Size</option>
                                    </select>
                                </div>
                                <div class="short-by page">
                                    <label>Show:</label>
                                    <select>
                                        <option selected="selected">16</option>
                                        <option>20</option>
                                        <option>25</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-area">
                            <ul class="products-grid">
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="icon-sale-label sale-left">Sale</div>
                                                <div class="icon-new-label new-right">New</div>
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="single_product.html">
                                                        <figure> <img class="first-img"
                                                                src="{{ asset('assets/images/products/img01.jpg') }}"
                                                                alt=""> <img class="hover-img"
                                                                src="{{ asset('assets/images/products/img01.jpg') }}"
                                                                alt=""></figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i
                                                            class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i
                                                                    class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i
                                                                    class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                                    class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="single_product.html">
                                                        <figure> <img class="first-img"
                                                                src="{{ asset('assets/images/products/img02.jpg') }}"
                                                                alt=""> <img class="hover-img"
                                                                src="{{ asset('assets/images/products/img02.jpg') }}"
                                                                alt=""></figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i
                                                            class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i
                                                                    class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i
                                                                    class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                                    class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span
                                                                        class="price-label">Special Price</span> <span
                                                                        class="price"> $456.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular
                                                                        Price:</span> <span class="price"> $567.00 </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="single_product.html">
                                                        <figure> <img class="first-img"
                                                                src="{{ asset('assets/images/products/img03.jpg') }}"
                                                                alt=""> <img class="hover-img"
                                                                src="{{ asset('assets/images/products/img03.jpg') }}"
                                                                alt=""></figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i
                                                            class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                                <i class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i
                                                                    class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                                    class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span
                                                                        class="price-label">Special Price</span> <span
                                                                        class="price"> $456.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular
                                                                        Price:</span> <span class="price"> $567.00 </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="icon-sale-label sale-left">Sale</div>
                                            <div class="icon-new-label new-right">New</div>
                                            <div class="product-thumbnail">
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="single_product.html">
                                                        <figure> <img class="first-img"
                                                                src="{{ asset('assets/images/products/img04.jpg') }}"
                                                                alt=""> <img class="hover-img"
                                                                src="{{ asset('assets/images/products/img04.jpg') }}"
                                                                alt=""></figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i
                                                            class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                                <i class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i
                                                                    class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                                    class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span
                                                                        class="price">$125.00</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="icon-new-label new-left">New</div>
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="single_product.html">
                                                        <figure> <img class="first-img"
                                                                src="{{ asset('assets/images/products/img05.jpg') }}"
                                                                alt=""> <img class="hover-img"
                                                                src="{{ asset('assets/images/products/img05.jpg') }}"
                                                                alt=""></figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i
                                                            class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                                <i class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i
                                                                    class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                                    class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span
                                                                        class="price-label">Special Price</span> <span
                                                                        class="price"> $456.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular
                                                                        Price:</span> <span class="price"> $567.00 </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="single_product.html">
                                                        <figure> <img class="first-img"
                                                                src="{{ asset('assets/images/products/img06.jpg') }}"
                                                                alt=""> <img class="hover-img"
                                                                src="{{ asset('assets/images/products/img06.jpg') }}"
                                                                alt=""></figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i
                                                            class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                                <i class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i
                                                                    class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                                    class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span
                                                                        class="price">$89.99</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- .a2 -->

                                <!-- b2 -->
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="single_product.html">
                                                        <figure> <img class="first-img"
                                                                src="{{ asset('assets/images/products/img07.jpg') }}"
                                                                alt=""> <img class="hover-img"
                                                                src="{{ asset('assets/images/products/img07.jpg') }}"
                                                                alt=""></figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i
                                                            class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                                <i class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i
                                                                    class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                                    class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span
                                                                        class="price">$125.99</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- .b2 -->

                                <!-- c2 -->
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                        href="single_product.html">
                                                        <figure> <img class="first-img"
                                                                src="{{ asset('assets/images/products/img12.jpg') }}"
                                                                alt=""> <img class="hover-img"
                                                                src="{{ asset('assets/images/products/img12.jpg') }}"
                                                                alt=""></figure>
                                                    </a>
                                                    <button type="button" class="add-to-cart-mt"> <i
                                                            class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html">
                                                                <i class="fa fa-heart"></i> </a> </div>
                                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i
                                                                    class="fa fa-signal"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i
                                                                    class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                            href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span
                                                                        class="price">$225.88</span> </span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pagination-area ">
                            <ul>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container End -->
@endsection
