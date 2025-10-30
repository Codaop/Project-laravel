<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="backdrop-blur-lg bg-white/10 border border-white/20 p-5 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold p-4 drop-shadow-md text-white text-center">Edit Gaji Pegawai</h2>
            <form action="{{ route('salaries.update', $salary->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table>
                    <tr>
                        <td><label for="karyawan_id" class="text-white">NIP</label></td>
                        <td><input type="text" name="karyawan_id" value="{{ old('karyawan_id', $salary->karyawan_id) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></td>
                    </tr>
                    <tr>
                        <td><label for="bulan" class="text-white">Bulan</label></td>
                        <td><input type="text" name="bulan" value="{{ old('bulan', $salary->bulan) }}" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gaji_pokok" class="text-white">Gaji Pokok</label></td>
                        <td><input type="text" name="gaji_pokok" value="{{ old('gaji_pokok', $salary->gaji_pokok) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></td>
                    </tr>
                    <tr>
                        <td><label for="tunjangan" class="text-white">Tunjangan</label></td>
                        <td><input type="text" name="tunjangan" value="{{ old('tunjangan', $salary->tunjangan) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></td>
                    </tr>
                    <tr>
                        <td><label for="potongan" class="text-white">Potongan Gaji</label></td>
                        <td><input type="text" name="potongan" value="{{ old('potongan', $salary->potongan) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></td>
                    </tr>
                </table>
                <div class="flex justify-end mt-10">
                    <button
                        class="grow px-3 py-2 transition duration-200 ease-in-out transform hover:scale-105  bg-fuchsia-600 hover:bg-fuchsia-500 rounded-md text-white font-semibold shadow-md hover:shadow-xl"
                        type="submit">Update
                        Data</button>
                </div>
                <div class="flex flex-row justify-center gap-2 mt-7">
                    <a href="{{ route('salaries.index') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 rounded-md text-white font-semibold shadow-md hover:shadow-xl">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>