@extends('layout.app')

@section('title', 'Welcome to the club')

@section('content')
    <div class="h-screen bg-fuchsia-100 flex flex-col space-y-10 justify-center items-center">
        <div class="bg-fuchsia-50 w-96 shadow-xl rounded-md p-5">
            <h1 class="text-3xl font-medium">Sign Up A New Account</h1>

            <form action="{{route("register_process")}}" class="space-y-5 mt-5" method="POST">
                @csrf

                <input name="name" type="text" class="w-full h-12 border border-purple-500 rounded px-3 @error('name') border-red-800 @enderror" placeholder="Name" />

                @error('name')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="email" type="text" class="w-full h-12 border border-purple-500 rounded px-3 @error('email') border-red-800 @enderror" placeholder="Email" />

                @error('email')
                     <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="password" type="password" class="w-full h-12 border border-purple-500 rounded px-3 @error('password') border-red-800 @enderror" placeholder="Password" />

                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="password_confirmation" type="password" class="w-full h-12 border border-purple-500 rounded px-3 @error('password_confirmation') border-red-800 @enderror" placeholder="Password confirmation" />

                @error('password_confirmation')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div>
                    <a href="{{route("login")}}" class="font-medium text-purple-500 hover:bg-purple-500 hover:text-white rounded-md p-2">Have an account?</a>
                </div>

                <button type="submit" class="text-center w-full bg-purple-500 rounded-md text-white py-3 font-medium">Submit</button>
            </form>
        </div>
@endsection


