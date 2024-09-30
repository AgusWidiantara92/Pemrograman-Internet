<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Internet</title>
    <style>
        h3{
            margin-bottom: 1%;
        }
    </style>
</head>

<body>
    <center>
    <h3>Daftar Siswa</h3>
    <table border="1" cellpadding="6" class="tabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Matematika</th>
                <th>Bahasa Inggris</th>
                <th>IPA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Andy</td>
                <td>85</td>
                <td>70</td>
                <td>80</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Budi</td>
                <td>60</td>
                <td>50</td>
                <td>65</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cici</td>
                <td>75</td>
                <td>80</td>
                <td>70</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Dodi</td>
                <td>95</td>
                <td>85</td>
                <td>90</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Eka</td>
                <td>50</td>
                <td>60</td>
                <td>55</td>
            </tr>
            <center>
        </tbody>
    </table>

    <center>

    <?php
        $siswa = [
            ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
            ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
            ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
            ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
            ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55],
        ];        
        $lulus = 0;
        $tidaklulus = 0;
        $no = 1;

echo "<h3>Status Kelulusan:</h3>";
echo "<table border='1' cellpadding='6'>";
echo "<th>No</th><th>Nama</th><th>Rata-Rata</th><th>Status Kelulusan</th><th>Mata Pelajaran yang Harus Diperbaiki</th></tr>";

foreach ($siswa as $data) {
    $nama = $data['nama'];
    $matematika = $data['matematika'];
    $bahasa_inggris = $data['bahasa_inggris'];
    $ipa = $data['ipa'];
    
    $rata_rata = ($matematika + $bahasa_inggris + $ipa) / 3;
    if ($rata_rata >= 75) {
        $status = "Lulus";
        $lulus++;
        $pelajaran_perbaikan = "-";
    } else {
        $status = "Tidak Lulus";
        $tidaklulus++;

        $nilai_terendah = min($matematika, $bahasa_inggris, $ipa);
        if ($nilai_terendah == $matematika) {
            $pelajaran_perbaikan = "Matematika";
        } elseif ($nilai_terendah == $bahasa_inggris) {
            $pelajaran_perbaikan = "Bahasa Inggris";
        } else {
            $pelajaran_perbaikan = "IPA";
        }
    }

    echo "<tr><td>$no</td><td>$nama</td><td>" . number_format($rata_rata, 2) . "</td><td>$status</td><td>$pelajaran_perbaikan</td></tr>";
    $no++;
}

echo "</table>";

echo "<h3>Jumlah Total:</h3>";
echo "Total siswa yang lulus: $lulus<br>";
echo "Total siswa yang tidak lulus: $tidaklulus<br>";
?>
    </center>
</body>
</html>
