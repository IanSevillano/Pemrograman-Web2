<?php
//Class Mahasiswa
class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;
    
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        return "Nama:$this->nama, NIM:$this->nim, Jurusan:$this->jurusan <br>";
    }
    //Getter dan Setter
    public function setNama($newNama) {
        $this->nama = $newNama;
    }

    public function getNama() {
        return "Nama:$this->nama";
    }

    public function setNim($newNim) {
        $this->nim = $newNim;
    }

    public function getNim() {
        return "NIM:$this->nim";
    }

    public function setJurusan($newJurusan) {
        $this->jurusan = $newJurusan;
    }

    public function getJurusan() {
        return "Jurusan:$this->jurusan";
    }
}
//Output Class Mahasiswa
$mhs1 = new Mahasiswa("Ian Knight", "230302090", "TI");
echo $mhs1->tampilkanData();

$mhs1->setNama("Ian Knightz, ");
echo $mhs1->getNama(); //Output: Ian Knightz
$mhs1->setNim("230302091, ");
echo $mhs1->getNim(); //Output: 230302091
$mhs1->setJurusan("Multimedia");
echo $mhs1->getJurusan(); //Output: Multimedia

//Inheritance
//Class Pengguna
class Pengguna{
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return "<br>Nama:$this->nama, ";
    }
    public function getmataKuliah() {

    }
}
//Turunan Pengguna ke Dosen
class Dosen extends Pengguna{
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;

    }

    public function getmataKuliah() {
        return "Mata Kuliah:$this->mataKuliah";
    }

}
//Output Inheritance
$dosen1 = new Dosen("Ragul", "Algoritma");
echo $dosen1->getNama(); //Output: Ragul
echo $dosen1->getmataKuliah(); //Output: Algoritma


//Polymorphism
//Definisi Class Dosen2
class Dosen2 {
    public function aksesFitur(Pengguna $pengguna) {
        echo $pengguna->getNama() . " says " . $pengguna->getmataKuliah() . "<br>";
    }
}


// Mahasiswa2 mewariri Pengguna
class Mahasiswa2 extends Pengguna {
    public function __construct($nama) {
        parent::__construct($nama);
    }
    public function getmataKuliah(){
    return "Mata Kuliah Logaritma";
    }
}
//Output Polymorphism
$poly= new Dosen2();
echo $poly->aksesFitur($dosen1);// Output "Aria"
$mahasiswa2= new Mahasiswa2("Aria");
echo $poly->aksesFitur($mahasiswa2);//Output "Mata Kuliah Logaritma"


//Abstraction
class Pengguna2 {
    public function aksesFitur(){
    }
}

class Mahasiswa3 extends Pengguna2 {
    public function aksesFitur() {
        echo "Mahasiswa dapat mengakses Mata Kuliah<br>";
    }
}

class Dosen3 extends Pengguna2 {
    public function aksesFitur() {
        echo "Dosen dapat mengakses Mata kuliah";
    }
}
//Output Abstraction
$mahasiswa3 = new Mahasiswa3();
$mahasiswa3->aksesFitur();

$dosen3 = new Dosen3();
$dosen3->aksesFitur();
?>