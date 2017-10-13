
@extends('admin.layouts.layout')


@section('content')



<section class="content-header">
      <h1>
          Subscribers
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
              
            </div>
            @if(session()->has('addblockcategory'))
              <div class="box-header with-border">
              <h3 class="box-title">{{session()->get('addblockcategory')}}</h3>
            </div>
            @endif
           
            <table class="table table-striped">
                <tr>
                  
                  <th>იმეილი</th>
                  <th>წაშალე</th>
                  
                 
                  
                </tr>
                @foreach($subscribers as $subscriber)


                <tr>
                  
                 

                  <td>{{$subscriber->email}}</td>
                  <td><a href="{{url('/deletesubscriber/'.$subscriber->id)}}" type="button" class="btn btn-success">წაშალე</a></td>
                
                  
                  </tr>

                
                @endforeach
              </table>

          </div>
        </div>
        </div>
        </section>

@stop