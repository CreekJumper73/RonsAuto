<!DOCTYPE html>
<html lang="en">
<title> Rons Automotive Repair </title>
<head>
    <title>Home</title>
    <meta charset="utf-8">

 <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('/css/grid.css') }}" rel="stylesheet">
<script src="{{ asset('/js/jquery-1.7.1.min.js') }}"></script>  
<script src="{{ asset('/js/cufon-yui.js') }}"></script>   
<script src="{{ asset('/js/cufon-replace.js') }}"></script>   
<script src="{{ asset('/js/Vegur_500.font.js') }}"></script>   
<script src="{{ asset('/js/FF-cash.js') }}"></script>   
<script src="{{ asset('/js/tms-0.3.js') }}"></script>    
<script src="{{ asset('/js/tms_presets.js') }}"></script>    
<script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>    
<script src="{{ asset('/js/jquery.equalheights.js') }}"></script>    

</head>
<body id="page1">
	<div class="main-bg">
        <div class="bg">
            <!--==============================header=================================-->
            <header>
                <div class="main">
                    <div class="wrapper">
                        <h1><a href="/">logo</a></h1>
                        <div class="fright">
                            <div class="indent">
                                <span class="address">50 Niagara St ,St Catharines, ON L2R 4K9.</span>
                                <span class="phone">Tel: 905-984-5445</span>
                                <div name="divHrefB" style="height: 40px;width: 90px;" onclick="location.href='/login';">
                            
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="#">Home</a></li>
                            <li><a href="/Coupons">Weekly Coupon</a></li>
                            
                        </ul>
                    </nav>
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <li><img src="{{ asset('/images/slider-img1.jpg') }}" /></li>
                                <li><img src="{{ asset('/images/slider-img2.jpg') }}" /></li>
                                <li><img src="{{ asset('/images/slider-img3.jpg') }}" /></li>
                            </ul>
                        </div>
                        <a class="prev" href="#">prev</a>
                        <a class="next" href="#">next</a>
                    </div>
                </div>
            </header>
            
            <!--==============================content================================-->
            @yield('content')
     
          
            
            <!--==============================footer=================================-->
            <footer>
                <div class="main">
                    <span>&copy; Ron's Automotive</span>
                    <span>Web Site by <a href="http://www.vision360enterprises.com/" target="_blank">Vision 360 Web</a></span>
                    Website Template by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a>
                </div>
            </footer>
        </div>
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'simpleFade',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:false,
				pagNums:false,
				nextBu:'.next',
				prevBu:'.prev'
			});
		});
    </script>
</body>
</html>
