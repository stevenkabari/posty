@extends('layouts.app')
@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg ">
   <form action=" {{route ('register')}}" method="post">
    @csrf 
    {{-- makes sure that the person submiting the form is intending to submit that form --}}
<div class="mb-4">
 <label for ="name" class ="sr-only">Name </label>
 {{-- sr can be useful when you want to visually hide something on small screens but show it on larger screens for example: --}}
 <input type="text" name="name" id="name" placeholder=" Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror " Value="{{old('name')}}">  

 @error('name')
<div class="text-red-500 mt-2 text-sm">
    {{$message}}
</div>
@enderror

 {{-- @error plucks out errors for anything submitted --}}
     
 {{-- {{}}  is blade syntax to output shit--}}
</div>
<div class="mb-4">
    <label for ="username" class ="sr-only">User name </label>
    {{-- This can be useful when you want to visually hide something on small screens but show it on larger screens for example: --}}
    <input type="text" name="username" id="username" placeholder=" UserName" class="bg-gray-100 border-2 w-full p-4 rounded-lg" Value="{{old('username')}}">  
    {{-- the {{old('name')}} saves session data so the form does not keep on resetting --}}

    @error('username')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror 
    
</div>
   <div class="mb-4">
    <label for ="email" class ="sr-only">Email </label>
    {{-- This can be useful when you want to visually hide something on small screens but show it on larger screens for example: --}}
    <input type="email" name="email" id="name" placeholder="Email " class="bg-gray-100 border-2 w-full p-4 rounded-lg" Value="{{old('email')}}">  

    @error('email')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror   
</div>
   <div class="mb-4">
    <label for ="Password" class ="sr-only">Password </label>
    {{-- This can be useful when you want to visually hide something on small screens but show it on larger screens for example: --}}
    <input type="password" name="password" id="password" placeholder="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" Value="">   
    @error('password')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror  
</div>
   <div class="mb-4">
    <label for ="Password" class ="sr-only">Password Again </label>
    {{-- This can be useful when you want to visually hide something on small screens but show it on larger screens for example: --}}
    <input type="password" name="password_confirmation" id="passwordagain" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" Value="">   
    @error('password_confirmation')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror  
</div>
   <div>
       <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"> Son of a bitch i'm in</button>
   </div>
</form>
   </div>
</div>
@endsection