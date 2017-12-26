@extends('page.master')
@section('content')
    <div class="main">
        <div class="breadcrumbs">
            <div class="">
                <ul class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">@if(isset($category)){{$category->name}}@else Sản phẩm @endif</li>
                </ul>
            </div>
        </div>
        <div class="page-title">
            <h1>@if(isset($category)){{$category->name}}@else Sản phẩm @endif</h1>
        </div>
        <div class="toolbar">
            <div class="pager">
                <div class="sort-by hidden-xs">
                    <label>Sắp xếp theo:</label>
                    <select class="form-control input-sm">
                        <option selected="selected">Giá từ thấp đến cao</option>
                        <option selected="selected">Giá từ cao đến thấp</option>
                        <option>A-Z</option>
                    </select>
                    <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                </div>
            </div><!--- /.pager -->
        </div><!-- /.toolbar -->
        <div class="row products">
            @foreach($products as $product )
            <div class="col-md-3">
                <div class='productslider-item item'>
                    <div class="item-inner">
                        <div class="images-container">
                            <a href="{{url('san-pham/'.$product->alias)}}" title="{{$product->name}}" class="product-image">
                                <img src="{{asset('images/products/'.$product->image)}}" alt="" />
                            </a>
                            <div class="box-hover">
                                <ul class="add-to-links">
                                    <li><a href="#" class="link-quickview">Xem chi tiết</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="des-container">
                            <h2 style="min-height: 50px;" class="product-name"><a href="{{url('san-pham/'.$product->alias)}}">{{$product->name}}</a></h2>
                            <div class="price-box">
                                <p class="special-price">
                                    <span class="price-label">Special Price</span>
                                    <span class="price">{{number_format($product->sale)}} đ</span>
                                </p>
                                <p class="old-price">
                                    <span class="price-label">Regular Price: </span>
                                    <span class="price">{{number_format($product->price)}} đ</span>
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
            </div>
            @endforeach
        </div><!-- /.product -->
        <div class="toolbar">
            <div class="pager">
                <div class="sort-by hidden-xs">
                    <label>Sắp xếp theo:</label>
                    <select class="form-control input-sm">
                        <option selected="selected">Giá từ thấp đến cao</option>
                        <option selected="selected">Giá từ cao đến thấp</option>
                        <option>A-Z</option>
                    </select>
                    <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                </div>
            </div><!--- /.pager -->
        </div><!-- /.toolbar -->
    </div><!-- /.main -->
@stop
