
@extends('admin.layouts.layout')


@section('content')



<section class="content-header">
      <h1>
        
       
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
              <h3 class="box-title">ყველა პროექტი</h3>
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
                @foreach($portfolios as $portfolio)


                <tr>
                  
                 

                  <td>{{$portfolio->name}}</td>
                  <td>{{str_limit($portfolio->body,10)}}</td>
                  <td><img style="width:30px;height:30px;" src="{{asset('public/images/portfolio/'.$portfolio->picture)}}"></td>
                  
                  <td>
                    @foreach($portfolio->getCategory as $portfolioCategory)
                        {{$portfolioCategory->name}},
                    @endforeach
                  </td>
                  <td><a href="{{route('admin_side.portfolio.edit',$portfolio->id)}}" type="button" class="btn btn-success">ედიტი</a></td>
                 
                
                  
                  </tr>

                
                @endforeach
              </table>

          </div>
        </div>
        </div>
        </section>

@stop