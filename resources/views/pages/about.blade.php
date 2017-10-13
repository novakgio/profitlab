@extends('layout.layout')

@section('content')
<section id="page_banner">
        <div class="banner_overlay">
            <div class="container">
            	<div class="row">
                    <h2 class="banner_title">@lang('all.ჩვენს შესახებ')</h2>
                    <ul class="page_banner_link">
                        <li><a href="{{url('/')}}">@lang('all.მთავარი')</a>/</li>
                        <li><span>@lang('all.ჩვენს შესახებ')</span></li>
                    </ul>
            	</div>
            </div>
        </div>
    </section>
    <!--Page Banner End-->

	<!--Who We are Section Start-->
	<section id="who_we-are">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-4">
                    <img class="round" style="height:300px;" src="public/images/aboutus.png" alt="" />	
                </div>
                <div class="col-md-7 col-sm-8">
                    <div class="company_details">

                        <h5 class="down_line_yellow">@lang('about.ვინ ვართ ჩვენ?')</h5>
						<div class="text-area">
							<p>@lang('about.PRoFit Lab - არის მარკეტინგისა და საზოგადოებასთან ურთიერთობის საკონსულტაციო კომპანია, რომელიც მცირე და საშუალო კომპანიებს სთავაზობს მომგებიან თანამშრომლობას და ზრუნავს მათი ბიზნესის განვითარებაზე')</p>
							<p>@lang('about.PRoFit Lab -ის გუნდი დაკომპლექტებულია პროფესიონალებისგან, რომლებიც გამოცდილებისა და ინოვაციების მომგებიანი შერწყმით აღწევენ სასურველ მიზნებს.')</p>
							<p>@lang('about.PRoFit Lab - მიისწრაფვის გახდეს სანდო რეპუტაციის მქონე საკონსულტაციო კომპანია კლიენტის ბიზნეს საჭიროებებზე მორგებული სერვისების, დაგროვილი გამოცდილებისა და თანამშრომლების პროფესიონალიზმის დახმარებით.') 
