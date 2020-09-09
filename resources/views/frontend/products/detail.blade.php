@extends('frontend.layouts.master')
@section('content')
    <div class="noindex">
        <div id="breadcrumb">
            <div class="main">
                <div class="breadcrumbs container">
{{--                    <span class="showHere">Bạn đang ở: </span><a href="../index.html" class="pathway">Trang chủ</a> <i class="fa fa-caret-right"></i>--}}
{{--                    <span><a href="../collections/pc-gvn-rtx-2060s.html">PC GVN - RTX 2060S</a> <i class="fa fa-caret-right"></i> Bộ Máy Tính Chơi Game GVN AORUS S</span>--}}
                </div>
            </div>
        </div>


        <div id="mainframe">
            <div class="container">
                <div id="maincontent">
                    <div id="system-message-container">
                        <div id="system-message"></div>
                    </div>
                    <div class="page_content">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 product_thumbnail">
                                <div class="fotorama" data-width="100%" data-max-width="100%" data-autoplay="true" data-nav="thumbs" data-transition="slide" data-clicktransition="crossfade" >


                                    <img src="{{asset('public/uploads/'.$product->pro_name.'/'.$product->pro_avatar)}}"  alt="Lỗi   " />


                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 product_parameters">
                                <div id="col-1505686421" class="col medium-6 small-12 large-4"  >
                                    <div class="col-inner"  >
                                        <div class="product-price-container is-normal">
                                            <style>
                                                .devvn_single_price {
                                                    border: 1px dashed #888888;
                                                    padding: 10px;
                                                    border-radius: 5px;
                                                    -moz-border-radius: 5px;
                                                    -webkit-border-radius: 5px;
                                                    margin: 0 0 10px;
                                                    color: #000;
                                                }
                                                .devvn_single_price span.label {
                                                    font-size: 16px;
                                                    color: #333;
                                                    font-weight: 400;
                                                    padding: 0;
                                                    margin: 0;
                                                    float: left;
                                                    width: 175px;
                                                    text-align: left;
                                                    line-height: 26px;
                                                }
                                                .devvn_single_price span.devvn_price .amount, .sale_amount .percent {
                                                    font-weight: 700;
                                                    color: #ff3a3a;
                                                    text-shadow: 2px 0 0 #fff, -1px 0 0 #fff, 0 1px 0 #fff, 0 -1px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 2px 3px #666;
                                                    line-height: 23px;
                                                    font-size: 16px;
                                                    float:none;
                                                }
                                                .devvn_single_price span.devvn_price del .amount, .devvn_single_price span.devvn_price del {
                                                    color: #333;
                                                }
                                                .other span.devvn_price .amount {
                                                    color: green;
                                                }
                                                .devvn_single_price > div {
                                                    margin-bottom: 6px;
                                                }
                                                .devvn_single_price.only span.devvn_price .amount {
                                                    color: green;
                                                }

                                            </style>
                                            <h1 class="product_name">
                                                {{$product->pro_name}}
                                            </h1>
                                            @if($product->pro_sale)
                                            <div class="devvn_single_price only" style="padding-bottom: 0;">
                                                <div style="padding-bottom:6px">
                                                    <span class="price-text">Giá Cũ:</span><span class="product_price"><del>{{number_format($product->pro_price)}}₫</del></span><br/>

                                                    <span class="price-text">Giá KM:</span><span class="product_sale_price">
                                                        {{number_format(($product->pro_price)*((100-$product->pro_sale)/100))}}₫  </span>
                                                </div>
                                            </div>
                                            @else
                                                <div class="devvn_single_price only" style="padding-bottom: 0;">
                                                    <div style="padding-bottom:6px">
                                                        <span class="price-text">Giá:</span><span class="product_price">{{number_format($product->pro_price)}}đ</span><br/>


                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="devvn_single_price only" >
                                            <ul>
                                                <li><span style="font-size: 130%;">Tình trạng: mới 100%</span></li>
                                                <li><span style="font-size: 130%;">Bảo hành: 36 tháng</span></li>
                                            </ul>
                                        </div>


                                        <div class="product_meta">
                                            <span class="posted_in">Danh mục: <a href="../amd-ryzen/index.html" rel="tag">AMD RYZEN s2000</a></span>
                                        </div>
                                        <div class="social-icons share-icons share-row relative icon-style-fill" ><a href="whatsapp://send?text=AMD%20Ryzen%E2%84%A2%203%202300X%204C%2F4T%20UPTO%204.0GHZ - https://tandoanh.vn/amd-ryzen-3-2300x-4c-4t-upto-4-0ghz/" data-action="share/whatsapp/share" class="icon primary button circle tooltip whatsapp show-for-medium" title="Share on WhatsApp"><i class="icon-whatsapp"></i></a><a href="http://www.facebook.com/sharer.php?u=https://tandoanh.vn/amd-ryzen-3-2300x-4c-4t-upto-4-0ghz/" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button circle tooltip facebook" title="Share on Facebook"><i class="icon-facebook" ></i></a><a href="http://twitter.com/share?url=https://tandoanh.vn/amd-ryzen-3-2300x-4c-4t-upto-4-0ghz/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button circle tooltip twitter" title="Share on Twitter"><i class="icon-twitter" ></i></a><a href="mailto:enteryour@addresshere.com?subject=AMD%20Ryzen%E2%84%A2%203%202300X%204C%2F4T%20UPTO%204.0GHZ&amp;body=Check%20this%20out:%20https://tandoanh.vn/amd-ryzen-3-2300x-4c-4t-upto-4-0ghz/" rel="nofollow" class="icon primary button circle tooltip email" title="Email to a Friend"><i class="icon-envelop" ></i></a><a href="http://pinterest.com/pin/create/button/?url=https://tandoanh.vn/amd-ryzen-3-2300x-4c-4t-upto-4-0ghz/&amp;media=https://tandoanh.vn/wp-content/uploads/2019/06/amd-ryzen-3-2200g-3-500x500-1024x1024.jpg&amp;description=AMD%20Ryzen%E2%84%A2%203%202300X%204C%2F4T%20UPTO%204.0GHZ" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button circle tooltip pinterest" title="Pin on Pinterest"><i class="icon-pinterest" ></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://tandoanh.vn/amd-ryzen-3-2300x-4c-4t-upto-4-0ghz/&amp;title=AMD%20Ryzen%E2%84%A2%203%202300X%204C%2F4T%20UPTO%204.0GHZ" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" target="_blank" class="icon primary button circle tooltip linkedin" title="Share on LinkedIn"><i class="icon-linkedin" ></i></a></div>
                                    </div>
                                </div>
                                <form id="add-item-form-2" name="shoppingCart" action="https://gearvn.com/cart/add" method="post">
                                    <div id="sel_price_qty" class="table_qty table-responsive" style="display:none;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="4">

                                            <tr class="">
                                                <td >
                                                    <img class="product_cs_thumb" src="../../hstatic.net/0/0/global/noDefaultImage6_small.gif"/>
                                                    <span  style="display:none">Default Title		</span>
                                                </td>
                                                <td class="text-right">
                                                    <span class="">22,390,000₫</span>
                                                </td>
                                                <td class="text-right variant-control" data-price="2239000000">
                                                    <button class="bt_down" type="button" onClick="javascript:jQuery(this).qtyDown('qty1045130720');" > - </button>
                                                    <input type="text" class="input_qty" id="qty1045130720" name="qty[]" value="0" />
                                                    <button class="bt_up" type="button" onClick="javascript:jQuery(this).qtyUp('qty1045130720');"> + </button>
                                                    <input type="hidden" value="1045130720" name="pid[]" class="vid" />
                                                </td>
                                            </tr>


                                        </table>
                                    </div>
                                    <span class="text-select-product" style="display:none">(Vui lòng chọn số lượng trước khi mua hàng)</span>

                                    <div class="clearfix"></div>


                                    <div class="form-group">
                                        <a id="allowAdd2Cart" class="product_buy_btn btn-success theme_button addtocar">Đặt hàng</a>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <br class="clr" />
                        <div id="product_content_detail" class="row">
                            <div id="product_left" class="col-md-8 col-xs-8">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#chitiet" aria-controls="chitiet" role="tab" data-toggle="tab">Mô tả sản phẩm</a></li>
                                        <li role="presentation"><a href="#dacdiem" aria-controls="dacdiem" role="tab" data-toggle="tab">Đặc điểm nổi bật</a></li>
                                        <li role="presentation"><a href="#hrvproducttabs" aria-controls="dacdiem" role="tab" data-toggle="tab">Thông tin bảo hành</a></li>


                                    </ul>
                                    <!-- Tab panes -->


                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="chitiet">
                                            <table class="table table-bordered" id="tblGeneralAttribute" border="3" cellpadding="3" cellspacing="3" style="width: 100%; margin-left: auto; margin-right: auto;" data-mce-style="width: 100%; margin-left: auto; margin-right: auto;">
                                                <tbody class="">
                                                @if(isset($product->pro_cpu))
                                                <tr class="row-info">
                                                    <td><span>CPU</span></td>
                                                    <td><span>{{$product->pro_cpu}}</span></td>
                                                    @endif
                                                </tr>
                                                @if(isset($product->pro_memory))
                                                <tr class="row-info">
                                                    <td><span>RAM</span></td>
                                                    <td><span>{{$product->pro_memory}}</span></td>

                                                </tr>
                                                @endif
                                                @if(isset($product->pro_graphic))
                                                <tr class="row-info">
                                                    <td><span>Ổ cứng</span></td>
                                                    <td><span>{{$product->pro_graphic}}</span></td>
                                                </tr>
                                                @endif
                                                @if(isset($product->graphic))
                                                <tr class="row-info">
                                                    <td><span>Card đồ họa</span></td>
                                                    <td><span>{{$product->graphic}}</span></td>
                                                </tr>
                                                @endif
                                                @if(isset($product->pro_display))
                                                <tr class="row-info">
                                                    <td><span>Màn hình</span></td>

                                                    <td><span>{{$product->pro_display}}</span></td>
                                                </tr>
                                                @endif

                                                @if(isset($product->pro_storage))
                                                <tr class="row-info">
                                                    <td><span>Lưu trữ</span></td>

                                                    <td><span>{{$product->pro_storage}}</span></td>
                                                </tr>
                                                @endif
                                                @if(isset($product->pro_os))
                                                <tr class="row-info">
                                                    <td><span>Hệ điều hành</span></td>

                                                    <td><span>{{$product->pro_os}}</span></td>
                                                </tr>
                                                @endif
                                                @if(isset($product->pro_battery))
                                                <tr class="row-info">
                                                    <td><span>Pin</span></td>
                                                    <td><span>{{$product->pro_battery}}</span></td>
                                                </tr>
                                                @endif
                                                @if(isset($product->pro_weight))
                                                <tr class="row-info">
                                                    <td><span>Trọng lượng</span></td>
                                                    <td><span>{{$product->pro_weight}}</span></td>
                                                </tr>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="dacdiem">
                                            <p></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="hrvproducttabs">
                                            <p>


                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>







                </div>
            </div>
        </div>
    </div>

@endsection
