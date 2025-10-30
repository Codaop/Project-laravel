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
            <h2 class="text-2xl font-bold p-4 drop-shadow-md text-white text-center">Edit Absensi Pegawai</h2>
            @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table>
                    <tr>
                        <td class="text-white">NIP</td>
                        <td><input type="text" name="karyawan_id"
                                value="{{ old('karyawan_id', $attendance->karyawan_id) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Tanggal</td>
                        <td><input type="date" name="tanggal" value="{{ old('tanggal', $attendance->tanggal) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Waktu Masuk</td>
                        <td><input type="time" name="waktu_masuk"
                                value="{{ old('waktu_masuk', $attendance->waktu_masuk) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Waktu Keluar</td>
                        <td><input type="time" name="waktu_keluar"
                                value="{{ old('waktu_keluar', $attendance->waktu_keluar) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Status Absensi</td>
                        <td>
                            <select name="status_absensi"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                                <option value="hadir" {{ old('status_absensi', $attendance->status_absensi) == 'hadir' ? 'selected' : '' }} class="text-black">Hadir</option>
                                <option value="izin" {{ old('status_absensi', $attendance->status_absensi) == 'izin' ? 'selected' : '' }} class="text-black">Izin</option>
                                <option value="sakit" {{ old('status_absensi', $attendance->status_absensi) == 'sakit' ? 'selected' : '' }} class="text-black">Sakit</option>
                                <option value="alpha" {{ old('status_absensi', $attendance->status_absensi) == 'alpha' ? 'selected' : '' }} class="text-black">Alpha</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="flex justify-end mt-10">
                    <button
                        class="grow px-3 py-2 transition duration-200 ease-in-out transform hover:scale-105  bg-fuchsia-600 hover:bg-fuchsia-500 rounded-md text-white font-semibold shadow-md hover:shadow-xl"
                        type="submit">Update
                        Data</button>
                </div>
                <div class="flex flex-row justify-center gap-2 mt-7">
                    <a href="{{ route('attendances.index') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 rounded-md text-white font-semibold shadow-md hover:shadow-xl">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>