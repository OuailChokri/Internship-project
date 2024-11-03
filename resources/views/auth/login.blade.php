<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/logo/logo-sm.png" type="image/gif" sizes="16x16">
    <title>Log In</title>
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

<section class="d2c_login_system d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="d2c_login_wrapper bg-white">
                    <div class="text-center mb-4">
                        <h4 class="text-secondary text-capitalize">Connectez-vous à votre compte</h4>
                        <p class="text-muted">Vous n'avez pas de compte ? <span class="text-capitalize text-primary">Sing up here</span></p>

                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label class="form-label">Votre adresse e-mail</label>
                            <input type="email" class="form-control" placeholder="Entrer votre e-mail" name="email" :value="old('email')" required autofocus autocomplete="username">
                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Mot de passe</label>
                            <div class="input-group">
                                <input type="password" class="form-control border-end-0" placeholder="8 caractères minimum requis" name="password" required autocomplete="current-password">
                                <button class="btn ps-0 border-start-0" type="button" id="button-addon2"><i class="far fa-eye-slash"></i></button>
                            </div>
                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <!-- Remember Me -->
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-muted" for="exampleCheck1">Se souvenir de moi</label>
                                </div>
                            </div>
                            <div class="col text-end">
                                <a href="{{ route('password.request') }}" class="d2c_link text-primary text-capitalize">Mot de passe oublié ?</a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary rounded-pill w-100 text-capitalize">login</button>
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

