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
                                            <option value="">Chọn thể loại</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('category'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('category') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input class="form-control" name="name" value="{{old('name')}}">
                                    </div>
                                    @if ($errors->has('name'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Giá Gốc</label>
                                        <input type="number" min="0" class="form-control" name="price" value="{{old('price')}}">
                                    </div>
                                    @if ($errors->has('price'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('price') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Giá Sale</label>
                                        <input type="number" min="0"  class="form-control" name="sale" value="{{old('sale')}}">
                                    </div>
                                    @if ($errors->has('sale'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('sale') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input type="file" name="image">
                                    </div>
                                    @if ($errors->has('image'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('image') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea class="form-control" rows="3" name="description" >{{old('description')}}</textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('description') }}</strong>
                                          </span>
                                     @endif

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
