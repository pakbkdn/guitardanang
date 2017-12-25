@extends('admin.master-admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm Sản phẩm</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="{{url('ad-guitardn/them-san-pham')}}" method="post" role="form" enctype="multipart/form-data">
                                    {!!csrf_field()!!}
                                    <div class="form-group">
                                        <label>Thể loại</label>
                                        <select class="form-control" name="category">
                                            <option>Chọn thể loại</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá Gốc</label>
                                        <input class="form-control" placeholder="Enter text" name="price">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá Sale</label>
                                        <input class="form-control" placeholder="Enter text" name="sale">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea class="form-control" rows="3" name="description"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-default">Lưu</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </form>
                            </div>

                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
@stop
