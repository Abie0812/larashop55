<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>@yield('title')</title>
    @yield('top-resource')
    @include('admin.partials.cssplug')
    
</head>

<body>

    <!-- wrapper -->
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('admin.partials.navbar-header')
            @include('admin.partials.navbar-toplink')
            @include('admin.partials.navbar-static-side')       
        </nav>
        <!-- end Navigation -->

        <!-- page-wrapper -->
        <div id="page-wrapper">
            @yield('content')            
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    @include('admin.partials.jsplug')
    @yield('bottom-resource')
</body>

</html>
