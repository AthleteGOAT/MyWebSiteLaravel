<div class="container">


    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">This is a web site with cute cats</h1>
            <p class="lead my-3">On this site i will post a lot of cats, and may be dog, but it is not sure.</p>
        </div>
    </div>

    <div class="row mb-2">
        @foreach($posts as $post)
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">Cat number {{ $post->id }}</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">{{ $post->name }}</a>
                        </h3>
                        <div class="mb-1 text-muted">Birth date:{{ $post->birth_date }}</div>
                        <p class="card-text mb-auto">About:{{ $post->about }}</p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block"  alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{ $post->image  }}" data-holder-rendered="true">
                </div>
            </div>
        @endforeach

    </div>
</div>
