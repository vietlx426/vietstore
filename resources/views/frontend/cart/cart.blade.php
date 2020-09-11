<!-- hedaer-->
@if(Session::has("Cart") != null)

    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
    <!-- item-->
    @foreach(Session::get("Cart")->products as $item)
        <!-- item-->
            <li class="woocommerce-mini-cart-item mini_cart_item">
                <a  class="remove remove_from_cart_button" data-id="{{$item['productInfo']->id}}" aria-label="Xóa sản phẩm này">&times;</a>
                    <img width="212" height="212"  sizes="(max-width: 212px) 100vw, 212px"
                         src="{{asset('public/uploads/'.$item['productInfo']->pro_name.'/'.$item['productInfo']->pro_avatar)}}"/>
                    {{$item['productInfo']->pro_name}}
                </a>
                <span class="quantity">{{$item['quantity']}} &times;
                                                    <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item['productInfo']->pro_price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
            </li>
            <!--end item-->
    @endforeach
    <!--end item-->

</ul>
<p class="woocommerce-mini-cart__total total">
    <strong>Tổng số :</strong> <span class="woocommerce-Price-amount amount"><bdi>{{number_format(Session::get("Cart")->totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
</p>
@else
    <p class="woocommerce-mini-cart__total total">
        <strong>Tổng số :</strong> <span class="woocommerce-Price-amount amount">
                                                        <bdi>0đ<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
    </p>
@endif
