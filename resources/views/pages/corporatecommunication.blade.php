@extends('layout.layout')

@section('content')

<section id="page_banner">
      <div class="banner_overlay">
        <div class="container">
          <div class="row">
            <h2 class="banner_title">@lang('services.შიდა კორპორაციული კომუნიკაცია')</h2>
            
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
                                <div class="slide-project"><img src="{{asset('public/images/services/service_corpcom.jpg')}}" alt=""/></div>
                                
                            </div>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="service_details_left">
                                <div class="text-box">
                                    <h5 class="down_line_yellow">@lang('services.შიდა კორპორაციული კომუნიკაცია')
</h5>
                                    <p>@lang('services.წარმატებული შიდა კორპორაციული კომუნიკაცია ნებისმიერი ორგანიზაციისთვის წარმატების ქვაკუთხედია.')</p>

                                    <p><strong>@lang('services.რას გთავაზობთ :')</strong></p>


<ul>
<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.შიდა კორპორაციული კომუნიკაციის სტრატეგიის შემუშავებას;')


								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.შიდა ნიუსლეთთერის შექმნას;')

								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.დამსაქმებლის ბრენდინგს, რაც გულისხმობს კომპანიის პოზიტიური იმიჯის შექმნას როგორც არსებული თანამშრომლებისთვის , ასევე პოტენციური თანამშრომლებისთვის;')

								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.კორპორაციული ღონისძიებების კონცეპციის შედგენას და ორგანიზებას;')

								</li>
								<p><strong>@lang('services.რას მიიღებთ :')</strong></p>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.პოზიტიურ კორპორაციულ კულტურას და ლოიალურ პროფესიონალებს თქვენს გუნდში.')

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