@extends('layout.app')

@section('content')
    <div class="h-screen bg-fuchsia-100 flex flex-col space-y-10 justify-center items-center">
        <div class="bg-fuchsia-50 w-96 shadow-xl rounded-md p-5">
            <h1 class="text-3xl font-medium">Password Recovery</h1>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                Thank you! If we have an account registered to this address, your new password has already been delivered to your email!
            </p>
            <form action="{{route("home")}}">
                <button type="submit" class="text-center w-full bg-purple-500 rounded-md text-white py-3 font-medium">To the main page</button>
            </form>
        </div>
    </div>
@endsection


