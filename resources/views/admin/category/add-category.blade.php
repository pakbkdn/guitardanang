@extends('admin.master-admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm thể loại</h1>
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
                                <form action="{{url('ad-guitardn/them-the-loai')}}" method="post" role="form">
                                    {!!csrf_field()!!}
                                    <div class="form-group">
                                        <label>Tên thể loại</label>
                                        <input  class="form-control"  name="name" value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                              <span class="help-block" style="color:red;">
                                                  <strong>{{ $errors->first('name') }}</strong>
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
