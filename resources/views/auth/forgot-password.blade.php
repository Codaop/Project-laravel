<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="backdrop-blur-lg bg-white/10 border border-white/20 p-5 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold p-4 drop-shadow-md text-blue-200 text-center">Forgot Password</h1>
            @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <table>
                    <tr>
                        <td><label for="email" class="text-white drop-shadow-md mr-1">Email</label><label for="email" class="text-red-500 mr-4">*</label></td>
                        <td><input type="text" id="email" name="email"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 text-white placeholder-gray-400" placeholder="Ex. syauqy@gmail.com">
                        </td>
                    </tr>
                </table>
                <div class="flex justify-end mt-5">
                    <button
                        class="grow px-3 py-2 transition duration-200 ease-in-out transform hover:scale-105 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl"
                        type="submit">Send link to email</button>
                </div>
                <div class="flex flex-row justify-center gap-2 mt-7">
                    <a href="{{ url('/login') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>