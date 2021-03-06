<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larastudio Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/blog">Larastudio Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
                <a href="{{ route('post.create') }}" class="btn btn-success my-2 my-sm-0">Create Post</a>
            </div>
          </nav>
          <div class="container py-3">
          <div class="row">
            @foreach($posts as $post)
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h3>{{ $post->title }}</h3>
                  </div>
                  <div class="card-body">
                    <p>{{ substr($post->body, 0, 100) }}</p>
                  <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary btn-block">Read More</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
    </body>
</html>