@extends('frontend.layouts.master')
@section('content')
    <main id="main" class="">
        <div class="checkout-page-title page-title">
            <div class="page-title-inner flex-row medium-flex-wrap container">
                <div class="flex-col flex-grow medium-text-center">
                    <nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h3 none">
                        <a href="https://tandoanh.vn/cart/" class="hide-for-small">
                            <span class="breadcrumb-step hide-for-small">1</span>  	   	Giỏ hàng  	   	</a>
                        <span class="divider hide-for-small"><i class="icon-angle-right" ></i></span>
                        <a href="https://tandoanh.vn/checkout/" class="current">
                            <span class="breadcrumb-step hide-for-small">2</span>  	   	Thông Tin Khách Hàng  	   </a>
                        <span class="divider hide-for-small"><i class="icon-angle-right" ></i></span>
                        <a href="#" class="no-click hide-for-small">
                            <span class="breadcrumb-step hide-for-small">3</span>  	   	Hoàn Tất Đơn Hàng  	   </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="cart-container container page-wrapper page-checkout">
                <form method="post" class="checkout woocommerce-checkout" enctype="multipart/form-data">
                    @csrf
                    <div class="row pt-0 ">
                        <div class="large-7 col  ">
                            <div id="customer_details">
                                <div class="clear">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Thông tin thanh toán</h3>
                                        <div class="woocommerce-billing-fields__field-wrapper">
                                            <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="-1">
                                                <label for="billing_email" class="">Địa chỉ email&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="email" class="input-text " name="tst_email" placeholder=""  value="" autocomplete="email username" />
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required" id="billing_last_name_field" data-priority="">
                                                <label for="billing_last_name" class="">Họ và tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text " name="tst_name" placeholder="Nhập đầy đủ họ và tên của bạn"  value=""  />
                                                </span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                <label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text " name="tst_address"  value="" autocomplete="address-line1" />
                                                </span>
                                            </p>

                                            <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                                <label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="tel" class="input-text " name="tst_phone" placeholder=""  value="" autocomplete="tel" /></span></p>
                                        </div>
                                    </div>

                                </div>
                                <div class="clear">
                                    <div class="woocommerce-shipping-fields">
                                    </div>
                                    <div class="woocommerce-additional-fields">
                                        <h3>Thông tin bổ sung</h3>
                                        <div class="woocommerce-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="order_comments_field" data-priority="">
                                                <label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <textarea name="tst_note" class="input-text " placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."  rows="2" cols="5"></textarea></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="large-5 col">
                            <div class="col-inner has-border">
                                <div class="checkout-sidebar sm-touch-scroll">
                                    <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tạm tính</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(Session::get("Cart")->products as $item)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{$item['productInfo']->pro_name}}&nbsp;
                                                    <strong class="product-quantity">&times;&nbsp;{{$item['quantity']}}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{number_format($item['price'])}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
{{--                                            <tr class="cart-subtotal">--}}
{{--                                                <th>Tạm tính</th>--}}
{{--                                                <td><span class="woocommerce-Price-amount amount"><bdi>4,990,000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>--}}
{{--                                            </tr>--}}
                                            <tr class="order-total">
                                                <th>Tổng</th>
                                                <td><strong>
                                                        <span class="woocommerce-Price-amount amount"><bdi>{{number_format(Session::get("Cart")->totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <div id="payment" class="woocommerce-checkout-payment">

                                            <div class="form-row place-order">
                                                <noscript>
                                                    Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào <em>Cập nhật giỏ hàng</em> trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng">Cập nhật tổng</button>
                                                </noscript>
                                                <div class="woocommerce-terms-and-conditions-wrapper">
                                                    <div id="terms-and-conditions-lightbox"
                                                         class="lightbox-by-id lightbox-content mfp-hide lightbox-white "
                                                         style="max-width:800px ;padding:20px">
                                                        <div class="row"  id="row-899295511">
                                                            </p>
                                                            <div id="col-1969051345" class="col hide-for-small medium-1 small-12 large-1"  >
                                                                <div class="col-inner"  >
                                                                </div>
                                                            </div>
                                                            <div id="col-1925351252" class="col medium-10 small-12 large-10"  >
                                                                <div class="col-inner"  >
                                                                    <div id="page-header-531988421" class="page-header-wrapper">
                                                                        <div class="page-title light divided-title">
                                                                            <div class="page-title-inner container align-center text-center flex-row-col medium-flex-wrap" >
                                                                                <div class="title-wrapper uppercase flex-col">
                                                                                    <h1 class="entry-title mb-0">
                                                                                        Chính sách bảo mật
                                                                                    </h1>
                                                                                </div>
                                                                                <div class="title-content flex-col">
                                                                                </div>
                                                                            </div>
                                                                            <style>
                                                                                #page-header-531988421 .page-title-inner {
                                                                                    min-height: 0px;
                                                                                }
                                                                            </style>
                                                                        </div>
                                                                        <div class="container header-wrapper-divider">
                                                                            <hr/>
                                                                        </div>
                                                                    </div>
                                                                    <p>Bảo mật thông tin khách hàng là ưu tiên hàng đầu của chúng tôi, vì vậy, Quý khách có thể hoàn toàn yên tâm khi cung cấp thông tin của mình tại website tandoanh.vn. Quý khách vui lòng đọc bản “ Chính sách bảo mật” của chúng tôi dưới đây để hiểu rõ hơn về những cam kết mà chúng tôi thực hiện đối với việc bảo mật thông tin của khách hàng, nhằm bảo vệ khách hàng của chúng tôi.</p>
                                                                    <ol>
                                                                        <li><strong> THU THẬP THÔNG TIN KHÁCH HÀNG</strong></li>
                                                                    </ol>
                                                                    <p>&#8211; Khi cần mua hàng hoặc sử dụng một số dịch vụ tại tandoanh.vn, Quý khách có thể được yêu cầu cung cấp một sô thông tin cơ bản như: email, họ tên, số điện thoại liên hệ, địa chỉ…. Những thông tin cá nhân này phải chính xác và hợp pháp. Tân Doanh không chịu mọi trách nhiệm liên quan đến pháp luật của thông tin khai báo.</p>
                                                                    <p>&#8211; Chúng tôi có thể thu thập những thông tin về số lần bạn viếng thăm, thời gian viếng thăm, sản phẩm bạn xeM, các liên kết bạn click vào, địa chỉ IP…</p>
                                                                    <ol start="2">
                                                                        <li><strong> CAM KẾT BẢO VỆ THÔNG TIN RIÊNG TƯ CỦA KHÁCH HÀNG</strong></li>
                                                                    </ol>
                                                                    <p>&#8211; Tân doanh cam kết sử dụng các biện pháp an ninh bảo mật để chống mất mát, sai sót hoặc thay đổi dữ liệu trong hệ thống.</p>
                                                                    <ol start="3">
                                                                        <li><strong> CAM KẾT CHỈ SỬ DỤNG THÔNG TIN ĐỂ PHỤC VỤ KHÁCH HÀNG</strong></li>
                                                                    </ol>
                                                                    <p>&#8211; Thông tin thu thập được thông qua tandoanh.vn sẽ được sử dụng nghiên cứu để nâng cao trải nghiệm mua sắm của Quý khách tại tandoanh.vn.</p>
                                                                    <p>&#8211; Thông tin này cũng được sử dụng để hỗ trợ khách hàng khi xảy ra sự cố hoặc tranh chấp trong quá trình mua bán, thanh toán, bảo hành và những vấn đề khác có liên quan tới việc sự dụng sản phẩm hoặc dịch vụ của Tân Doanh. Thông tin Quý khách cung cấp sẽ được sử dụng tốt nhất để đảm bảo tốt nhất cho sự an toàn của Quý khách khi mua hàng tại tandoanh.vn.</p>
                                                                    <ol start="4">
                                                                        <li><strong> CAM KẾT KHÔNG CHIA SẺ, BÁN HOẶC CHO THUÊ THÔNG TIN CÁ NHÂN CỦA KHÁCH HÀNG</strong></li>
                                                                    </ol>
                                                                    <p>&#8211; Chúng tôi không chia sẻ thông tin mà khách hàng cung cấp trên tandoanh.vn cho bên thứ ba vì mục đích thương mại. Thông tin mà Quý khách cung cấp, nhân viên của chúng tôi chỉ dùng để liên hệ với Quý khách nhằm hỗ trợ về việc bán hàng hoặc cung cấp thông tin cho Quý khách.</p>
                                                                    <p>&#8211; Chúng tôi sẽ gửi các thông tin cá nhân về quý khách cho các công ty hoặc các cá nhân khác trong trường hợp:</p>
                                                                    <ul>
                                                                        <li>Chúng tôi được quý khách đồng ý cho tiết lộ thông tin đó</li>
                                                                        <li>Chúng tôi cần tiết lộ thông tin của quý khách cho bên cung cấp dịch vụ khác theo yêu cầu của Quý khách.</li>
                                                                        <li>Chúng tôi tuân theo yêu cầu pháp lý cần thiết, nếu có.</li>
                                                                        <li>Chúng tôi thấy rằng các hành động của quý khách trên các trang web của chúng tôi là vi phạm các quy định hướng dẫn sử dụng của chúng tôi đối với các sản phẩm hoặc dịch vụ nhất định.</li>
                                                                    </ul>
                                                                    <ol start="5">
                                                                        <li><strong> THAY ĐỔI VỀ CHÍNH SÁCH</strong></li>
                                                                    </ol>
                                                                    <p>Nội dung của “Chính sách bảo mật” này có thể thay đổi để phù hợp với các nhu cầu của TÂN DOANH cũng như nhu cầu và sự phản hồi từ khách hàng nếu có. Khi cập nhật nội dung chính sách này, chúng tôi sẽ chỉnh sửa lại thời gian “Cập nhật lần cuối” bên trên. Nội dung “Chính sách bảo mật” này chỉ áp dụng tại tandoanh.vn, không bao gồm hoặc liên quan đến các bên thứ ba đặt quảng cáo hay có links tại tandoanh.vn. Do đó, chúng tôi đề nghị bạn đọc và tham khảo kỹ nội dung “Chính sách bảo mật” của từng website mà bạn đang truy cập.</p>
                                                                    <ol start="6">
                                                                        <li><strong> THÔNG TIN LIÊN HỆ</strong></li>
                                                                    </ol>
                                                                    <p>Chúng tôi luôn hoan nghênh các ý kiến đóng góp, liên hệ và phản hồi thông tin từ bạn về “Chính sách bảo mật” này. Nếu bạn có những thắc mắc liên quan xin vui lòng liên hệ theo địa chỉ Email: cskh@tandoanh.vn</p>
                                                                </div>
                                                            </div>
                                                            <div id="col-916987288" class="col hide-for-small medium-1 small-12 large-1"  >
                                                                <div class="col-inner"  >
                                                                </div>
                                                            </div>
                                                            <p>
                                                        </div>
                                                        <div class="terms-and-conditions-lightbox__buttons text-center"><button id="terms-and-conditions-accept" class="button primary is-underline" aria-label="I have read and agree" onClick="document.getElementById('terms').checked = true; jQuery.magnificPopup.close();">I have read and agree</button></div>
                                                    </div>

                                                </div>
                                                <button type="submit" class="button alt"value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
