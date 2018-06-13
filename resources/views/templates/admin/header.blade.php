<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@lang('lang.title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ Html::style(asset('css/bootstrap.min.css')) }}
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('lang.setting')<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">@lang('lang.logout')</a></li>
                            <li><a href="#">@lang('lang.profile')</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">

