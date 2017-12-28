@extends('admin.master-admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('ad-guitardn/them-slide')}}"class="btn btn-info"><i class="fa fa-plus"></i> Thêm Slide</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Thứ tự</th>
                                    <th>Slide</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($slides as $index=>$slide)
                                <tr>
                                    <td>{{$index+1 }}</td>
                                    <td><img style="height: 50px; width: 100px;" src="{{asset('images/slider/'.$slide->name)}}" alt=""> </td>
                                    <td><a href="{{url('ad-guitardn/sua-slide/'.$slide->id)}}"><span class="glyphicon glyphicon-edit"></span></a> </td>
                                    <td><a href="{{url('ad-guitardn/delete-slide/'.$slide->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa ?');"><span class="glyphicon glyphicon-trash"></a> </td>
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
