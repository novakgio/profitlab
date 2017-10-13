@extends('layout.layout')

@section('content')


<section id="single_project">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                    <div class="item">
              <img style="height:558px;" src="{{asset('public/images/portfolio/'.$portfolio->picture)}}" alt="uwash service">
            </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-8">
          <div class="single_project_content">
            <h5 class="down_line_yellow project_title">@lang('all.უფრო ვრცლად პროექტის შესახებ')</h5>
            <div class="text-area">
              <p>{!!$portfolio->body!!}</p>
              <!-- <ul>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i> We were very responsive for the client.
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i> Provide expert team for this office.
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>100% client satisfied.
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>Professional and Qualified worker.
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>It was 8 hours working time in a day.
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>Our Project Manager also meet and discuss with them.
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>We work extra time at every Sunday.
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>We used electronic tools for washing and painting.
                </li>
              </ul>
              <p>Elit sagittis erat. Ultricies cursus laoreet condimentum, est hymenaeos imperdiet elementum montes maecenas vestibulum cras lacus. Lacinia augue porttitor fringilla hac nullam quisque vehicula bibendum proin sed a. Justo pulvinar Sociosqu scelerisque pretium nec elit viverra ante consectetuer. Netus vitae phasellus felis conubia nulla mattis.</p>
              <p>Scelerisque etiam mauris rutrum dui suspendisse sociis. Adipiscing id dis ipsum luctus, consectetuer enim nibh sapien eu id gravida ut risus Vivamus, nullam fermentum pellentesque nam faucibus vitae potenti urna nisi, senectus vehicula congue ultrices.</p> -->
            </div>
            <!-- <div class="button_group">
                        <a href="#" class="btn btn-primary">Previous</a>
                        <a href="#" class="btn btn-primary">Next</a>
                    </div> -->
          </div>
                </div>
                <div class=" col-md-4">
          <div class="project_info">
            <h5 class="down_line_yellow">@lang('all.ინფორმაცია')</h5>
            <div class="information">
              <ul class="information_table">
                <li>
                  <b>დრო :</b>
                  <div><p>{{$portfolio->created_at}}</p></div>
                </li>
                <li>
                  <b>კატეგორია :</b>
                  <div><p>{{$portfolio->getCategory[0]->id}}</p></div>
                </li>
                <!-- <li>
                  <b>Location :</b>
                  <div><p>2610 Sunset Drive Little Rock, AR 72201</p></div>
                </li> -->
                <!-- <li>
                  <b>Operator :</b>
                  <div><p>Mary J. Penn</p></div>
                </li>
                <li>
                  <b>Duration :</b>
                  <div><p>24 Days</p></div>
                </li>
                <li>
                  <b>Value :</b>
                  <div><p>$3,470</p></div>
                </li>
                <li>
                  <b>Status :</b>
                  <div><p>Complete</p></div>
                </li>
                <li>
                  <b>Feedback :</b>
                  <div>
                    <p>Quis dictumst imperdiet proin ipsum aliquam facilisi felis ad orci proin. Nibh fermentum. Felis interdum odio. Per ligula vivamus pharetra diam auctor aptent ut volutpat ligula quam vestibulum.</p>   
                    <span class="thanking">Thank you</span>
                    <span>Eric M. Holton ( CEO  of  Genic )</span>
                  </div>
                </li> -->
              </ul>
            </div>
          </div>
                </div>
            </div>
        </div>
    </section>
    <!--Single Project Section End-->
    
  <!--Achivment Section Start-->
    <!-- <section id="achivment">
      <div class="achievement_overlay">
        <div class="container">
          <div class="row">
            <div class="fact-counter">
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="achievement wow fadeIn" data-wow-duration="300ms"> <img src="public/images/icon/driller.png" alt="" />
                    <h2 class="counting" data-speed="3000" data-stop="2300">0</h2>
                    <h6 class="sunject">Project Done</h6>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="achievement wow fadeIn" data-wow-duration="300ms"> <img src="public/images/icon/handshake.png" alt="" />
                    <h2 class="counting" data-speed="3000" data-stop="1500">0</h2>
                    <h6 class="sunject">Satisfied Clients</h6>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="achievement wow fadeIn" data-wow-duration="300ms"> <img src="public/images/icon/trophy.png" alt="" />
                    <h2 class="counting" data-speed="3000" data-stop="120">0</h2>
                    <h6 class="sunject">Awards win</h6>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="achievement wow fadeIn" data-wow-duration="300ms"> <img src="public/images/icon/calendar.png" alt="" />
                    <h2 class="counting" data-speed="3000" data-stop="20">0</h2>
                    <h6 class="sunject">Years Experience</h6>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--Achivment Section End-->
    
  <!--Our Project Section Start-->
    
    
  <!--Process Section Start-->
    <!-- <section id="process" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="offer">
                <h4 class="down_line_black">Get an offer</h4>
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