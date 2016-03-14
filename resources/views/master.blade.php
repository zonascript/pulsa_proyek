<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@section('judul_halamam') Aplikasi Pulsa Proyek Indarung VI @show</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('asset/dist/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('asset/dist/css/ionicons.min.css')}}">
       @yield('custom_style')
        <link rel="stylesheet" href="{{url('asset/dist/css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{url('asset/dist/css/skins/skin-red.css')}}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="hold-transition skin-red layout-top-nav">
    <div class="wrapper">
      
      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="{{url('/')}}" class="navbar-brand"><b>Report Pulsa Proyek</b></a>
            </div>

          @include('_include.menu')
          </div>
        </nav>
      </header>

      <div class="content-wrapper">
        <div class="container">
          <section class="content">
            <div class="row">
              @section('content')

              @show
            </div>
          </section>
        </div>
      </div>

      <footer class="main-footer">
        <div class="container">
          <strong>Copyright &copy; 2015-2016 Proyek Indarung VI.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>

    </div><!-- ./wrapper -->
    
    <!-- jQuery 2.1.4 -->
    <script src="{{url('asset/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{url('asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{url('asset/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('asset/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('asset/dist/js/app.js')}}"></script>
    @yield('costom_js_pages')

  </body>
</html>
