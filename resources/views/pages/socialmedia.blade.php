@extends('layout.layout')

@section('content')

<section id="page_banner">
      <div class="banner_overlay">
        <div class="container">
          <div class="row">
            <h2 class="banner_title">@lang('services.სოციალური მედია მარკეტინგი')</h2>
            
          </div>
        </div>
      </div>
    </section>
    <!--Page Banner End--> 
    
    <!--All Service Detsils Section Start-->
    <section id="service_details">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                    	<div class="col-md-12">
                           <div class="project-images">
                                <div class="slide-project"><img src="{{asset('public/images/services/service_socialmedia.jpg')}}" alt=""/></div>
                                
                            </div>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="service_details_left">
                                <div class="text-box">
                                    <h5 class="down_line_yellow">@lang('services.სოციალური მარკეტინგი')</h5>
                                    <p>@lang('services.სოციალური მედია ჩვენი ყოველდღიურობის განუყოფელი ნაწილი გახდა. 2016 წელს 1 წუთში ფეისბუკში შედიოდა 701 000 -ზე მეტი მომხმარებელი, ლინკდინზე - 120 ახალი ადამიანი რეგისტრირდებოდა, ინსტაგრამზე 38 000 -ზე მეტი პოსტი ქვეყნდებოდა. თუ არ ხარ სოციალურ მედიაში , მაშინ სად ხარ 21-ე საუკუნეში?')
  </p>
  <p><strong>@lang('services.რას გთავაზობთ :')</strong></p>
<ul>
<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.სოციალური მედია მარკეტინგის სტრატეგიის შექმნას;')


								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.კონტენტის (ტექსტის და ვიაზუალის) შექმნასა და განთავსებას; (Facebook, Instagram, Twitter, Linkedin);')

								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.რეკლამას სოციალურ ქსელებში :  Facebook, Instagram, Linkedin;')

								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.რეპორტინგს')
								</li>
								<p><strong>@lang('services.რას მიიღებთ :')</strong></p>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.სწორად შერჩეულ აუდიტორიასთან ეფექტური კომუნიკაციის მეშვეობით გაზრდილ კომპანიის ცნობადობასა და მომგებიანობას.')

								</li>
								


</ul>
                                </div>
                                
                               
                               
                            </div>
                        </div>
                       
						
						
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_sidebar">
                        <div class="service_item_sidebar">
                        	
							@include('pages.services')
                        </div>
                       
                        <!-- <div class="side_testimonial">
                        	<h5 class="down_line_yellow">Testimonial</h5>
                            <div class="side_testimonial_part">
                            	<div class="feedback-sidebar">
                                	<div class="item">
                                        <div class="user">
                                            <img src="images/user_1.png" alt="" />
                                            <h6 class="user_name">Walter A. Mark</h6>
                                            <div class="user_title">Developer, UNICODER</div>
                                        </div>
                                		<p>“ Lectus semper eu hac in varius. Hymenaeos fusce. Praesent morbi cras venenatis. Auctor faucibus rhoncus at mollis quisque Gravida Proin diam mus lacus, sociosqu taciti nullam iaculis rhoncus euismod et ornare laoreet dictumst molestie, integer erat mus. Potenti, nascetur cubilia. ”</p>
                                    </div>
                                    <div class="item">
                                        <div class="user">
                                            <img src="images/user_1.png" alt="" />
                                            <h6 class="user_name">Walter A. Mark</h6>
                                            <div class="user_title">Developer, UNICODER</div>
                                        </div>
                                		<p>“ Lectus semper eu hac in varius. Hymenaeos fusce. Praesent morbi cras venenatis. Auctor faucibus rhoncus at mollis quisque Gravida Proin diam mus lacus, sociosqu taciti nullam iaculis rhoncus euismod et ornare laoreet dictumst molestie, integer erat mus. Potenti, nascetur cubilia. ”</p>
                                    </div>
                                    <div class="item">
                                        <div class="user">
                                            <img src="images/user_1.png" alt="" />
                                            <h6 class="user_name">Walter A. Mark</h6>
                                            <div class="user_title">Developer, UNICODER</div>
                                        </div>
                                		<p>“ Lectus semper eu hac in varius. Hymenaeos fusce. Praesent morbi cras venenatis. Auctor faucibus rhoncus at mollis quisque Gravida Proin diam mus lacus, sociosqu taciti nullam iaculis rhoncus euismod et ornare laoreet dictumst molestie, integer erat mus. Potenti, nascetur cubilia. ”</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--All Service Detsils Section Start-->
 
    <!--Our Team Section Start-->
   
    
	<!--Quotation Section Start-->
	@include('includes.email_subscribe')

@stop