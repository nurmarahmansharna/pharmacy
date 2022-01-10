<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PMS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Rahman Pharmacy</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <i class="fa fa-user-circle"></i> <span>{{ auth()->user()->username }}</span>
        <i></i> <span>({{ auth()->user()->type }})</span>
      {{-- <span class="sr-only">Toggle navigation</span> --}}
    </a>
  
  
      
    </nav>
  </header>