Tutorial dasar dasar menggunakan framwork Code Igniter

Pada tutorial kali ini, penulis akan memberikan tutorial mengenai dasar penggunaan framework php yaitu CodeIgniter. Penulis menggunakan CodeIgniter v 2.1.4 yang dapat di download langsung dari web official CodeIgniter, yaitu http://ellislab.com/codeigniter . Yang dibutuhkan untuk tutorial kali ini adalah :

1. CodeIgniter 2.1.4
2. Text Editor (Sublime Text, CodeIgniter, Brackets, ell)
3. XAMPP / WAMP

Framework PHP CodeIgniter
Framework PHP CodeIgniter
Yang dilakukan untuk pertama kali adalah download CodeIgniter v 2.1.4 yang sudah disediakan di website officialnya kemudian melakukan extract terhadap hasil download tersebut dan akan menghasilkan folder CodeIgniter. Folder tersebut harus pembaca pindahkan ke dalam folder htdocs di direktori XAMPP / WAMP.

Artikel Terkait: Setingan Awal Codeigniter

Setelah itu pembaca harus menjalankan web server yang terdapat di XAMPP / WAMP agar bisa menjalankan script PHP tersebut. Kalau sudah, pembaca dapat langsung membuka halaman browser kemudian menuliskan “localhost/CodeIgniter” pada URL Browser (Tanpa tanda Kutip “”), apabila muncul tampilan “Welcome to CodeIgniter” berarti anda sudah berhasil menggunakan framework CodeIgniter untuk pertama kalinya

Welcome Page CodeIgniter
Welcome Page CodeIgniter

 
Sebelum kita bahas bagaimana halaman tersebut dapat muncul, pembaca harus mengetahui kalau framework CodeIgniter ini memiliki struktur MVC / Model View Controller sehingga apabila anda melihat isi dari folder application di dalam CodeIgniter yang tadi sudah didownload akan terdapat folder models, views dan juga controllers. (Bagi yang kurang paham mengenai model pemrograman MVC, dapat membaca disini : http://en.wikipedia.org/wiki/Model–view–controller)

Struktur Folder pada CodeIgniter
Struktur Folder pada CodeIgniter
Mari kita lihat file routes.php yang ada di dalam folder application/config, di dalam folder tersebut terdapat kode seperti ini :

[php]$route[‘default_controller’] = "welcome";[/php]

-> kode ini menunjukkan bahwa controller default atau controller yang pertama kali dijalankan ketika menjalan aplikasi web kita adalah file welcome.php yang ada di folder controllers. Pembaca dapat mengubah default controller tersebut sesuai dengan keinginan nantinya, sabar yaa, hehehe

Dari situ kita sudah tahu kan ketika website pertama kali dijalankan (Ketika kita mengetikkan localhost/CodeIgniter) akan menjalankan file welcome.php yang ada di folder application/controllers. Di dalam file welcome.php berisi :

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

/**
 * Index Page for this controller.
 *
 * Maps to the following URL
 * http://example.com/index.php/welcome
 * - or -
 * http://example.com/index.php/welcome/index
 * - or -
 * Since this controller is set as the default controller in
 * config/routes.php, it's displayed at http://example.com/
 *
 * So any other public methods not prefixed with an underscore will
 * map to /index.php/welcome/<method_name>
 * @see http://codeigniter.com/user_guide/general/urls.html
 */
 public function index()
 {
 $this->load->view('welcome_message');
 }
}
itu adalah stuktur utama untuk sebuah controller di dalam CodeIgniter. nama class yang digunakan adalah Welcome, hal tersebut karena disesuaikan dengan nama file controllernya yaitu welcome.php . Apabila kita memiliki controller dengan nama file products.php maka kita harus membuat class seperti ini di dalamnya :

class Products extends CI_Controller {
 public function index()
 {
 //Do Something here...
 }
}
Di dalam file welcome.php tersebut juga memiliki function index, function tersebut merupakan function default yang akan dipanggil atau dijalankan ketika pertama kali controller tersebut berjalan. kita juga dapat menambahkan function lain di dalamnya, seperti ini misalnya :

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

/**
 * Index Page for this controller.
 *
 * Maps to the following URL
 * http://example.com/index.php/welcome
 * - or -
 * http://example.com/index.php/welcome/index
 * - or -
 * Since this controller is set as the default controller in
 * config/routes.php, it's displayed at http://example.com/
 *
 * So any other public methods not prefixed with an underscore will
 * map to /index.php/welcome/<method_name>
 * @see http://codeigniter.com/user_guide/general/urls.html
 */
 public function index()
 {
 $this->load->view('welcome_message');
 }

public function greetings()
 {
 $this->load->view('say_greetings');
 }
}
nantinya function greetings tersebut akan memanggil view “say_greetings.php” yang nanti kita buat :)

Setelah selesai membahas controller, saatnya kita beralih ke dalam Views yang ada di folder application/views. Di dalam folder tersebut terdapat file “welcome_message.php”. Nah, file “welcome_message.php” inilah yang tadi dipanggil oleh controller welcome.php dengan code :

public function index()
{
 $this->load->view('welcome_message');
}
Jadi sudah tahu kan asal-usul halaman “Welcome to CodeIgniter” tadi ?
Mari kita buat file baru yang bernama say_greetings.php di dalam folder views untuk nantinya dipanggil oleh controller welcome dengan function greetings.
Isi say_greetings.php :

Setelah selesai, mari coba kita buka halaman baru yang telah kita buat dengan mengetikkan “localhost/CodeIgniter/index.php/welcome/greetings” pada URL browser kita.
notes :
1. CodeIgniter : Merupakan folder utama kita
2. welcome : Nama Controller kita, terdapat di CodeIgniter/application/controllers/welcome.php
3. greetings : Nama Fungsi yang ada di dalam controller, yaitu function greetings

Dan akhirnya kita sudah dapat menambahkan function baru pada controller kita dan juga menampilkan view baru yang telah kita buat…


diskripsi WEB DANA DESA
    pengunjung dapat mengetahui keluar masuknya dana dan informasi  mengenai acara desa tersebut 
    selain itu pengunjung bisa menambahkan agenda ataupun komentar.
    aplikasi ini dapat memudahkan pengguna dan sederhana tidak sulit untuk menggunkannya.
    pada page admin dapat menambahkan dana pembangunan,agenda,keluarnya dana dll. dan hanya admin yang bisa menggunakan fungsi tersebut
