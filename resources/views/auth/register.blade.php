{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
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
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Voxo - sign up</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/font-awesome.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/themify.css')}}">

    <!-- Feather icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/feather-icon.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors/bootstrap.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/responsive.css')}}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <!-- Sign Up Section Start -->
                <div class="login-section">
                    <div class="materialContainer">
                        <div class="box">
                            <div class="login-title">
                                <h2>Register</h2>
                            </div>
                            <form method="POST" action="{{ route('admin.register') }}">
                                @csrf
                            <div class="input">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name">
                                <span class="spin"></span>
                            </div>

                            <div class="input">
                                <label for="emailname">Email Address</label>
                                <input type="text" name="email" id="emailname">
                                <span class="spin"></span>
                            </div>

                            <div class="input">
                                <label for="pass">Password</label>
                                <input type="password" name="password" id="pass">
                                <span class="spin"></span>
                            </div>

                            <div class="input">
                                <label for="compass">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="compass">
                                <span class="spin"></span>
                            </div>

                            <div class="button login">
                                <button type="submit">
                                    <span>Sign Up</span>
                                    <i class="fa fa-check"></i>
                                </button>
                            </div>

                            {{-- <p class="sign-category">
                                <span>Or sign up with</span>
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
                            {{-- <p>
                                <a href="login.html" class="theme-color">Already have an account?</a>
                            </p> --}}
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Sign Up Section End -->
            </div>
        </div>
    </div>
    <!-- login page End -->

    <!-- latest js -->
    <script src="{{asset('admin-assets/js/jquery-3.6.0.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('admin-assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!-- Theme js -->
    <script src="{{asset('admin-assets/js/script.js')}}"></script>
</body>

</html>
