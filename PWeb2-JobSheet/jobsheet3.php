<?php
// 1.Class Person sebagai induk dari Dosen dan Mahasiswa
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // 3.Polymorphism: Metode getRole()
    public function getRole() {
        return "Person";
    }

    public function getName() {
        return $this->name;
    }
}

// 2. Inheritance Class Dosen mewarisi Person
class Dosen extends Person {
    // 4. Encapsulation private atribut nidn
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // 3.Override getRole() untuk Dosen
    public function getRole() {
        return "Dosen";
    }
}

// 2.Inheritance: Class Mahasiswa mewarisi Person
class Mahasiswa extends Person {
    // 4.Encapsulation: Private atribut nim
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    // 3.Override getRole() untuk Mahasiswa
    public function getRole() {
        return "Mahasiswa";
    }
}

// 5.Abstraction: Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    abstract public function submitJurnal();
}

// Class turunan JurnalDosen
class JurnalDosen extends Jurnal {
    private $dosen;

    public function __construct($judul, Dosen $dosen) {
        parent::__construct($judul);
        $this->dosen = $dosen;
    }

    // submitJurnal untuk Dosen
    public function submitJurnal() {
        return "Jurnal '" . $this->judul . "' diterbitkan oleh Dosen: " . $this->dosen->getName() . " (NIDN: " . $this->dosen->getNidn() . ")";
    }
}

// Class turunan JurnalMahasiswa
class JurnalMahasiswa extends Jurnal {
    private $mahasiswa;

    public function __construct($judul, Mahasiswa $mahasiswa) {
        parent::__construct($judul);
        $this->mahasiswa = $mahasiswa;
    }

    // submitJurnal untuk Mahasiswa
    public function submitJurnal() {
        return "Jurnal '" . $this->judul . "' diterbitkan oleh Mahasiswa: " . $this->mahasiswa->getName() . " (NIM: " . $this->mahasiswa->getNim() . ")";
    }
}

// Objek Dosen dan Mahasiswa
$dosen = new Dosen("Daniel Park", "904010");
$mahasiswa = new Mahasiswa("Kim Gimyung", "801040");

// Menampilkan role
echo $dosen->getName() . " adalah " . $dosen->getRole() . " "; // Output: Daniel Park adalah Dosen
echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . " "; // Output: Kim Gimyung adalah Mahasiswa

// Mengelola jurnal Dosen dan Mahasiswa
$jurnalDosen = new JurnalDosen("Romantic Deadly", $dosen);
$jurnalMahasiswa = new JurnalMahasiswa("The Big Deal", $mahasiswa);

echo $jurnalDosen->submitJurnal(); // Output: Jurnal Penelitian Program telah diajukan oleh Dosen: Jonathan Liandi (NIDN: 904010)
echo " ";
echo $jurnalMahasiswa->submitJurnal(); // Output: Jurnal Riset Program telah diajukan oleh Mahasiswa: Maxhill Leonardo (NIM: 801040)
?>
