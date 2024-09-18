<h2>Penjelasan beserta Coding</h3>

<h4>#JobSheet1</h4>
Class Dosen, memiliki properties(nama,nip,mataKuliah) yang dapat dioperasikan pada method constructor
dan method tampilkanDosen supaya dapat melihat hasil dari data dosen yang dituliskan.
Output Objectnya: <br>
$dosen = new Dosen("","","");<br>
echo $dosen->tampilkanDosen();<br>
<br>

<h4>#JobSheet2</h4>
Class Mahasiswa, memiliki beberapa properties private berupa(nama,nim,jurusan) dimana private
dapat dipanggil diluar class dan terdapat method constructor
untuk dapat mengoperasikan properties yang dimiliki, serta terdapat method tampilkanData untuk Mahasiswa
terdapat method "Getter" dan "Setter". Getter berfungsi untuk menngambil yang ada didalam parameter dan
Setter berfungsi untuk menempatkan sebuah parameter.

Class Pengguna, terdapat properties yang di "protected" yang dimana tidak dapat digunakan diluar class
dan hanya bisa dipakai didalam method.

Class Dosen turunan dari Pengguna
