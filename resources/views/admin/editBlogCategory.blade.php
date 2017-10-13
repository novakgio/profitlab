
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
              <h3 class="box-title">შეცვალე ბლოგის კატეგორია</h3>
            </div>
            @if(session()->has('addblockcategory'))
              <div class="box-header with-border">
              <h3 class="box-title">{{session()->get('addblockcategory')}}</h3>
            </div>
            @endif
            
            {{ Form::model($blogCategory, array('route' => array('admin_side.blogcategory.update', $blogCategory->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">შეცვალე სახელი</label>
                  
                  {{ Form::text('name',null,['class' => 'form-control']) }}
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
               


                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">შეცვალე</button>
              </div>
            </form>

            {{ Form::model($blogCategory, array('route' => array('admin_side.blogcategory.destroy', $blogCategory->id), 'method' => 'DELETE', 'class' => 'form-horizontal')) }}
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