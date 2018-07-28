<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/jquery/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>Create Post</title>
    <link rel="shortcut icon" href="/logo.png" type="image/png" />
    <style>
        .customFotter {
            margin-bottom: 0%;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f5f5f5;
            color: black;
            text-align: center;
            border-top: 1px solid LightGray;
        }
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
    <div class="container" style="margin-top:5%">
        <h2>Create Post</h2>
        <form class="form-horizontal" method="POST">
            <div class="form-group">
                <label for="title" class="control-label col-sm-2">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="description" class="control-label col-sm-2">Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter post description" id="article-ckeditor"></textarea>
            </div>
            <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary btn-block btn-flat" value="submit">
            </div>

        </form>
    </div>
    <footer class="py-5 bg-dark customFotter">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy;
                <a href="">IKTblog.com</a> 2018</p>
        </div>
        <!-- /.container -->
    </footer>

</body>
<script src="/vendor/unisharplaravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('article-ckeditor');
</script>

</html>