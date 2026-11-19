<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Registrasi</title>
</head>
<body>

    <h2>Formulir Pendaftaran Akun Baru</h2>
    
    <!-- Tag form untuk membungkus semua input registrasi -->
    <form action="/proses-registrasi" method="POST">
        
        <!-- Menggunakan tabel tanpa border agar posisi input sejajar rapi -->
        <table border="0" cellpadding="5">
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama_lengkap" placeholder="Masukkan nama lengkap" required></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" id="username" name="username" placeholder="Masukkan username" required></td>
            </tr>
            <tr>
                <td><label for="email">Alamat Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" placeholder="contoh@email.com" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" id="password" name="password" placeholder="Masukkan password" required></td>
            </tr>
            <tr>
                <td><label>Jenis Kelamin</label></td>
                <td>:</td>
                <td>
                    <input type="radio" id="pria" name="gender" value="Pria" required>
                    <label for="pria">Pria</label>
                    <input type="radio" id="wanita" name="gender" value="Wanita">
                    <label for="wanita">Wanita</label>
                </td>
            </tr>
            <tr>
                <td><label for="tgl_lahir">Tanggal Lahir</label></td>
                <td>:</td>
                <td><input type="date" id="tgl_lahir" name="tanggal_lahir" required></td>
            </tr>
            <tr>
                <td><label for="kota">Kota Asal</label></td>
                <td>:</td>
                <td>
                    <select id="kota" name="kota_asal">
                        <option value="">-- Pilih Kota --</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Medan">Medan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat Lengkap</label></td>
                <td>:</td>
                <td><textarea id="alamat" name="alamat" rows="4" cols="30" placeholder="Tulis alamat rumah Anda..."></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" id="setuju" name="persetujuan" value="ya" required>
                    <label for="setuju">Saya menyetujui syarat dan ketentuan yang berlaku.</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <!-- Tombol untuk mengirim atau mereset data form -->
                    <button type="submit">Daftar Sekarang</button>
                    <button type="reset">Kosongkan</button>
                </td>
            </tr>
        </table>

    </form>

</body>
</html>