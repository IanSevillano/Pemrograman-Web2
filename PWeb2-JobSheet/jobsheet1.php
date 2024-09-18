<?php
//Definisi Class Dosen
class Dosen{
    public $nama;
    public $nip;
    public $mataKuliah;
//Function yang dapat mengoperasikan nama,nip,mataKuliah
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
//Function mengoperasikan menampilkan data dosen
    public function tampilkanDosen() {
        return "Nama:$this->nama, Nip:$this->nip, Mata Kuliah:$this->mataKuliah";
    }
}
//Output yang menampilkan dari function tampilkanDosen
$dosen = new Dosen("Diluc", "190901", "Pyro");
echo $dosen->tampilkanDosen();
?>