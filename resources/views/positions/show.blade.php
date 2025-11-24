<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Position</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <h1 class="text-2xl font-bold p-4 text-white drop-shadow-md">Detail Jabatan</h1>
        <div class="backdrop-blur-md shadow-lg bg-white/10 border-b border-white/20">
            <table class="table-auto border-collapse text-white">
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Nama Jabatan</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $position->nama_jabatan }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Gaji Pokok Jabatan</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">Rp {{ number_format($position->gaji_pokok, 2, ',', '.') }}</td>
                </tr>
            </table>
        </div>
        <div class="flex flex-row justify-center gap-2 mt-7">
            <a href="{{ route('positions.index') }}"
                class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 rounded-md text-white font-semibold shadow-md hover:shadow-xl">Back</a>
        </div>
    </div>
</body>

</html>