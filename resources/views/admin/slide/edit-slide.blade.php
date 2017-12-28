@extends('admin.master-admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm slide</h1>
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
                                <form role="form" action="{{url('ad-guitardn/sua-slide')}}/{{$slide->id}}" method="post" enctype="multipart/form-data">
                                    {!!csrf_field()!!}
                                    <div class="form-group">
                                        <label>Thêm Slide</label>
                                        <input type="file" id="file-input" name="slide"><br>
                                        <div id="preview"></div>
                                        @if ($errors->has('slide'))
                                              <span class="help-block" style="color:red;">
                                                  <strong>{{ $errors->first('slide') }}</strong>
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
        <script type="text/javascript">
            function previewImages() {

            var preview = document.querySelector('#preview');

            if (this.files) {
            [].forEach.call(this.files, readAndPreview);
            }

            function readAndPreview(file) {

            // Make sure `file.name` matches our extensions criteria
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
              return alert(file.name + " is not an image");
            } // else...

            var reader = new FileReader();

            reader.addEventListener("load", function() {
              var image = new Image();
              image.height = 50;
              image.width = 100;
              image.title  = file.name;
              image.src    = this.result;
              preview.appendChild(image);
            }, false);

            reader.readAsDataURL(file);

            }

            }

            document.querySelector('#file-input').addEventListener("change", previewImages, false);
        </script>
@stop
