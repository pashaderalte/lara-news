<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body class="bg-fuchsia-100">
<div>
    <div class="flex h-screen bg-fuchsia-100">
        <div class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

        <div
            class="flex flex-col rounded-r-md shadow-lg bg-purple-700 z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-purple-700 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
{{--                    <img src="https://img.icons8.com/3d-plastilina/512/facebook-new.png" class="w-24">--}}
                    <img src="https://vignette.wikia.nocookie.net/wiki-of-stickman/images/1/15/Admin.png/revision/latest?cb=20130512231616" class="w-40 shadow-md opacity-90">
                </div>
            </div>

            <nav class="flex flex-col justify-between my-10 h-full w-full">
                <div>
                    <a class="flex items-center mt-4 py-2 px-6 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25"
                       href="{{ route("admin.posts.index") }}">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                             stroke="#ffffff" stroke-width="0.00024000000000000003">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7 3C5.89543 3 5 3.89543 5 5V17.2C5 18.0566 5.00078 18.6389 5.03755 19.089C5.07337 19.5274 5.1383 19.7516 5.21799 19.908C5.40973 20.2843 5.7157 20.5903 6.09202 20.782C6.24842 20.8617 6.47262 20.9266 6.91104 20.9624C7.36113 20.9992 7.94342 21 8.8 21H15.2C16.0566 21 16.6389 20.9992 17.089 20.9624C17.5274 20.9266 17.7516 20.8617 17.908 20.782C18.2843 20.5903 18.5903 20.2843 18.782 19.908C18.8617 19.7516 18.9266 19.5274 18.9624 19.089C18.9992 18.6389 19 18.0566 19 17.2V13C19 10.7909 17.2091 9 15 9H14.25C12.4551 9 11 7.54493 11 5.75C11 4.23122 9.76878 3 8.25 3H7ZM10 1C16.0751 1 21 5.92487 21 12V17.2413C21 18.0463 21 18.7106 20.9558 19.2518C20.9099 19.8139 20.8113 20.3306 20.564 20.816C20.1805 21.5686 19.5686 22.1805 18.816 22.564C18.3306 22.8113 17.8139 22.9099 17.2518 22.9558C16.7106 23 16.0463 23 15.2413 23H8.75868C7.95372 23 7.28936 23 6.74817 22.9558C6.18608 22.9099 5.66937 22.8113 5.18404 22.564C4.43139 22.1805 3.81947 21.5686 3.43597 20.816C3.18868 20.3306 3.09012 19.8139 3.04419 19.2518C2.99998 18.7106 2.99999 18.0463 3 17.2413L3 5C3 2.79086 4.79086 1 7 1H10ZM17.9474 7.77263C16.7867 5.59506 14.7572 3.95074 12.3216 3.30229C12.7523 4.01713 13 4.85463 13 5.75C13 6.44036 13.5596 7 14.25 7H15C16.0712 7 17.0769 7.28073 17.9474 7.77263Z"
                                      fill="#ffffff"></path>
                            </g>
                        </svg>
                        <span class="mx-3">Articles</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25"
                       href="{{ route("admin.posts.index") }}">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5ZM7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM7.45609 16.7264C6.40184 17.1946 6 17.7858 6 18.5C6 18.7236 6.03976 18.8502 6.09728 18.942C6.15483 19.0338 6.29214 19.1893 6.66219 19.3567C7.45312 19.7145 9.01609 20 12 20C14.9839 20 16.5469 19.7145 17.3378 19.3567C17.7079 19.1893 17.8452 19.0338 17.9027 18.942C17.9602 18.8502 18 18.7236 18 18.5C18 17.7858 17.5982 17.1946 16.5439 16.7264C15.4614 16.2458 13.8722 16 12 16C10.1278 16 8.53857 16.2458 7.45609 16.7264ZM6.64442 14.8986C8.09544 14.2542 10.0062 14 12 14C13.9938 14 15.9046 14.2542 17.3556 14.8986C18.8348 15.5554 20 16.7142 20 18.5C20 18.9667 19.9148 19.4978 19.5973 20.0043C19.2798 20.5106 18.7921 20.8939 18.1622 21.1789C16.9531 21.7259 15.0161 22 12 22C8.98391 22 7.04688 21.7259 5.83781 21.1789C5.20786 20.8939 4.72017 20.5106 4.40272 20.0043C4.08524 19.4978 4 18.9667 4 18.5C4 16.7142 5.16516 15.5554 6.64442 14.8986Z"
                                      fill="#ffffff"></path>
                            </g>
                        </svg>
                        <span class="mx-3">Users</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25"
                       href="{{ route("admin.posts.index") }}">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M8.39646 3H15.6035C16.7056 2.99999 17.5944 2.99998 18.3138 3.05972C19.0547 3.12125 19.7049 3.25126 20.3049 3.56293C21.2181 4.03731 21.9627 4.78191 22.4371 5.69513C22.7487 6.29513 22.8788 6.94535 22.9403 7.68616C23 8.40556 23 9.29444 23 10.3965V13.6035C23 14.7056 23 15.5944 22.9403 16.3138C22.8788 17.0547 22.7487 17.7049 22.4371 18.3049C21.9627 19.2181 21.2181 19.9627 20.3049 20.4371C19.7049 20.7487 19.0547 20.8788 18.3138 20.9403C17.5944 21 16.7056 21 15.6035 21H8.39649C7.29444 21 6.40557 21 5.68616 20.9403C4.94535 20.8788 4.29513 20.7487 3.69513 20.4371C2.78191 19.9627 2.03731 19.2181 1.56293 18.3049C1.25126 17.7049 1.12125 17.0547 1.05972 16.3138C0.999982 15.5944 0.99999 14.7056 1 13.6035V10.3965C0.99999 9.29442 0.999982 8.40556 1.05972 7.68616C1.12125 6.94535 1.25126 6.29513 1.56293 5.69513C2.03731 4.78191 2.78191 4.03731 3.69513 3.56293C4.29513 3.25126 4.94535 3.12125 5.68616 3.05972C6.40556 2.99998 7.29442 2.99999 8.39646 3ZM5.25274 5.1305C6.10138 5.32962 6.88918 5.7516 7.53017 6.36207L10.469 9.16092C10.8754 9.54798 11.1374 9.7965 11.3523 9.97018C11.5575 10.1361 11.6541 10.178 11.7075 10.1944C11.8982 10.2527 12.1018 10.2527 12.2925 10.1944C12.3459 10.178 12.4425 10.1361 12.6477 9.97018C12.8626 9.7965 13.1246 9.54798 13.531 9.16092L16.4698 6.36207C17.1108 5.7516 17.8986 5.32962 18.7473 5.1305C18.5792 5.09823 18.3828 5.07234 18.1483 5.05286C17.5214 5.0008 16.7158 5 15.56 5H8.44C7.28423 5 6.47856 5.0008 5.85168 5.05286C5.61716 5.07234 5.42078 5.09823 5.25274 5.1305ZM20.8106 7H19.875C19.1207 7 18.3953 7.29015 17.8491 7.81035L14.8828 10.6355C14.5118 10.9888 14.1908 11.2945 13.9051 11.5255C13.6027 11.77 13.276 11.985 12.8774 12.1069C12.3055 12.2818 11.6945 12.2818 11.1226 12.1069C10.724 11.985 10.3973 11.77 10.0949 11.5255C9.80922 11.2945 9.48823 10.9888 9.1172 10.6354L6.15086 7.81035C5.60466 7.29015 4.87928 7 4.125 7H3.18942C3.12859 7.21664 3.08303 7.48842 3.05286 7.85168C3.0008 8.47856 3 9.28423 3 10.44V13.56C3 14.7158 3.0008 15.5214 3.05286 16.1483C3.10393 16.7632 3.19909 17.116 3.33776 17.3829C3.62239 17.9309 4.06915 18.3776 4.61708 18.6622C4.88403 18.8009 5.23678 18.8961 5.85168 18.9471C6.47856 18.9992 7.28423 19 8.44 19H15.56C16.7158 19 17.5214 18.9992 18.1483 18.9471C18.7632 18.8961 19.116 18.8009 19.3829 18.6622C19.9309 18.3776 20.3776 17.9309 20.6622 17.3829C20.8009 17.116 20.8961 16.7632 20.9471 16.1483C20.9992 15.5214 21 14.7158 21 13.56V10.44C21 9.28423 20.9992 8.47856 20.9471 7.85168C20.917 7.48842 20.8714 7.21664 20.8106 7Z"
                                      fill="#ffffff"></path>
                            </g>
                        </svg>
                        <span class="mx-3">Mails</span>
                    </a>
                </div>

                <div
                    class="self-center flex items-center text-md text-rose-400 font-semibold no-underline rounded-lg bg-purple-600 shadow-md bg-opacity-80 hover:bg-gray-700 hover:bg-opacity-50">
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier" class="hover:fill-white">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M15.7071 5.29289C16.0976 5.68342 16.0976 6.31658 15.7071 6.70711L10.4142 12L15.7071 17.2929C16.0976 17.6834 16.0976 18.3166 15.7071 18.7071C15.3165 19.0976 14.6834 19.0976 14.2929 18.7071L8.46963 12.8839C7.98148 12.3957 7.98148 11.6043 8.46963 11.1161L14.2929 5.29289C14.6834 4.90237 15.3165 4.90237 15.7071 5.29289Z"
                                  fill="#f43f5e"></path>
                        </g>
                    </svg>
                    <a href="{{route("admin.logout")}}" class="mr-3">Sign Out</a>
                </div>
            </nav>
        </div>

{{--        <div class="flex-1 flex flex-col overflow-hidden">--}}
{{--            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">--}}
{{--                <div class="flex items-center">--}}
{{--                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">--}}
{{--                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"--}}
{{--                                  stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round"></path>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </header>--}}

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-fuchsia-100">
                @yield('content')
            </main>
        </div>
    </div>
</div>
<script src="{{mix("js/app.js")}}"></script>
</body>
</html>
