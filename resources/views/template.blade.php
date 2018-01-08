<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="{{secure_asset('/js/jquery.cookie.js')}}"></script>
    <link href="{{secure_asset('/css/otherCss.css')}}" rel="stylesheet">
    <script src="{{secure_asset('/js/otherJs.js')}}"></script>


    {{--<script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>--}}

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }

        /* here */

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            -webkit-border-radius: 0 6px 6px 6px;
            -moz-border-radius: 0 6px 6px;
            border-radius: 0 6px 6px 6px;
        }

        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }

        .dropdown-submenu > a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #ccc;
            margin-top: 5px;
            margin-right: -10px;
        }

        .dropdown-submenu:hover > a:after {
            border-left-color: #fff;
        }

        .dropdown-submenu.pull-left {
            float: none;
        }

        .dropdown-submenu.pull-left > .dropdown-menu {
            left: -100%;
            margin-left: 10px;
            -webkit-border-radius: 6px 0 6px 6px;
            -moz-border-radius: 6px 0 6px 6px;
            border-radius: 6px 0 6px 6px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <div class="dropdown">
                        <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary">
                            Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            @if(!empty($parentMenu))
                                @foreach($parentMenu as $one)
                                    @if(!empty($one['children']))
                                        <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">{{$one['name']}}</a>
                                            <ul class="dropdown-menu">
                                                @foreach($one['children'] as $two )
                                                    @if(!empty($two['children']))
                                                        <li class="dropdown-submenu">
                                                            <a href="#">{{$two['name']}}</a>
                                                            <ul class="dropdown-menu">
                                                                @foreach($two['children'] as $three )
                                                                    <li><a href="#">{{$three['name']}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="divider"></li>
                                    @else
                                        <li><a href="#">{{$one['name']}}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')


<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
<script id="dsq-count-scr" src="//newssite-2.disqus.com/count.js" async></script>
</body>
</html>
