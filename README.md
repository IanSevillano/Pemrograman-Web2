<h2>Penjelasan beserta Coding</h3>
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan
perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance,
Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat
OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode
yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.<br>

<h4>#JobSheet1</h4>
Class Dosen, memiliki properties(nama,nip,mataKuliah) yang dapat dioperasikan pada method constructor
dan method tampilkanDosen supaya dapat melihat hasil dari data dosen yang dituliskan.
Output Objectnya: <br>
$dosen = new Dosen(" "," "," ");<br>
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

Class Pengguna turunan ke Dosen
pada class ini terdapat satu properties untuk membuat variable mataKuliah

Class Pengguna turunan ke Dosen2
class ini membuat variable pengguna untuk dapat memperoleh nama & mataKuliah

Class Pengguna turunan ke Mahasiswa2
class Mahasiswa2 membuat constructor berisikan parameter nama dan mendapatkan mata kuliah

<br>

<h4>JobSheet3</h4>

Class Person memiliki properties protected nama hanya dipakai didalam method saja, serta membuat method getRole dan getName

Class Person turunan ke Dosen 
memiliki properties private nidn, lalu membuat method constructor berisi parameter (nama dan nidn), serta membuat turunan constrcutor nama. membuat getNidn dan setNidn
serta membuat getRole yang berisikan Dosen

Class Person turunan ke Mahasiswa
memiliki properties private nim dan juga method constructor (name dan nim) serta turunan dari (nama)
lalu terdapat 3 method getNim, setNim, dan getRole

Abstract Class Jurnal 
terdapat properties protected judul dan memiliki 2 method constructor judul dan sumbmitJurnal untuk mencetak output pada bagian akhir class

Class Jurnal turunan ke JurnalDosen
memiliki properties dosen, serta 2 method yang ada yaitu constructor yang berisikan(judul, class mahasiswa dan variable mahasiswa) dan construtor turunan parameter judul terdapat juga method submitJurnal untuk mahasiswa.
