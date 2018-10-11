<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShoppingList - Register</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset(env('THEME'))}}/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{asset(env('THEME'))}}/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset(env('THEME'))}}/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset(env('THEME'))}}/assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset(env('THEME'))}}/assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/core/app.js"></script>
    <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('main') }}">ShoppingList Test Project</a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav navbar-right">

            <li>
                <a href="{{ route('login') }}">
                    <i class="icon-user-check"></i> <span class="visible-xs-inline-block position-right"> Sign in</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Advanced login -->
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="panel panel-body login-form">
                    <div class="text-center">
                        <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                        <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
                    </div>

                    <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

                    <div class="form-group has-feedback has-feedback-left{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input name="name" type="text" class="form-control" placeholder="Name" value="{{ old('name') }}" required autofocus>
                        <div class="form-control-feedback">
                            <i class="icon-user-check text-muted"></i>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group has-feedback has-feedback-left{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input name="username" type="text" class="form-control" placeholder="Login" value="{{ old('username') }}" required>
                        <div class="form-control-feedback">
                            <i class="icon-paperplane text-muted"></i>
                        </div>
                        @if ($errors->has('username'))
                            <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="content-divider text-muted form-group"><span>Your privacy</span></div>

                    <div class="form-group has-feedback has-feedback-left{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input name="password" type="password" class="form-control" placeholder="Create password" required>
                        <div class="form-control-feedback">
                            <i class="icon-user-lock text-muted"></i>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Repeat password" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock text-muted"></i>
                        </div>
                    </div>

                    <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
                </div>
            </form>
            <!-- /advanced login -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Footer -->
    <div class="footer text-muted">
        &copy; 2018. <a href="#">ShoppingList Test Project</a> by <a href="https://github.com/Saidimom/shoppinglist" target="_blank">Saidimom</a>
    </div>
    <!-- /footer -->

</div>
<!-- /page container -->

</body>
</html>


