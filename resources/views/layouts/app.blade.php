<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ __('app.name') }}</title>

        
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/memberschooltest.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">

            <div class="page-header">

                <h1>
                {{ __('app.name') }} 
                    <div class="pull-right">
                        <a href="{{ url('member') }}" class="btn btn-primary">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ __('forum.member') }}
                        </a>

                        <a href="{{ url('school') }}" class="btn btn-primary">
                            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> {{ __('forum.school') }}
                        </a>
                    </div>
                </h1>
                
            </div>

            @yield('content')

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ url('js/jquery.1.12.4.min.js') }}"></script>
        <!-- Include Bootstrap jquery plugin  -->
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
    </body>
</html>