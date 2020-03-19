<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="preloader">
			<div class="loading">
				<img src="{{ url('./frontend/images/loading.gif') }}" width="80">
			</div>
		</div>

    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    @include('includes.script')
    @stack('prepend-script')
    @stack('addon-script')
    
  </body>
</html>
