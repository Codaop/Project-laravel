<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>

<body>
    @extends('master')
    @section('title', 'Daftar Pegawai')
    @section('content')
        <div class="flex mt-5 justify-center items-center flex-col p-4">
            <h1 class="text-3xl font-bold mb-8 text-blue-200 drop-shadow-md">Daftar Pegawai</h1>
            <table class="table-auto w-full border-collapse">
                <thead
                    class="backdrop-blur-lg bg-white/20 border-b border-white/20 text-gray-100 font-bold uppercase text-xs">
                    <tr>
                        <th class="p-2">Nama Lengkap</th>
                        <th class="p-2">Jabatan</th>
                        <th class="p-2">Departemen</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Nomor Telepon</th>
                        <th class="p-2">Tanggal Masuk</th>
                        <th class="p-2">Status</th>
                        <th class="p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="shadow-md drop-shadow-lg text-center backdrop-blur-sm">
                    @foreach($employees as $employee)
                        <tr class="text-white bg-white/10 border-b border-white/20">

                            <td class="p-2">{{ $employee->nama_lengkap }}</td>

                            <td class="p-2">{{ $employee->position->nama_jabatan }}</td>
                            <td class="p-2">{{ $employee->department->nama_departemen }}</td>
                            <td class="p-2">{{ $employee->email }}</td>

                            <td class="p-2">{{ $employee->nomor_telepon }}</td>
                            <td class="p-2">{{ $employee->tanggal_masuk }}</td>

                            <td
                                class="p-2 font-medium {{ $employee->status == 'aktif' ? 'text-emerald-400' : 'text-red-400' }}">
                                {{ ucfirst($employee->status) }}
                            </td>

                            <td class="p-2">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('employees.show', $employee->id) }}"
                                        class="p-2 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-gray-100 hover:bg-white/25 transition duration-200 ease-in-out">
                                        <span class="sr-only">Detail</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </a>

                                    <a href="{{ route('employees.edit', $employee->id) }}"
                                        class="p-2 rounded-lg text-sm backdrop-blur-sm bg-white/15 border border-white/20 text-gray-100 hover:bg-white/25 transition duration-200 ease-in-out">
                                        <span class="sr-only">Edit</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 19.07a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>

                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                        style="display:inline;">
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                            class="p-2 rounded-lg text-sm backdrop-blur-sm bg-red-500/30 border border-red-500/50 text-red-100 hover:bg-red-500/50 transition duration-200 ease-in-out">
                                            <span class="sr-only">Delete</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12.455 0c.342.052.682.107 1.022.166m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.144-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.057-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex flex-row justify-center gap-2">
            <a href="{{ route('employees.create') }}"
                class="px-3 py-2 transition duration-200 ease-in-out transform hover:scale-110 bg-fuchsia-600 hover:bg-fuchsia-500 text-white font-bold rounded-lg shadow-md hover:shadow-xl">Create</a>
        </div>
    @endsection
</body>

</html>