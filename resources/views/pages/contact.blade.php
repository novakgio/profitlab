@extends('layout.layout')

@section('content')


 <section id="page_banner">
        <div class="banner_overlay">
            <div class="container">
            	<div class="row">
                    <h2 class="banner_title">@lang('all.კონტაქტი')</h2>
                    <ul class="page_banner_link">
                        <li><a href="{{url('/')}}">@lang('all.მთავარი')</a>/</li>
                        <li><span>@lang('all.კონტაქტი')</span></li>
                    </ul>
            	</div>
            </div>
        </div>
    </section>
    <!--Page Banner End-->
    
    <!--Get In Touch Section Start-->
    <section id="get_in_touch">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section_title_1">@lang('all.დაგვიკავშირდით')</h2>
                    <div class="section_sub_title"><p>@lang('all.ჩვენ მზად ვართ მოგისმინოთ და დავგეგმოთ შეხვედრა')</p></div>
                </div>
            </div>
            <div class="row">
				<div class="content">
					<div class="col-md-3 col-sm-6">
                    <style>

                        .contact_info p{
                            text-align: center;
                        }

                    </style>
						<div class="contact_info">
							<div class="contact_icon"> <img src="public/images/icon/contact1.png" alt="" /> </div>
							<h6>@lang('all.მისამართი:')</h6>
							<p>@lang('all.ეგნატე ნინოშვილის #8 , საქართველო - თბილისი 0102')</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="contact_info">
							<div class="contact_icon"> <img src="public/images/icon/contact2.png" alt="" /> </div>
							<h6>@lang('all.ტელეფონი')</h6>
							<p>+(995) 599 977 231</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="contact_info">
							<div class="contact_icon"> <img src="public/images/icon/contact3.png" alt="" /> </div>
							<h6>@lang('all.ელ.ფოსტა')</h6>
							<p>info@profitlab.ge</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="contact_info">
							<div class="contact_icon"> <img src="public/images/icon/contact4.png" alt="" /> </div>
							<h6>@lang('all.სამუშაო საათები')</h6>
							<p>@lang('all.ორშაბათი-პარასკევი: 10am-19pm')</p>
						</div>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!--Get In Touch Section End-->
    
    <!--Message Location Section Start-->
    <section id="message_location">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="message">
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
                                    <input type="hidden" id="contact_email" value="{{url('contact_email')}}">
                                    <input type="hidden" id="compulsory" value="@lang('all.სავალდებულოა')">
                                    <input type="hidden" id="allfields" value="@lang('all.აუცილებელია ყველა ველის შევსება')">

                                    <input type="hidden" id="congratulation" value="@lang('all.გილოცავთ')">
                                    <input type="hidden" id="unfortunatelly" value="@lang('all.სამწუხაროდ')">
                                    <input type="hidden" id="sentmail" value="@lang('all.მეილი წარმატებით გაიგზავნა')">
                                    <input type="hidden" id="notsentmail" value="@lang('all.მეილის გაგზავნა ვერ მოხერხდა')">
                                    <input type="hidden" id="emailformat" value="@lang('all.იმეილის ფორმატი არასწორია')">
                                    
                            <div class="form-group col-md-12">
                                <input class="btn btn-secondary" id="submit_contact" type="submit" value="@lang('all.გაგზავნა')" />
                            </div>
                        </div>
                                
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div id="map" class="map-canvas"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9elt0rwxavbdmLzvKE8nbHtrfxpshzmo&callback=initMap"></script>
    <script src="{{asset('public/js/map.scripts.js')}}"></script>

    @stop