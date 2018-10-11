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

<body class="layout-boxed">

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-boxed">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('main') }}">ShoppingList Test Project</a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li>
                    <a class="sidebar-control sidebar-main-toggle hidden-xs">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset(env('THEME'))}}/assets/images/placeholder.jpg" alt="">
                        <span>{{ Auth::user()->name }}</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-switch2"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->


<!-- Page header -->
<div class="page-header">
    <div class="breadcrumb-line breadcrumb-line-wide">
        <div class="breadcrumb-boxed">
            <ul class="breadcrumb">
                <li class="active"><i class="icon-home2 position-left"></i> Home</li>
            </ul>
        </div>
    </div>

    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-home2 position-left"></i> <span class="text-semibold">Home</span></h4>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-default">
            <div class="sidebar-content">

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-title h6">
                        <span>Main navigation</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->

                            <li class="active"><a href="{{ route('main') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>


                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

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
