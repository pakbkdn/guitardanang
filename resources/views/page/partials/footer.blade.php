
<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 hidden-sm hidden-xs">

                </div>
                <div class="col-md-4 col-sm-8">
                    <!-- <ul class="social">
                        <li><a href="#" class="face">face</a></li>
                        <li><a href="#" class="google">google</a></li>
                        <li><a href="#" class="youtube">youtube</a></li>
                    </ul> -->
                </div>
                <div class="col-md-4 col-sm-4">

                </div>
            </div>
        </div>
    </div><!-- /.footer-top -->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-title">
                        <h2>liên hệ</h2>
                    </div>
                    <div class="footer-content">
                        <div class="email add">
                            <p>Email: sun86nguyen@gmail.com</p>
                        </div>
                        <div class="phone add">
                            <p>Số điện thoại : 0905.930.937</p>
                        </div>
                        <div class="address add">Địa chỉ:
                            <p>189 Thái Thị Bôi - Tp Đà Nẵng</p>
                        </div>
                        <div class="contact-link"><a href="https://www.google.com/maps/place/189+Th%C3%A1i+Th%E1%BB%8B+B%C3%B4i,+Thanh+Kh%C3%AA,+%C4%90%C3%A0+N%E1%BA%B5ng,+Vi%E1%BB%87t+Nam/@16.0684581,108.1936293,17z/data=!3m1!4b1!4m5!3m4!1s0x3142185484c7c637:0xdfcaff155e497d8a!8m2!3d16.068476!4d108.195818" class="btn btn-default" target="_blank">Google Maps</a></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-title">
                        <h2>Danh mục sản phẩm</h2>
                    </div>
                    <div class="footer-content">
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="#">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="fb-page" data-href="https://www.facebook.com/GuitarDanang189ThaiThiBoi/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/GuitarDanang189ThaiThiBoi/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/GuitarDanang189ThaiThiBoi/">Guitar Đà Nẵng</a>
                        </blockquote>
                    </div>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=222636254944151';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copy">Copyright &copy; 2017 guitardanang.net. All Rights Reserved</div>
                </div>
                <div class="col-sm-6">
                    <div class="payment"><img src="images/payment.png" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.footer -->
