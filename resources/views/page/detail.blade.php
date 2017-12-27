@extends('page.master')
@section('content')
<div class="main">
    <div class="breadcrumbs">
        <div class="">
            <ul class="breadcrumb">
                <li><a href="url('/')">Trang chủ</a></li>
                <li><a href="#">{{$detail->category->name}}</a></li>
                <li class="active">{{$detail->name}}</li>
            </ul>
        </div>
    </div><!-- /.breadcrumbs -->
    <div class="product-view">
        <div class="row">
            <div class="col-sm-5">
                <div class="product-img-box">
                    <p class="product-image">
                        <a href="#" class="cloud-zoom" id="ma-zoom1">
                            <img src="{{asset('images/products/'.$detail->image)}}" alt="Fusce aliquam" title="Fusce aliquam" />
                        </a>
                    </p>
                    <div class="more-views thumbnail-container">
                        <ul class="bxslider">
                            @foreach($thumbnails as $thumbnail)
                            <li class="thumbnail-item">
                                <a href="images/thumbnails/1.jpg" class="cloud-zoom-gallery" title="" name="images/products/1.jpg" rel="useZoom: 'ma-zoom1', smallImage: '{{asset('images/thumbnails/1.jpg')}}'">
                                    <img src="{{asset('images/thumbnails/'.$thumbnail->image)}}" alt="" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-shop col-sm-7">
                <div class="product-name">
                    <h1>{{$detail->name}}</h1>
                </div>
                <div class="ratings">
                    <div class="rating-box">
                        <div style="width:67%" class="rating"></div>
                    </div>
                </div>
                <div class="box-container2">
                    <div class="price-box">
                        <p class="special-price">
                            <span class="price-label">Special Price</span>
                        <span id="product-price-1" class="price">{{number_format($detail->sale)}} đ</span>
                        </p>
                        <p class="old-price">
                            <span class="price-label">Regular Price:</span>
                            <span id="old-price-1" class="price">{{number_format($detail->price)}} đ</span>
                        </p>
                    </div>
                </div>
                <div class="short-description">
                    <div class="std">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis.</div>
                </div>
                <p class="availability in-stock">Trạng thái: <span>Còn hàng</span></p>

            </div><!-- /.product-shop -->
        </div>
        <div class="product-tab tab-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#product-desc" data-toggle="tab">MÔ TẢ SẢN PHẨM</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="product-desc">
                    {{$detail->description}}
                </div>
            </div><!-- /.product-tab -->
        </div><!-- /.product-view -->
        <div class="featuredproductslider-container">
            @if(isset($relatives))
            <div class="title-group1"><h2>Sản phẩm liên quan</h2></div>
            <div id="featured-products" class="owl-container">
                        <div class="owl">
                            @foreach($relatives as $relative)
                            <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <a href="{{url('san-pham/'.$relative->alias)}}" title="{{$relative->name}}" class="product-image">
                                            <img src="{{asset('images/products/'.$relative->image)}}" alt="Nunc facilisis" />
                                        </a>
                                        <div class="box-hover">
                                            <ul class="add-to-links">
                                                <li><a href="#" class="link-quickview">Quick View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="des-container">
                                        <h2 style="height:40px;" class="product-name"><a href="{{url('san-pham/'.$relative->alias)}}">{{$relative->name}}</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">{{number_format($relative->sale)}}đ</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price-label">Regular Price: </span>
                                                <span class="price">{{number_format($relative->price)}}đ</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
            @endif        
        </div><!-- /.featuredproductslider-container -->
</div><!-- /.main -->
@stop
