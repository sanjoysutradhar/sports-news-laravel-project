<!doctype html>
<html lang="en">

<head>
    @include('admin.layouts.header')
</head>
<body class="body">
<!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{asset('/')}}images/light-loader.gif" alt="admin"></div>
                <p>Please wait...</p>
            </div>
        </div>
<!-- Overlay For Sidebars -->

<div id="wrapper" class="wrapper">
    <nav class="navbar navbar-fixed-top" style="background-color: #a4c5a9;">
        <div class="container-fluid">
            <div class="navbar-btn float-left">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand float-left">
                <a href="#" style="color: black; font-weight: bold;">Sports News Blog</a>
            </div>

            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
                        </li>
                        <li>
                            <a href="#" class="icon-menu"><i class="icon-logout"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- left sidebar  -->
    @include('admin.layouts.left-sidebar')

    {{--    Main content--}}

        @yield('content')

    {{--    end Main content--}}
</div>


<!-- Javascript -->
<script src="{{asset('/')}}admin/js/libscripts.bundle.js"></script>
<script src="{{asset('/')}}admin/js/vendorscripts.bundle.js"></script>

<script src="{{asset('/')}}admin/js/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('/')}}admin/js/morrisscripts.bundle.js"></script>
<script src="{{asset('/')}}admin/js/knob.bundle.js"></script>
<script src="{{asset('/')}}admin/js/mainscripts.bundle.js"></script>
<script src="{{asset('/')}}admin/js/sortable-nestable.js"></script>
<script src="{{asset('/')}}admin/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@yield('script')
<script>
    setTimeout(function(){
        $('#alert').slideUp()
    }, 2000);
</script>

</body>
</html>

