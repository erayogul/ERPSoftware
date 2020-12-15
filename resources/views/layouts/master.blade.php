
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Company ERP System</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  

<link rel="stylesheet" href="/css/app.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper" id="app">


@include('layouts.partials.header')

@include('layouts.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <router-view>
        <vue-progress-bar></vue-progress-bar>
        </router-view>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @include('layouts.partials.footer')
  
@auth
<script>
  window.user = @json(auth()->user());
</script>
@endauth
<script src="/js/app.js"></script>
 <!--
<script src="{{ asset('~datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('~datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('~datatables.net-responsive/js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('~datatables.net-responsive-bs4/js/responsive.bootstrap4.js') }}"></script>
<script src="{{ asset('~datatables.net-buttons\js\dataTables.buttons.js') }}"></script>
<script src="{{ asset('~datatables.net-buttons-bs4\js\buttons.bootstrap4.js') }}"></script>
    -->    
</body>
</html>
