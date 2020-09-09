@extends('frontend.layouts.master')
@section('content')

    <div class="gearvn-header-navigation ">
        <div class="row gearvn-content-section gearvn-header-navigation-content padding-10-0 container">

            <!--MENU LEFT-->
            <!--<span class="click-list"><i class="fa fa-bars"></i> Danh mục sản phẩm</span>-->
            <div class="gearvn-header-menu">
                <div class="cat-menu gearvn-cat-menu">

                    <nav id="megamenu-nav" class="megamenu-nav">
                        <ol class="megamenu-nav-primary responsive" id="megamenu-nav-main">

                            @if(isset($cate))
                                @foreach($cate as $data)
                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="collections/laptop.html">
                                            <span class="gearvn-cat-menu-name">{{$data->c_name}}</span>
                                        </a>

                                    </li>
                                @endforeach
                            @endif

                        </ol>
                    </nav>
                </div>
            </div>
            <!--MENU LEFT-->

            <!--NAVIGATION RIGHT-->
            <div class="gearvn-header-navigation-block">
                <div class="gearvn-header-banner">
                    <div class="left">
                        <div class="slider-wrap">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">

                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>

                                    <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>

                                    <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>

                                    <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>

                                    <li data-target="#carousel-example-generic" data-slide-to="6" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="7" class=""></li>

                                    <li data-target="#carousel-example-generic" data-slide-to="8" class=""></li>

                                    <li data-target="#carousel-example-generic" data-slide-to="9" class=""></li>


                                    <li data-target="#carousel-example-generic" data-slide-to="14" class=""></li>

                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <div class="item active ">
                                        <a href="http://bit.ly/pc-gaming-tong-t9">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_1f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="http://bit.ly/uu-dai-giam-gia-1tr">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_2f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="pages/uu-dai-gear.html">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_3f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="pages/gearvn-uu-dai-man-hinh.html">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_4f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="pages/steelseries-official-store.html">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_5f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>
                                    <div class="item ">
                                        <a href="pages/logitech-official-store.html">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_6f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="pages/razer-official-store.html">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_7f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="collections/ssd-samsung.html">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_8f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="pages/khuyen-mai-gaming-gear-asus-2-9.html">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_9f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="https://bit.ly/fan-x20f">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_10f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>

                                    <div class="item ">
                                        <a href="pages/laptop-lenovo-may-chat-cat-buoc-thanh-cong.html">

                                            <img class="w-100" src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/slideshow_15f4ea.jpg?v=14250')}}" alt="...">
                                        </a>
                                    </div>



                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div> <!-- Carousel -->
                        </div>
                        <div class="sub-banner-wrap i100">
                            <a href="collections/laptop-acer-nitro-series.html" class="sub-item" >
                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/solid4f4ea.jpg?v=14250')}}">

                            </a>
                            <a href="pages/uu-dai-man-hinh.html" class="sub-item" >
                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/solid5f4ea.jpg?v=14250')}}">

                            </a>
                        </div>
                    </div>
                    <div class="right i100">
                        <div class="sub-item-right">
                            <a href="http://bit.ly/pc-gaming-tong-t9" class="sub-item" >
                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/solid1f4ea.jpg?v=14250')}}">

                            </a>
                            <a href="collections/laptop-gaming-lenovo.html" class="sub-item" >
                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/solid2f4ea.jpg?v=14250')}}">

                            </a>
                            <a  href="collections/ssd-samsung.html" class="sub-item" >
                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/solid3f4ea.jpg?v=14250')}}">

                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--END NAVIGATION RIGHT-->
        </div>
    </div>

    </div>







    <div class="">
        <div id="mainframe">



            <div class=" gearvn-content-section i100 mb-10" id="xxx-banner">
                <div class="row row-margin-small">

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-10 col-padding-small">
                        <div class="border-rus" >
                            <a href="pages/uu-dai-gear.html">
                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/xxxbanner1f4ea.jpg?v=14250')}}">
                            </a>

                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-10 col-padding-small">

                        <div class="border-rus" >
                            <a href="pages/uu-dai-ban-phim.html">

                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/xxxbanner2f4ea.jpg?v=14250')}}">
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-10 col-padding-small">
                        <div class="border-rus" >
                            <a href="pages/tong-hop-uu-dai-ghe-gaming-gearvn.html">

                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/xxxbanner3f4ea.jpg?v=14250')}}">
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-10 col-padding-small">
                        <div class="border-rus" >
                            <a href="collections/top-3-san-pham-loa-gaming-tot-nhat.html">

                                <img src="{{asset('public/frontend/css/theme.hstatic.net/1000026716/1000440777/14/xxxbanner4f4ea.jpg?v=14250')}}">
                            </a>

                        </div>
                    </div>

                </div>
            </div>



            <div class="container pd0-sm-mb" >
                <div id="featured-new-product">
                    <h2 class="new-product-title" >
                        Sản phẩm hot
                    </h2>
                    <a class="gearvn-new-products-hot-view-all" href="collections/top-pc-ban-chay.html">
                        Xem tất cả <i class="fa fa-chevron-right"></i>
                    </a>
                    <ul class="owl-carousel">
                        @if(isset($productsHot))
                            @foreach($productsHot as $data)
                                <li>
                                    <div class="new-product-row">
                                        <a href="{{route('get.detail.product.list',[$data->pro_slug,$data->id])}}">
                                            <div class="new-product-img">

                                                <img class="new-product-thumbnail" src="{{asset('public/uploads/'.$data->pro_name.'/'.$data->pro_avatar)}}" alt="GVN Titan 10 M" /></div>



                                            <h2 class="new-product-name">{{$data->pro_name}}</h2>
                                            @if($data->pro_sale)
                                                <div class="new-product-percent">-{{$data->pro_sale}}%</div>
                                                <div class="new-product-info">
                                                    <div class="new-product-price pull-left"><del>{{number_format($data->pro_price)}}₫</del><br/><span class="new-product-sale">
                                               {{number_format(($data->pro_price)*((100-$data->pro_sale)/100))}}₫
                                            </span></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            @else
                                                <div class="new-product-info">
                                                    <div class="new-product-sale pull-left">{{number_format($data->pro_price)}}₫<br/></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            @endif
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div id="featured-new-product">
                    <h2 class="new-product-title" >
                        Sản phẩm mới
                    </h2>
                    <a class="gearvn-new-products-hot-view-all" href="collections/top-pc-ban-chay.html">
                        Xem tất cả <i class="fa fa-chevron-right"></i>
                    </a>
                    <ul class="owl-carousel">
                        @if(isset($pro))
                            @foreach($pro as $data)
                        <li>
                            <div class="new-product-row">
                                <a href="{{route('get.detail.product.list',[$data->pro_slug,$data->id])}}">
                                    <div class="new-product-img">

                                        <img class="new-product-thumbnail" src="{{asset('public/uploads/'.$data->pro_name.'/'.$data->pro_avatar)}}" alt="GVN Titan 10 M" /></div>



                                    <h2 class="new-product-name">{{$data->pro_name}}</h2>
                                    @if($data->pro_sale)
                                    <div class="new-product-percent">-{{$data->pro_sale}}%</div>
                                    <div class="new-product-info">
                                        <div class="new-product-price pull-left"><del>{{number_format($data->pro_price)}}₫</del><br/><span class="new-product-sale">
                                               {{number_format(($data->pro_price)*((100-$data->pro_sale)/100))}}₫
                                            </span></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    @else
                                        <div class="new-product-info">
                                            <div class="new-product-sale pull-left">{{number_format($data->pro_price)}}₫<br/></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        @endif
                                </a>
                            </div>
                        </li>
                            @endforeach
                            @endif
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /SECTION -->
    @section('javascript')
        <script>

            jQuery(document).ready(function() {
                jQuery('.owl-carousel').owlCarousel({
                    loop: true,
                    autoplay: true,
                    margin: 15,
                    responsiveClass: true,
                    navigation : false,
                    navText: ['<span class="fa fa-chevron-left click-fa-top" aria-hidden="true"></span>' , '<span class="fa fa-chevron-right" aria-hidden="true"></span>'],
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 2,
                            nav: false
                        },
                        990: {
                            items: 5,
                            nav: true,
                            loop: false,
                            margin: 15
                        }
                    }
                })
            })

        </script>
        @endsection
@endsection
