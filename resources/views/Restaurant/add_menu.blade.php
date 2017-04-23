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
               {{ Form::model( $restaurant, array('url' => Request::route()->getPrefix().'/menu/add/'.$restaurant->id, 'files' => true, 'class'=>'add_menu_form') ) }}
               <div class="box-body">
                  <div class="form-group">
                     @foreach($category as $cat)
                     <div class="col-md-4">
                        <a href="#" class="card menu_category_card" data-toggle="modal" data-target=".beer" id="{{$cat->id}}">{{$cat->category_name}}</a>
                     </div>
                     <!--card-->
                     @endforeach
                  </div>
               </div>


               <!-- Form for submit menu start  -->
               <div class="modal fade beer" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                  <div class="modal-dialog modal-sm">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">Add Product</h4>
                        </div>
                        <div class="modal-body">
                           <div class="form-group">
                              <!-- <label for="email">Product Name</label>                                 -->
                              <input type="hidden" class="form-control menu_category_card_catId" name="category_id">
                              <input type="text" class="form-control" id="" name="product_name" placeholder="Product Name">
                           </div>
                           <div class="form-group">
                              <!-- <label for="pwd">Price:</label> -->
                              <input type="number" class="form-control" id="" name="price" placeholder="Price">
                           </div>                           
                        </div>
                        <div class="modal-footer">
                           <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                     </div>
                     <!-- modal-content-->
                  </div>
               </div>
               <!-- Form for submit menu end  -->
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