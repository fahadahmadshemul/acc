<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Adamjee Cantonment College || @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/toastr/toastr.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!--sweet alert-->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/sweetalert2/sweetalert2.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/dropzone/min/dropzone.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!---bootstrap toggler button--->
  <link rel="stylesheet" href="{{asset('/')}}public/Backend/dist/css/bootstrap-toggle.min.css">
  <style>
    .layout-fixed .wrapper .sidebar {
      height: calc(100vh - (5.5rem + 1px));
    }
    body{
      font-size: 15px;
    }
    .small-icon{
      font-size: 10px !important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('/')}}public/Backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" id="navbar">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
              {{-- <div class="dropdown-divider"></div>
              <a href="{{route('setting')}}" class="dropdown-item">
                <i class="fas fa-cog mr-2"></i> Setting
              </a> --}}
          
          <div class="dropdown-divider"></div>
          <a href="{{route('profile')}}" class="dropdown-item">
            <i class="fas fa-user-circle mr-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('change-password')}}" class="dropdown-item">
            <i class="fas fa-edit mr-2"></i> Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('logout')}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #000!important">
    <!-- Brand Logo -->
    
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('/')}}public/Frontend/images/logo_1.png" alt="AdminLTE Logo" class="img-circle" style="opacity: .8;max-height:60px;">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/')}}public/Backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          
        </div>
        <div class="info">
          <a href="" class="d-block">{{Session::get('name')}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{Request::is('dashboard') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @php
              $role_id = Session::get('role_id');
              $User = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 1)->first();
              $Post = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 2)->first();
              $Slider = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 3)->first();
              $Notice = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 4)->first();
              $Glance = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 5)->first();
              $Academics = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 6)->first();
              $Admission = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 7)->first();
              $Administration = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 8)->first();
              $Event = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 9)->first();
              $Useful_link = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 10)->first();
              $Explore = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 11)->first();
              $Gallery = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 12)->first();
              $Contact = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 13)->first();
          @endphp
          @if ($User->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/add-user') || Request::is('dashboard/manage-user') || Request::is('dashboard/manage-user-role') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  User
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($User->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-user')}}" class="nav-link {{Request::is('dashboard/add-user') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add User </p>
                    </a>
                  </li>
                @endif
                @if ($User->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-user')}}" class="nav-link {{Request::is('dashboard/manage-user') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage User</p>
                    </a>
                  </li>
                @endif  
                @if ($User->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-user-role')}}" class="nav-link {{Request::is('dashboard/manage-user-role') || Request::is('dashboard/add-user-role') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>User Role</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif
          @if ($Post->is_vissible == 1)
            <li class="nav-item">
              <a href="{{route('manage-post')}}" class="nav-link {{Request::is('dashboard/manage-post') || Request::is('dashboard/add-post') ? 'active':''}}">
                <i class="nav-icon fas fa-blog"></i>
                <p>
                  Manage Post
                </p>
              </a>
            </li>
          @endif 
          @if ($Slider->is_vissible == 1)
            <li class="nav-item">
              <a href="{{route('manage-slider')}}" class="nav-link {{Request::is('dashboard/manage-slider') || Request::is('dashboard/add-slider') ? 'active':''}}">
                <i class="nav-icon fas fa-sliders-h"></i>
                <p>
                  Manage Slider
                </p>
              </a>
            </li>
          @endif     
          @if ($Notice->is_vissible == 1)
            <li class="nav-item">
              <a href="{{route('manage-notice')}}" class="nav-link {{Request::is('dashboard/manage-notice') || Request::is('dashboard/add-notice') ? 'active':''}}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Notice
                </p>
              </a>
            </li>
          @endif      
          @if ($Glance->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/manage-glance-page') || Request::is('dashboard/add-glance-page') || Request::is('dashboard/edit-glance-page') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fab fa-asymmetrik"></i>
                <p>
                  At a Glance
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($Glance->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-glance-page')}}" class="nav-link {{Request::is('dashboard/add-glance-page') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add Page </p>
                    </a>
                  </li>
                @endif
                @if ($Glance->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-glance-page')}}" class="nav-link {{Request::is('dashboard/manage-glance-page')  ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage Page</p>
                    </a>
                  </li>
                @endif  
              </ul>
            </li>
          @endif    
          @if ($Academics->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/manage-academic-page') || Request::is('dashboard/add-academic-page') || Request::is('dashboard/edit-academic-page') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fab fa-accusoft"></i>
                <p>
                  Academics
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($Academics->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-academic-page')}}" class="nav-link {{Request::is('dashboard/add-academic-page') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add Page </p>
                    </a>
                  </li>
                @endif
                @if ($Academics->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-academic-page')}}" class="nav-link {{Request::is('dashboard/manage-academic-page')  ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage Page</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif      
          @if ($Admission->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/manage-admission-page') || Request::is('dashboard/add-admission-page') || Request::is('dashboard/edit-admission-page') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-graduation-cap "></i>
                <p>
                  Admission
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($Admission->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-admission-page')}}" class="nav-link {{Request::is('dashboard/add-admission-page') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add Page </p>
                    </a>
                  </li>
                @endif
                @if ($Admission->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-admission-page')}}" class="nav-link {{Request::is('dashboard/manage-admission-page')  ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage Page</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif      
          @if ($Administration->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/manage-administration-page') || Request::is('dashboard/add-administration-page') || Request::is('dashboard/edit-administration-page') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-lock"></i>
                <p>
                  Administration
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($Administration->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-administration-page')}}" class="nav-link {{Request::is('dashboard/add-administration-page') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add Page </p>
                    </a>
                  </li>
                @endif
                @if ($Administration->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-administration-page')}}" class="nav-link {{Request::is('dashboard/manage-administration-page')  ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage Page</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif      
          @if ($Event->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/manage-event-page') || Request::is('dashboard/add-event-page') || Request::is('dashboard/edit-event-page') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-calendar-plus"></i>
                <p>
                  Event
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($Event->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-event-page')}}" class="nav-link {{Request::is('dashboard/add-event-page') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add Page </p>
                    </a>
                  </li>
                @endif
                @if ($Event->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-event-page')}}" class="nav-link {{Request::is('dashboard/manage-event-page')  ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage Page</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif     
          @if ($Useful_link->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/manage-useful-link') || Request::is('dashboard/add-useful-link') || Request::is('dashboard/edit-useful-link') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-link"></i>
                <p>
                  Useful Link 
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($Useful_link->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-useful-link')}}" class="nav-link {{Request::is('dashboard/add-useful-link') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add Link </p>
                    </a>
                  </li>
                @endif
                @if ($Useful_link->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-useful-link')}}" class="nav-link {{Request::is('dashboard/manage-useful-link')  ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage Link</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif      
          @if ($Explore->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/manage-explore') || Request::is('dashboard/add-explore') || Request::is('dashboard/edit-explore') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fab fa-xing"></i>
                <p>
                  Explore
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($Explore->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-explore')}}" class="nav-link {{Request::is('dashboard/add-explore') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add Explore </p>
                    </a>
                  </li>
                @endif
                @if ($Explore->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-explore')}}" class="nav-link {{Request::is('dashboard/manage-explore')  ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage Explore</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif      
          @if ($Gallery->is_vissible == 1)
            <li class="nav-item {{Request::is('dashboard/manage-gallery') || Request::is('dashboard/add-gallery') || Request::is('dashboard/edit-gallery') ? 'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                  Gallery
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($Gallery->is_add == 1)
                  <li class="nav-item">
                    <a href="{{route('add-gallery')}}" class="nav-link {{Request::is('dashboard/add-gallery') ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Add Gallery </p>
                    </a>
                  </li>
                @endif
                @if ($Gallery->is_view == 1)
                  <li class="nav-item">
                    <a href="{{route('manage-gallery')}}" class="nav-link {{Request::is('dashboard/manage-gallery')  ? 'active':''}}">
                      <i class="fas fa-dot-circle nav-icon small-icon"></i>
                      <p>Manage Gallery</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif      
          @if ($Contact->is_vissible == 1)
            <li class="nav-item">
              <a href="{{route('contact')}}" class="nav-link {{Request::is('dashboard/contact') ? 'active':''}}">
                <i class="nav-icon fas fa-address-card"></i>
                <p>
                  Contact
                </p>
              </a>
            </li>
          @endif
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>fahad.fnfplanet.com all rights reserve</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/')}}public/Backend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/')}}public/Backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}public/Backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('/')}}public/Backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('/')}}public/Backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('/')}}public/Backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/')}}public/Backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('/')}}public/Backend/plugins/moment/moment.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/')}}public/Backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('/')}}public/Backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/')}}public/Backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}public/Backend/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/')}}public/Backend/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/')}}public/Backend/dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="{{asset('/')}}public/Backend/plugins/sweetalert2/sweetalert2.min.js"></script>
<!----toastr------>
<script src="{{asset('/')}}public/Backend/plugins/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('/')}}public/Backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}public/Backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!----bootstrap toggler button---->
<script src="{{asset('/')}}public/Backend/dist/js/bootstrap-toggle.min.js"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

  </script>
<!-----toastr script--------->
<script>
  @if(Session::has('message'))
      var type = "{{Session::get('alert-type', 'info')}}"
      switch (type) {
          case 'info':
              toastr.info("{{Session::get('message')}}");
              break;
          case 'success':
              toastr.success("{{Session::get('message')}}");
              break;
          case 'warning':
              toastr.warning("{{Session::get('message')}}");
              break;
          case 'error':
              toastr.error("{{Session::get('message')}}");
              break;
      }
  @endif
</script>
<!-----sweetalert script--------->
  <script type="text/javascript">
    $(document).on('click', '#Delete', function(e){
      e.preventDefault();
      var link = $(this).attr('href');
      Swal.fire({
          icon: 'warning',
          text: 'Do you want to delete this?',
          showCancelButton: true,
          confirmButtonText: 'Delete',
          confirmButtonColor: '#e3342f',
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = link;
          }else{
            swal.fire('Safe Data');
          }
      });
    })
</script>
<script src="{{asset('/')}}public/Backend/js/custom.js"></script>
<!-- Select2 -->
<script src="{{asset('/')}}public/Backend/plugins/select2/js/select2.full.min.js"></script>
<!-- dropzonejs -->
<script src="{{asset('/')}}public/Backend/plugins/dropzone/min/dropzone.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })

</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

  })
</script>
</body>
</html>
