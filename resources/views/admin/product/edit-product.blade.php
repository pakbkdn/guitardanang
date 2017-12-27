@extends('admin.master-admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chỉnh sửa Sản phẩm</h1>
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
                                <form role="form" method="post" action="{{url('ad-guitardn/sua-san-pham/'.$editProduct->id)}}" enctype="multipart/form-data">
                                    {!!csrf_field()!!}
                                    <div class="form-group">
                                        <label>Chọn Thể loại</label>
                                        <select class="form-control" name="category">
                                            <option value="">Chọn thể loại</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input class="form-control" name="name" value="{{$editProduct->name}}">
                                        @if ($errors->has('name'))
                                              <span class="help-block" style="color:red;">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                              </span>
                                         @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Giá Gốc</label>
                                        <input class="form-control" placeholder="Enter text" name="price" value="{{$editProduct->price}}">
                                        @if ($errors->has('price'))
                                              <span class="help-block" style="color:red;">
                                                  <strong>{{ $errors->first('price') }}</strong>
                                              </span>
                                         @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Giá Sale</label>
                                        <input class="form-control" placeholder="Enter text" name="sale" value="{{$editProduct->sale}}">
                                        @if ($errors->has('sale'))
                                              <span class="help-block" style="color:red;">
                                                  <strong>{{ $errors->first('sale') }}</strong>
                                              </span>
                                         @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea class="form-control" rows="3" name="description" id="description">{{$editProduct->description}}</textarea>
                                        <script>CKEDITOR.replace('description');</script>
                                        @if ($errors->has('description'))
                                              <span class="help-block" style="color:red;">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                              </span>
                                         @endif
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
