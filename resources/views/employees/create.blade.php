<!DOCTYPE html>
<html>

<head>
    <title>Form Input Pegawai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="backdrop-blur-lg bg-white/10 border border-white/20 p-5 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold p-4 drop-shadow-md text-blue-200 text-center">Form Pegawai</h1>
            @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <table>
                    <tr>
                        <td><label for="nama_lengkap" class="text-white mr-5 drop-shadow-md">Nama Lengkap</label></td>
                        <td><input type="text" id="nama_lengkap" name="nama_lengkap" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></td>
                    </tr>
                    <tr>
                        <td><label for="email" class="text-white mr-5 drop-shadow-md">Email</label></td>
                        <td><input type="email" id="email" name="email" placeholder="example@gmail.com" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white placeholder:text-gray-200"></td>
                    </tr>
                    <tr>
                        <td><label for="nomor_telepon" class="text-white mr-5 drop-shadow-md">Nomor Telepon</label></td>
                        <td><input type="text" id="nomor_telepon" name="nomor_telepon" placeholder="08xxxxxxx" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white placeholder:text-gray-200"></td>
                    </tr>
                    <tr>
                        <td><label for="tanggal_lahir" class="text-white mr-5 drop-shadow-md">Tanggal Lahir</label></td>
                        <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></td>
                    </tr>
                    <tr>
                        <td><label for="alamat" class="text-white mr-5 drop-shadow-md">Alamat</label></td>
                        <td><textarea id="alamat" name="alamat" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="tanggal_masuk" class="text-white mr-5 drop-shadow-md">Tanggal Masuk</label></td>
                        <td><input type="date" id="tanggal_masuk" name="tanggal_masuk" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white"></td>
                    </tr>
                    <tr>
                        <td><label for="departemen_id" class="text-white mr-5 drop-shadow-md">Departemen</label></td>
                        <td>
                            <select name="departemen_id" id="departemen_id" class="form-select ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                                <option value="">-- Pilih Departemen --</option>
                                @foreach ($departemen as $d)
                                    <option class="text-black" value="{{ $d->id }}">{{ $d->nama_departemen }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="jabatan_id" class="text-white mr-5 drop-shadow-md">Jabatan</label></td>
                        <td>
                            <select name="jabatan_id" id="jabatan_id" class="form-select ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                                <option value="">-- Pilih Jabatan --</option>
                                @foreach ($jabatan as $j)
                                    <option class="text-black" value="{{ $j->id }}">{{ $j->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="status" class="text-white mr-5 drop-shadow-md">Status</label></td>
                        <td>
                            <select id="status" name="status" class="ml-5 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-white">
                                <option class="text-black" value="aktif">Aktif</option>
                                <option class="text-black" value="nonaktif">Nonaktif</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="flex justify-end mt-10">
                    <button class="grow px-3 py-2 transition duration-200 ease-in-out transform hover:scale-105 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl" type="submit">Tambah Data
                        Pegawai</button>
                </div>
                <div class="flex flex-row justify-center gap-2 mt-7">
                    <a href="{{ route('employees.index') }}"
                        class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 text-white rounded-md font-bold shadow-md hover:shadow-xl">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>