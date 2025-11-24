<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="backdrop-blur-lg bg-white/10 border border-white/20 p-5 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold p-4 drop-shadow-md text-blue-200 text-center">Login Akun</h1>
            @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('verifyLogin') }}" method="POST">
                @csrf
                <table>
                    <tr>
                        <td><label for="name" class="text-white mr-5 drop-shadow-md">Username</label></td>
                        <td>
                            <input type="text" id="name" name="name"
                                class="w-full p-2 rounded-lg text-sm backdrop-blur-sm bg-white/15 text-white placeholder-gray-400" autocomplete="off"
                                placeholder="Ex. syauqy2404">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password" class="text-white mr-5 drop-shadow-md">Password</label></td>
                        <td class="flex items-center">

                            <div class="relative flex items-center rounded-lg backdrop-blur-sm bg-white/15">

                                <input type="password" id="password" name="password"
                                    class="w-full p-2 pr-12 bg-transparent text-sm text-white placeholder-white/50 rounded-lg" autocomplete="off">

                                <button type="button"
                                    class="absolute inset-y-0 right-0 flex items-center px-3 text-white/70 hover:text-white text-sm rounded-r-lg"
                                    id="hideButton">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye" viewBox="0 0 16 16" id="show-icon">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-slash hidden" viewBox="0 0 16 16" id="hide-icon">
                                        <path
                                            d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z" />
                                        <path
                                            d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829" />
                                        <path
                                            d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="flex justify-end mt-5">
                    <button
                        class="grow px-3 py-2 transition duration-200 ease-in-out transform hover:scale-105 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl"
                        type="submit">Login</button>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-300">
                        Don't have an account yet?
                        <a href="{{ route('register') }}" class="font-bold text-fuchsia-200 hover:underline">
                            Sign Up Now!
                        </a>
                    </p>
                    <p>
                        <a href="{{ route('password.request') }}" class="font-bold text-fuchsia-200 hover:underline">
                            or Forgot Password?
                        </a>
                    </p>
                </div>
                <div class="flex flex-row justify-center gap-2 mt-7">
                    <a href="{{ url('/home') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    const passwordField = document.getElementById('password');
    const toggleButton = document.getElementById('hideButton');
    const showButton = document.getElementById('show-icon');
    const hideButton = document.getElementById('hide-icon');

    toggleButton.addEventListener('click', function () {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            showButton.classList.add('hidden');
            hideButton.classList.remove('hidden');
        } else {
            passwordField.type = 'password';
            hideButton.classList.add('hidden');
            showButton.classList.remove('hidden');
        }
    });
</script>

</html>