<header id="header" class="header has-sticky sticky-fade sticky-hide-on-scroll">
    <div class="header-wrapper">
        <div id="masthead" class="header-main hide-for-sticky">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="{{route('home')}}"  rel="home">
                        <img width="200" height="80" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%2080'%3E%3C/svg%3E" class="header_logo header-logo" alt="Tân Doanh" data-lazy-src="https://tandoanh.vn/wp-content/uploads/2020/05/TanDoanh-Logo.png"/>
                        <noscript><img width="200" height="80" src="wp-content/uploads/2020/05/TanDoanh-Logo.png" class="header_logo header-logo" alt="Tân Doanh"/></noscript>
                        <img  width="200" height="80" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%2080'%3E%3C/svg%3E" class="header-logo-dark" alt="Tân Doanh" data-lazy-src="https://tandoanh.vn/wp-content/uploads/2020/05/TanDoanh-Logo.png"/>
                        <noscript><img  width="200" height="80" src="wp-content/uploads/2020/05/TanDoanh-Logo.png" class="header-logo-dark" alt="Tân Doanh"/></noscript>
                    </a>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left
                              flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-uppercase" >
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                    <form role="search" method="get" class="searchform" action="https://tandoanh.vn/">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                                <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
                                                <input type="hidden" name="post_type" value="product" />
                                            </div>
                                            <div class="flex-col">
                                                <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
                                                    <i class="icon-search" ></i>			</button>
                                            </div>
                                        </div>
                                        <div class="live-search-results text-left z-top"></div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                        <li class="cart-item has-icon has-dropdown">
                            <div class="header-button">
                                <a href="" title="Giỏ hàng" class="header-cart-link icon button round is-outline is-small">
                                    <span class="header-cart-title">
                                    Giỏ hàng   /     <span class="cart-price">
                                    <span class="woocommerce-Price-amount amount">
                                        @if(Session::has("Cart") != null)
                                    <bdi>{{number_format(Session::get("Cart")->totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi>
                                    </span>
                                    </span>
                                    </span>
                                    <i class="icon-shopping-cart">
                                        <span id="total-quantity-show" style="color:red">{{Session::get("Cart")->totalQuantity}}</span>
                                    </i>
                                    @else
                                        <bdi>0đ<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi>
                                        </span>
                                        </span>
                                        </span>
                                        <i class="icon-shopping-cart">
                                            <span id="total-quantity-show">0</span>
                                        </i>

                                    @endif
                                </a>
                            </div>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="html widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <div id="change-item-cart">
                                        @if(Session::has("Cart") != null)
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        @foreach(Session::get("Cart")->products as $item)
                                            <!-- item-->
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a style="cursor: pointer" class="remove remove_from_cart_button" data-id="{{$item['productInfo']->id}}" aria-label="Xóa sản phẩm này">&times;</a>
                                                        <img width="212" height="212"  sizes="(max-width: 212px) 100vw, 212px"
                                                             src="{{asset('public/uploads/'.$item['productInfo']->pro_name.'/'.$item['productInfo']->pro_avatar)}}"/>
                                                        {{$item['productInfo']->pro_name}}
                                                    </a>
                                                    <span class="quantity">{{$item['quantity']}} &times;
                                                    <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item['productInfo']->pro_price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </li>
                                                <!--end item-->
                                            @endforeach

                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <strong>Tổng tiền:</strong> <span class="woocommerce-Price-amount amount"><bdi>{{number_format(Session::get("Cart")->totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                        </p>
                                            @else
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Tổng tiền:</strong> <span class="woocommerce-Price-amount amount">
                                                        <bdi>0đ<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                </p>
                                        @endif
                                        </div>
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="{{route('get.cart')}}" class="button wc-forward">Xem giỏ hàng</a>
                                            <a href="https://tandoanh.vn/checkout/" class="button checkout wc-forward">Thanh toán</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="header-divider"></li>
                        @if(Auth::check())
                            <p>Xin chào, {{ Auth::user()->name }}
                            </p>
                        <li class="account-item has-icon">
                            <div class="header-button">
                                <a href="{{route('get.login')}}"
                                   class="nav-top-link nav-top-not-logged-in icon primary button round is-small" >
                                       <span>Đăng xuất  </span>
                                </a>
                            </div>
                        </li>


                        @else
                            <li class="account-item has-icon">
                                <div class="header-button">
                                    <a href="{{route('get.login')}}"
                                       class="nav-top-link nav-top-not-logged-in icon primary button round is-small" >
                                        <span>Đăng nhập     / Đăng ký  </span>
                                    </a>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div>
        <div id="wide-nav" class="header-bottom wide-nav nav-dark hide-for-medium">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav header-nav header-bottom-nav nav-left  nav-uppercase">
                        <div id="ot-mega-menu" class="ot-mega-menu">
                            <div id="mega-menu-title"><i class="icon-menu"></i> Danh Mục Sản Phẩm</div>
                            <div id="mega-menu-wrap-mega_menu" class="mega-menu-wrap ot-menu-wrap ot-shadow-0">
                                <div class="mega-menu-toggle">
                                    <div class="mega-toggle-blocks-left"></div>
                                    <div class="mega-toggle-blocks-center"></div>
                                    <div class="mega-toggle-blocks-right">
                                        <div class='mega-toggle-block mega-menu-toggle-block mega-toggle-block-1' id='mega-toggle-block-1' tabindex='0'><span class='mega-toggle-label' role='button' aria-expanded='false'><span class='mega-toggle-label-closed'>MENU</span><span class='mega-toggle-label-open'>MENU</span></span></div>
                                    </div>
                                </div>
                                <ul id="mega-menu-mega_menu" class="mega-menu max-mega-menu mega-menu-vertical mega-no-js" data-event="hover" data-effect="disabled" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-panel-width="ul.nav.header-nav.header-bottom-nav.nav-right.nav-uppercase" data-panel-inner-width="ul.nav.header-nav.header-bottom-nav.nav-right.nav-uppercase" data-mobile-force-width="false" data-second-click="close" data-document-click="collapse" data-vertical-behaviour="accordion" data-breakpoint="849" data-unbind="true" data-hover-intent-timeout="300" data-hover-intent-interval="100">
                                    <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-right mega-menu-grid mega-has-icon mega-icon-left mega-menu-item-7055' id='mega-menu-item-7055'>
                                        <a class="mega-custom-icon mega-menu-link" href="may-bo-tan-doanh/index.html" aria-haspopup="true" aria-expanded="false" tabindex="0">Máy bộ Tân Doanh<span class="mega-indicator"></span></a>
                                        <ul class="mega-sub-menu">
                                            <li class='mega-menu-row' id='mega-menu-7055-0'>
                                                <ul class="mega-sub-menu">
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-0-0'>
                                                        <ul class="mega-sub-menu">
                                                            <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-7056' id='mega-menu-item-7056'><a class="mega-menu-link" href="may-bo-van-phong/index.html">Máy Bộ Văn Phòng</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-0-1'>
                                                        <ul class="mega-sub-menu">
                                                            <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-7057' id='mega-menu-item-7057'><a class="mega-menu-link" href="may-bo-do-hoa/index.html">Máy Bộ Đồ Hoạ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-0-2'>
                                                        <ul class="mega-sub-menu">
                                                            <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-7058' id='mega-menu-item-7058'><a class="mega-menu-link" href="may-bo-gaming/index.html">Máy Bộ Gaming</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-0-3'>
                                                        <ul class="mega-sub-menu">
                                                            <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-7065' id='mega-menu-item-7065'><a class="mega-menu-link" href="bo-tan-custom/index.html">Bộ Tản Custom</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class='mega-menu-row' id='mega-menu-7055-1'>
                                                <ul class="mega-sub-menu">
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-1-0'>
                                                        <ul class="mega-sub-menu">
                                                            <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-19112' id='mega-menu-item-19112'><a class="mega-menu-link" href="may-bo-hp/index.html">Máy Bộ HP</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-1-1'></li>
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-1-2'></li>
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-1-3'></li>
                                                </ul>
                                            </li>
                                            <li class='mega-menu-row' id='mega-menu-7055-999'>
                                                <ul class="mega-sub-menu">
                                                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-7055-999-0'>
                                                        <ul class="mega-sub-menu">
                                                            <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-25953' id='mega-menu-item-25953'><a class="mega-menu-link" href="may-bo-event/index.html">Máy Bộ Event</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="flex-col hide-for-medium flex-right flex-grow">
                    <ul class="nav header-nav header-bottom-nav nav-right  nav-uppercase">
                        <li class="header-block">
                            <div class="header-block-block-2">
                                <div class="row row-collapse"  id="row-1820144870">
                                    <div id="col-207219420" class="col small-12 large-12"  >
                                        <div class="col-inner text-left"  >
                                            <a class="menu-ngang" href="https://news.tandoanh.vn/"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin Tức </a>
                                            <a class="menu-ngang" href="chuong-trinh-khuyen-mai/index.html"><i class="fa fa-gift" aria-hidden="true"></i> Hot Deals </a>
                                            <a class="menu-ngang" href="phuong-thuc-thanh-toan/index.html"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh Toán </a>
                                            <a class="menu-ngang" href="chinh-sach-bao-hanh/index.html"><i class="fa fa-recycle" aria-hidden="true"></i> Bảo Hành </a>
                                            <a class="menu-ngang" href="chinh-sach-van-chuyen/index.html"><i class="fa fa-truck" aria-hidden="true"></i> Vận Chuyển </a>
                                            <a class="menu-ngang" href="lien-he/index.html"><i class="fa fa-address-book-o" aria-hidden="true"></i> Liên Hệ </a>
                                        </div>
                                        <style>
                                            #col-207219420 > .col-inner {
                                                padding: 0px 0px 0px 0px;
                                                margin: 0px 0px 0px 0px;
                                            }
                                        </style>
                                    </div>
                                    <style>
                                        #row-1820144870 > .col > .col-inner {
                                            padding: 0px 0px 0px 0px;
                                        }
                                    </style>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>
