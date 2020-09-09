@extends('admin.layouts.master')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Sửa thuộc tính</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design <small>different form elements</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="#">Settings 1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <br />
                            <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên thuộc tính <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="first-name" name="atb_name" value="{{$attribute->atb_name}}" class="form-control ">
                                        <span class="help-block text-danger"> <strong>{{ $errors->first('c_name') }}</strong> </span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Group <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select name="atb_type" class="select2_multiple form-control">
                                            <option value="">--Chọn nhóm thuộc tính--</option>
                                            <option value="1" {{($attribute->atb_type == 1) ? "selected = 'selected'" : ""}}>Kích thước màn hình</option>
                                            <option value="2" {{($attribute->atb_type == 2) ? "selected = 'selected'" : ""}}>Tình trạng</option>
                                        </select>
                                    </div>
                                </div><div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Danh mục <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select name="atb_category_id" class="select2_multiple form-control">
                                            <option value="">--Chọn nhóm thuộc tính--</option>
                                            @if(isset($cate))
                                                @foreach($cate as $data)
                                                    <option value="{{$data->id}}" {{($attribute->atb_category_id == $data->id) ? "selected = 'selected'" : ""}}  >{{$data->c_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>




                                <div class="ln_solid"></div>
                                <div class="item form-group text-center">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <a href="{{route('admin.attribute.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>

                                        <button type="submit" class="btn btn-success">Lưu</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /page content -->
@endsection()
