//UPDATE BELAJAR 26-10-2021
// MASALAH CLASS, OBJECT, PROPERTY, METHOD (CATATAN ADA DIPALING BAWAH)

<?

// Produk (yang kuning) adalah nama class nya
// Kita mencoba jualan 2 jenis produk yaitu Novel dan Game

class Produk
{
    public  $judul = "judul",                    // YANG UNGU = Visibility (Public, Private, Protected) 
        $penulis = "penulis",                //YANG MERAH = Judul, Penulis, Penerbit, dan Harga adalah PROPERTY  
        $penerbit = "penerbit",              // YANG HIJAU = Nilainya.
        $harga = 0;                          // Menampilkan Property ada diline 34

    public function sayHello()
    {                 // sayHello adalah METHOD.. Apabila fungsi ini diambil, dia akan menampilkan hello world
        return "Hello World!";              // perintah return (ungu) untuk mengembalikan nilai.
    }                                           // Perintah pemanggilan method ada diline 36

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";   //Ini untuk menampilkan property pakai method (supaya otomatis dan lebih simpel)   //penulis dan penerbit itu adalah nama propertynya, berarti dia menampilkan penulis dan penerbit saja
    }                                               //Perintah Pemanggilan method ini ada di line 43
}

$produk1 = new Produk();  // $produk1 dan $produk2 adalah OBJECT/VARIABEL....  // new (ungu) adalah untuk membuat baru...Yang Produk (kuning) adalah nama classnya...  // Cara Baca: $produk1 adalah variabel baru didalam class Produk
$produk1->judul = "Naruto"; //Menimpa atau memberi nilai pada property $judul... Kalo tidak ditimpa judulnya adalah judul (yang warna hijau). KALO NIATNYA INGIN MENIMPA NAMA PROPERTYNYA HARUS SAMA DENGAN DIATAS, JANGAN BEDA.. KALO BEDA JADI BUAT PROPERTY BARU.
//$produk1->tambahProperty = "bebarang"  //INI TAMBAHAN AJA... Misalkan propertynya tidak terdaftar diatas, kita bisa buat property baru disini. KALO INI DIHIDUPKAN, ERROR karena Propertynya tidak terdaftar.
var_dump($produk1); // var_dump perintah untuk menampilkan data

$produk2 = new Produk();
var_dump($produk2->judul); // Ini nanti hasil nilainya adalah judul (yang warna hijau) karena tidak diberi nilai judul seperti produk 1.. Dia mengambil nilai defaulf judul yang ada di property $judul.

//**TAMBAHAN** INI CONTOH APABILA INGIN MENULIS PROPERTY YANG LENGKAP
$produk3 = new Produk();
$produk3->judul = "Gang Beringin";
$produk3->penulis = "Rizky Wara";
$produk3->penerbit = "Wara Penerbit";
$produk3->harga = 45000;

$produk4 = new Produk();
$produk4->judul = "GTA 100";
$produk4->penulis = "Wara Rizky";
$produk4->penerbit = "Rizky Play";
$produk4->harga = 100000000;

//Kalo ingin menampilkan/mencetak PROPERTY
//Perintah echo untuk mencetak nilai ke layar
echo "Novel: $produk3->penulis, $produk3->penerbit";  // Novel ini akan menampilkan nilai dari property penulis dan penerbit dalam produk3.

echo "<br>"; //Daripada aja untuk memberi jarak, kalo tidak dipakai tidak apa-apa

//Kalo ingin mencetak nilai Property tapi pakai METHOD
echo $produk3->sayHello(); //Memanggil method yang tadi dibuat (Yang khusus hello world tadi aja)

echo $produk3->getLabel(); //Memanggil method yang tadi dibuat, untuk menampilkan penulis dan penerbit tadi. 
                            //Karena tadi nilainya tadi ditimpa ke produk 3 (Nilainya sudah diisi), maka data nilai yang tampil adalah nilai dari produk 3nya. yaitu Rizky wara dan Wara Penerbit

//MENAMPILKAN BEBERAPA Property pakai 1 Method
echo "Novel: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();


?>
