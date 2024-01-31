<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<body>
@include('layouts.header')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Create post</h1>
            <form action="{{route('updated_post', ['id' => $data->id])}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name </label>
                    <input type="text" class="form-control" name="name" placeholder="Cat's name" value="{{$data->name}}"/>
                    @if($errors->has('name'))
                        <div class="alert alert-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">Birth date </label>
                    <input type="date" class="form-control" name="birth_date" value="{{$data->birth_date}}" />
                    @if($errors->has('birth_dat'))
                        <div class="alert alert-danger">
                            {{$errors->first('birth_date')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="description">About</label>
                    <textarea rows="5" class="form-control" name="about" placeholder="About cat"  >{{$data->about}}</textarea>
                    @if($errors->has('about'))
                        <div class="alert alert-danger">
                            {{$errors->first('about')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">Cat's image </label>
                    <input type="text" class="form-control" name="image" placeholder="Drop image link" value="{{$data->image}}" />
                    @if($errors->has('image'))
                        <div class="alert alert-danger">
                            {{$errors->first('image')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Edit
                    </button>
                    <button class="btn btn-default">
                        Cancel
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>
@include('layouts.footer')
</body>
</html>
