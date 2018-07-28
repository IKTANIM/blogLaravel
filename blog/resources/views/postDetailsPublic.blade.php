<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Home page</title>
    <link rel="shortcut icon" href="logo.png" type="image/png" />
    <title>Blog Post - Start Bootstrap Template</title>


    <!-- Custom styles for this template -->
    <link href="/css/blog-post.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">IKT BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('signin')}}">SignIn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('signup')}}">SignUp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Search</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
        <h1 class="mt-4">{{$post->postTitle}}</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">{{$post->user->name}}</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{$post->updated_at->format('M')}} {{ $post->updated_at->format('d') }}, {{ $post->updated_at->format('Y') }} 
            {{-- January 1, 2018 at 12:00 PM --}}

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="/1.jpg" style="height:300px;" alt="image">

          <hr>

          <!-- Post Content -->
          <div class="col-md-12">
          {{$post->description}}
          </div>
          </p>
          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
                <a href="{{route('signin')}}" class="btn btn-primary">Please SignIn</a>
            </div>
          </div>

          <!-- Single Comment -->
          @foreach ($post->comments as $comment)
          <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="/default.png" style="width:42px" alt="">
              <div class="media-body">
              <h5 class="mt-0">{{$comment->commentedUser}}</h5>
                {{$comment->commentdData}}
              </div>
            </div>
          @endforeach

          <!-- Comment with nested comments -->
          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark customFotter">
      <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy;
          <a href="{{route('home' )}}">IKTblog.com</a> 2018</p>
      </div>
      <!-- /.container -->
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/jquery/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
