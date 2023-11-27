<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian</title>
    <link rel="stylesheet" href="css/penilaian.css">
</head>
<body>
    <form action="" method="GET" class="penilaian-form">
        <div class="input">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>

        <label for="nim">Nim:</label>
        <input type="text" name="nim" placeholder="Masukkan Nim">
        <br>

        <label for="nilai">Nilai:</label>
        <input type="number" name="nilai" placeholder="Masukkan Nilai">
        <br>

        <label for="absen">Absen:</label>
        <input type="number" name="absen" placeholder="Masukkan Absen">
        <br>

            <div class="button">
                <input type="submit" name="submit" value="Cek Kelulusan">
            </div>
        </div>
    </form>

    <?php
    if(isset($_GET['submit'])) {
        $nama = $_GET['nama'];
        $nim = $_GET['nim'];
        $nilai = $_GET['nilai'];
        $absen = $_GET['absen'];

        if($nilai >= 70 && $absen >= 80) {
            echo "<p>Nama: $nama</p>";
            echo "<p>Nim: $nim</p>";
            echo "<p>Nilai: $nilai</p>";
            echo "<p>Absen: $absen</p>";
            echo "<p>Keterangan: Anda LULUS</p>";
        } else {
            echo "<p>Nama: $nama</p>";
            echo "<p>Nim: $nim</p>";
            echo "<p>Nilai: $nilai</p>";
            echo "<p>Absen: $absen</p>";
            echo "<p>Keterangan: Anda TIDAK LULUS</p>";
        }
    }
    ?>
</body>
</html>