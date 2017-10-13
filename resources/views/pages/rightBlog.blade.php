<div class="col-md-4">
                    <div class="blog_right_sidebar">
                         @if(!isset($news))
                        <form class="search_box margin" role="form" method="GET" action="{{ url('search_blog') }}">

                        
                            <input type="text" name="search_blog" placeholder="@lang('all.მოძებნე ბლოგი სახელით')" />
                            <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                       
                         <div class="post_category margin">
                            <h5 class="down_line_yellow">@lang('all.ბლოგის კატეგორიები')</h5>
                            
                            @foreach($blogCategories as $blogCategory)
                                <a class="single_category" href="{{url('/specificBlogs/'.$blogCategory->id)}}">{{$blogCategory->name}}</a>
                            @endforeach
                           
                           
                        </div>
                         @endif
                         <div class="recent_post margin">
                            <h5 class="down_line_yellow">@lang('all.ბოლო ბლოგები')</h5>
                            @foreach($recentBlogs as $recent)
                            <div class="single_recent_post">
                                <a href="{{url('blog_details',$recent->id)}}"><img src="{{asset('public/images/blog/'.$recent->picture)}}" alt="" /></a>
                                <h6><a href="{{url('blog_details',$recent->id)}}">{{$recent->title}}</a></h6>
                                <p>{{$recent->created_at}}</p>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="archive_post margin">
                        	<h5 class="down_line_yellow">@lang('all.წლების მიხედვით')</h5>
                            @if(isset($news_years))
                            @foreach($news_years as $new_year)
                                <a href="{{url('news_year',$new_year->year)}}">{{$new_year->year}}</a>
                            @endforeach
                            

                            @elseif(isset($blogs_years))
                            @foreach($blogs_years as $blog_year)
                                <a href="{{url('blogs_year',$blog_year->year)}}">{{$blog_year->year}}</a>
                            @endforeach



                           
                            @endif

                            
                        </div>
                        <div class="photo_gallery">
                        	<h5 class="down_line_yellow">@lang('all.უახლესი პროექტები')</h5>
							<div class="sidebar-gallery">
                            @foreach($photo_galleries as $portfolio)
								<a href="{{url('project_details',$portfolio->id)}}"><img style="width:100%;height:50px;" src="{{asset('public/images/portfolio/'.$portfolio->picture)}}" alt="" /></a>
                            @endforeach
								
							</div>
                        </div>
                    </div>
                </div>