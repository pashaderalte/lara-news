@extends('layout.app')

@section('title', $post->title)

@section('content')
    @include('partials.header')

    <div>
        <div class="m-auto px-4 py-8 max-w-xl">
            <div class="bg-fuchsia-50 rounded-md shadow-md" >
                <div>
                    <img class="rounded-md" src="/storage/posts/{{ $post->thumbnail }}">
                </div>
                <div class="px-4 py-2 mt-2 bg-white rounded-md">
                    <h2 class="font-bold text-2xl text-gray-800">{{$post->title}}</h2>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {!! $post->description !!}
                    </p>
                </div>
            </div>


            <div>
                <section class="rounded-b-lg mt-4">
                    <form method="POST" action="{{ route("comment", $post->id) }}">
                        @csrf

                        <textarea name="text" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl @error('text') border-red-800 @enderror" placeholder="Your opinion..." spellcheck="false"></textarea>
                        @error('text')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="font-bold py-2 px-4 w-full bg-purple-500 text-lg text-white shadow-md rounded-lg ">Post</button>
                    </form>

                    <div id="task-comments" class="pt-4 mt-6">
                        <h1 class="text-3xl font-medium mb-3">What Users Think About It:</h1>
                        @if(!$post->comments->isEmpty())
                            @foreach($post->comments as $comment)
                            <div class="bg-fuchsia-50 rounded-r-lg rounded-bl-lg p-3 flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                                <div class="flex flex-row justify-center mr-2">
                                    <h3 class="text-purple-500 font-semibold text-lg text-center md:text-left ">{{ $comment->user->name }}</h3>
                                </div>


                                <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->text }}</p>
                            </div>
                            @endforeach
                        @else
                            <h1 class="text-2xl text-gray-700 opacity-50 text-center mt-10">They think nothing</h1>
                        @endif
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
