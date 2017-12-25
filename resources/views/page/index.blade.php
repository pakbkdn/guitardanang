@extends('page.master')
@section('content')
    <div class="main">
        <div class="flexslider ma-nivoslider">
            <div class="ma-loading"></div>
            <div style="width: 100%; height: 400px" id="ma-inivoslider-banner7" class="slides">
                @foreach($slides as $slide)
                <img src="{{asset('images/slider/'.$slide->name)}}" class="dn" alt="" title="#banner7-caption1"  />
                @endforeach
            </div>
        </div><!-- /.flexslider -->
        <div class="featuredproductslider-container">
            <div class="title-group1"><h2>Sản phẩm mới</h2></div>
            <div id="featured-products" class="owl-container">
                <div class="owl">
                    @foreach($new_products as $new_product)
                    <div class='productslider-item item'>
                        <div class="item-inner">
                            <div class="images-container">
                                <div class="product_icon">
                                    <div class='new-icon'><span>new</span></div>
                                </div>
                                <a href="{{url('san-pham/'.$new_product->alias)}}" title="{{$new_product->name}}" class="product-image">
                                    <img src="{{asset('images/products/'.$new_product->image)}}" alt="">
                                </a>
                                <div class="box-hover">
                                    <ul class="add-to-links">
                                        <li><a href="#" class="link-quickview">Xem chi tiết</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="des-container">
                                <h2 style="height:40px;" class="product-name"><a href="{{url('san-pham/'.$new_product->alias)}}">{{$new_product->name}}</a></h2>
                                <div class="price-box">
                                    <p class="special-price">
                                        <span class="price-label">Price</span>
                                        <span class="price">{{number_format($new_product->price)}}đ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div><!-- /.featuredproductslider-container -->
        <div class="newproductslider-container">
            <div class="title-group1"><h2>Đang giảm giá</h2></div>
            <div id="new-products" class="owl-container">
                <div class="owl">
                    @foreach($sale_products as $sale_product)
                    <div class='productslider-item item'>
                        <div class="item-inner">
                            <div class="images-container">
                                <div class="product_icon">
                                    <div class="sale-icon"><span>sale</span></div>
                                </div>
                                <a href="{{url('san-pham/'.$sale_product->alias)}}" title="{{$sale_product->name}}" class="product-image">
                                    <img src="{{asset('images/products/'.$sale_product->image)}}" alt="" >
                                </a>
                                <div class="box-hover">
                                    <ul class="add-to-links">
                                        <li><a href="#" class="link-quickview">Xem chi tiết</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="des-container">
                                <h2 style="height:40px;" class="product-name"><a href="{{url('san-pham/'.$sale_product->alias)}}">{{$sale_product->name}}</a></h2>
                                <div class="price-box">
                                    <p class="special-price">
                                        <span class="price-label">Special Price</span>
                                        <span class="price">{{number_format($sale_product->sale)}}đ</span>
                                    </p>
                                    <p class="old-price">
                                        <span class="price-label">Regular Price: </span>
                                        <span class="price">{{number_format($sale_product->price)}}đ</span>
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
        </div><!-- /.newproductslider-container -->
    </div><!-- /.main -->
@stop
