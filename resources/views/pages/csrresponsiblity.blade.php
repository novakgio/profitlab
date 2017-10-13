@extends('layout.layout')

@section('content')

<section id="page_banner">
      <div class="banner_overlay">
        <div class="container">
          <div class="row">
            <h2 class="banner_title">@lang('services.სოციალური პასუხისმგებლობა')</h2>
            
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
                                <div class="slide-project"><img src="{{asset('public/images/services/service_csr.jpg')}}" alt=""/></div>
                                
                            </div>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="service_details_left">
                                <div class="text-box">
                                    <h5 class="down_line_yellow">@lang('services.სოციალური პასუხისმგებლობა')</h5>
                                    <p>@lang('services.კორპორაციული სოციალური პასუხისმგებლობის პრინციპების დაცვა სულ უფრო მნიშვნელოვანი ხდება თანამედროვე სამყაროში. CSR - არის კომპანიის ნებაყოფლობითი არჩევანი კანონმდებლობის მოთხოვნებზე მეტად დადებითი გავლენა მოახდინოს სოციალურ და გარემოსდაცვით საკითხებზე და ამ გზით მიაღწიოს მომგებიანობას და მდგრად განვითარებას.')</p>
                                    <p><strong>@lang('services.რას გთავაზობთ :')</strong></p>

  </p>
<ul>
<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.CSR სტრატეგიის შედგენას;')


								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.ტაქტიკური გეგმის შემუშავებას;')

								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.დასახული ამოცანების მონიტორინგისა და შედეგების შეფასების გეგმას.')

								</li>
								<p><strong>@lang('services.რას მიიღებთ :')</strong></p>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>@lang('services.თანამედროვე სტანდარტებით შექმნილ CSR მოდელს , რომელიც ადაპტირებული იქნება ლოკალური სიტუაციის შესაბამისად და მორგებული იქნება თქვენი კომპანიის ინტერესებზე.')

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