<?php
// Tambahkan CSS untuk memperindah tampilan tabel, memusatkan, dan font
echo "<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    .center-table {
        text-align: center;
    }
    table {
        width: 60%; /* Tentukan lebar tabel */
        margin: 20px auto; /* Untuk memusatkan tabel secara horizontal */
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        font-size: 14px;
        border: 2px solid black; /* Border tabel menjadi hitam */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk tabel */
    }
    th, td {
        padding: 15px; /* Menambahkan padding untuk memberikan spasi di dalam sel */
        text-align: left;
        border: 1px solid black; /* Border sel menjadi hitam */
    }
    th {
        background-color: #f2f2f2;
        color: black; /* Warna teks header hitam */
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>";

echo "<h2 style='font-weight: bold;'>Pemrograman Internet</h2>";

// Definisi kelas PemainSepakBola
class PemainSepakBola {
    public $nama;
    public $no;

    public function cetakgol() {
        return "Mencetak Gollllllllll";
    }
}

$PemainBola = new PemainSepakBola();
$PemainBola->nama = "Cristiano Ronaldo";
$PemainBola->no = "7";

// Tampilkan hasil dalam tabel
echo "<table>";
echo "<tr><th>Contoh</th><th>Detail</th></tr>";

// Contoh Kelas dan Objek
echo "<tr><td>Contoh Kelas dan Objek</td><td>";
echo $PemainBola->nama . " " . $PemainBola->no . " " . $PemainBola->cetakgol();
echo "</td></tr>";

// Encapsulation
class negara {
    private $nama;

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }
}
$newnegara = new negara();
$newnegara->setNama("Indonesia");

echo "<tr><td>Contoh Encapsulation</td><td>Negara: " . $newnegara->getNama() . "</td></tr>";

// Pewarisan / Inheritance
class clubBola {
    public $namaclub;

    public function juara() {
        return "Memenangkan Piala";
    }
}

class piala extends clubBola {
    public function juara() {
        return "La Liga";
    }
}

$pialaclub = new piala();
$pialaclub->namaclub = "Real Madrid";

echo "<tr><td>Contoh Pewarisan / Inheritance</td><td>Nama Club: " . $pialaclub->namaclub . "<br>Juara: " . $pialaclub->juara() . "</td></tr>";

// Polimorfisme
class pura {
    public $namapura;
    public function lokasi() {
        return "Pura ini Berlokasi di";
    }
}

class besakih extends pura {
    public function lokasi() {
        return "Karangasem";
    }
}

class goaLawah extends pura {
    public function lokasi() {
        return "Klungkung";
    }
}

$purabali = new besakih();
$purabali->namapura = "Besakih";

echo "<tr><td>Contoh Polimorfisme</td><td>Nama Pura: " . $purabali->namapura . "<br>Lokasi Pura: " . $purabali->lokasi() . "</td></tr>";

$purabali2 = new goaLawah();
$purabali2->namapura = "Goa Lawah";

echo "<tr><td></td><td>Nama Pura: " . $purabali2->namapura . "<br>Lokasi Pura: " . $purabali2->lokasi() . "</td></tr>";

// Abstraction - Public
abstract class sabun {
    abstract public function jenis();
}

class cair extends sabun {
    public function jenis() {
        return "Cair";
    }
}

$sabun = new cair();
echo "<tr><td>Contoh Abstraction </td><td>Sabun Lifeboy<br>Jenis Sabun: " . $sabun->jenis() . "</td></tr>";

// Abstraction - Public
class airminum {
    public $nama = "Air Minum ";

    public function merk() {
        return "ini Merk Aqua";
    }
}

$air = new airminum();
echo "<tr><td>Contoh Access modifier - Public</td><td>" . $air->nama . $air->merk() . "</td></tr>";

// Abstraction - Private
class jajan {
    private $nama = "Jajan";

    private function merk() {
        return "ini memiliki merk dua kelinci";
    }

    public function getNama() {
        return $this->nama;
    }
}

$ciki = new jajan();
echo "<tr><td>Contoh Access modifier - Private</td><td>Jajan: " . $ciki->getNama() . "</td></tr>";

// Abstraction - Protected
class anime {
    protected $nama = "Anime";

    protected function suara() {
        return "ini memiliki suara jepang";
    }
}

class doraemon extends anime {
    public function SuaraAnime() {
        return $this->suara();
    }
}

$kartun = new doraemon();
echo "<tr><td>Contoh Access modifier - Protected</td><td>Suara Anime: " . $kartun->SuaraAnime() . "</td></tr>";

// require atau include
require_once 'ayam.php';
require_once 'sapi.php';

echo "<tr><td>Contoh Require atau Include</td><td>";
$Ayam = new ayam();
echo "ayam memiliki suara " . $Ayam->suara() . "<br>";

$Sapi = new sapi();
echo "sapi memiliki suara " . $Sapi->suara();
echo "</td></tr>";

// Contoh spl_autoload_register
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

echo "<tr><td>Contoh SPL Autoload Register</td><td>";
$Ayam = new ayam();
echo "ayam memiliki suara " . $Ayam->suara() . "<br>";

$Sapi = new sapi();
echo "sapi memiliki suara " . $Sapi->suara();
echo "</td></tr>";

echo "</table>";
?>

