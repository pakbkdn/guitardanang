<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Guitar Đà Nẵng-Chuyên nhạc cụ Âm Thanh : Đàn guitar , đàn điện , loa , piano , phụ kiện vv....</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/logo.ico')}}" type="image/x-icon">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/cloud-zoom.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/common.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    @include('page.partials.header')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('page.partials.sidebar')
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>


    @include('page.partials.footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/cloud-zoom.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function(){
        /* special-offer slider */
        $("#special-offer .owl").owlCarousel({
            autoPlay : false,
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [991,1],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 3000,
            paginationSpeed : 3000,
            rewindSpeed : 3000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
        /* featured-products slider */
        $("#featured-products .owl").owlCarousel({
            autoPlay : false,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [991,2],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 3000,
            paginationSpeed : 3000,
            rewindSpeed : 3000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
        /* .thumbnail-container product image slider */
        $('.thumbnail-container .bxslider').bxSlider({
            slideWidth: 94,
            slideMargin: 5,
            minSlides: 4,
            maxSlides: 4,
            pager: false,
            speed: 500,
            pause: 3000
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        /* special-offer slider */
        $("#special-offer .owl").owlCarousel({
            autoPlay : false,
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [991,1],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 3000,
            paginationSpeed : 3000,
            rewindSpeed : 3000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });

        /* slider price */
        var currencies = "$";
        var toolbar_status = "1";
        var rate = "1";
        var min = "99"
            min = Number(min);
        var max = "999"
            max = Number(max);
        var currentMinPrice = "99"
            currentMinPrice = Number(currentMinPrice);
        var currentMaxPrice = "999"
        //alert('min: '+min+'--max: '+ max+ 'currentMin: '+currentMinPrice);
        currentMaxPrice = Number(currentMaxPrice);
        var params = "";
        params = $.trim(params);
        //slider
        $( "#slider-range" ).slider({
            range: true,
            min: min,
            max: max,
            values: [ currentMinPrice, currentMaxPrice ],
            slide: function( event, ui ) {
                $( "#amount" ).val( currencies + ui.values[ 0 ] + " - "+ currencies + ui.values[ 1 ] );
                $('input[name="first_price"]').val(ui.values[0]);
                $('input[name="last_price"]').val(ui.values[1]);
            },
            stop: function( event, ui ) {
            }
        });

        $( "#amount" ).val( currencies + $( "#slider-range" ).slider( "values", 0 ) +
            " - "+currencies + $( "#slider-range" ).slider( "values", 1 ) );
        $('input[name="first_price"]').val($( "#slider-range" ).slider( "values", 0 ));
        $('input[name="last_price"]').val($( "#slider-range" ).slider( "values", 1 ));

        //search price from input box
        $('#search_price').each(function(){
            $(this).live('click',function(){
                return false;
            })
        });
        $('#slider-range a:first').addClass('first_item');
        $('#slider-range a:last').addClass('last_item');

    });
</script>

<script type="text/javascript">
    /* Main Slideshow */
    $(window).load(function() {
        $(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
            $('.ma-banner7-container .timethai').addClass('pos_hover');
        });
        $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
            $('.ma-banner7-container .timethai').removeClass('pos_hover');
        });
    });
    $(window).load(function() {
        $('#ma-inivoslider-banner7').nivoSlider({
            effect: 'random',
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: 1000,
            pauseTime: 6000,
            startSlide: 0,
            controlNav: false,
            controlNavThumbs: false,
            pauseOnHover: true,
            manualAdvance: false,
            prevText: 'Prev',
            nextText: 'Next',
            afterLoad: function(){
                },
            beforeChange: function(){
            },
            afterChange: function(){
            }
        });
    });
    $(document).ready(function(){
        /* timely-owl */
        $("#timely-owl .owl").owlCarousel({
            autoPlay : false,
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [991,1],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 1000,
            paginationSpeed : 1000,
            rewindSpeed : 1000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
        /* special-offer slider */
        $("#special-offer .owl").owlCarousel({
            autoPlay : false,
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [991,1],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 3000,
            paginationSpeed : 3000,
            rewindSpeed : 3000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
        /* latest-news slider */
        $("#latest-news .owl").owlCarousel({
            autoPlay : false,
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [991,1],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 1000,
            paginationSpeed : 1000,
            rewindSpeed : 1000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
        /* clients-say slider */
        $("#clients-say .owl").owlCarousel({
            autoPlay : false,
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [991,1],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 3000,
            paginationSpeed : 3000,
            rewindSpeed : 3000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
        /* featured-products slider */
        $("#featured-products .owl").owlCarousel({
            autoPlay : false,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [991,2],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 3000,
            paginationSpeed : 3000,
            rewindSpeed : 3000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
        /* new-products slider */
        $("#new-products .owl").owlCarousel({
            autoPlay : false,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [991,2],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 3000,
            paginationSpeed : 3000,
            rewindSpeed : 3000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
    });
</script>

<!-- Hot Deals Timer 1-->
<script type="text/javascript">
    var dthen1 = new Date("12/25/33 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if(CountStepper>0)
        ddiff= new Date((dnow1)-(dthen1));
    else
        ddiff = new Date((dthen1)-(dnow1));
    gsecs1 = Math.floor(ddiff.valueOf()/1000);

    var iid1 = "countbox_1";
    CountBack_slider(gsecs1,"countbox_1", 1);
</script>
<!-- Hot Deals Timer 2-->
<script type="text/javascript">
    var dthen2 = new Date("05/21/26 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow2 = new Date(start_date);
    if(CountStepper>0)
        ddiff= new Date((dnow2)-(dthen2));
    else
        ddiff = new Date((dthen2)-(dnow2));
    gsecs2 = Math.floor(ddiff.valueOf()/1000);

    var iid2 = "countbox_2";
    CountBack_slider(gsecs2,"countbox_2", 2);
</script>
<!-- Hot Deals Timer 3-->
<script type="text/javascript">
    var dthen3 = new Date("05/21/33 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow3 = new Date(start_date);
    if(CountStepper>0)
        ddiff= new Date((dnow3)-(dthen3));
    else
        ddiff = new Date((dthen3)-(dnow3));
    gsecs3 = Math.floor(ddiff.valueOf()/1000);

    var iid3 = "countbox_3";
    CountBack_slider(gsecs3,"countbox_3", 3);
</script>


</body>
</html>
