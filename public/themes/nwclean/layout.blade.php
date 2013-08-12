<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link href='//fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css'/>
    <link href="{{ url(theme_path('css/1140.css')) }}" rel="stylesheet" media="screen">
    <link href="{{ url(theme_path('css/prism.css')) }}" rel="stylesheet" media="screen">
    <link href="{{ url(theme_path('css/font-awesome.min.css')) }}" rel="stylesheet" media="screen">
    <link href="{{ url(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div id="logobg"></div>
    <header class="container">
      <div class="row">
        <div class="threecol">
          <a href="{{ url('/') }}" title="{{ site_title() }}" rel="home"><h1>{{ site_title() }}</h1></a>
        </div>
        <nav class="eightcol main last">
          <ul id="menu-main-navigation-menu">
            <li><a href="{{ url('/archive') }}" {{ ((Request::is('/') || Request::is('post/*')) ? 'class="active"' : '') }}>Posts</a></li>
          </ul>
        </nav>
      </div>
    </header>
    @include(theme_view('inc.breadcrump'))
    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>

    <footer class="container">
      <div class="row">
          <p>Copyright <a href="http://www.nicolaswidart.com">Nicolas Widart</a> | Proudly powered by <a href="http://wardrobecms.com">Wardrobe</a></p>
      </div>
    </footer>
    <script src="{{ url(theme_path('js/prism.js')) }}"></script>
  </body>
</html>
