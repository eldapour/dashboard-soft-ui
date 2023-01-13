<!DOCTYPE html>
<html>

<!--  head   -->
@include('Admin.layouts.head')
<!--  head   -->

<body class="g-sidenav-show  bg-gray-100">

<!--  aside   -->
@include('Admin.layouts.aside')
<!--  aside   -->

<!--  main   -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!--  main   -->
    <!-- Navbar -->
    @include('Admin.layouts.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <!--  content   -->
        @yield('content')
        <!--  content   -->
    </div>

</main>

<div style="position: absolute;right: 14px !important;top: 100px;">
    <div class="toast fade hide p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
        <div class="toast-header border-0">
            <i class="ni ni-check-bold text-success me-2"></i>
            <span class="me-auto font-weight-bold">Soft UI Dashboard</span>
            <small class="text-body">11 mins ago</small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
        </div>
        <hr class="horizontal dark m-0">
        <div class="toast-body">
           operation successfully
        </div>
    </div>
</div>

{{--<div style="position: absolute;right: 14px !important;top: 100px;">--}}
{{--    <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="dangerToast"--}}
{{--         aria-atomic="true">--}}
{{--        <div class="toast-header border-0">--}}
{{--            <i class="ni ni-notification-70 text-danger me-2"></i>--}}
{{--            <span class="me-auto text-gradient text-danger font-weight-bold"></span>--}}

{{--            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>--}}
{{--        </div>--}}
{{--        <hr class="horizontal dark m-0">--}}
{{--        <div class="toast-body">--}}
{{--            theres something wrong--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@toastr_js
@toastr_render
<!--  script   -->
@include('Admin.layouts.script')
<!--  script   -->

@yield('js')

</body>


</html>
