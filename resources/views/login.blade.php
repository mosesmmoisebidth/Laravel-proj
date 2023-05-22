<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
</head>

<body>

    <div class="container login">

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <h1 class="login-title">Hello Again!</h1>
                <p class="login-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Et nesciunt nisi corrupti delectus sint ullam aspernatur repudiandae adipisci unde ipsa.
                </p>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-6 offset-md-3">
                <div class="mb-4">
                    <input type="text" class="form-control" id="" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="" placeholder="password">
                </div>
                <div class="text-end mb-3">
                    <a class="forgot" href="{{url('/forgot-password')}}">Forgot password?</a>
                </div>
                <div class="text-center mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Keep me signed in
                    </label>
                </div>
                <div class="text-center mb-3 d-grid gap-2 col-12 "> 
                    <button type="button" class="btn btn-login">Login</button>
                </div>
                <div class="text-center my-4">
                    <p>Or login with</p>
                </div>
                <div class="row">
                    <div class="col-4 social text-start">
                        <button type="button" class="btn btn-social facebook">
                            <!-- <img src="img/icon/facebook.png" alt=""> -->
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-4 social text-center">
                        <button type="button" class="btn btn-social google">
                            <img src="{{asset('img/icon/google.png')}}" alt="">
                        </button>
                    </div>
                    <div class="col-4 social text-end">
                        <button type="button" class="btn btn-social apple">
                            <!-- <img src="img/icon/apple.png" alt=""> -->
                            <i class="fa fa-apple" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>