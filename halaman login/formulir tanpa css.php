<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran</title>
</head>
<body>

    <h2>Formulir Pendaftaran</h2>

    <form action="proses.php" method="POST">
        
        <!-- Input Teks: Nama Lengkap -->
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <!-- Input Email -->
        <label for="email">Alamat Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Input Nomor Telepon -->
        <label for="telepon">Nomor Telepon:</label><br>
        <input type="tel" id="telepon" name="telepon"><br><br>

        <!-- Input Radio (Pilihan Jenis Kelamin) -->
        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="pria" name="jeniskelamin" value="Pria">
        <label for="pria">Pria</label><br>
        <input type="radio" id="wanita" name="jeniskelamin" value="Wanita">
        <label for="wanita">Wanita</label><br><br>

        <!-- Input Dropdown (Pilihan Kota) -->
        <label for="kota">Kota Domisili:</label><br>
        <select id="kota" name="kota">
            <option value="Jakarta">Jakarta</option>
            <option value="Bekasi">Bekasi</option>
            <option value="Bandung">Bandung</option>
            <option value="Surabaya">Surabaya</option>
        </select><br><br>

        <!-- Input Textarea (Pesan / Alamat) -->
        <label for="alamat">Alamat Lengkap:</label><br>
        <textarea id="alamat" name="alamat" rows="4" cols="30"></textarea><br><br>

        <!-- Tombol Kirim dan Reset -->
        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">

    </form>

</body>
</html>