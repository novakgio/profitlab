
@extends('layout.layout')
@section('content')
    <!--Header Section End-->
    
    <!--Page Banner Start-->
    <section id="page_banner">
        <div class="banner_overlay">
            <div class="container">
            	<div class="row">
                    <h2 class="banner_title">@lang('all.სიახლეები')</h2>
                    <ul class="page_banner_link">
                        <li><a href="{{url('/')}}">@lang('all.მთავარი')</a>/</li>
                        <li><span>@lang('all.სიახლეები')</span></li>
                    </ul>
            	</div>
            </div>
        </div>
    </section>
    <!--Page Banner End-->
    
    <!--Blog Page Section Start-->
   <section id="all_blog">
        <div class="container">
            <div class="row">
                <!--All Main Blog-->
                <div class="col-md-8">
                    <div class="row">    
                         <style>

                    .blog_img a .blog_image{
                        width:370px;
                        height:220px;
                    }
                    </style>
                    @if(count($news)>0)
                    @foreach($news as $new)
                        <div class="col-md-6 col-sm-6">
                            <div class="blog_post">
                                <div class="blog_img"><a href="{{url('/news_details/'.$new->id)}}"><img class="blog_image" src="{{asset('public/images/news/'.$new->picture)}}" alt="" /></a>
                                  <div class="blog_date">{{$new->created_at->toDateTimeString()}}</div>
                                </div>
                                <div class="blog_info"><h6 class="blog_title"><a href="{{url('/news_details/'.$new->id)}}">{{$new->title}}</a></h6>
                                 
                                 <!--  <div class="post_admin">By <a href="#">admin</a> / <a href="#">12</a> Comments / <a href="#">20</a> Views</div> -->
                                 
                                  <a class="read_more_btn" href="{{url('/news_details/'.$new->id)}}">@lang('all.სრულად ნახვა')</a> 
                               </div>
                           </div>
                        </div>
                        
                       @endforeach
                       @else
                       <h1>@lang('all.სამწუხაროდ,სიახლეები არ მოიძებნა ამ კატეგორიაში')</h1>
                       @endif

                    </div>
                    <div class="row">    
                       {!!$news->render()!!}
                    </div>
                </div>
                <!--Blog Page Right side bar-->
                @include('pages.rightBlog')
            </div>
        </div>
    </section>
    <!--Blog Page Section End-->
@stop