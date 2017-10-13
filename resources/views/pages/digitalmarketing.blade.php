@extends('layout.layout')

@section('content')

<section id="page_banner">
      <div class="banner_overlay">
        <div class="container">
          <div class="row">
            <h2 class="banner_title">@lang('services.ციფრული მარკეტინგი')</h2>
            
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
                                <div class="slide-project"><img src="{{asset('public/images/services/service_digitalmarketing.jpg')}}" alt=""/></div>
                                
                            </div>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="service_details_left">
                                <div class="text-box">
                                    <h5 class="down_line_yellow">@lang('services.ციფრული მარკეტინგი')
</h5>
                                    <p>@lang('services.დღითიდღე სამყარო სულ უფრო ციფრული ხდება. სხვადასხვა ციფრული არხებით ტექნოლოგიების მეშვეობით მარტივად შეგიძლიათ დაუკავშირდეთ თქვენს აუდიტორიას. ციფრული მარკეტინგი ამ არხების ინტეგრირებას გთავაზობთ საუკეთესო შედეგის მისაღწევად. ციფრული არხების სხვა საკომუნიკაციო არხებთან უპირატესობა ის გახლავთ, რომ ონლაინ რეჟიმში შესაძლებელია შედეგების მონიტორინგი , მომხმარებლის ქცევაზე დაკვირვება და მომხმარებლის უკუკავშირის გაანალიზება.')
 </p>
<p><strong>@lang('services.რას გთავაზობთ :')</strong></p>
<ul>
<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.ციფრული მარკეტინგის სტრატეგიის შექმნას;')


								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.ციფრული მარკეტინგის სტრატეგიის განხორციელებას;')

								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.ვებ გვერდის შექნას;')

								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.ვებ გვერდის კონტენტ მენეჯმენტს;')

								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.Google Adwords რეკლამის მართვას (საძიებო სისტემა + Display Network);')

								</li>

								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.Google Analytics - რეპორტინგს;')


								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.Email მარკეტინგს;')


								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.SEO ოპტიმიზაციას;')


								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.პიარ ღონისძიებების განხორციელებას;')



								</li>
								
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.ქართულ ვებ-გვერდებზე სარეკლამო ბანერების განთავსებას;')


								</li>
								
								<p><strong>@lang('services.რას მიიღებთ :')</strong></p>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.ციფრულ სამყაროში დაიმკვიდრებთ სასურველ ადგილს, რაც ხელს შეგიწყობთ ქვეყნის გარეთ ცნობადობასა და ბიზნესის განვითარებაში.')



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
    
   
  
    
@include('includes.email_subscribe')

@stop