# php-unittesting
Tugas WKPL Acara 16 Mengenai Unit Testing pada PHP <br>
Unit testing adalah salah satu praktik dalam pengembangan perangkat lunak yang bertujuan untuk menguji dan memastikan bahwa bagian-bagian kecil dari kode (unit) berfungsi sesuai yang diharapkan. Dalam konteks PHP, PHP Unit adalah salah satu framework pengujian unit yang populer yang digunakan untuk mengotomatiskan pengujian unit dalam kode PHP.
<br>
<br>
<b>Berikut Penjelasan dari File WordCount.php<b> <br>
Kelas "wordcount" didefinisikan di dalam file ini dengan satu metode "countWords". <br>
Metode "countWords" menerima satu parameter, yaitu "sentence," yang seharusnya merupakan sebuah kalimat. <br>
Di dalam metode "countWords" ini, kalimat dibagi menjadi kata-kata menggunakan fungsi explode(" ", $sentence), yang memecah kalimat menjadi sebuah array kata-kata berdasarkan spasi sebagai pemisah. <br>
Kemudian, metode ini mengembalikan jumlah kata dalam kalimat dengan menggunakan fungsi count(), yang menghitung elemen-elemen dalam array kata-kata. <br>
<br>
<b>Berikut Penjelasan dari File WordCount.php<b> <br>
Pada file ini, kita menggunakan use PHPUnit\Framework\TestCase untuk mengimpor TestCase class dari PHPUnit framework. <br>
Kami juga memerlukan file "WordCount.php" dengan pernyataan require_once untuk mengakses definisi kelas "wordcount" yang diperlukan dalam pengujian.<br>
Kelas "SimpleTest" didefinisikan, dan dalam kelas ini, ada satu metode bernama "testCountWords". Nama metode ini harus dimulai dengan "test" untuk dianggap sebagai metode pengujian oleh PHPUnit.<br>
Di dalam metode "testCountWords", kita membuat instance dari kelas "WordCount" dengan $Wc = new WordCount();.<br>
Kemudian, kita mendefinisikan kalimat uji dengan variabel $TestSentence yang berisi "My name is Joko" yang memiliki 4 kata.<br>
Selanjutnya, kita memanggil metode countWords dari objek $Wc dan menyimpan hasilnya dalam variabel $WordCount.<br>
Akhirnya, kita menggunakan $this->assertEquals(3, $WordCount); untuk memeriksa apakah metode countWords mengembalikan hasil yang diharapkan (yaitu 3 kata) dengan menggunakan asersi assertEquals.<br>
