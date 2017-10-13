@extends('layout.layout')

@section('content')



<section id="page_banner">
      <div class="banner_overlay">
        <div class="container">
          <div class="row">
            <h2 class="banner_title">@lang('all.ჩვენი პროექტები')</h2>
            <ul class="page_banner_link">
              <li><a href="{{url('/')}}">@lang('all.მთავარი')</a>/</li>
              <li><span>@lang('all.ჩვენი პროექტები')</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Page Banner End--> 
    
    <!--All Our Peoject Section Start-->
    <section id="our_projects">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section_title_1">@lang('all.საუკეთესო ნამუშევრები')</h2>
                </div>
            </div>
            <style>
            figure .portfolio-image {
                display:block;
                height:200px;
            }

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
                                        <figure class="image-box"><img src="{{asset('public/images/portfolio/'.$portfolio->picture)}}" class="portfolio-image" alt=""></figure>
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

@stop