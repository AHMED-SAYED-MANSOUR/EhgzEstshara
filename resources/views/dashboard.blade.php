<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('back/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('back/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @auth('admin')
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <!-- /.navbar -->
{{--        <li class="nav-item d-none d-sm-inline-block">--}}
{{--            <a href="{{route('admin.edit.info', ['id' => $admin->id])}}" class="nav-link">Edit Information</a>--}}
{{--        </li>--}}

        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')
    @endauth

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('admin.layouts.script')
</body>
</html>
