@extends('admin.master-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thống kê</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$categories->count()}}</div>
                            <div>Thể Loại</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <a href="{{url('ad-guitardn/danh-sach-the-loai')}}">
                            <span class="pull-left">Chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-music fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$products->count()}}</div>
                            <div>Sản phẩm</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <a href="{{url('ad-guitardn/danh-sach-san-pham')}}">
                            <span class="pull-left">Chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        
    </div>
    <!-- /.row -->
@stop
