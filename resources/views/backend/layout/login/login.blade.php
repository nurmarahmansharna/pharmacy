<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->


    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/css/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>


<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=#><b>Login</b></a>
        </div>



        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>




            <form action="{{route('login_user')}}" method="post">
                @csrf
                <div>

                    @if(session()->has('message'))
                   <div class="row" style="padding: 50px;">
                       <span class="alert alert-warning">{{session()->get('message')}}</span>
                   </div>
                   @endif

                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" id="username" placeholder="User Name"
                        autocomplete="off">
                    <span class="fa fa-user-circle-o form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                        autocomplete="off">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                {{-- <div class="form-group">
                    <label for="groups">Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                        <option value="4">shop boy</option>
                    </select>
                </div> --}}

                <div class="row">
                    <div class="col-xs-4">

                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>

                <p style="color:rgb(255, 0, 0);">if you forget your password, contact to admin...</p>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->

    <script src="/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/js/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>
