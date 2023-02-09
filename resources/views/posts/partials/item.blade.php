<div class="px-4 py-8 max-w-xl bg-fuchsia-50 shadow-md rounded-lg">
        <div>
            <a href="{{route("posts.show", $post->id)}}">
                <img src="/storage/posts/{{ $post->thumbnail }}" class="rounded-lg">
            </a>
        </div>
        <div class="px-4 py-2 mt-2">
            <h2 class="font-bold text-2xl text-gray-800">{{$post->title}}</h2>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                {!! $post->preview !!}
            </p>
        </div>
</div>
