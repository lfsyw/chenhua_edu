<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="{{asset('admin-style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-style/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('admin-style/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('admin-style/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="ibox-content">
                <h2>后台系统登录</h2>
                <form class="m-t" role="form" action="{{route('login')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" class="form-control" placeholder="email" value="{{old('email')}}" required="">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">立即登录</button>

                </form>
                <p class="m-t">
                    <small>Powered By <a href="http://www.81f7.com">ChenHua</a> &copy; {{date('Y')}}</small>
                </p>
            </div>
        </div>
    </div>
</div>

</body>

</html>
