@extends('frontend.layouts.master')
@section('content')
    @if(Session::has("Cart") != null)
    <main id="main" class="">
        <div class="checkout-page-title page-title">
            <div class="page-title-inner flex-row medium-flex-wrap container">
                <div class="flex-col flex-grow medium-text-center">
                    <nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h3 none">
                        <a href="https://tandoanh.vn/cart/" class="current">
                            <span class="breadcrumb-step hide-for-small">1</span>  	   	Giỏ hàng  	   	</a>
                        <span class="divider hide-for-small"><i class="icon-angle-right" ></i></span>
                        <a href="https://tandoanh.vn/checkout/" class="hide-for-small">
                            <span class="breadcrumb-step hide-for-small">2</span>  	   	Thông Tin Khách Hàng  	   </a>
                        <span class="divider hide-for-small"><i class="icon-angle-right" ></i></span>
                        <a href="#" class="no-click hide-for-small">
                            <span class="breadcrumb-step hide-for-small">3</span>  	   	Hoàn Tất Đơn Hàng  	   </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="cart-container container page-wrapper page-checkout">
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="woocommerce row row-large row-divided" id="list-cart">
                    <div class="col large-7 pb-0 cart-auto-refresh">
                            <div class="cart-wrapper sm-touch-scroll">
                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="product-name" colspan="3">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tạm tính</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Session::get("Cart")->products as $item)
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                        <td class="product-remove">
                                            <a style="cursor: pointer"  onclick="DeleteListItemCart({{$item['productInfo']->id}});" class="remove" aria-label="Xóa sản phẩm này" data-product_id="3245" data-product_sku="">&times;</a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="{{route('get.detail.product.list',[$item['productInfo']->pro_slug,$item['productInfo']->id])}}">
                                                <img width="212" height="212" src="{{asset('public/uploads/'.$item['productInfo']->pro_name.'/'.$item['productInfo']->pro_avatar)}}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Infinity Yuly Ultra – 32″ Qhd Curved 2560x1440@144hz 1" srcset="" data-srcset="https://tandoanh.vn/wp-content/uploads/2019/08/Infinity-Yuly-Ultra-–-32″-QHD-Curved-2560X1440@144HZ-1-212x212.jpg 212w, https://tandoanh.vn/wp-content/uploads/2019/08/Infinity-Yuly-Ultra-–-32″-QHD-Curved-2560X1440@144HZ-1-600x600.jpg 600w, https://tandoanh.vn/wp-content/uploads/2019/08/Infinity-Yuly-Ultra-–-32″-QHD-Curved-2560X1440@144HZ-1-300x300.jpg 300w, https://tandoanh.vn/wp-content/uploads/2019/08/Infinity-Yuly-Ultra-–-32″-QHD-Curved-2560X1440@144HZ-1-768x768.jpg 768w, https://tandoanh.vn/wp-content/uploads/2019/08/Infinity-Yuly-Ultra-–-32″-QHD-Curved-2560X1440@144HZ-1-100x100.jpg 100w, https://tandoanh.vn/wp-content/uploads/2019/08/Infinity-Yuly-Ultra-–-32″-QHD-Curved-2560X1440@144HZ-1.jpg 1000w" sizes="(max-width: 212px) 100vw, 212px" /></a>
                                        </td>
                                        <td class="product-name" data-title="Sản phẩm">
                                            <a href="{{route('get.detail.product.list',[$item['productInfo']->pro_slug,$item['productInfo']->id])}}">{{$item['productInfo']->pro_name}}</a>

                                        </td>
                                        <td class="product-price" data-title="Giá">
                                            <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item['productInfo']->pro_price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                        </td>
                                        <td class="product-quantity" data-title="Số lượng">
                                            <div class="quantity buttons_added">



                                                <span class="tru"><i class="minus button is-form" onclick="UpdateCartDown({{$item['productInfo']->id}});">-</i></span>
                                                <input type="number" id="quantity-item-cart-{{$item['productInfo']->id}}"
                                                       value="{{$item['quantity']}}"
                                                       id="quantity-item-cart-{{$item['productInfo']->id}}"
                                                       class="input-text qty text" />
                                                <span class="cong"><i class="plus button is-form" onclick="UpdateCartUp({{$item['productInfo']->id}});">+</i></span>

                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Tạm tính">
                                            <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item['price'])}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                        </td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="6" class="actions clear">
                                            <div class="continue-shopping pull-left text-left">
                                                <a class="button-continue-shopping button primary is-outline"  href="https://tandoanh.vn/list-san-pham/">
                                                    &#8592;&nbsp;Tiếp tục xem sản phẩm	</a>
                                            </div>
                                            <button type="submit" class="button primary mt-0 pull-left small" name="update_cart" value="Cập nhật giỏ hàng">Cập nhật giỏ hàng</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <div class="cart-collaterals large-5 col pb-0">
                        <div class="cart-sidebar col-inner ">
                            <div class="cart_totals ">
                                <table cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="product-name" colspan="2" style="border-width:3px;">Cộng giỏ hàng</th>
                                    </tr>
                                    </thead>
                                </table>
                                <h2>Cộng giỏ hàng</h2>
                                <table cellspacing="0" class="shop_table shop_table_responsive">
                                    <tr class="cart-subtotal">
                                        <th>Tạm tính</th>
                                        <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount"><bdi>4,990,000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng</th>
                                        <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount"><bdi>{{number_format(Session::get("Cart")->totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="{{{route('get.payment')}}}" class="checkout-button button alt wc-forward">
                                        Tiến hành thanh toán</a>
                                </div>
                            </div>
                            <div class="cart-sidebar-content relative"></div>
                        </div>
                    </div>
                </div>
                <div class="cart-footer-content after-cart-content relative"></div>
            </div>
        </div>
    </main>
    @else
        <main id="main" class="">
            <div class="checkout-page-title page-title">
                <div class="page-title-inner flex-row medium-flex-wrap container">
                    <div class="flex-col flex-grow medium-text-center">
                        <nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h3 none">
                            <a href="index.html" class="current">
                                <span class="breadcrumb-step hide-for-small">1</span>  	   	Giỏ hàng  	   	</a>
                            <span class="divider hide-for-small"><i class="icon-angle-right" ></i></span>
                            <a href="../checkout/index.html" class="hide-for-small">
                                <span class="breadcrumb-step hide-for-small">2</span>  	   	Thông Tin Khách Hàng  	   </a>
                            <span class="divider hide-for-small"><i class="icon-angle-right" ></i></span>
                            <a href="#" class="no-click hide-for-small">
                                <span class="breadcrumb-step hide-for-small">3</span>  	   	Hoàn Tất Đơn Hàng  	   </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="cart-container container page-wrapper page-checkout">
                <div class="woocommerce">
                    <div class="text-center pt pb">
                        <div class="woocommerce-notices-wrapper"></div>
                        <p class="cart-empty woocommerce-info">Chưa có sản phẩm nào trong giỏ hàng.</p>
                        <p class="return-to-shop">
                            <a class="button primary wc-backward" href="../list-san-pham/index.html">
                                Quay trở lại cửa hàng			</a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
    @endif
