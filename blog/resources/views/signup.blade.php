<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>SignUP</title>
    <link rel="shortcut icon" href="logo.png" type="image/png" />
    <style>
        .customFotter{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height:50px;
            line-height: 50px;
            background-color: #f5f5f5;
            color: black;
            text-align: center;
            border-top: 1px solid LightGray  ;
        }
    </style>
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
            <li class="nav-item ">
              <a class="nav-link" href="{{route('home')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('signin')}}">SignIn</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top:5%;margin-left:28%;margin-right:10%">
        <h2>SignUP</h2>
        <form class="form-horizontal" method="POST" action="#">
                <div class="form-group">
                        <label for="email" class="control-label col-sm-2">Email:</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                        </div>
                    </div>
            <div class="form-group">
                <label for="userName" class="control-label col-sm-2">Name:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="userName" placeholder="Enter your name">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-sm-2">Password:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" placeholder="Enter your password">
                </div>
            </div>
            <div class="form-group">
                    <label for="confirmPassword" class="control-label col-sm-2">Confirm Password:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="confirmPassword" placeholder="Re-Enter your password">
                    </div>
                </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <input type="submit" class="form-control btn btn-primary btn-block btn-flat" value="submit">
                </div>
            </div>

        </form>
    </div>
    <footer class="py-5 bg-dark customFotter" >
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; <a href="">IKTblog.com</a> 2018</p>
        </div>
        <!-- /.container -->
      </footer>
  
</body>

</html>