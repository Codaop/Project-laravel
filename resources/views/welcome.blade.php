<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Pegawai</title>
</head>

<body>
    @extends('master')
    @section('title', 'Homepage')
    @section('content')
        <div class="flex mt-5 items-center flex-col p-4">
            <h1 class="text-3xl font-bold mb-4 text-blue-200 drop-shadow-md">Selamat Datang di App Pegawai!</h1>
            <p class="text-lg font-bold text-blue-100 drop-shadow-md">Lakukan Sign In/Sign Up untuk melanjutkan</p>
        </div>
    @endsection
</body>

</html>