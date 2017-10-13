@extends('layout.layout')

@section('content')
<section id="slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active"> <img src="public/images/slider/1.jpg" alt="">
				<div class="carousel-caption">
					
				</div>
			  </div>
			  <div class="item"> <img src="public/images/slider/2.jpg" alt="">
				<div class="carousel-caption">
					
				</div>
			  </div>
			  <div class="item"> <img src="public/images/slider/3.jpg" alt="">
				<div class="carousel-caption">
					
				</div>
			  </div>
			</div>
        
        <!-- Controls --> 
        <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <img class="glyphicon-chevron-left" aria-hidden="true" src="public/images/icon/left_arrow.png" alt="" /> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <img class="glyphicon-chevron-right" aria-hidden="true" src="public/images/icon/right_arrow.png" alt="" /> <span class="sr-only">Next</span> </a>  -->
		</div>
    </section>
    <!--Slider Section End-->
    
    <!--About Us Section Start-->
    <section id="about_us">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="section_title_1">@lang('all.ჩვენს შესახებ')</h2>
            <div class="section_sub_title"><p>@lang('all.PRoFit Lab - არის მარკეტინგისა და საზოგადოებასთან ურთიერთობის საკონსულტაციო კომპანია, რომელიც მცირე და საშუალო კომპანიებს სთავაზობს მომგებიან თანამშრომლობას და ზრუნავს მათი ბიზნესის განვითარებაზე.')</p></div>
          </div>
        </div>
        <div class="row">
          <div class="content">
            <div class="col-md-5">
              <div class="about_us_left">
                <div class="big_img"> <img class="round" src="public/images/aboutus.png" alt=" /"> </div>
                
              </div>
            </div>
            <div class="col-md-7">
              <div class="we_are wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                <h5 class="down_line_yellow">@lang('about.ვინ ვართ ჩვენ?')</h5>
                <p>@lang('all.PRoFit Lab -ის გუნდი დაკომპლექტებულია პროფესიონალებისგან, რომლებიც გამოცდილებისა და ინოვაციების მომგებიანი შესახებრწყმით აღწევენ სასურველ მიზნებს')</p>
              <p>@lang('all.PRoFit Lab - მიისწრაფვის გახდეს სანდო რეპუტაციის მქონე საკონსულტაციო კომპანია კლიენტის ბიზნეს საჭიროებებზე მორგებული სერვისების, დაგროვილი გამოცდილებისა და თანამშრომლების პროფესიონალიზმის დახმარებით.') </p>
                <div class="btn-group"><a class="btn btn-primary" href="{{url('/about')}}">@lang('all.გაიგე უფრო მეტი')</a></div>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--About Us Section End-->
    
    <!--Our Service Section Start-->
    




    <section id="our_srvice">
   
      <div class="container">
      	<div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="section_title_1">@lang('all.ჩვენ გთავაზობთ :')</h2>
            <div class="section_sub_title"><p>@lang('all.PRoFit Lab - ის მისიაა დაეხმაროს მცირე და საშუალო კომპანიებს გახდნენ მომგებიანი , მოკლე დროში მოიპოვონ ბაზარზე ლიდერის პოზიცია და მიაღწიონ მდგრად განვითარებას.')</p></div>
          </div>
        </div>
        <div class="row">
            <div class="content service_content">
              <div class="service_left">
                <div class="apartment">
                	<a href="{{url('/services/marketing')}}">
						<div class="service_icon round"></div>
						<h5 class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">@lang('services.მარკეტინგი')</h5>
					</a>
                </div>
                <div class="office">
                	<a href="{{url('/services/branding')}}">
						<div class="service_icon round"></div>
                        <h5 class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">@lang('services.ბრენდინგი')</h5>
					</a>
                </div>
                <div class="move_in_out">
                	<a href="{{url('/services/peoplerelation')}}">
						<div class="service_icon round"></div>
                        <h5 class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        @lang('services.საზოგადოებასთან ურთიერთობა')</h5>
					</a>
                </div>
              </div>
              <div class="service_middle round"> 
				<img class="round" src="public/images/services.png" alt="" />
			  </div>
              <div class="service_right">
                <div class="car_washing">
                	<a href="{{url('/services/socialresponsibility')}}">
                      <div class="service_icon round"></div>
                      <h5 class="wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">@lang('services.სოციალური პასუხისმგებლობა')</h5></a>
                </div>
                <div class="renovation">
                	<a href="{{url('/services/corporatecommunication')}}">
                      <div class="service_icon round"></div>
                      <h5 class="wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                      @lang('services.კორპორაციული კომუნიკაცია')</h5></a>
                </div>
                <div class="green_cleaning">
                	<a href="{{url('/services/socialmarketing')}}">
                      <div class="service_icon round"></div>
                      <h5 class="wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">@lang('services.სოციალური მედია მარკეტინგი')</h5></a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!--Our Service Section End-->
    
    <!--Why Choose Us Section Start-->
    <!-- <section id="why_choose_us">
      <div class="container">
      	<div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="section_title_1">Why Choose Us</h2>
            <div class="section_sub_title"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p></div>
          </div>
        </div>
        <div class="row">
          <div class="choose_us">
            <div class="col-md-7">
              <div class="choose_us_left">
                <div class="choose_resons">
                  <div class="choose_reason_icon round"> <img src="public/images/icon/experience.png" alt="" /> </div>
                  <h6>30+ Years Experience We Have</h6>
                  <p>Mus parturient erat mi fringilla montes commodo aliquam donec. Adipiscing pharetra Aliquet nascetur justo magna aliquet libero.</p>
                </div>
                <div class="choose_resons">
                  <div class="choose_reason_icon round"> <img src="public/images/icon/man.png" alt="" /> </div>
                  <h6>We Provide Qualified and Expert</h6>
                  <p>Mus parturient erat mi fringilla montes commodo aliquam donec. Adipiscing pharetra Aliquet nascetur justo magna aliquet libero.</p>
                </div>
                <div class="choose_resons">
                  <div class="choose_reason_icon round"> <img src="public/images/icon/tools.png" alt="" /> </div>
                  <h6>Mordant Technology and Tools We Use</h6>
                  <p>Mus parturient erat mi fringilla montes commodo aliquam donec. Adipiscing pharetra Aliquet nascetur justo magna aliquet libero.</p>
                </div>
                <div class="choose_resons">
                  <div class="choose_reason_icon round"> <img src="public/images/icon/rocket.png" alt="" /> </div>
                  <h6>Quick Response and 24/7 Support</h6>
                  <p>Mus parturient erat mi fringilla montes commodo aliquam donec. Adipiscing pharetra Aliquet nascetur justo magna aliquet libero.</p>
                </div>
              </div>
            </div>
            <div class="row">
            	<div class="choose_us_right">
                	<img src="public/images/cleaning-lady.png" alt="" />
                </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--Why Choose Us Section End-->
    

    <!--Achivment Section End-->
    
    <!--Our Project Section Start-->
   <section id="our_projects">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section_title_1">@lang('all.საუკეთესო ნამუშევრები')</h2>
                </div>
            </div>
            <style>
            

            </style>
            <div class="page-wrapper">
                <!-- Preloader -->
                <div class="preloader"></div>
                <!--Gallery Section-->
                <div class="gallery-section">
                    <div class="auto-container">
                        <!--Filter-->
                        <div class="filters text-center">
                            <ul class="filter-tabs filter-btns clearfix anim-3-all">
                               
                                <li class="active filter" data-role="button" data-filter="all">@lang('all.ყველა პროექტი')</li>
                                 @foreach($portfolioCategories as $portfolioCategory)
                                <li class="filter" data-role="button" data-filter=".{{$portfolioCategory->id}}">{{$portfolioCategory->name}}</li>
                              
                                @endforeach
                            </ul>
                        </div>
                        <!--Filter List-->
                        <div class="row filter-list clearfix">
                        @foreach($portfolios as $portfolio)
                            <div class="column mix mix_all green_cleaning_pot office_pot {{$portfolio->getCategory[0]->id}} plants col-md-4 col-sm-6 col-xs-12">
                                <!--Default Portfolio Item-->
                                <div class="default-portfolio-item">
                                    <div class="inner-box text-center">
                                        <!--Image Box-->
                                        
                                        <figure class="image-box"><img  src="{{asset('public/images/portfolio/'.$portfolio->picture)}}" class="portfolio-image" alt=""></figure>
                                        <div class="overlay-box">
                                            <div class="inner-content">
                                                <div class="content">
                                                    <a class="arrow lightbox-image" href="{{url('project_details',2)}}"><img src="{{asset('public/images/icon/black_right_arrow.png')}}" alt="" class="icon  flaticon-cross-4" />
                                                    </a>
                                                    <div class="content_bottom">
                                                        <h6>{{$portfolio->name}}</h6>
                                                        <a href="{{url('project_details',$portfolio->id)}}"><h5>@lang('all.სრულად ნახვა')</h5></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
         <!--  <div class="col-md-12">
            <div class="team_pagination">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li><a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#" aria-label="Next"> <span aria-hidden="true">Next</span></a></li>
                </ul>
              </nav>
            </div>
          </div> -->
        </div>
        </div>
    </section>
    
    <!--Quote & Testmonial Section Start-->
    <section id="quote_testmonial">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="row">
              <div class="quote" style="width:100%;">
				<div class="row">
					<div class="col-md-12 col-sm-12">
					  <h3 class="down_line_black">@lang('all.დაგვიკავშირდით')</h3>
					  <p>@lang('all.ჩვენ მზად ვართ განვიხილოთ თქვენი ნებისმიერი წინადადება ან შეკითხვა')</p>
					  <div class="get_quote">
						<div class="row">
							  <div class="form-group col-md-6 col-sm-6">
                                        <input class="form-control" id="name" type="text" name="name" placeholder="@lang('all.სახელი')" />
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <input class="form-control" id="email" type="email" name="email" placeholder="@lang('all.ელ.ფოსტა')" />
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <input class="form-control" id="mobile" type="text" name="mobile" placeholder="@lang('all.ტელეფონი')" />
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <textarea class="form-control" id="message" name="message" placeholder="@lang('all.ტექსტი')"></textarea>
                                    </div>
                                    <input type="hidden" id="emailformat" value="@lang('all.იმეილის ფორმატი არასწორია')">
                                    <input type="hidden" id="contact_email" value="{{url('contact_email')}}">
							<div class="form-group col-md-12">
								<input class="btn btn-secondary" id="submit_contact" type="submit" value="@lang('all.გაგზავნა')" />
							</div>
						</div>
					  </div>
					</div>
				</div>
          <!-- for future implementation -->
        <input type="hidden" id="congratulation" value="@lang('all.გილოცავთ')">
        <input type="hidden" id="unfortunatelly" value="@lang('all.სამწუხაროდ')">
        <input type="hidden" id="sentmail" value="@lang('all.მეილი წარმატებით გაიგზავნა')">
        <input type="hidden" id="notsentmail" value="@lang('all.მეილის გაგზავნა ვერ მოხერხდა')">
        <input type="hidden" id="enteremail" value="@lang('all.შეიყვანე იმეილი')">
        <input type="hidden" id="emailcompulsory" value="@lang('all.აუცილებელია იმეილის მითითება!')">
        <input type="hidden" id="compulsory" value="@lang('all.სავალდებულოა')">
        <input type="hidden" id="allfields" value="@lang('all.აუცილებელია ყველა ველის შევსება')">
			
              </div>
            </div>
          </div>
      
        </div>
      </div>
    </section>
    <!--Quote & Testmonial Section End-->
    
    <!--Recent News Section Start-->
    <section id="recent_news">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section_title_1">@lang('all.ბოლოს დამატებული ბლოგები')</h2>
            <!-- <div class="section_sub_title"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p></div> -->
          </div>
        </div>
        <div class="row">
          <div class="news-thumb">
            @foreach($blogs as $blog)
            <div class="col-md-4 col-sm-6">
              <div class="blog_post">
                <div class="blog_img"><span> <img src="{{asset('public/images/blog/'.$blog->picture)}}" alt="" /></span>
                  <div class="blog_date">{{$blog->created_at}}</div>
                </div>
                <div class="blog_info"><h6 class="blog_title"><a href="{{url('blog_details',$blog->oid)}}">{{$blog->title}}</a></h6>
                
                  
                  <a class="read_more_btn" href="{{url('blog_details',$blog->id)}}">@lang('all.სრულად ნახვა')</a></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!--Recent News Section End-->
    
    <!--Process Section Start-->
    <!-- <section id="process" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="offer">
                <h4 class="down_line_black">Get An Offer</h4>
                <p>Neque potenti. Habitant parturient. Ipsum. Nec per lorem in pretium vulputate vel. Dictum fames Inceptos. Hac accumsan. Gravida ut cursus.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="objection">
                <h4 class="down_line_black">Give your objaction</h4>
                <p>Vitae libero leo sociis cras tellus libero dis gravida primis potenti duis curae; dignissim taciti, quis pellentesque venenatis. Primis rutrum.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="save_money">
                <h4 class="down_line_black">Save your money</h4>
                <p>Etiam nisl condimentum iaculis taciti morbi lacinia. Proin sapien turpis euismod. Nisi. Magna nisl sem euismod sem, cubilia pede duis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


@stop