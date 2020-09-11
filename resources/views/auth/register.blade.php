@extends('frontend.layouts.master')
@section('content')
    <div class="noindex">
        <div id="layout-page-register" class="container">
      <span class="header-contact header-page clearfix">
         <h1 class="title-register">Tạo tài khoản</h1>
      </span>
            <div class="userbox">
                <form accept-charset='UTF-8' method='post'>
                    @csrf
                    <div id="first_name" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input  type="text" value="{{old('name')}}" name="name" placeholder="Họ và tên" class="text form-control" size="30" />
                        @if($errors->first('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div id="email" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input  type="email" value="{{old('email')}}" name="email" placeholder="email" class="text form-control" size="30" />
                        @if($errors->first('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div id="email" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input  type="text" value="{{old('phone')}}" name="phone" placeholder="phone" id="phone" class="text form-control" size="30" />
                        @if($errors->first('phone'))
                            <span class="text-danger">{{$errors->first('phone')}}</span>
                        @endif
                    </div>
                    <div id="password" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" value="{{old('password')}}" name="password" placeholder="Mật khẩu" id="password" class="text form-control" size="30" />
                        @if($errors->first('password'))
                            <span class="text-danger">{{$errors->first('password')}}</span>
                        @endif
                    </div>
                    <div class="action_bottom">
                        <input class="btn" type="submit" value="Đăng ký" />
                    </div>
                    <div class="req_pass">
                        <a class="come-back" href="">Quay về</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
