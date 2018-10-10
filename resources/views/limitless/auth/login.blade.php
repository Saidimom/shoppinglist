<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShoppingList</title>

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
    <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/core/app.js"></script>
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
                <a href="{{ route('register') }}">
                    <i class="icon-user-plus"></i> <span class="visible-xs-inline-block position-right"> Register</span>
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

            <!-- Simple login form -->
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="panel panel-body login-form">
                    <div class="text-center">
                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                        <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
                    </div>

                    <div class="form-group has-feedback has-feedback-left{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input name="username" type="text" class="form-control" placeholder="Username" value="{{ old('username') }}">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                        @if ($errors->has('username'))
                            <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="form-group has-feedback has-feedback-left{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
                    </div>

                </div>
            </form>
            <!-- /simple login form -->

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
