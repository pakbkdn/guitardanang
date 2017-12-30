<div class="header">
    <div class="topbar">
        <div class="container">
            <marquee><p style="color: white; margin:15px;">Chào mừng quý khách hàng đến với Guitar Đà Nẵng ! Địa chỉ: 189 Thái Thị Bôi - Thanh Khê - Đà Nẵng.</p></marquee>
        </div><!-- /.container -->
    </div><!-- /.topbar -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo_header">
                    <a href="{{url('/')}}" class="logo"><img src="{{asset('images/logo.png')}}" alt=""></a>
                </div>
                <div class="col-md-9">
                    <form class="form-search" style="" method="GET" action="timkiem-sp">
                        <input type="text" class="input-text" name="key_search" id="search" value="{{ isset($_GET['key_search']) ? $_GET['key_search'] : ''}}" placeholder="Tìm kiếm sản phẩm..." >
                        <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                    </form>
                    <div id="phone-shop">
                        <i class="glyphicon glyphicon-phone-alt"></i>
                        <label style="margin-left:15px;" class="phone"> Hotline: 0905.930.937</label>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-9">
                    <ul class="menu clearfix visible-lg visible-md">
                        <li> <a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                        <li><a href="{{url('gioi-thieu')}}"><span class="glyphicon glyphicon-folder-open"></span> Giới thiệu</a></li>
                        <li><a href="{{url('san-pham')}}"><span class="glyphicon glyphicon-music"></span> Sản Phẩm</a></li>
                        <li><a href="{{url('lien-he')}}"><span class="glyphicon glyphicon-phone"></span> Liên hệ</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Cảm ơn !</a></li>
                    </ul>
                </div>
            </div>
        </div>

<!-- header show md -->
        <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2 class="navbar-brand visible-xs">Menu</h2>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Desktop PC</a></li>
                                <li><a href="#">Notebook</a></li>
                                <li><a href="#">Gaming</a></li>
                                <li><a href="#">Mouse &amp; Keyboard</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Walkera</a></li>
                                <li><a href="#">Fpv System &amp; Parts</a></li>
                                <li><a href="#">RC Cars &amp; Parts</a></li>
                                <li><a href="#">Helicopters &amp; Part</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>                                   <ul class="dropdown-menu">
                                <li><a href="#">Accessories for iPhone</a></li>
                                <li><a href="#">Accessories for iPad</a></li>
                                <li><a href="#">Accessories for Tablet PC</a></li>
                                <li><a href="#">Tablet PC</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Batteries &amp; Chargers</a></li>
                                <li><a href="#">Headphone, Headset</a></li>
                                <li><a href="#">Home Audio</a></li>
                                <li><a href="#">Mp3 Player Accessories</a></li>
                            </ul>
                        </li>
                        <li><a href="#">New Arrivals</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div><!-- /.header-bottom -->
</div><!-- /.header -->
