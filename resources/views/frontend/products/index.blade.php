@extends('frontend.layouts.master')
@section('content')
    <div class="noindex">
        <section class="light_section">
            <div id="collection" class="container">

                <div class="col-sm-12">
                    <h1 class="title-box-collection">
                        Top PC bán chạy
                    </h1>
                    <div class="row">
                        <div class="main-content">
                            <div id="breadcrumb">
                                <div class="main">
                                    <div class="breadcrumbs container">
                                        <span class="showHere">Bạn đang ở: </span><a href="/" class="pathway">Trang chủ</a>
                                        <span> <i class="fa fa-caret-right"></i> Top Những Cấu Hình PC Bán Chạy Nhất Hiện Nay</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-12 wrap-sort-by">

                                        <div class="browse-tags pull-right">
                                            <span>Sắp xếp theo:</span>
                                            <span class="custom-dropdown custom-dropdown--white">
										<select class="sort-by custom-dropdown__select custom-dropdown__select--white">
											<option value="manual">Sản phẩm nổi bật</option>
											<option value="price-ascending">Giá: Tăng dần</option>
											<option value="price-descending">Giá: Giảm dần</option>
											<option value="title-ascending">Tên: A-Z</option>
											<option value="title-descending">Tên: Z-A</option>
											<option value="created-ascending">Cũ nhất</option>
											<option value="created-descending">Mới nhất</option>
											<option value="best-selling">Bán chạy nhất</option>
										</select>
									</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 product-list">

                                <div class="row content-product-list">
                                    @if(isset($products))
                                        @foreach($products as $product)
                                    <div class="col-sm-4 col-xs-12 padding-none col-fix20">
                                        <div class="product-row">
                                            <a href="/products/gvn-titan-10-m">
                                            </a><div class="product-row-img"><a href="{{route('get.detail.product.list',[$product->pro_slug,$product->id])}}">



                                                    <img class="product-row-thumbnail" src="{{asset('public/uploads/'.$product->pro_name.'/'.$product->pro_avatar)}}" alt="GVN Titan 10 M">

                                                </a><div class="product-row-price-hover"><a href="{{route('get.detail.product.list',[$product->pro_slug,$product->id])}}">
                                                        <div class="product-row-note pull-left">Click để xem chi tiết</div>
                                                    </a><a href="" class="product-row-btnbuy pull-right">Đặt hàng</a></div></div>
                                            <h2 class="product-row-name">{{$product->pro_name}}</h2>
                                            @if($product->pro_sale)
                                            <div class="product-row-info">
                                                <div class="product-row-price pull-left"><del>{{number_format($product->pro_price)}}₫</del><br><span class="product-row-sale">
                                                         {{number_format(($product->pro_price)*((100-$product->pro_sale)/100))}}₫ </span></div>

                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="new-product-percent">-{{$product->pro_sale}}%</div>
                                            @else
                                                <div class="new-product-info">
                                                    <div class="new-product-sale pull-left">{{number_format($product->pro_price)}}₫<br/></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                        @endforeach
                                    @endif

                                </div>

                            </div>
                            <div class="col-md-12 ">
                                <div class="text-center">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End collection info -->
                <!-- Begin no products -->


                <!-- End no products -->
            </div>
        </section>

        </script>

    </div>
@endsection
