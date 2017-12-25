@extends('admin.master-admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách thể loại</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('ad-guitardn/them-the-loai')}}"class="btn btn-info"><i class="fa fa-plus"></i> Thêm thể loại</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Thứ tự</th>
                                    <th>Tên</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $index=>$category)
                                <tr>
                                    <td>{{$index+1 }}</td>
                                    <td>{{$category->name}} ({{$category->products->count()}} sản phẩm) </td>
                                    <td><a href="{{url('ad-guitardn/sua-the-loai/'.$category->id)}}"><span class="glyphicon glyphicon-edit"></span></a> </td>
                                    <td><a href="{{url('ad-guitardn/xoa-the-loai/'.$category->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa ?');"><span class="glyphicon glyphicon-trash"></a> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
@stop
