@extends('admin.layouts.master')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Sửa sản phẩm</h3>
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

            <form method="POST" class="form-label-left input_mask"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Thông tin cơ bản</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />






                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Tên sản phẩm</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input name="pro_name" type="text" value="{{$product->pro_name}}" class="form-control" placeholder="Tên sản phẩm">
                                        <span class="help-block text-danger"> <strong>{{ $errors->first('pro_name') }}</strong> </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Giá sản phẩm </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="number" name="pro_price" value="{{$product->pro_price}}" class="form-control" placeholder="Giá sản phẩm">
                                        <span class="help-block text-danger"> <strong>{{ $errors->first('pro_price') }}</strong> </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Giá khuyến mãi (%)</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="number" name="pro_sale" value="{{$product->pro_sale}}" class="form-control" placeholder="Giá khuyến mãi">
                                    </div>
                                </div>
                                {{--                                <div class="form-group row">--}}
                                {{--                                    <label class="col-form-label col-md-3 col-sm-3 ">Tags</label>--}}
                                {{--                                    <div class="col-md-9 col-sm-9 ">--}}
                                {{--                                        <input type="text" name="" class="form-control" readonly="readonly" placeholder="Tags">--}}
                                {{--                                        <span class="help-block text-danger"> <strong>{{ $errors->first('ro_desc') }}</strong> </span>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Mô tả sản phẩm <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <textarea class="form-control" name="pro_desc" rows="3" placeholder="Description">{{$product->pro_desc}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Danh mục <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <select name="pro_category_id" class="select2_multiple form-control">
                                            <option  value="">--Chọn danh mục--</option>
                                            @foreach($cate as $data)
                                                <option  value="{{$data->id}}" {{($product->pro_category_id == $data->id) ? "selected = 'selected'" : ""}}  >{{$data->c_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Thông số <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        @if(isset($attributes))
                                            @foreach($attributes as $attribute)
                                                <div class="radio">
                                                    <label>
                                                        <input type="checkbox" value="{{$attribute->id}}" class="flat" name="attribute[]" {{in_array($attribute->id, $product->get_attributes->pluck('pa_attribute_id')->toArray())?"checked":''}}
                                                        > {{$attribute->atb_name}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3 col-sm-3">
                                        <label for="">CPU</label>
                                        <input type="text" class="form-control" value="{{$product->pro_cpu  }}" name="pro_cpu" placeholder="CPU">
                                    </div><div class="col-md-3 col-sm-3">
                                        <label for="">Màn hình</label>
                                        <input type="text" class="form-control" value="{{$product->pro_display  }}" name="pro_display" placeholder="Màn hình">
                                    </div><div class="col-md-3 col-sm-3">
                                        <label for="">RAM</label>
                                        <input type="text" class="form-control" value="{{$product->pro_memory  }}" name="pro_memory" placeholder="RAM">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3 col-sm-3">
                                        <label for="">Đồ họa</label>
                                        <input type="text" class="form-control" value="{{$product->pro_graphic  }}" name="pro_graphic" placeholder="Đồ họa">
                                    </div><div class="col-md-3 col-sm-3">
                                        <label for="">Lưu trữ</label>
                                        <input type="text" class="form-control" value="{{$product->pro_storage  }}" name="pro_storage" placeholder="Lưu trữ">
                                    </div><div class="col-md-3 col-sm-3">
                                        <label for="">Hệ điều hành</label>
                                        <input type="text" class="form-control" value="{{$product->pro_os  }}" name="pro_os" placeholder="Hệ điều hành">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3 col-sm-3">
                                        <label for="">Pin</label>
                                        <input type="text" class="form-control" value="{{$product->pro_battery  }}" name="pro_battery" placeholder="Pin">
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <label for="">Khối lượng</label>
                                        <input type="text" class="form-control" value="{{$product->pro_weight  }}" name="pro_weight" placeholder="Khối lượng">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                            </div>
                        </div>

                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Nội dung</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Description <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <textarea class="form-control" name="pro_content" rows="3" placeholder="Date Of Birth">{{$product->pro_content}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                    <div class="col-md-6 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Thông tin cơ bản</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />

                                <div class="control-group row">
                                    <label class="control-label col-md-3 col-sm-3 ">Ảnh đại diện</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" id="filetag" name="pro_avatar" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                        <img src="{{asset('public/uploads/'.$product->pro_name.'/'.$product->pro_avatar)}}" style="width:30%;" id="preview">
                                    </div>
                                </div>





                                <div class="ln_solid"></div>



                            </div>
                        </div>
                    </div>



                </div>
                <div class="item form-group text-center">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <a href="{{route('admin.product.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>
                        <button type="submit" class="btn btn-success">Lưu</button>

                        <button class="btn btn-primary" type="reset">Reset</button>
                    </div>
                </div>
            </form>







        </div>
    </div>
    <!-- /page content -->
@endsection()
@section('javascript')
    <script>
        var fileTag = document.getElementById("filetag"),
            preview = document.getElementById("preview");

        fileTag.addEventListener("change", function() {
            changeImage(this);
        });

        function changeImage(input) {
            var reader;

            if (input.files && input.files[0]) {
                reader = new FileReader();

                reader.onload = function(e) {
                    preview.setAttribute('src', e.target.result);
                }


                reader.readAsDataURL(input.files[0]);
            }
        }</script>
@endsection
