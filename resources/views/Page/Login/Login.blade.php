<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | S-Econtract Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="S-Econtract Admin" name="description" />
    <meta content="NPT" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" disabled />
    <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet"
        disabled />

    <!-- icons -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-6 p-4">
                                    <div class="mx-auto">
                                        <a href="{{ route('login') }}">
                                            <img src="{{ asset('assets/images/logo-full.png') }}" alt="Logo"
                                                height="50" />
                                        </a>
                                    </div>

                                    <h6 class="h5 mb-0 mt-3">Chào mừng trở lại</h6>
                                    <p class="text-muted mt-1 mb-4">
                                        Vui lòng nhập email và mật khẩu
                                    </p>

                                    <form action="#" class="authentication-form">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="mail"></i>
                                                </span>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Vui lòng nhập email">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Mật khẩu</label>
                                            {{-- <a href="pages-recoverpw.html"
                                                class="float-end text-muted text-unline-dashed ms-1">Forgot your
                                                password?</a> --}}
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Vui lòng nhập mật khẩu">
                                            </div>
                                        </div>

                                        {{-- <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin"
                                                    checked>
                                                <label class="form-check-label" for="checkbox-signin">Remember
                                                    me</label>
                                            </div>
                                        </div> --}}

                                        <div class="mb-3 text-center d-grid">
                                            <button class="btn btn-primary" type="submit">Đăng nhập</button>
                                        </div>
                                    </form>
                                    {{-- <div class="py-3 text-center"><span class="fs-16 fw-bold">OR</span></div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <a href="" class="btn btn-white mb-2 mb-sm-0"><i
                                                    class='uil uil-google icon-google me-2'></i>With Google</a>
                                            <a href="" class="btn btn-white mb-2 mb-sm-0"><i
                                                    class='uil uil-facebook me-2 icon-fb'></i>With Facebook</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-lg-6 d-none d-md-inline-block">
                                    <div class="auth-page-sidebar">
                                        <div class="overlay"></div>
                                        <div class="auth-user-testimonial">
                                            <p class="fs-24 fw-bold text-white mb-1">I simply love it!</p>
                                            <p class="lead">"It's a elegent templete. I love it very much!"</p>
                                            <p>- Admin User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    {{-- <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="pages-register.html"
                                    class="text-primary fw-bold ms-1">Sign Up</a></p>
                        </div> <!-- end col -->
                    </div> --}}
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>

</html>
