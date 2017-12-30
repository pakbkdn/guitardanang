@extends('page.master')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Trang chủ</a></li>
            <li class="active">Giới thiệu</li>
        </ul>
    </div>
</div>
<div class="main">
  <div class="container">
      <div class="row">
          <div class="col-sm-9 col-right">
             <h2><strong>Giới thiệu</strong></h2>
             <hr>
             <br>
             <h4 style="color: Green;">Guitar Đà Nẵng chuyên sưu tầm mua bán trao đổi nhạc cụ nói chung, guitar nói riêng ( guitar, bass,  acoustic, Electric, Amp.... )</h4>
             <br>
             <h4 style="color: red;">– Acoustic, Classic, Electric, Bass, Âm li, Effect Pedals, Phụ Kiện</h4>
             <h4 style="color: red;">– Chế độ bảo hành miễn phí</h4>
             <h4 style="color: red;">– Giao hàng toàn quốc</h4>
             <!-- <h4 style="color: red;">– Địa chỉ:  189 Thái Thị Bôi - Thanh Khê - Tp Đà Nẵng</h4>
             <h4 style="color: red;">– Hotline: 0905.930.937 (Mr. Huy)</h4> -->
             <br>
             <h4 style="color: green;">Thương hiệu: </h4>
             <h4 style="color: blue;">Fender, Ibanez, LTD, Marshall, Cort, Vox, Line 6, Peavey, Zoom,
                 Takamine, D’Addario, ErnieBall, Elixir, Dunlop… </h4>
            <br>
            <h4 style="color: grey;">Hân hạnh được phục vụ Quý Khách Hàng!</h4>

          </div><!-- /.col-right -->
      </div>
  </div>
</div><!-- /.main -->

@stop
