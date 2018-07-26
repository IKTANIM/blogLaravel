<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>
<body>
   <div class="container" style="margin-top:10%;margin-left:14%;margin-right:10%">
       <h2>SignUP</h2>
    <form class="form-horizontal">
        {{-- <div class="col-md-8"> --}}
                <div class="form-group">
                    <label for="userName" class="control-label col-sm-2">Name:</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="userName">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="password" class="control-label col-sm-2">Password:</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="password">
                    </div>
                    </div>
                    <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                        <input type="button" class="form-control btn-suuccess" value="submit">
                            </div>
                    </div>
    {{-- </div> --}}
       
    </form>
   </div>
</body>
</html>