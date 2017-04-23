@extends('layouts.'.Session::get('blade_layout'))
@section('content')
<div class="content-wrapper" style="min-height: 578px;">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Form Elements
         <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Forms</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-8">
            <!-- general form elements -->
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               {{ Form::model( $restaurant, array('url' => Request::route()->getPrefix().'/'.$restaurant->id, 'files' => true, 'class'=> 'edit_bar_info') ) }}
                  <div class="box-body">
                     <!-- <div class="pull-right message-section">
                        <p class="success">Success Message</p>
                        <p class="error">Error message</p>
                     </div> -->
                     <div class="form-group">
                        <label for="exampleInputEmail1">Restaurant Name</label>
                        {{ Form::text('restaurant_name', null,array('class' => 'form-control') ) }}
               @if( $errors->first('restaurant_name') )
                  <div class="alert alert-danger">
                  {{ $errors->first('restaurant_name') }}
                  </div>
               @endif
                     </div>

                      <div class="form-group">
               <label>Description</label>
               {{ Form::textarea('description', null,array('class' => 'form-control') ) }}
               @if( $errors->first('description') )
                  <div class="alert alert-danger">
                  {{ $errors->first('description') }}
                  </div>
               @endif
            </div>

            <div class="form-group">
               <label>Address</label>
               {{ Form::textarea('address', null,array('class' => 'form-control') ) }}
               @if( $errors->first('address') )
                  <div class="alert alert-danger">
                  {{ $errors->first('address') }}
                  </div>
               @endif
            </div>

            <div class="form-group">
               <label>Opening Hours</label>
               {{ Form::textarea('opening_hours', null,array('class' => 'form-control') ) }}
               @if( $errors->first('opening_hours') )
                  <div class="alert alert-danger">
                  {{ $errors->first('opening_hours') }}
                  </div>
               @endif
            </div>

            <div class="form-group">
               <label>Image</label>
               {{ Form::file('file') }}
               @if( $errors->first('file') )
                  <div class="alert alert-danger">
                  {{ $errors->first('file') }}
                  <span class="file-custom"></span>
                  </div>
               @endif
            </div>

                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               {!! Form::close() !!}
            </div>
            <!-- /.box -->
         </div>
         <!--/.col (left) -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
{{ Html::script('assets/js/custom/restaurant.js') }}
@endsection