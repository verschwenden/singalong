<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">



        <title>Songs</title>

        <!-- Styles -->
        <style>
            
        </style>

        <script type="text/javascript">
            var APP_URL = {!! json_encode(url('/')) !!}
        </script>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <!--
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li><router-link to="/">Songs</router-link></li>
                      </ul>
                    </div>
                  </div>
                </nav>
!-->



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Home</a>!-->

      <!-- to fix:
        not working, shows # instead of #/ !-->
      <router-link to="/" class="navbar-brand">Home</router-link> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><router-link to="/">Songs</router-link></li>
<!--
        <li><router-link to="/editor">Editor</router-link></li>
!-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>





            <router-view></router-view>

            
            <hr>
            </div>
            <hr>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ URL::to('/js/app.js') }}"></script>
    </body>
</html>