
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
              <h3 class="box-title">შეცვალე სიახლე</h3>
            </div>
            @if(session()->has('addblockcategory'))
              <div class="box-header with-border">
              <h3 class="box-title">{{session()->get('addblockcategory')}}</h3>
            </div>
            @endif
            
            {{ Form::model($news, array('files'=>true,'route' => array('admin_side.news.update', $news->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
            
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
                    
                </div>
                 @if ($errors->has('picture'))
                    <span class="help-block">
                        <strong>{{ $errors->first('picture') }}</strong>
                    </span>
                @endif

               
              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">შეცვალე</button>
              </div>
            </form>

            </form>

            {{ Form::model($news, array('route' => array('admin_side.news.destroy', $news->id), 'method' => 'DELETE', 'class' => 'form-horizontal')) }}
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