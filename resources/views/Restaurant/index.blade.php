<?php //echo "<pre>"; var_dump($restaurants->all()); die(); 
   //var_dump(Session::get('blade_layout'));
   ?>
@extends('layouts.'.Session::get('blade_layout'))
@section('content')
<div class="content-wrapper" style="min-height: 578px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Listing
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Listing</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"></h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover dataTable">
                     <thead>
                        <tr>
                           <th>Bar-Name</th>
                           <th>Description</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($restaurants as $restaurant)
                        <tr>
                           <td>{{ $restaurant->restaurant_name }}</td>
                           <td>{{ $restaurant->description }}</td>
                           <td>
                              <!-- <a href="#"><i class="fa fa-fw fa-eye"></i></a> -->
                              <a href="{{url(Request::route()->getPrefix().'/edit/'.$restaurant->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                              @if($restaurant->deleted_at)
                              <a href="{{url(Request::route()->getPrefix().'/restore/'.$restaurant->id)}}"><i class="fa fa-fw fa fa-recycle"></i></a>
                              @else
                              <a href="{{url(Request::route()->getPrefix().'/delete/'.$restaurant->id)}}"><i class="fa fa-fw fa-trash-o"></i></a>
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{ $restaurants->links() }}
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
{{ Html::script('assets/js/bootstrap.js') }}
@endsection