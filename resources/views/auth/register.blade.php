<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/logo/logo-sm.png" type="image/gif" sizes="16x16">
    <title>Sign Up</title>
    <meta name="og:description" content="unveiling the dataments free bootstrap admin dashboard template, your ultimate solution to a seamless web management experience! this is more than just a template; it's your partner in crafting a digital masterpiece.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="dataments - free bootstrap admin dashboard template">
    <meta property="og:image" content="#">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../lib/bootstrap_5/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <!-- main css -->
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- responsive css -->
    <link rel="stylesheet" href="../assets/css/responsive.css">

</head>

<body>

    <section class="d2c_login_system d2c_sign_up d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="d2c_login_wrapper bg-white">
                        <div class="text-center mb-4">
                            <h4 class="text-secondary text-capitalize">Create your account</h4>
                            <p class="text-muted">Already have an account? <a href="{{url("/login")}}"
                                    class="text-capitalize text-primary text-decoration-none d2c_link">Sign in here</a>
                            </p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label">Full Name:</label>
                                <div class="row">
                                    <div class="col-md mb-3 mb-md-0">
                                        <input type="text" class="form-control" placeholder="First Name" name="name" :value="old('name')" required autofocus autocomplete="name">
                                        @if ($errors->has('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md">
                                        <label class="form-label d-md-none">Last Name:</label>
                                        <input type="text" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label class="form-label">Your Email</label>
                                <input type="email" class="form-control" placeholder="Enter your mail" name="email" :value="old('email')" required autocomplete="username">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0" placeholder="8+ character required" name="password" required autocomplete="new-password">
                                    <button class="btn ps-0 border-start-0" type="button" id="button-addon2"><i class="far fa-eye-slash"></i></button>
                                </div>
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0" placeholder="Re-enter Password" name="password_confirmation" required autocomplete="new-password">
                                    <button class="btn ps-0 border-start-0" type="button" id="button-addon3"><i class="far fa-eye-slash"></i></button>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-muted" for="exampleCheck1">I accept the Terms and conditions</label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary rounded-pill w-100 text-capitalize">Create an account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Initial  Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../lib/bootstrap_5/bootstrap.bundle.min.js"></script>

    <!-- custom js -->
    <script src="../assets/js/main.js"></script>

</body>

</html>
