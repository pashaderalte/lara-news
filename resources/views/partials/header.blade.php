<nav
    class="font-sans flex flex-col text-center text-stone-200 content-center shadow-md rounded-b-md bg-purple-700 sm:flex-row sm:text-left sm:justify-between py-2 px-6  sm:items-baseline w-full">
    <div class="flex">

        <img src="https://em-content.zobj.net/thumbs/320/apple/325/moai_1f5ff.png" class="w-12 mr-3">
        <div class="mb-2 sm:mb-0 inner">
            <a href="{{route("home")}}"
               class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Lara(!)News</a><br>
            <span class="text-xs text-grey-dark">News feed you've ever dreamed</span>
        </div>

    </div>


    @auth("web")
        <div
            class="flex items-center sm:mb-0 self-center text-md font-semibold no-underline rounded-lg shadow-md bg-purple-600 bg-opacity-80 hover:bg-rose-500 hover:shadow-lg">
            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                 stroke="#e7e5e4">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M15.7071 5.29289C16.0976 5.68342 16.0976 6.31658 15.7071 6.70711L10.4142 12L15.7071 17.2929C16.0976 17.6834 16.0976 18.3166 15.7071 18.7071C15.3165 19.0976 14.6834 19.0976 14.2929 18.7071L8.46963 12.8839C7.98148 12.3957 7.98148 11.6043 8.46963 11.1161L14.2929 5.29289C14.6834 4.90237 15.3165 4.90237 15.7071 5.29289Z"
                          fill="#e7e5e4"></path>
                </g>
            </svg>
            <a href="{{route("logout")}}" class="mr-3">Sign Out</a>
        </div>
    @endauth

    @guest("web")
        <div
            class="flex items-center sm:mb-0 self-center text-md font-semibold no-underline rounded-lg shadow-md bg-purple-600 bg-opacity-80 hover:bg-purple-400 hover:shadow-lg">
            <a href="{{route("login")}}" class="ml-3">Sign In</a>
            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.29289 5.29289C8.68342 4.90237 9.31658 4.90237 9.70711 5.29289L15.5303 11.1161C16.0185 11.6043 16.0185 12.3957 15.5303 12.8839L9.70711 18.7071C9.31658 19.0976 8.68342 19.0976 8.29289 18.7071C7.90237 18.3166 7.90237 17.6834 8.29289 17.2929L13.5858 12L8.29289 6.70711C7.90237 6.31658 7.90237 5.68342 8.29289 5.29289Z"
                          fill="#e7e5e4"></path>
                </g>
            </svg>
    @endguest
</nav>
