@extends('layout.admin')

@section('title', isset($post) ? "Edit Article (id: {$post->id})" : 'Create New Article')

@section('content')
    <div class="flex px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($post) ? "Edit Article (id: {$post->id})" : 'Create New Article' }}</h3>

        <div class="mt-8 flex">
            <form enctype="multipart/form-data" class="flex-col space-y-8 mt-5" method="POST"
                  action="{{ isset($post) ? route("admin.posts.update", $post->id) : route("admin.posts.store") }}">
                @csrf

                @if(isset($post))
                    @method('PUT')
                @endif

                <input name="title" type="text"
                       class="w-full h-12 border border-purple-700 rounded-md px-3 @error('title') border-red-800 @enderror"
                       placeholder="Title" value="{{ $post->title ?? '' }}"/>

                @error('title')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="preview" type="text"
                       class="w-full h-12 border border-purple-700 rounded-md px-3 @error('preview') border-red-800 @enderror"
                       placeholder="Short spell" value="{{ $post->preview ?? '' }}"/>

                @error('preview')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="description" type="text"
                       class="w-full h-12 border border-purple-700 rounded-md px-3 @error('description') border-red-800 @enderror"
                       placeholder="Text content" value="{{ $post->description ?? '' }}"/>

                @error('description')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                @if(isset($post) && $post->thumbnail)
                    <div>
                        <img class="h-64 w-64" src="/storage/posts/{{ $post->thumbnail }}">
                    </div>
                @endif

                <label for="file_upload"
                       class="flex font-semibold items-center px-2 py-1 w-56 text-gray-100 rounded-md bg-purple-700 shadow-md hover:bg-purple-400">
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="mx-2">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M16.3138 4.01233C16.167 4.00078 15.9833 4 15.5 4H11.05C9.60949 4 8.59025 4.00081 7.79391 4.06694C7.00955 4.13208 6.53142 4.25539 6.1561 4.45035C5.42553 4.82985 4.82985 5.42553 4.45035 6.15611C4.25538 6.53142 4.13207 7.00955 4.06694 7.79392C4.0008 8.59026 4 9.60949 4 11.05V16.5C4 18.433 5.567 20 7.5 20H10.0556C10.5772 20 11 19.5772 11 19.0556V18.5C11 15.4624 13.4624 13 16.5 13C18.433 13 20 11.433 20 9.5V8.5C20 8.01668 19.9992 7.83297 19.9877 7.68617C19.8333 5.72466 18.2753 4.16671 16.3138 4.01233ZM22 11.6404C22 12.2412 22 12.599 21.9734 12.9447C21.805 15.1287 20.846 17.1763 19.276 18.7037C19.0275 18.9455 18.7526 19.1746 18.291 19.5592L18.2292 19.6107C17.8691 19.9108 17.6545 20.0896 17.433 20.2524C16.0389 21.2769 14.3791 21.8778 12.6524 21.9833C12.378 22 12.0986 22 11.63 22H7.5C4.46243 22 2 19.5376 2 16.5L2 11.0055C1.99999 9.61949 1.99999 8.51721 2.0738 7.6284C2.14939 6.71812 2.30755 5.94253 2.67552 5.23416C3.24477 4.1383 4.13829 3.24478 5.23415 2.67552C5.94253 2.30755 6.71811 2.1494 7.62839 2.0738C8.51721 1.99999 9.61949 2 11.0055 2L15.5498 2C15.9665 1.99997 16.2351 1.99996 16.4708 2.0185C19.413 2.25006 21.7499 4.58699 21.9815 7.52925C22 7.76488 22 8.03357 22 8.45022L22 11.6404ZM12.8588 19.9592C14.0832 19.8263 15.2531 19.3724 16.2487 18.6408C16.4151 18.5185 16.5809 18.3809 16.9757 18.0519C17.4824 17.6296 17.6947 17.4518 17.8814 17.2702C18.8329 16.3445 19.4959 15.1731 19.8042 13.8973C18.8842 14.5896 17.74 15 16.5 15C14.567 15 13 16.567 13 18.5V19.0556C13 19.3708 12.9505 19.6744 12.8588 19.9592Z"
                                  fill="#f3f4f6"></path>
                        </g>
                    </svg>
                    </svg>
                    Choose Thumbnail
                </label>
                <input name="thumbnail" type="file" id="file_upload"
                       style="display: none" placeholder="Picrel"/>

{{--                <script>--}}
{{--                    var file = document.getElementById("file_upload");--}}
{{--                    file.addEventListener("change", function(){ fileName = this.value });--}}
{{--                </script>--}}

                @error('thumbnail')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-purple-700 rounded-md text-white py-3 font-medium shadow-md">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
