<!DOCTYPE html>
<html>
<head>
    @include('employee.layouts._head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('employee.layouts._topNav')

    @include('employee.layouts._leftNav')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')

        </div>
        <!-- /.content-wrapper -->


    @include('employee.layouts._footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    @include('employee.layouts._jsScript')

</body>
</html>

