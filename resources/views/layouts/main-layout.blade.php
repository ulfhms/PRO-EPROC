{{-- {{ dd(Auth::user()->level==='dpal') }} --}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('select2/select2.min.css') }}" rel="stylesheet"/>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-PROC</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            @if ($user = Auth::user())
              @if ($user->level==='supplier')
                <li class="nav-item {{ request()->is('supplier/profile') ? 'active' : ''}}">
                  <a class="nav-link" href="{{ route('supplier.profile') }}">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Profile</span></a>
                </li>

                <li class="nav-item {{ request()->is('supplier/pengadaanBarang/index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('supplier.pengadaanBarang.index') }}">
                        <i class="fas fa-box-open"></i>
                        <span>Pengadaan Barang</span></a>
                </li>

                {{-- <li class="nav-item {{ request()->is('supplier/status/index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('supplier.status.index') }}">
                        <i class="far fa-envelope"></i>
                      <span>Status</span></a>
                </li> --}}
                
              @elseif($user->level === 'dpal')
                <li class="nav-item {{ request()->is('dpal/pengadaanBarang/index') ? 'active' : ''}}">
                  <a class="nav-link" href="{{ route('dpal.pengadaanBarang.index') }}">
                      <i class="fas fa-box-open"></i>
                      <span>Pengadaan Barang / Alat</span></a>
                </li>
                {{-- <li class="nav-item {{ request()->is('dpal/pengadaanBarang/index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('dpal.pengadaanBarang.index') }}">
                        <i class="fas fa-wrench"></i>
                        <span>Pekerjaan Konstruksi</span></a>
                </li> --}}
                <li class="nav-item {{ request()->is('dpal/badanUsaha/index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('dpal.badanUsaha.index') }}">
                        <i class="fas fa-users"></i>
                        <span>Jasa Konsultasi Badan Usaha</span></a>
                </li>
                <li class="nav-item {{ request()->is('dpal/perorangan/index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('dpal.perorangan.index') }}">
                        <i class="fas fa-user-alt"></i>
                        <span>jasa konsultasi Perorangan</span></a>
                </li>
                <li class="nav-item {{ request()->is('dpal/ebudjeting/index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('dpal.ebudjeting.index') }}">
                        <i class="fas fa-user-alt"></i>
                        <span>E-Budjeting</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Components</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Components:</h6>
                            <a class="collapse-item" href="{{ route('bingus.index') }}">Bidang Usaha</a>
                            <a class="collapse-item" href="{{ route('bank.index') }}">Bank</a>
                        </div>
                    </div>
                </li>

              @elseif($user->level==='warek')
              <li class="nav-item {{ request()->is('dpal/pengadaanBarang/index') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('dpal.pengadaanBarang.index') }}">
                    <i class="fas fa-box-open"></i>
                    <span>Pengadaan Barang / Alat</span></a>
              </li>
              {{-- <li class="nav-item {{ request()->is('dpal/pengadaanBarang/index') ? 'active' : ''}}">
                  <a class="nav-link" href="{{ route('dpal.pengadaanBarang.index') }}">
                      <i class="fas fa-wrench"></i>
                      <span>Pekerjaan Konstruksi</span></a>
              </li> --}}
              <li class="nav-item {{ request()->is('dpal/badanUsaha/index') ? 'active' : ''}}">
                  <a class="nav-link" href="{{ route('dpal.badanUsaha.index') }}">
                      <i class="fas fa-users"></i>
                      <span>Jasa Konsultasi Badan Usaha</span></a>
              </li>
              <li class="nav-item {{ request()->is('dpal/perorangan/index') ? 'active' : ''}}">
                  <a class="nav-link" href="{{ route('dpal.perorangan.index') }}">
                      <i class="fas fa-user-alt"></i>
                      <span>jasa konsultasi Perorangan</span></a>
              </li>
              @endif

            <!-- Nav Item - Dashboard -->
            @endif

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ Auth::user()->name }}
                                </span>
                                {{-- <img class="img-profile rounded-circle"
                                    src="{{ asset('template/img/undraw_profile.svg') }}"> --}}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                    <a href="{{ route('auth.logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card p-2">
                        @yield('content')
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('select2/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
      </script>
</body>

</html>