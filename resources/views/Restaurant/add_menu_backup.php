@extends('layouts.'.Session::get('blade_layout'))
@section('content')
<div class="content-wrapper" style="min-height: 578px;">
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
               {{ Form::model( $restaurant, array('url' => 'bar/menu/add/'.$restaurant->id, 'files' => true) ) }}
                  <div class="box-body">
                     
                     <div class="form-group">
					<label>Categories</label>
					{{ Form::select('category_id', $category, null,array('class'=>'form-control') ) }}
					@if( $errors->first('category_name') )
						<div class="alert alert-danger">
						{{ $errors->first('category_name') }}
						</div>
					@endif
				</div>

				<div class="form-group">
					{{ Form::button('Add', array('class' => 'btn btn-primary show_menu_popup') ) }}	
				</div>

				<div class="form-group">
					<input type="text" maxlength="30" name="name" placeholder="Name"></input>
					<input type="number" maxlength="6" name="amount" placeholder="price"></input>
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
{{ Html::script('assets/js/custom/generic.js') }}
@endsection