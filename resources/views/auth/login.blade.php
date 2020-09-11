@extends('frontend.layouts.master')
@section('content')
    <main id="main" class="">
        <div class="my-account-header page-title normal-title
      ">
            <div class="page-title-inner flex-row container
         text-left">
                <div class="flex-col flex-grow medium-text-center">
                    <div class="text-center social-login">
                        <h1 class="uppercase mb-0">Đăng nhập</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrapper my-account mb">
            <div class="container" role="main">
                <div class="woocommerce">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="account-container lightbox-inner">
                        <div class="account-login-inner">
                            <h3 class="uppercase">Đăng nhập</h3>
                            <form class="woocommerce-form woocommerce-form-login login" method="post">
                                @csrf
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" value="" />
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
                                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" />
                                </p>
                                <p class="form-row">
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
                                    </label>
                                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="445a2b1343" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />						<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
                                </p>
                                <p class="woocommerce-LostPassword lost_password">
                                    <a href="lost-password/index.html">Quên mật khẩu?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
