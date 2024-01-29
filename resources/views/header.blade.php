<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="{{ route('restrictedPage') }}" class="nav-link px-2">Restricted</a></li>
        </ul>
    @if(!session()->has('user_id'))
            <div class="col-md-3 text-end">
                <form action="{{ route('auth') }}" method="get" class="d-inline">
                    <button type="submit" class="btn btn-outline-primary me-2">Login</button>
                </form>
                <form action="{{ route('goToRegister') }}" method="get" class="d-inline">
                    <button type="submit" class="btn btn-primary">Sign-up</button>
                </form>
            </div>

    @endif
        @if(session()->has('user_id'))
            <div class="col-md-3 text-end">
                <form action="{{ route('logout') }}" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary me-2">Log out</button>
                </form>
            </div>
        @endif



    </header>
</div>
</body>
</html>
