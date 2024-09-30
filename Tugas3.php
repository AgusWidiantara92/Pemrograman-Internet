<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Internet</title>
</head>
<body>
    <center>
    <h2>Form Sistem Penyalaan AC Pemrograman Internet</h2>


    <div align="left" style="width: 300px; border : 2px solid black; padding : 20px;">
            <form action="" method="post">
                <label for="suhu">Suhu Ruangan:</label><br>
                <p>Rentang suhu 16 - 30 derajat</p>
                <input type="text" id="suhu" name="suhu" required><br><br>

                <label for="kelembaban">Kelembapan:</label><br>
                <p>Rentang kelempaban 30 - 60 %</p>
                <input type="text" id="kelembapan" name="kelembapan" required><br><br>
                <input type="submit" value="Kirim">
            </form>
        </div>

    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $suhu = $_POST['suhu'];
            $kelembapan = $_POST['kelembapan'];
            $keterangan ="";

                if ($suhu >= 16 && $suhu <= 20 and $kelembapan >= 30 && $kelembapan <= 40) {
                    $keterangan = "AC Menyala Ringan";
                } elseif ($suhu >= 21 && $suhu <= 25 and $kelembapan >=41 && $kelembapan <= 50) {
                    $keterangan = "AC Menyala Sedangan";
                } elseif ($suhu >= 26 && $suhu <= 30 and $kelembapan >=51 && $kelembapan <= 60) {
                    $keterangan = "AC Menyala Berat";
                } elseif ($suhu <= 15 && $suhu >= 31 and $kelembapan <=29 && $kelembapan >= 61) {
                    $keterangan = "AC Dalam Kondisi Mati";
                } else {
                    $keterangan = "AC Tidak Menyala. Suhu rendah dan kelembaban tinggi atau sebaliknya.";
                }

            
                echo "<br>";
                echo '<div align="left" style="width: 300px; border: 2px solid black; padding: 20px;">' ;
                echo "<h3>Hasil Input suhu dan kelembaban</h3>";
                echo "Suhu: " . htmlspecialchars($suhu) . "<br>";
                echo "Kelembapan: " . htmlspecialchars($kelembapan) . "<br>";
                echo "Keterangan AC: " . $keterangan . "<br>";
                echo '</div>';
        }
    ?>
    </center>
</body>
</html>
