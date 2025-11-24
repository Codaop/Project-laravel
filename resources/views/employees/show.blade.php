<!DOCTYPE html>
<html>

<head>
    <title>Detail Pegawai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url(/img_bg/bg-1.jpg)] bg-cover">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <h1 class="text-2xl font-bold p-4 drop-shadow-md text-blue-200 text-center">Detail Pegawai</h1>
        <div class="backdrop-blur-md shadow-lg bg-white/10 border-b border-white/20">
            <table class="table-auto border-collapse text-white">
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">NIP</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->id }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Nama Lengkap</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Jabatan</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->position->nama_jabatan }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Departemen</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->department->nama_departemen }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Email</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->email }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Nomor Telepon</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->nomor_telepon }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Tanggal Lahir</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Alamat</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->alamat }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Tanggal Masuk</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ $employee->tanggal_masuk }}</td>
                </tr>
                <tr>
                    <th class="border border-slate-300 border-opacity-20 p-2">Status</th>
                    <td class="border border-slate-300 border-opacity-20 p-2">{{ ucfirst($employee->status) }}</td>
                </tr>
            </table>
        </div>
        <div class="flex flex-row justify-center gap-2 mt-7">
            <a href="{{ route('employees.index') }}"
                class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 rounded-md text-white font-semibold shadow-md hover:shadow-xl">Back</a>
        </div>
    </div>
</body>

</html>