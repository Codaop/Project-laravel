<div class="container mt-5">
    <h1 class="mb-4">Form Pegawai</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Nomor Telepon</label>
            <input type="text" name="nomor_telepon">
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir">
        </div>
        <div>
            <label>Alamat</label>
            <textarea name="alamat"></textarea>
        </div>
        <div>
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk">
        </div>
        <div>
            <label>Status</label>
            <select name="status">
                <option value="aktif">Aktif</option>
                <option value="non-aktif">Non-Aktif</option>
            </select>
        </div>
        <button type="submit">Simpan</button>
    </form>
</div>