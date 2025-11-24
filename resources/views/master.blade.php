<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Pegawai')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[url(/img_bg/bg-1.jpg)] bg-cover flex flex-col">
    <header class="flex justify-center">
        <div class="flex items-center p-5 w-full shadow-md backdrop-blur-sm bg-white/10 border-b border-white/20">
            <div class="min-[50px] text-xl font-bold p-2 rounded text-blue-100 drop-shadow-md">
                @yield('page-title', 'App Pegawai')
            </div>
            <div class="flex justify-end grow gap-5 text-gray-100">
                @auth
                    <a href="{{ url('/employees') }}"
                        class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Employee</a>
                    <a href="{{ url('/attendances') }}"
                        class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Attendance</a>
                    <a href="{{ url('/departments') }}"
                        class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Department</a>
                    <a href="{{ url('/salaries') }}"
                        class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Salary</a>
                    <a href="{{ url('/positions') }}"
                        class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Position</a>
                    <a href="{{ url('/logout') }}"
                        class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 ml-8 flex flex-row items-center gap-2">Logout
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                        </svg>
                    </a>
                @else
                    <a href="{{ url('/login') }}"
                        class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Login</a>
                    <a href="{{ url('/register') }}"
                        class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Register</a>
                @endauth
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="p-5 drop-shadow-xl text-blue-100">
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>
</body>

</html>