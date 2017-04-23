<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 2 | General Form Elements</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
      {{ Html::script('assets/js/jQuery-2.1.4.min.js') }}
      {{ Html::style('assets/css/bootstrap.min.css') }}
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <!-- <link rel="stylesheet" href="css/AdminLTE.min.css"> -->
      {{ Html::style('assets/css/AdminLTE.min.css') }}
      <!-- <link rel="stylesheet" href="css/custom.css"> -->
      {{ Html::style('assets/css/custom.css') }}
      <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
      <!-- <link rel="stylesheet" href="css/_all-skins.min.css"> -->
      {{ Html::style('assets/css/_all-skins.min.css') }}
   </head>
   <body class="skin-blue sidebar-mini sidebar-open">
      <div class="wrapper">
         <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
               <!-- mini logo for sidebar mini 50x50 pixels -->
               <span class="logo-mini">{{ Html::image('assets/images/logo.png') }}</span>
               <!-- logo for regular state and mobile devices -->
               <span class="logo-lg">{{ Html::image('assets/images/logo.png') }}</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
               <!-- Sidebar toggle button-->
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">{{Auth::user()->email}}</span>
                        </a>
                        <ul class="dropdown-menu">
                           <!-- User image -->
                           <li class="user-header">
                              <p>
                                 {{Auth::user()->email}}
                                 <!-- <small>Member since Nov. 2012</small> -->
                              </p>
                           </li>
                           <!-- Menu Footer-->
                           <li class="user-footer">
                              <div class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                 <a href="{{ url(Request::route()->getPrefix().'/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- Left side column. contains the logo and sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
               <!-- Sidebar user panel -->
               <div class="user-panel">
                  <div class="pull-left info">
                     <p>{{Auth::user()->email}}</p>
                  </div>
               </div>
               <!-- search form -->
               <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                     <input type="text" name="q" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                     </span>
                  </div>
               </form>
               <!-- /.search form -->
               <!-- sidebar menu: : style can be found in sidebar.less -->
               <ul class="sidebar-menu">
                  <li class="header">MAIN NAVIGATION</li>
                  <li class="treeview">
                     <a href="{{url(Request::route()->getPrefix().'/')}}">
                     <i class="fa fa-table"></i> <span>Bars</span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="{{url(Request::route()->getPrefix().'/registeruser')}}">
                     <i class="fa fa-edit"></i> <span>Create Bar</span>
                     </a>
                  </li>
                  <!-- <li class="treeview">
                     <a href="{{url(Request::route()->getPrefix().'/registeruser')}}">
                     <i class="fa fa-edit"></i> <span>Products</span>
                     </a>
                  </li> -->
               </ul>
            </section>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <!-- /.content-wrapper -->

         @section('sidebar')
        @show
        
        @yield('content')
      </div>
      <!-- ./wrapper -->
      <!-- <script src="js/jQuery-2.1.4.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/app.min.js"></script> -->
      {{ Html::script('assets/js/bootstrap.min.js') }}
      {{ Html::script('assets/js/app.min.js') }}
      {{ Html::script('assets/js/jquery.validate.min.js') }}
      {{ Html::script('assets/js/additional-methods.min.js') }}
   </body>
</html>