</p>
							<!-- <ul>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>We are very responsive for our client.
								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>Provide expert for renovation support.
								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>100% Client satisfaction.
								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>Professional and Qualified worker.
								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>More than 20 years of experience.
								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>We are award wining company.
								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>24/7 Hours customer support.
								</li>
								<li>
									<i class="fa fa-check" aria-hidden="true"></i>Uwash use mordant technology for work.
								</li>       
							</ul> -->
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--Who We are Section End-->
	
    <!--Company Video Section Start-->
	<section id="company_video">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="according">
                        <div class="according_area">

                            <div class="according_title active">@lang('about.მისია')</div>
                            <div class="according_details"><p>@lang('about.PRoFit Lab - ის მისიაა დაეხმაროს მცირე და საშუალო კომპანიებს გახდნენ მომგებიანი , მოკლე დროში მოიპოვონ ბაზარზე ლიდერის პოზიცია და მიაღწიონ მდგრად განვითარებას.')</a></p></div>
                        </div>
                        <div class="according_area">
                            <div class="according_title">@lang('about.სტრატეგიული მიზნები')</div>
                            <div class="according_details"><p>
                            <ul>
	                            <li><i class="fa fa-check" aria-hidden="true"></i>@lang('about.ცნობადობის მოპოვება')</li><br>
								<li><i class="fa fa-check" aria-hidden="true"></i>@lang('about.კლიენტების მოზიდვა და მათი ლოიალობის მოპოვება')</li><br>
								<li>
									<div style="display: block;">
										<div style="width: 2.4%; display: inline-block;vertical-align: super;">
											<i class="fa fa-check" aria-hidden="true"></i>
										</div>
										<div style="width: 80%; display: inline-block;">
										@lang('about.დაინტერესებულ პირთა ჯგუფებთან პარტნიორული ურთიერთობის ჩამოყალიბება')
										</div>
									</div>
								</li>
							</ul></a></p></div>
                        </div>

                        
                        <div class="according_area">
	                        <div class="according_title">@lang('about.ჩვენი კორპორაციული ღირებულებებია') </div>
	                        <div class="according_details"><p><strong>@lang('about.ინოვაცია:')</strong>
									@lang('about.PRoFit Lab მიისწარფვის ინოვაციური იდეების მოზიდვისაკენ, ღიაა ახალი გამოწვევებისათვის და უზრუნველყოფს ტექნოლოგიური პროგრესის პრაქტიკაში დანერგვას.')<br></br>

									<strong>@lang('about.პარტნიორობა:')</strong>
									@lang('about.PRoFit Lab ზრუნავს კომპანიის მიმართ დაინტერესებულ პირთა ჯგუფებთან სამართლიანი, გამჭვირვალე და გრძელვადიანი პარტნიორული ურთიერთობის ჩამოყალიბებაზე.')</br><br>
									<strong>@lang('about.მდგრადი განვითარება:')</strong>
									PRoFit Lab @lang('about.ცდილობს უზრუნველყოს როგორც კლიენტებისა და სხვადასხვა პარტნიორების,ასევე საკუთარი მდგრადი განვითარება.')
									</p></div>
	                        </div>
	                        <div class="according_area">
	                            <div class="according_title">@lang('about.შეხედულებები')</div>
	                            <div class="according_details"><p>PRoFit Lab @lang('about.როგორც კორპორაციული სოციალური პასუხისმგებობის მქონე ორგანიზაცია, ცდილობს დააბალანსოს კომპანიის მიმართ ყველა დაინტერესებული მხარის : თანამშრომლების, კლიენტების,პარტნიორების და მთელი საზოგადოების ინტერესები. ასევე ცდილობს შეამციროს გარემოზე მავნე ზემოქმედება და ჩაერთოს გარემოსდაცვის პროექტებში.')
	</a></p></div>
	                        </div>
                        <div class="according_area">
                            <div class="according_title">@lang('about.სტანდარტები')</div>
                            <div class="according_details"><p>@lang('about.საუკეთესო საერთაშორისო გამოცდილების გათვალისიწნებით PRoFit Lab-ში შექმნილია ეთიკის კოდექსი და შინაგანაწესი.')</p></div>
                        </div>
                        <div class="according_area">
                            <div class="according_title">@lang('about.CSR - კორპორაციული სოციალური პასუხისმგებლობა')</div>
                            <div class="according_details"><p>PRoFit Lab @lang('about.ცდილობს დააბალანსოს ეკონომიკური, სოციალური და გარემოსდაცვითი მიზნები . ამის მისაღწევად კომპანიაში დანერგილია კორპორაციული სოციალური პასუხისმგებლობის პოლიტიკა, რომლის ფარგლებში ვახორციელებთ სხვადასხვა სახის პროექტებს და აქტივობებს.')</p><p>
