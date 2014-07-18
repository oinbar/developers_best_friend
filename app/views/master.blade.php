{{ HTML::style('css/css.css'); }}

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Developers Best Friend</title>
   </head>
   <body>
     <div id="header">
        @yield('header')
        <ul id="nav">
			<li><a href="/lorem_ipsum">lorem ipsum generator</a></li>
			<li><a href="/user_gen">user generator</a></li>
		</ul>
     </div>
     
     @if(Session::has('message'))     
     <div class="alert alert-success">
        {{Session::get('message')}}
     </div>
     @endif 
     <div id="content">
     	@yield('content') 
     </div>
   </body>
</html>