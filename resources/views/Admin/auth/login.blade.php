{{--<!DOCTYPE html>--}}
{{--<html lang="ar">--}}

{{--<head>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    @include('Admin.auth.css')--}}
{{--</head>--}}

{{--<div class="container">--}}
{{--    <main class="signup-container" style="margin-top: 40px">--}}
{{--        <h1 class="heading-primary">تسجيل الدخول<span class="span-blue">.</span></h1>--}}
{{--        <p class="text-mute">يرجي ادخال بيانات التحقق</p>--}}

{{--        <form class="signup-form" action="{{route('admin.login')}}" method="post" id="LoginForm">--}}
{{--            @csrf--}}
{{--            <label class="inp">--}}
{{--                <input type="email" name="email" class="input-text" placeholder="&nbsp;">--}}
{{--                <span class="label">البريد الإلكتروني</span>--}}
{{--                <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>--}}
{{--            </label>--}}
{{--            <label class="inp">--}}
{{--                <input type="password" name="password" class="input-text" placeholder="&nbsp;" id="password">--}}
{{--                <span class="label">كلمة المرور</span>--}}
{{--                <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>--}}
{{--            </label>--}}
{{--            <button class="btn btn-login" id="loginButton">تسجيل الدخول</button>--}}
{{--        </form>--}}
{{--    </main>--}}
{{--    <div class="welcome-container">--}}
{{--        <h1 class="heading-secondary">مرحبا بعودتك <span class="lg">{{($setting->title) ?? 'تطبيق'}}</span></h1>--}}
{{--        <img src="{{asset('assets/uploads/log.gif')}}" alt="login" style="max-height: 500px;mix-blend-mode: multiply">--}}
{{--    </div>--}}
{{--</div>--}}

{{--@include('Admin.auth.js')--}}
{{--</html>--}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/admin/') }}/assets/img/favicon.png">
    <title> Dashboard </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/admin/') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets/admin/') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/admin/') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/admin/') }}/assets/css/soft-ui-dashboard.min.css?v=1.0.5" rel="stylesheet" />
    @toastr_css
</head>

<body class="">
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Sign In</h4>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body">
                                <form role="form" action="{{route('admin.login')}}" method="post" id="LoginForm">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" id="loginButton">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                            <img src="{{ asset('assets/admin/') }}/assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
                            <div class="position-relative">
                                <img class="max-width-500 w-100 position-relative z-index-2" src="{{ asset('assets/admin/') }}/assets/img/illustrations/chat.png" alt="chat-img">
                            </div>
                            <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
                            <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@toastr_js
@toastr_render
<!--   Core JS Files   -->
<script src="{{ asset('assets/admin/') }}/assets/js/core/popper.min.js"></script>
<script src="{{ asset('assets/admin/') }}/assets/js/core/bootstrap.min.js"></script>
<script src="{{ asset('assets/admin/') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('assets/admin/') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- Kanban scripts -->
<script src="{{ asset('assets/admin/') }}/assets/js/plugins/dragula/dragula.min.js"></script>
<script src="{{ asset('assets/admin/') }}/assets/js/plugins/jkanban/jkanban.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/admin/') }}/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>
