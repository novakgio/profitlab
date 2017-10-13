
@extends('admin.layouts.layout')


@section('content')



<section class="content-header">
      <h1>
        დაამატე ბლოგი
       
      </h1>
     
    </section>

    <style>
.blog_image_admin{
  width:100px;
  height:50px;
}


    </style>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">შეცვალე ბლოგი</h3>
            </div>
            @if(session()->has('addblockcategory'))
              <div class="box-header with-border">
              <h3 class="box-title">{{session()->get('addblockcategory')}}</h3>
            </div>
            @endif
            
            {{ Form::model($blog, array('files'=>true,'route' => array('admin_side.blog.update', $blog->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
            
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1">სახელი</label>
                  

                   {{ Form::text('title',null,['class' => 'form-control']) }}
                </div>
                 @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
                  <style>
                      .textareaholder{
                        width:100%;
                        height:125px;
                        font-size:14px;
                        line-height: 18px;
                        border:1px solid #dddddd;
                        padding:10px;
                      }



                  </style>

                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                  <label for="exampleInputPassword1">ტექსტი</label>
                  
                  {{ Form::textarea('body',null,['class' => 'textarea textareaholder','placeholder'=>'შენი ტექსტი']) }}
                </div>

                 @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                  <label for="exampleInputFile">სურათი</label>
                    
                    {{ Form::file('picture')}}
                    <img class="blog_image_admin" src="{{asset('public/images/blog/'.$blog->picture)}}">
                    
                </div>
                 @if ($errors->has('picture'))
                    <span class="help-block">
                        <strong>{{ $errors->first('picture') }}</strong>
                    </span>
                @endif

                <div class="form-group{{ $errors->has('blog_category_id') ? ' has-error' : '' }}">
                  <label>აირჩიე კატეგორია</label>
                  

                  {{Form::select('blog_category_id', $blogCategories,null,['class'=>'form-control'])}}
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
                <button type="submit" class="btn btn-primary">შეცვალე</button>
              </div>
            </form>

            </form>

            {{ Form::model($blog, array('route' => array('admin_side.blog.destroy', $blog->id), 'method' => 'DELETE', 'class' => 'form-horizontal')) }}
            {{csrf_field()}}
              

              <div class="box-footer">
                <button type="submit" class="btn btn-warning">წაშალე</button>
              </div>
            </form>


            
          </div>
        </div>
        </div>
        </section>

@stop