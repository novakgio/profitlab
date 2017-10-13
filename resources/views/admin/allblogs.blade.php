
@extends('admin.layouts.layout')


@section('content')



<section class="content-header">
      <h1>
        დაამატე ბლოგი
       
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">დაამატე ბლოგის კატეგორია</h3>
            </div>
            @if(session()->has('addblockcategory'))
              <div class="box-header with-border">
              <h3 class="box-title">{{session()->get('addblockcategory')}}</h3>
            </div>
            @endif
           
            <table class="table table-striped">
                <tr>
                  
                  <th>სახელი</th>
                  <th>ტექსტი</th>
                  <th>სურათი</th>
                  <th>რომელ კატეგორიას ეკუთვნის</th>
                  <th>შეცვალე</th>
                 
                  
                </tr>
                @foreach($blogs as $blog)


                <tr>
                  
                 

                  <td>{{$blog->title}}</td>
                  <td>{{str_limit($blog->body,10)}}</td>
                  <td><img style="width:30px;height:30px;" src="{{asset('public/images/blog/'.$blog->picture)}}"></td>
                  
                  <td>
                    @foreach($blog->getCategory as $blogCategory)
                        {{$blogCategory->name}},
                    @endforeach
                  </td>
                  <td><a href="{{route('admin_side.blog.edit',$blog->id)}}" type="button" class="btn btn-success">ედიტი</a></td>
                 
                
                  
                  </tr>

                
                @endforeach
              </table>

          </div>
        </div>
        </div>
        </section>

@stop