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
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form action="{{ route('register') }}" method="post" class="mx-1 mx-md-4">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" class="form-control" name = 'userName' placeholder="Your name" value="{{old('userName')}}"/>
                                            @if($errors->has('userName'))
                                                <div class="alert alert-danger">
                                                    {{$errors->first('userName')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" class="form-control" name="userEmail" placeholder="E-mail" value="{{old('userEmail')}}" />
                                            @if($errors->has('userEmail'))
                                                <div class="alert alert-danger">
                                                    {{$errors->first('userEmail')}}
                                                </div>
                                            @endif
                                        </div>
                                        <br>
                                        @if(session('unsuccessful'))
                                            <div class="alert alert-danger">
                                                {{session('unsuccessful')}}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" class="form-control" name="userPassword" placeholder="Password"/>
                                            @if($errors->has('userPassword'))
                                                <div class="alert alert-danger">
                                                    {{$errors->first('userPassword')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4cd" class="form-control" name="userPasswordConfirm" placeholder="Confirm Password" />
                                            @if($errors->has('userPasswordConfirm'))
                                                <div class="alert alert-danger">
                                                    {{$errors->first('userPasswordConfirm')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    @if(session('unsuccessful'))
                                        <div class="alert alert-danger">
                                            {{session('unsuccessful')}}
                                        </div>
                                    @endif

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" name="agreeStatement" id="form2Example3c" />

                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a><br>
                                        </label>
                                        @if($errors->has('agreeStatement'))
                                            <div class="alert alert-danger">
                                                {{$errors->first('agreeStatement')}}
                                            </div>

                                        @endif
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                     class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