PRoFit Lab - @lang('about.ის მიმართ დაინტერესებული პირების ყველა ჯგუფის მიმართ კომპანიას გააჩნია სამართლიანი თანამშრომლობის პასუხისმგებლობა, რაც ზოგ შემთხვევაში გამოიხატება ვოლუნტარისტული სამუშაოების შეთავაზებით მოწყვლადი ჯგუფებისათვის და გარემოზე მავნე ზემოქმედების შემცირებაზე ზრუნვით, ასევე - სხვა აქტივობებით.')
</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video_area">
                        <h5 class="video_title down_line_yellow">@lang('about.ვიდეო ჩვენი კომპანიის შესახებ')</h5>
                        
                        <div class="video_right">
                            <div class="video_overlay">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=wbmg30Q3cYo" title="video popup"><span>Play Icon</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--Company Video Section End-->

	<!--Our History Section Start-->
	<!-- <section id="our_history">
        <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="section_title_1">Our History</h2>
                <div class="section_sub_title"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p></div>
              </div>
            </div>
            <div class="row">
                <div class="content choose_us">    
                    <div class="col-md-8">
                      <div class="our_history_left">
                            <div class="yearly_history">
                                <div class="year round"><span>1997</span></div>
                                <h5 class="history_title">The company was founded.</h5>
                                <p>Penatibus ridiculus metus iaculis fermentum odio suspendisse. In auctor eros magnis non. Aliquet imperdiet potenti libero accumsan magna rhoncus mauris id facilisis imperdiet ornare fames quisque dignissim tellus aenean.</p>
                            </div>
                            <div class="yearly_history">
                                <div class="year round"><span>2007</span></div>
                                <h5 class="history_title">Become a top listed company.</h5>
                                <p>Penatibus ridiculus metus iaculis fermentum odio suspendisse. In auctor eros magnis non. Aliquet imperdiet potenti libero accumsan magna rhoncus mauris id facilisis imperdiet ornare fames quisque dignissim tellus aenean.</p>
                            </div>
                            <div class="yearly_history">
                                <div class="year round"><span>2017</span></div>
                                <h5 class="history_title">We started working all over the state.</h5>
                                <p>Penatibus ridiculus metus iaculis fermentum odio suspendisse. In auctor eros magnis non. Aliquet imperdiet potenti libero accumsan magna rhoncus mauris id facilisis imperdiet ornare fames quisque dignissim tellus aenean.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="our_history_right">
                            <img src="public/images/woman_2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--Our History Section End-->
	
    <!--Quotation Section Start-->
	@include('includes.email_subscribe')
	<!--Quotation Section End-->
    
    <!--Our Team Section Start-->
    <!-- <section id="our_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section_title_1">Our Team</h2>
                    <div class="section_sub_title"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p></div>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<div class="our_team_member">
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">Christopher Church</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_1.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">Christopher Church</a></h4>
								<div class="member_title">Managing Director</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">ALEX SHINGA</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_2.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">ALEX SHINGA</a></h4>
								<div class="member_title">Chairman</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">Chelsea Bowhay</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_3.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">Chelsea Bowhay</a></h4>
								<div class="member_title">Project Director</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">David James</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_4.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">David James</a></h4>
								<div class="member_title">Machine Operator</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">Anthony Lawhorn</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_5.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">Anthony Lawhorn</a></h4>
								<div class="member_title">Rooms Manager</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">Alexander Rodgers</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_6.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">Anthony Lawhorn</a></h4>
								<div class="member_title">Carwash Admin</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">Christopher Wine</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_7.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">Christopher Wine</a></h4>
								<div class="member_title">Veterinary Technician</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">Tim J. Green</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_8.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">Tim J. Green</a></h4>
								<div class="member_title">Range Manager</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="member_img">
									<div class="member_img_hover round">
										<h4><a href="#">Maria H. Cintron</a></h4>
										<p>Auctor vel parturient dapibus urna habitant a augue parturient habitant suspendisse cubilia semper eget erat lacinia dapibus elit mi enim.</p>
										<div class="social_media team_social_media">
											<a href="#" target="new"><i class="fa fa-facebook"></i></a>
											<a href="#" target="new"><i class="fa fa-twitter"></i></a>
											<a href="#" target="new"><i class="fa fa-google-plus"></i></a>
											<a href="#" target="new"><i class="fa fa-linkedin"></i></a>
											<a href="#" target="new"><i class="fa fa-pinterest-p"></i></a>
										</div>
									</div>
									<img class="round" src="public/images/team/team_member_9.png" alt="" />
								</div>
								<h4 class="member_name"><a href="#">Maria H. Cintron</a></h4>
								<div class="member_title">Electrical Engineer</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section> -->
	<!--Our Team Section End-->
	
    <!--Partner Section End-->
    <!-- <div id="partners">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
                	<div class="partner-slider">
						<div class="item single_partner"> <a href="#"><img src="public/images/partner_1.png" alt=""/></a> </div>
						<div class="item single_partner"> <a href="#"><img src="public/images/partner_2.png" alt=""/></a> </div>
						<div class="item single_partner"> <a href="#"><img src="public/images/partner_3.png" alt=""/></a> </div>
						<div class="item single_partner"> <a href="#"><img src="public/images/partner_4.png" alt=""/></a> </div>
					</div>
                </div>
            </div>
        </div>
    </div> -->


@stop