@extends('layouts.app')
@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg ">
   <form action=" {{route ('login')}}" method="post">
    @csrf 
    {{-- makes sure that the person submiting the form is intending to submit that form --}}
 
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
    
   <div>
       <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"> Let me in!</button>
   </div>
</form>
   </div>
</div>
@endsection