<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Posty</title>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between mb-6 ">
        <Ul class="flex items-center">
<li> <a href="/"class="p-3">Home</a></li>
<li> <a href="{{route ('dashboard')}}"class="p-3">Dashboard</a></li>
<li> <a href=""class="p-3">Post</a></li>
{{-- @if (auth()->user())
show logged in stuff if user is signed in
@else
show other stuff --}}

        </Ul>
        <Ul class="flex items-center">
            @auth
            <li> <a href=""class="p-3">{{auth()-> user()->name}}</a></li>  
            {{-- doing the form thingy so that csrf can be activated --}}
            <li>
                <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
        </li>
            @endauth
             {{-- above block is shown when we are logged in --}}
            @guest
            <li> <a href="{{ route('login')}}"class="p-3">login</a></li>
            <li> <a href="{{ route('register')}}"class="p-3">Register</a></li>
            @endguest
            {{-- above block is shown when we are a guest  --}}
         
            
                    </Ul>
    </nav>
@yield('content') 
</body>
</html>