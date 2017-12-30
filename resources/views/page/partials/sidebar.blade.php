<div class="mega-container visible-lg visible-md">
    <div class="navleft-container">
        <div class="mega-menu-title"><h3>DANH MỤC SẢN PHẨM <span class="glyphicon glyphicon-list"></span> </h3></div>
        <div class="mega-menu-category">
            <ul class="nav">
                @foreach($categories as $category)
                <li>
                    <a href="{{url('/danh-muc/'.$category->alias)}}">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<br><br>
<div class="fb-page nxpface" data-href="https://www.facebook.com/GuitarDanang189ThaiThiBoi/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
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
