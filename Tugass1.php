<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Internet</title>
</head>
<body>
    <center>
    <h2>Form Input Nilai Pemrograman Internet</h2>


    <div align="left" style="width: 300px; border : 2px solid black; padding : 20px;">
            <form action="" method="post">
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" required><br><br>

                <label for="nim">NIM:</label><br>
                <input type="text" id="nim" name="nim" required><br><br>

                <label for="nilai">Nilai:</label><br>
                <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>

                <input type="submit" value="Kirim">
            </form>
        </div>

    <?php
        
        // Mengecek apakah method request adalah POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $nilai = $_POST['nilai'];

            // Validasi input nilai angka
            if ($nilai >= 0 && $nilai <= 100) {
                // Tentukan nilai huruf berdasarkan nilai angka
                if ($nilai >= 85) {
                    $nilaiHuruf = "A";
                } elseif ($nilai >= 80) {
                    $nilaiHuruf = "B+";
                } elseif ($nilai >= 75) {
                    $nilaiHuruf = "B";
                } elseif ($nilai >= 70) {
                    $nilaiHuruf = "C+";
                } elseif ($nilai >= 65) {
                    $nilaiHuruf = "C";
                } elseif ($nilai >= 60) {
                    $nilaiHuruf = "D";
                } else {
                    $nilaiHuruf = "E";
                }

                // Tampilkan hasilnya
                echo '<div align="left" style="width: 300px; border: 2px solid black; padding: 20px;">' ;
                echo "<h3>Hasil Input Nilai</h3>";
                echo "Nama: " . htmlspecialchars($nama) . "<br>";
                echo "NIM: " . htmlspecialchars($nim) . "<br>";
                echo "Nilai Angka: " . htmlspecialchars($nilai) . "<br>";
                echo "Nilai Huruf: " . htmlspecialchars($nilaiHuruf) . "<br>";
                echo '</div>';
            } else {
                echo "<h3>Nilai yang dimasukkan tidak valid. Masukkan nilai antara 0 hingga 100.</h3>";
            }
        }


    ?>
    </center>
</body>
</html>
