@extends('admin.layouts.master')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Default Example <small>Users</small></h2>
                        <div class="pull-right">
                            <a href="{{route('admin.product.create')}}" class="btn btn-success">
                                <strong><i class="fa fa-upload">
                                    </i>Tạo sản phẩm</strong>
                            </a>


                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Mô tả</th>
                                            <th>Hot</th>
                                            <th>Active</th>
                                            <th></th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @if(isset($products))
                                            @foreach($products as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td class="text-center">
                                                <img  style="width: 100px; height: 100px" src="{{asset('public/uploads/'.$data->pro_name.'/'.$data->pro_avatar)}}" alt="">
                                            </td>
                                            <td>{{$data->pro_name}}</td>
                                            <td>{{$data->pro_desc}}</td>

                                            <td>
                                                @if($data->pro_hot == 1)
                                                    <a href="{{route('admin.product.hot',$data->id)}}">   <span class="badge badge-danger">Hot</span></a>

                                                @else
                                                    <a href="{{route('admin.product.hot',$data->id)}}">   <span class="badge badge-success">Thường</span></a>

                                                @endif
                                            </td>
                                            <td>
                                                @if($data->pro_active == 1)
                                                    <a href="{{route('admin.product.active',$data->id)}}"><i style="font-size: 25px; color: green" class="fa fa-toggle-on"></i></a>

                                                @else
                                                    <a href="{{route('admin.product.active',$data->id)}}"><i style="font-size: 25px; color: red"  class="fa fa-toggle-off"></i></a>

                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{route('admin.product.edit',$data->id)}}"><i style="font-size: 25px; color: green" class="fa fa-search"></i></a>
                                                <a href="{{route('admin.product.delete',$data->id)}}"><i style="font-size: 25px; color: red" class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
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
</div>
<!-- /page content -->
@endsection()
