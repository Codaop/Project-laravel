<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="backdrop-blur-lg bg-white/10 border border-white/20 p-5 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold p-4 drop-shadow-md text-white text-center">Edit Data Pegawai</h2>
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table>
                    <tr>
                        <td class="text-white">Nama Lengkap</td>
                        <td><input type="text" name="nama_lengkap"
                                value="{{ old('nama_lengkap', $employee->nama_lengkap) }}" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Email</td>
                        <td><input type="email" name="email" value="{{ old('email', $employee->email) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Nomor Telepon</td>
                        <td><input type="text" name="nomor_telepon"
                                value="{{ old('nomor_telepon', $employee->nomor_telepon) }}" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Tanggal Lahir</td>
                        <td><input type="date" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Alamat</td>
                        <td><input type="text" name="alamat" value="{{ old('alamat', $employee->alamat) }}"
                                class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Tanggal Masuk</td>
                        <td><input type="date" name="tanggal_masuk"
                                value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Departemen</td>
                        <td>
                            <select name="departemen_id" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                                @foreach ($departemen as $d)
                                <option class="text-black" value="{{ $d->id }}" {{ old('departemen_id', $employee->departemen_id) == $d->id ? 'selected' : ''}}>{{ $d->nama_departemen }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Jabatan</td>
                        <td>
                            <select name="jabatan_id" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                                @foreach ( $jabatan as $j)
                                <option class="text-black" value="{{ $j->id }}" {{ old('jabatan_id', $employee->jabatan_id) == $j->id ? 'selected' : '' }}>{{ $j->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white">Status</td>
                        <td>
                            <select name="status" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                                <option class="text-black" value="aktif" {{ old('status', $employee->status) }}>Aktif</option>
                                <option class="text-black" value="nonaktif" {{ old('status', $employee->status) }}>Nonaktif</option>
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
                    <a href="{{ route('employees.index') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 rounded-md text-white font-semibold shadow-md hover:shadow-xl">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>