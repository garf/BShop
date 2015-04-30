<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @yield('meta-tags')
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ app('title') }}</title>
        <link rel="stylesheet" href="/t/common/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/t/common/bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="/t/common/fontawesome/css/font-awesome.min.css" />
        @yield('css')
        <script src="/t/common/jquery/jquery-1.11.2.min.js"></script>
        <script src="/t/common/bootstrap/js/bootstrap.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('js-top')
    </head>
    <body>
        <div class="container container-fluid">
            <header>
                <div class="">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
            </header>
            @yield('main-menu')
            <div class="row">
                <aside>
                    <div class="col-md-2">
                        @yield('left-sidebar')
                    </div>
                </aside>

                <div class="col-md-8">
                    @yield('body')
                </div>
                <aside>
                    <div class="col-md-2">
                        @yield('right-sidebar')
                    </div>
                </aside>
            </div>
            @yield('js-bottom')
        </div>
    @yield('footer')
    </body>
</html>