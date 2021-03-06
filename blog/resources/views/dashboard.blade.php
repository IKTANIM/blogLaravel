<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home page</title>
  <link rel="shortcut icon" href="/logo.png" type="image/png" />

  <!-- Bootstrap core CSS -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/blog-home.css" rel="stylesheet">
  <link href="/css/adminLte.css" rel="stylesheet">
  <link href="/css/font-awesome/css/font-awesome.css" rel="stylesheet">
  <style>
    .customFotter {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 50px;
      line-height: 50px;
      background-color: #f5f5f5;
      color: black;
      text-align: center;
      border-top: 1px solid LightGray;
    }
    /* .acustom{
        text-decoration: none; color:inherit;

    } */
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">IKT BLOG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link btn btn-primary btn-block btn-flat" href="{{route('home')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary btn-success btn-flat" href="{{route('logout')}}">logout</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-md-3 col-sm-6 col-xs-12" >
        <br>
        <a href="userAllPosts.html">
          <div class="info-box" style="cursor:pointer;background-color:lightgrey" >
            <span class="info-box-icon bg-green">
              <i class="fa  fa-hand-paper-o"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">Total Posts</span>
              <span class="info-box-number">43</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
          <br>
            <div class="info-box" style="cursor:pointer; background-color:lightgrey">
              <span class="info-box-icon bg-red">
                <i class="fa  fa-clock-o"></i>
              </span>
  
              <div class="info-box-content">
                <span class="info-box-text">Last Blog</span>
                <span class="info-box-number">2 months ago</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <br>
            <a href="#">
              <div class="info-box" style="cursor:pointer; background-color:lightgrey">
                <span class="info-box-icon bg-blue">
                  <i class="fa  fa-plus-square-o"></i>
                </span>
    
                <div class="info-box-content">
                  <span class="info-box-text"><br>Add Post</span>
                  <!-- <span class="info-box-number">2 months ago</span> -->
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
            <!-- /.info-box -->
          </div>
     
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark customFotter">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;
        <a href="#">IKTblog.com</a> 2018</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>