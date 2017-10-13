
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
            
            <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_side.blogcategory.store') }}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">სახელი</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="ჩაწერე კატეგორია">
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
               


                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <table class="table table-striped">
                <tr>
                  
                  <th>ბლოგის კატეგორიის სახელი</th>
                  <th>წაშლა</th>
                 
                  
                </tr>
                @foreach($blogCategories as $blogCategory)


                <tr>
                  
                 

                  <td>{{$blogCategory->name}}</td>
                  
                  <td><a href="{{route('admin_side.blogcategory.edit',$blogCategory->id)}}" type="button" class="btn btn-success">ედიტი</a></td>
                  
                  </tr>

                
                @endforeach
              </table>

          </div>
        </div>
        </div>
        </section>

@stop