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
                                <a href="{{route('admin.attribute.create')}}" class="btn btn-success">
                                    <strong><i class="fa fa-upload">
                                        </i>Tạo thuộc tính</strong>
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
                                                <th>Group</th>
                                                <th>Danh mục</th>
                                                <th></th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @if(isset($attributes))
                                                @foreach($attributes as $data)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$data->atb_name}}</td>
                                                        <td>{{$data->getType($data->atb_type)}}</td>
                                                        <td>{{$data->category->c_name}}</td>

                                                        <td>
                                                            <a href="{{route('admin.attribute.edit',$data->id)}}"><i style="font-size: 25px; color: green" class="fa fa-search"></i></a>
                                                            <a href="{{route('admin.attribute.delete',$data->id)}}"><i style="font-size: 25px; color: red" class="fa fa-trash"></i></a>

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
