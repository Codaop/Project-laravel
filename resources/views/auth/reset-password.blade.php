<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="backdrop-blur-lg bg-white/10 border border-white/20 p-5 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold p-4 drop-shadow-md text-blue-200 text-center">Reset Password</h1>
            @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <table>
                    <input type="hidden" name="token" value="{{ $token }}">
                    <tr>
                        <td><label for="email" class="text-white drop-shadow-md mr-1">Email</label><label for="email"
                                class="text-red-500 mr-4">*</label></td>
                        <td><input type="email" id="email" name="email"
                                class="w-full rounded-lg text-sm backdrop-blur-sm bg-white/15 text-white placeholder-gray-400"
                                placeholder="Ex. syauqy@gmail.com" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password" class="text-white drop-shadow-md mr-1">Password Baru</label><label
                                for="password" class="text-red-500 mr-4">*</label></td>
                        <td>
                            <div class="relative flex items-center rounded-lg backdrop-blur-sm bg-white/15">
                                <input type="text" id="password" name="password"
                                    class="w-full p-2 bg-transparent text-sm text-white placeholder-white/50 rounded-lg" autocomplete="off">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password_confirmation" class="text-white drop-shadow-md mr-1">Konfirmasi
                                Password Baru</label><label for="password" class="text-red-500 mr-4">*</label></td>
                        <td>
                            <div class="relative flex items-center rounded-lg backdrop-blur-sm bg-white/15">
                                <input type="text" id="password_confirmation" name="password_confirmation"
                                    class="w-full p-2 bg-transparent text-sm text-white placeholder-white/50 rounded-lg" autocomplete="off">
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="flex justify-end mt-5">
                    <button
                        class="grow px-3 py-2 transition duration-200 ease-in-out transform hover:scale-105 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl"
                        type="submit">Reset Password</button>
                </div>
                <div class="flex flex-row justify-center gap-2 mt-7">
                    <a href="{{ route('password.request') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

<script>


    const passwordField1 = document.getElementById('password_confirmation');
    const toggleButton1 = document.getElementById('hideButton1');
    const showButton1 = document.getElementById('show-icon1');
    const hideButton1 = document.getElementById('hide-icon1');

    toggleButton.addEventListener('click', function () {
        if (passwordField1.type === 'password') {
            passwordField1.type = 'text';
            showButton1.classList.add('hidden');
            hideButton1.classList.remove('hidden');
        } else {
            passwordField1.type = 'password';
            hideButton1.classList.add('hidden');
            showButton1.classList.remove('hidden');
        }
    });
</script>

</html>