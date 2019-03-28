<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.getstisla.com/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2019 17:56:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login - Bank Sederhana</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{!! asset('vendor/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/fontawesome/css/all.min.css') !!}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{!! asset('vendor/stisla/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/stisla/css/components.css') !!}">
</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{!! asset('vendor/stisla/img/stisla-fill.svg') !!}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Login</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback" role="alert" style="display: unset">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback" role="alert" style="display: unset">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Belum punya akun? <a href="{!! route('register') !!}">Daftar Sekarang</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="assets/modules/jquery.min.js"></script>
<script src="assets/modules/popper.js"></script>
<script src="assets/modules/tooltip.js"></script>
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from demo.getstisla.com/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2019 17:56:49 GMT -->
</html>