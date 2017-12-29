@extends('admin.master-admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách sản phẩm</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('ad-guitardn/them-san-pham')}}"class="btn btn-info"><i class="fa fa-plus"></i> Thêm sản phẩm</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Thứ tự</th>
                                    <th>Tên</th>
                                    <th>Thể loại</th>
                                    <th>Giá gốc</th>
                                    <th>Giá sale</th>
                                    <th>Ảnh</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $index=>$product)
                                <tr class="odd gradeX">
                                    <td>{{$index+1}}</td>
                                    <td><a href="{{url('san-pham/'.$product->alias)}}" target="_blank">{{$product->name}}</a></td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{number_format($product->price)}} đ</td>
                                    <td>{{number_format($product->sale)}} đ</td>
                                    <td  class="center"><img style="height: 50px; width: 50px; " src="{{asset('images/products/'.$product->image)}}" alt="{{$product->image}}">
                                    </td>
                                    <td class="center"><a href="{{url('ad-guitardn/sua-san-pham/'.$product->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                    <td class="center"><a href="{{url('ad-guitardn/xoa-san-pham/'.$product->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa ?');"><span class="glyphicon glyphicon-trash"></a></td>
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
