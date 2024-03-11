
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('admin-assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}" type="image/x-icon">
    <title>Voxo - log In</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/bootstrap.css') }}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/style.css') }}">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/responsive.css') }}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-section">
                    <div class="materialContainer">
                        <div class="box">
                            <div class="login-title">
                                <h2>Login</h2>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input">
                                    <label for="email">Email</label>
                                    <input type="text" name="email"
                                        id="email"class="@error('email') is-invalid @enderror" 
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="spin"></span>
                                </div>

                                <div class="input">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password"
                                        class=" @error('password') is-invalid @enderror"  required
                                        autocomplete="current-password" autofocus>
                                    <span class="spin"></span>
                                </div>

                                {{-- <a href="forgot-password.html" class="pass-forgot">Forgot your password?</a> --}}

                                <div class="button login">
                                    <button type="submit">
                                        <span>Log In</span>
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                                <div class="input">
                                    <label for="remember_me" style="    padding-left: 30px;">Remember me</label>
                                    <input type="checkbox" name="remember" id="remember_me" style="    width: 19px;">
                                    <span class="spin"></span>
                                </div>
                                {{-- <p class="sign-category">
                                <span>Or sign in with</span>
                            </p> --}}

                                {{-- <div class="row gx-md-3 gy-3">
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <div class="social-media fb-media">
                                            <img src="assets/images/facebook.png" class="img-fluid blur-up lazyload"
                                                alt="">
                                            <h6>Facebook</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <div class="social-media google-media">
                                            <img src="assets/images/google.png" class="img-fluid blur-up lazyload"
                                                alt="">
                                            <h6>Google</h6>
                                        </div>
                                    </a>
                                </div>
                            </div> --}}

                                {{-- <p>Not a member? <a href="sign-up.html" class="theme-color">Sign up now</a></p> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="{{ asset('admin-assets/js/jquery-3.6.0.min.js') }}"></script>

        <!-- Bootstrap js-->
        <script src="{{ asset('admin-assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

        <!-- Theme js-->
        <script src="{{ asset('admin-assets/js/script.js') }}"></script>
    </div>
</body>

</html>
