<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('AdminLTE-3.1.0/dist/img/LOGO_ILPSELANDAR_2021.png')}}" alt="ilpselandar logo" height="80" width="120">
   
   <!-- <img src="{{asset('LOGO_ILPSELANDAR_2021.png')}}" alt="eilpselandar Logo"  > -->
   </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       <img src="{{asset('AdminLTE-3.1.0/dist/img/LOGO_ILPSELANDAR_2021.png')}}" alt="ilpselandar Logo" width="200" height="60" >    
  
     
  
  </ul>
  <ul class="navbar-nav ml-auto">
  <li class=" float-leftnav-item dropdown"  >
            <a style="text-align:right;" id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">{{\Auth::user()->name}}</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="{{ url('users/editprofile', Auth::user()->id)}}" class="dropdown-item">Tukar Katalaluan </a></li>
              <li><a href="{{url('keluar')}}" class="fas fa-sign-out-alt">Log keluar</a></li>

              
            </ul>
          </li>
        </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    @include('layouts.sidebar')
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('layouts.footer')

</div>
<!-- ./wrapper -->

@include('layouts.scripts')


</body>
</html>
