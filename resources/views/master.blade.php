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
                <a href="{{ url('/employees') }}"
                    class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Employee</a>
                <a href="{{ url('/departments') }}"
                    class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Department</a>
                <a href="{{ url('/attendances') }}"
                    class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Attendance</a>
                <a href="{{ url('/salaries') }}"
                    class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Salary</a>
                <a href="{{ url('/positions') }}"
                    class="hover:bg-fuchsia-600 hover:text-white hover:rounded-md hover:shadow-md p-2 transition duration-250 ease-in-out rounded-md">Position</a>
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