@extends('layout.app')

@section('title', 'Get lubed up')

@section('content')
    <div class="h-screen bg-fuchsia-100 flex flex-col space-y-10 justify-center items-center">
        <div class="bg-fuchsia-50 w-96 shadow-xl rounded-md p-5">
            <h1 class="text-3xl font-medium">Welcome back, master</h1>

            <form class="space-y-5 mt-5" method="POST" action="{{route("admin.login_process")}}">
                @csrf

                <input name="email" type="text" class="w-full h-12 border border-purple-500 rounded px-3 @error('email') border-red-800 @enderror" placeholder="Email" />

                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="password" type="password" class="w-full h-12 border border-purple-500 rounded px-3 @error('password') border-red-800 @enderror" placeholder="Password" />

                @error('password')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-purple-500 rounded-md py-3 font-medium text-white">Submit</button>
            </form>
        </div>
    </div>
@endsection


