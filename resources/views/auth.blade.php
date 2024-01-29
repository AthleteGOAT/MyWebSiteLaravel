<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@include('header')
<div class="px-5 py-5 p-lg-0">
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                    <div class="text-center mb-12">
                        <!-- <a class="d-inline-block" href="#">
                                        <img src="https://preview.webpixels.io/web/img/logos/clever-primary-sm.svg" class="h-12" alt="...">

                                    </a> -->
                        <span class="d-inline-block d-lg-block h1 mb-lg-6 me-3">👋</span>
                        <h1 class="ls-tight font-bolder h2">
                            Welcome back!
                        </h1>
                        <p class="mt-2">Let's build something great</p>
                    </div>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="mb-1">
                            <label class="form-label" for="email" >Email address</label>
                            <input type="email" class="form-control" name="userEmailLogin" id="email" placeholder="Your email address">
                            @if($errors->has('userEmailLogin'))
                                <div class="alert alert-danger">
                                    {{$errors->first('userEmailLogin')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="userPasswordLogin" placeholder="Password" autocomplete="current-password">
                            @if($errors->has('userPasswordLogin'))
                                <div class="alert alert-danger">
                                    {{$errors->first('userPasswordLogin')}}
                                </div>
                            @endif
                            @if(session('unsuccessful'))
                                <div class="alert alert-danger">
                                    {{session('unsuccessful')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="check_example" id="check_example">
                                <label class="form-check-label" for="check">
                                    Keep me logged in
                                </label>
                            </div>
                        </div>
                        <div>

                                <button type="submit" class="btn btn-outline-primary me-2">Sign In</button>

                        </div>
                    </form>

                    <div class="my-6 d-flex align-items-center mt-5">
                        <small class="me-2">Don't have an account?</small>
                        <form action="{{ route('goToRegister') }}" method="get" class="mb-0">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
