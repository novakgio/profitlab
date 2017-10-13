
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
              <h3 class="box-title">შეავსე ყველა ველი რათა დაამატო</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_side.blog.store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1">სახელი</label>
                  <input type="text"  name="title" class="form-control" id="exampleInputEmail1" placeholder="დაარქვი სახელი ბლოგს" value="{{old('title')}}">
                </div>
                 @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif


                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">ტექსტი</label>
                  <textarea class="textarea" placeholder="შენი ტექსტი" name="body"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('body')}}</textarea>
                  
                </div>

                 @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                  <label for="exampleInputFile">სურათი</label>
                  <input type="file" name="picture" id="exampleInputFile" value="{{old('picture')}}">

                  
                </div>
                 @if ($errors->has('picture'))
                    <span class="help-block">
                        <strong>{{ $errors->first('picture') }}</strong>
                    </span>
                @endif

                <div class="form-group{{ $errors->has('blog_category_id') ? ' has-error' : '' }}">
                  <label>აირჩიე კატეგორია</label>
                  <select name="blog_category_id" value="{{old('blog_category_id')}}" class="form-control">
                  @foreach($blogCategories as $blogCategory)
                    <option value="{{$blogCategory->id}}">{{$blogCategory->name}}</option>
                   @endforeach
                  </select>
                </div>
                 @if ($errors->has('blog_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('blog_id') }}</strong>
                    </span>
                @endif


                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        </div>
        </section>

@stop