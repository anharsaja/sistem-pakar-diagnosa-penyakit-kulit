<!DOCTYPE html>
<html>

<head>
    <x-admin.style />
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <x-admin.header />
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <x-admin.sidebar />
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <x-admin.breadcrumb />

            <!-- Main content -->
            <section class="content">
                {{ $slot }}
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <x-admin.footer />

    </div><!-- ./wrapper -->

    <x-admin.script />
</body>

</html>
