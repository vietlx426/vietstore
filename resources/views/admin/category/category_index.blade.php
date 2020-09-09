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
                            <a href="{{route('admin.category.create')}}" class="btn btn-success">
                                <strong><i class="fa fa-upload">
                                    </i>Tạo danh mục</strong>
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
                                            <th>Tên danh mục</th>
                                            <th>Hot</th>
                                            <th>Hiển thị</th>
                                            <th></th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @if(isset($cate))
                                            @foreach($cate as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->c_name}}</td>

                                            <td>
                                                @if($data->c_hot == 1)
                                                    <a href="{{route('admin.category.hot',$data->id)}}">   <span class="badge badge-danger">Hot</span></a>

                                                @else
                                                    <a href="{{route('admin.category.hot',$data->id)}}">   <span class="badge badge-success">Thường</span></a>

                                                @endif
                                            </td>
                                            <td>
                                                @if($data->c_status == 1)
                                                    <a href="{{route('admin.category.status',$data->id)}}"><i style="font-size: 25px; color: green" class="fa fa-toggle-on"></i></a>

                                                @else
                                                    <a href="{{route('admin.category.status',$data->id)}}"><i style="font-size: 25px; color: red"  class="fa fa-toggle-off"></i></a>

                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{route('admin.category.edit',$data->id)}}"><i style="font-size: 25px; color: green" class="fa fa-search"></i></a>
                                                <a href=""><i style="font-size: 25px; color: orange" class="fa fa-pencil-square-o"></i></a>
                                                <a href=""><i style="font-size: 25px; color: red" class="fa fa-trash"></i></a>

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
