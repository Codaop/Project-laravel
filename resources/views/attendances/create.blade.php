<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Attendance</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="backdrop-blur-lg bg-white/10 border border-white/20 p-5 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold p-4 drop-shadow-md text-blue-200 text-center">Form Perizinan Absen Pegawai</h1>
            @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('attendances.store') }}" method="POST">
                @csrf
                <table>
                    <input type="hidden" name="karyawan_id" value="{{ Auth::id() }}">
                    <tr>
                        <td><label for="tanggal" class="text-white mr-5 drop-shadow-md">Tanggal Izin</label></td>
                        <td><input type="date" id="tanggal" name="tanggal"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="status_absensi" class="text-white mr-5 drop-shadow-md">Status Absen</label></td>
                        <td>
                            <select name="status_absensi" id="status_absensi"
                                class="form-select ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                                <option value="izin" class="text-black">Izin</option>
                                <option value="sakit" class="text-black">Sakit</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="keterangan_izin" class="text-white drop-shadow-md">Keterangan Izin/Sakit</label>
                        </td>
                        <td><textarea id="keterangan_izin" name="keterangan_izin"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></textarea>
                        </td>
                    </tr>
                </table>
                <div class="flex justify-end mt-10">
                    <button
                        class="grow px-3 py-2 transition duration-200 ease-in-out transform hover:scale-105 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl"
                        type="submit">Ajukan Izin</button>
                </div>
                <div class="flex flex-row justify-center gap-2 mt-7">
                    <a href="{{ route('attendances.index') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>