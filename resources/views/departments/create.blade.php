<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="backdrop-blur-lg bg-white/10 border border-white/20 p-5 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold p-4 drop-shadow-md text-blue-200 text-center">Halaman Tambah Departemen</h1>
            @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('departments.store') }}" method="POST">
                @csrf
                <table>
                    <tr>
                        <td><label for="nama_departemen" class="text-white p-5">Nama Departemen</label></td>
                        <td><input type="text" id="nama_departemen" name="nama_departemen" class="rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                </table>
                <div class="flex justify-end mt-10">
                    <button class="grow px-3 py-2 transition duration-200 ease-in-out transform hover:scale-105 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl" type="submit">Tambah Data</button>
                </div>
                <div class="flex flex-row justify-center gap-2 mt-7">
                    <a href="{{ route('departments.index') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>