@endsection
@section('javascript')
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script>
        $(document).ready(function() {
            $('.tru').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.cong').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });
    </script>
    <script>
        function DeleteListItemCart(id)
        {
            $.ajax({
                type: 'GET',
                url: 'delete-list-cart/'+id,
            })
                .done(function( res ) {
                    Render(res);
                    alertify.success('Xóa sản phẩm thành công!');
                });
        }
        function Render(res){
            $("#list-cart").empty();
            $("#list-cart").html(res);
        }
        function UpdateCartUp(id){
            $.ajax({
                type: 'GET',
                url: 'update-list-cart/'+id
            })
                .done(function( res ) {
                    console.log(res);
                    Render(res);
                    alertify.success('Thêm sản phẩm thành công!');
                });
        }
        function UpdateCartDown(id){

            $.ajax({
                type: 'GET',
                url: 'update-list-cart-down/'+id,
            })
                .done(function( res ) {
                    console.log(res);
                    Render(res);
                    alertify.success('Xóa sản phẩm thành công!');
                });
        }
        function myFunction(id)
        {
            $.ajax({
                type: 'GET',
                url: 'update-list-cart-test/'+id+'/'+$("#quantity-item-cart-"+id).val(),
            })
                .done(function( res ) {
                    Render(res);
                    alertify.success('Thêm sản phẩm thành công!');
                });
        }
    </script>
@endsection
