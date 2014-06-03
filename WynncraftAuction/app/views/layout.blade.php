<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{{$pageTitle}}} :: Wynncraft Auction House</title>

    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/{{{ $theme or 'flatly' }}}bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- Navigation bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Wynncraft Auction House</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li{{Request::path() == 'home' ? ' class="active"' : '';}}><a href="{{{$siteURL}}}/home"><i class="fa fa-home"></i> Home</a></li>
            <li{{Request::path() == 'trades' ? ' class="active"' : '';}}><a href="{{{$siteURL}}}/trades"><i class="fa fa-shopping-cart"> Current</i> Current Trades</a></li>
            @if($user !== 'Guest')
              <li{{Request::path() == 'user' . $user ? ' class="active"' : '';}}><a href="{{{$siteURL}}/user/{{{$user}}}"><i class="fa fa-user"> {{{$user}}}/i> {{$user}}</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <!-- Actual page content -->
    <div class="container">
      @yield('content')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>