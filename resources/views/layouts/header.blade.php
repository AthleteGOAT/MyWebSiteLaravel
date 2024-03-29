
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="https://i.pinimg.com/564x/d1/21/4d/d1214d7fd4066ea10adc39e9b00a49ce.jpg" alt="Site Logo" width="70" height="62">
            </a>
            <strong class="lead my-3 ">Cats' blog</strong>
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
                <form action="{{ route('goToCreate') }}" method="get" class="d-inline">
                    <button type="submit" class="btn btn-primary">Add post</button>
                </form>
                <form action="{{ route('logout') }}" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary me-2">Log out</button>
                </form>
            </div>
        @endif



    </header>
</div>

