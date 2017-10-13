<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PRofit Lab Marketing Service">
    <!-- <meta name="keywords" content="business, car wash, cleaners, cleaning, cleaning company, construction, contractor, house cleaning, maintenance, renovation, service, washing"> -->
    
	<meta name="author" content="Unicoder">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PRofit Lab</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
     
 

    <!-- Links of css files -->
    <link href="{{asset('/public/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/yellow.css')}}" rel="stylesheet">
	<link href="{{asset('/public/css/loader.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/sweetalert.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<div id="fb-root"></div>
<script>

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=288531181627854";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105340839-1', 'auto');
  ga('send', 'pageview');






</script>



<body class="page-wrapper  home-page">
	<!-- Preloader start -->
    
	<!-- Preloader End -->
    
	<!--Header Section Start-->
    <header id="header">
      <div id="header_top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
            	<ul>

                    <li><a href="mailto:info@profitlab.ge"><i class="fa fa-envelope" aria-hidden="true"></i> info@profitlab.ge</a></li>
                    <li><a href="callto:+(241)1234567"><i class="fa fa-phone" aria-hidden="true"></i> +(995) 599 977 231</a></li>
                    
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="social_media">
              @if(App::getLocale()=="ga")
                   <a href="{{url('changeLanguage','en')}}">English</a>
              @else
                  <a href="{{url('changeLanguage','ga')}}">ქართული</a>
              @endif


              <a href="{{url('/contact')}}">@lang('all.კონტაქტი')</a>
				<a href="https://www.facebook.com/PRofit-lab-252169761919416/?ref=aymt_homepage_panel" target="new"><i class="fa fa-facebook"></i></a>
				<a href="https://www.linkedin.com/company-beta/18163309/" target="new"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.instagram.com/profit_lab/" target="new"><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/watch?v=wbmg30Q3cYo" target="new"><i class="fa fa-youtube"></i></a>
				
			  </div>
            </div>
          </div>
        </div>
      </div>
      <div id="main_header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="navigation">
                <nav class="navbar navbar-default"> 
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button>
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/images/logo.png')}}" alt=""/></a> </div>
                  
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="row">
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                          <li class="active"><a href="{{url('/')}}">@lang('all.მთავარი') <span class="sr-only">(current)</span></a></li>
                          <li><a href="{{url('/about')}}">@lang('all.ჩვენს შესახებ')</a></li>
                          <li class="dropdown"> 
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('all.სერვისები') <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{url('/services/marketing')}}">@lang('services.მარკეტინგი')</a></li>
                              <li><a href="{{url('/services/branding')}}">@lang('services.ბრენდინგი')</a></li>
                              <li><a href="{{url('/services/peoplerelation')}}">@lang('services.საზოგადოებასთან ურთიერთობა')</a></li>
                              <li><a href="{{url('/services/socialresponsibility')}}">@lang('services.სოციალური პასუხისმგებლობა') </a></li>
                              <li><a href="{{url('/services/corporatecommunication')}}">@lang('services.შიდა კორპორაციული კომუნიკაცია')</a></li>
                              <li><a href="{{url('/services/socialmarketing')}}">@lang('services.სოციალური მედია მარკეტინგი')</a></li>
                              <li><a href="{{url('/services/digitalmarketing')}}">@lang('services.ციფრული მარკეტინგი')</a></li>
                              <li><a href="{{url('/services/design')}}">@lang('services.დიზაინი')</a>
                            </ul>
                          </li>
                          <li class="dropdown"> 
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('all.პორტფოლიო')<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                             <li><a href="{{url('/allprojects')}}">@lang('all.პროექტები')</a></li>
                             
                            </ul>
                          </li>
                          <li class="dropdown"> 
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('all.პარტნიორები') <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="our_team.html">Our Team</a></li>
                              <li><a href="404.html">404</a></li>
                            </ul>
                          </li>
                          <li><a href="{{url('/carrier')}}">@lang('all.კარიერა')</a></li>
                          <li><a href="{{url('/allnews')}}">@lang('all.სიახლეები')</a></li>
                          
                          
                          
                          <li><a href="{{url('/blogs')}}">@lang('all.ბლოგი')</a></li>
                          
                          
                        </ul>
                      </div>
                  </div>
                  <!-- /.navbar-collapse --> 
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--Header Section End-->
    
    <!--Slider Section Start-->
    @yield('content')
    <!--Process Section End-->
    
    <!--Footer Section Start-->
    <footer id="footer">
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="quick_link"> 
				      <h4 class="down_line_yellow">@lang('all.ჩვენს შესახებ')</h4>
                <ul>

               





                  <li><a href="{{url('/about')}}">@lang('all.ჩვენს შესახებ')</a></li>
                   <li><a href="{{url('/allprojects')}}">@lang('all.პორტფოლიო')</a></li>
                  <li><a href="{{url('/carrier')}}">@lang('all.კარიერა')</a></li>
                  <li><a href="{{url('/allnews')}}">@lang('all.სიახლეები')</a></li>
                  <li><a href="{{url('/blogs')}}">@lang('all.ბლოგი')</a></li>
                  <li><a href="{{url('/contact')}}">@lang('all.კონტაქტი')</a></li>
                 
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="quick_link">
                <h4 class="down_line_yellow">@lang('services.რას გთავაზობთთ')</h4>
                <ul>

               





                  <li><a href="{{url('/services/marketing')}}">@lang('services.მარკეტინგი')</a></li>
                   <li><a href="{{url('/services/branding')}}">@lang('services.ბრენდინგი')</a></li>
                  <li><a href="{{url('/services/peoplerelation')}}">@lang('services.საზოგადოებასთან ურთიერთობა')</a></li>
                  <li><a href="{{url('/services/socialresponsibility')}}">@lang('services.სოციალური პასუხისმგებლობა')</a></li>
                  <li><a href="{{url('/services/corporatecommunication')}}">@lang('services.შიდა კორპორაციული კომუნიკაცია')</a></li>
                  <li><a href="{{url('/services/socialmarketing')}}">@lang('services.სოციალური მედია მარკეტინგი')</a></li>
                  <li><a href="{{url('/services/digitalmarketing')}}">@lang('services.ციფრული მარკეტინგი')</a></li>
                  <li><a href="{{url('/services/design')}}">@lang('services.დიზაინი')</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="touch">
                <h4 class="down_line_yellow">@lang('all.კონტაქტი')</h4>
                <ul>
                  <li>
                    <h6><i class="fa fa-map-marker" aria-hidden="true"></i>@lang('all.მისამართი:')</h6>
                    <p>@lang('all.ეგნატე ნინოშვილის #8 , საქართველო - თბილისი 0102')</p>
                  </li>
                  <li>
                    <h6><i class="fa fa-phone" aria-hidden="true"></i>@lang('all.დაგვირეკეთ 24/7')</h6>
                    <p><a href="callto:+(995)599977231">+(995) 599 977 231</a><br>
                    	
                    </p>
                  </li>
                  <li>
                    <h6><i class="fa fa-envelope" aria-hidden="true"></i>@lang('all.ელ.ფოსტა')</h6>
                    <p><a href="mailto:info@profitlab.ge">info@profitlab.ge</a></p>
                  </li>
                  <li>
                    <h6><i class="fa fa-map-marker" aria-hidden="true"></i>@lang('all.სამუშაო საათები')</h6>
                    <p><a>@lang('all.ორშაბათი-პარასკევი: 10am-19pm')</a></p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="business_hour">
                <h4 class="down_line_yellow">@lang('all.დაგვიკავშირდით')</h4>
                <p>@lang('all.ჩვენ მზად ვართ განვიხილოთ თქვენი ნებისმიერი წინადადება ან შეკითხვა')</p>
              
                     
                       
                        <a href="{{url('contact')}}" id="subscribe_button" class="btn btn-secondary">@lang('all.კონტაქტი')</a>
                    
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5">
              <div class="footer_bottom_left">
                <div class="follow">@lang('all.მოგვნახეთ')</div>
                <div class="social_media footer_social_media"> 
                
				<a href="https://www.facebook.com/PRofit-lab-252169761919416/?ref=aymt_homepage_panel" target="new"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/company-beta/18163309/" target="new"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.instagram.com/profit_lab/" target="new"><i class="fa fa-instagram"></i></a>
				<a href="https://www.youtube.com/watch?v=wbmg30Q3cYo" target="new"><i class="fa fa-youtube"></i></a>
				</div>
              </div>
            </div>
            <div class="col-md-7 col-sm-7">
              <div class="footer_bottom_right">
                <div class="newsletter"> @lang('all.არხის გამოწერა :') </div>
                <div class="newsletter_form">
                      <input type="text" id="subscribe_email_layout" class="form-control" placeholder="@lang('all.ელ.ფოსტა')">
                        <input type="hidden" id="email_url" value="{{url('/getsubscriber')}}">
                        

                        <input type="hidden" id="compulsory" value="@lang('all.სავალდებულოა')">
                        <input type="hidden" id="allfields" value="@lang('all.აუცილებელია ყველა ველის შევსება')">

                        <input type="hidden" id="congratulation" value="@lang('all.გილოცავთ')">
                        <input type="hidden" id="unfortunatelly" value="@lang('all.სამწუხაროდ')">
                        <input type="hidden" id="emailformat" value="@lang('all.იმეილის ფორმატი არასწორია')">


                        <a id="subscribe_button_layout" class="btn btn-secondary">@lang('all.გამოწერა')</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright"> Copyright 2017 © Profit Lab all rights Reserved</div>
    </footer>
    <!--Footer Section End-->


    <!-- All Javascript Plugin File here -->
    <script src="{{asset('public/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
	   <script src="{{asset('public/js/YouTubePopUp.jquery.js')}}"></script>
    <script src="{{asset('public/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('public/js/jquery.fancybox-media.js')}}"></script>
    <script src="{{asset('public/js/owl.js')}}"></script>
    <script src="{{asset('public/js/mixitup.js')}}"></script>
    <script src="{{asset('public/js/wow.js')}}"></script>
    <script src="{{asset('public/js/custom.js')}}"></script>
     

</body>
</html>