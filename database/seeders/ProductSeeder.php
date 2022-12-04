<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'productname' => "Canon EOS 3000D Kit (EF S18-55 III)",
            'productslug' => Str::slug('Canon EOS 3000D Kit (EF S18-55 III)'),
            'productdesc' => "Dilengkapi dengan pegangan yang mantap pada kamera,
            jendela bidik optik yang dapat secara cepat menangkap momen, dan main dial untuk mengubah fungsi secara cepat, EOS 3000D menawarkan pengalaman menggunakan DSLR klasik bagi pemula.",
            'price' => 6482400,
            'category_id' => 1,
            'productphoto' => 'img/Camera1.png'
            ]);

            DB::table('products')->insert([
            'productname' => "Canon EOS Rebel SL2",
            'productslug' => Str::slug('Canon EOS Rebel SL2'),
            'productdesc' => "Kamera ini mengandalkan sensor CMOS APS-C yang memiliki resolusi 24.2 MP serta ditenagai dengan prosesor canon DIGIC 7.",
            'price' => 8250000,
            'category_id' => 1,
            'productphoto' => 'img/Camera2.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Canon EOS 90D",
            'productslug' => Str::slug('Canon EOS 90D'),
            'productdesc' => "EOS 90D merupakan kamera DSLR kelas menengah dengan fitur dan kemampuan layaknya kamera kelas atas. Kamera ini memiliki 45 titik AF tipe silang dalam jendela bidik optiknya dengan cakupan 100% dan dapat memotret hingga 10fps.",
            'price' => 17500000,
            'category_id' => 1,
            'productphoto' => 'img/Camera3.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Canon EOS 5D Mark IV",
            'productslug' => Str::slug('Canon EOS 5D Mark IV'),
            'productdesc' => "New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016",
            'price' => 49500000,
            'category_id' => 1,
            'productphoto' => 'img/Camera4.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Canon EOS Rebel T7i",
            'productslug' => Str::slug('Canon EOS Rebel T7i'),
            'productdesc' => "Kamera ini dibekali sensor CMOS APS-C dengan kemampuan 24,2 MP, dipadu prosesor DIGIC 7. TJi juga memiliki fitur dual pixel Autofocus (AF), continuous shooting 6 fps, setelan ISO hingga 25.600, dan 45 titik autofocus.",
            'price' => 16500000,
            'category_id' => 1,
            'productphoto' => 'img/Camera5.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Canon EOS Rebel T6",
            'productslug' => Str::slug('Canon EOS Rebel T6'),
            'productdesc' => "Kamera ini dilengkapi dengan fitur WiFi dan NFC. EOS Rebel T6 memiliki layar tipe TFT LCD berukuran 3 inci dengan screen dots yang lebih tinggi, yaitu 920.000.",
            'price' => 5000000,
            'category_id' => 1,
            'productphoto' => 'img/Camera6.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Canon EOS 80D",
            'productslug' => Str::slug('Canon EOS 80D'),
            'productdesc' => "Canon EOS 80D memiliki tampilan fisik yang hampir sama dengan pendahulunya yaitu EOS 70D. 80D dilengkapi dengan lensa Canon EF-S 18-135mm f/3.5-5.6 IS USM.",
            'price' => 11650000,
            'category_id' => 1,
            'productphoto' => 'img/Camera7.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Canon EOS 6D Mark II",
            'productslug' => Str::slug('Canon EOS 6D Mark II'),
            'productdesc' => "Canon EOS 6D Mark II memiliki konsep sebagai kamera full-frame dengan berat yang cukup ringan di kelasnya. Kamera ini dilengkapi sensor CMOS full-frame beresolusi 26.2 megapixel dan prosesor DIGIC 7.",
            'price' => 25000000,
            'category_id' => 1,
            'productphoto' => 'img/Camera8.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Canon EOS-1D X",
            'productslug' => Str::slug('Canon EOS-1D X'),
            'productdesc' => "Kamera ini didukung dengan 61 titik focus yang mencakup 41 titik tipe silang/ cross type, serta system auto focus terbaru",
            'price' => 78350000,
            'category_id' => 1,
            'productphoto' => 'img/Camera9.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Canon EOS 1500D",
            'productslug' => Str::slug('Canon EOS 1500D'),
            'productdesc' => "Kamera ini sudah hadir dengan Wi-Fi, resolusi video Full HD 1080p, dan sudah bisa merekam video hingga 30fps.",
            'price' => 5550000,
            'category_id' => 1,
            'productphoto' => 'img/Camera10.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Sony Alpha a6500",
            'productslug' => Str::slug('Sony Alpha a6500'),
            'productdesc' => "Sony Alpha a6500 membawa fitur stabilisasi foto yang selevel dengan seri A7 II dan menggunakan lensa E-Mount yang tidak memiliki fitur Optical SteadyShot dari Sony.",
            'price' => 12765000,
            'category_id' => 1,
            'productphoto' => 'img/Camera11.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Sony Alpha a7 II",
            'productslug' => Str::slug('Sony Alpha a7 II'),
            'productdesc' => "Sony α7 II adalah kamera full-frame pertama di dunia dengan stabilisasi gambar 5-poros dan memberikan kompensasi guncangan kamera untuk beragam lensa lepas pasang.",
            'price' => 15000000,
            'category_id' => 1,
            'productphoto' => 'img/Camera12.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "GoPro Hero 11 Black",
            'productslug' => Str::slug('GoPro Hero 11 Black'),
            'productdesc' => "GoPro Hero 11 hadir dengan layar depan, fungsinya untuk melihat live preview. Dimana layar ini terdapat lensa beresolusi 27MP.",
            'price' => 6000000,
            'category_id' => 1,
            'productphoto' => 'img/Camera13.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Nikon D5600",
            'productslug' => Str::slug('Nikon D5600'),
            'productdesc' => "Nikon D5600 menampilkan kesan simpel dengan desain yang mungil dan ringan serta tidak mencolok sehingga lebih nyaman digunakan.",
            'price' => 12800000,
            'category_id' => 1,
            'productphoto' => 'img/Camera14.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Nikon D780",
            'productslug' => Str::slug('Nikon D780'),
            'productdesc' => "Teknologi DSLR terbaik Nikon D780 akan menghidupkan hobi fotografer dan videografer kamu penuh dengan semangat dengan kinerja tinggi karena dilengkapi 24,5 megapiksel efektif dan mesin pemroses gambar expeed 6.",
            'price' => 52850000,
            'category_id' => 1,
            'productphoto' => 'img/Camera15.jpg'
            ]);



            DB::table('products')->insert([
            'productname' => " Pond’s White Beauty Spot-less Glow Facial Foam",
            'productslug' => Str::slug('Pond’s White Beauty Spot-less Glow Facial Foam'),
            'productdesc' => "Pond’s White Beauty Spot-less Glow Facial Foam adalah produk kosmetik Pond’s yang berupa facial foam. Dimana produk ini dirancang khusus untuk kulit wajah agar selalu terlihat bersih, lembab dan bebas minyak.",
            'price' => 21600,
            'category_id' => 2,
            'productphoto' => 'img/Beauty1.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Pond’s Pure White Pollution D-TOXX Facial Foam",
            'productslug' => Str::slug('Pond’s Pure White Pollution D-TOXX Facial Foam'),
            'productdesc' => "Pembersih wajah ini diformulasikan dengan Activated Carbon and Japanese Green Tea yang mampu menyerap dan mengangkat kotoran dari permukaan hingga ke dalam pori-pori kulit wajah.",
            'price' => 22900,
            'category_id' => 2,
            'productphoto' => 'img/Beauty2.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Pond’s Acne Solution Acne Facial Foam",
            'productslug' => Str::slug('Pond’s Acne Solution Acne Facial Foam'),
            'productdesc' => "Pond’s Acne Solution AcneAcne Facial Foam adalah produk kosmetik Pond’s yang mengandung aktif Thymo-T Essence dan TT-Immunity-R. Dimana kandungannya mampu membantu masalah jerawat hanya dalam 3 hari pemakaian teratur.",
            'price' => 22900,
            'category_id' => 2,
            'productphoto' => 'img/Beauty3.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Pond’s White Beauty Instabright Tone Up Facial Foam ",
            'productslug' => Str::slug('Pond’s White Beauty Instabright Tone Up Facial Foam '),
            'productdesc' => "Kandungan produk ini dapat membantu mengangkat kotoran yang menyebabkan kekusaman dan akan menjadikan kulit tampak halus dan cerah sepanjang hari.",
            'price' => 21700,
            'category_id' => 2,
            'productphoto' => 'img/Beauty4.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Pond’s Oil Control Oil-Free Look Facial Foam ",
            'productslug' => Str::slug('Pond’s Oil Control Oil-Free Look Facial Foam'),
            'productdesc' => "Pembersih wajah satu ini mengandung Mineral Clay yang dapat menyerap kotoran dan minyak berlebih pada wajah. Selain itu Pond’s Oil Control Oil-Free Look Facial Foam ini juga tidak akan membuat kulit wajah terasa kering.",
            'price' => 24600,
            'category_id' => 2,
            'productphoto' => 'img/Beauty5.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Pond’s Men Acne Solution AntiAcne Facial Foam",
            'productslug' => Str::slug('Pond’s Men Acne Solution AntiAcne Facial Foam'),
            'productdesc' => "Pond’s Men Acne Solution AntiAcne Facial Foam adalah pembersih wajah untuk pria yang memiliki kekuatan dari Mineral Clay untuk menyerap minyak dan membantu mengendalikan kotoran.",
            'price' => 26400,
            'category_id' => 2,
            'productphoto' => 'img/Beauty6.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Pond’s Men Energy Charge Facial Foam",
            'productslug' => Str::slug('Pond’s Men Energy Charge Facial Foam'),
            'productdesc' => "Pond’s Men Energy Charge Facial Foam adalah salah satu produk kosmetik Pond’s yang berubah pembersih wajah. Dimana pembersih wajah khsusu pria ini mengandung Coffee Bean Extract & Cooling Menthol yang mencerahkan dan menyegarkan kulit.",
            'price' => 22400,
            'category_id' => 2,
            'productphoto' => 'img/Beauty7.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Pond’s Pure White Pollution Out + Purity Facial Foam",
            'productslug' => Str::slug('Pond’s Pure White Pollution Out + Purity Facial Foam'),
            'productdesc' => "Produk pembersih wajah Pond’s ini diformulasikan dengan Vitamin B3 dan Activated Carbon yang dikenal dapat menyerap dan mengangkat kotoran. Pembersih ini mampu mengangkat kotoran dari permukaan hingga ke dalam pori-pori wajah.",
            'price' => 23500,
            'category_id' => 2,
            'productphoto' => 'img/Beauty8.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Wardah Colorfit Perfect Glow Cushion",
            'productslug' => Str::slug('Wardah Colorfit Perfect Glow Cushion'),
            'productdesc' => "Cushion dengan kandungan SPF 33 PA++ bisa kamu pakai dengan praktis untuk menutupi noda hitam dan bekas jerawat.",
            'price' => 99000,
            'category_id' => 2,
            'productphoto' => 'img/Beauty9.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Wardah Lip Cream",
            'productslug' => Str::slug('Wardah Lip Cream'),
            'productdesc' => "Produk yang satu ini merupakan salah satu produk andalan Wardah. Memiliki tekstur yang creamy dan warna yang cantik",
            'price' => 35000,
            'category_id' => 2,
            'productphoto' => 'img/Beauty10.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Wardah Intense Matte Lipstick",
            'productslug' => Str::slug('Wardah Intense Matte Lipstick'),
            'productdesc' => "Lipstik dengan jenis seperti ini lebih mudah digunakan, dan terasa lebih lembab di bibir. Kalian bisa mendapatkan Wardah Intense Matte Lipstick dengan berbagai warna yang sesuai dengan warna kulit kalian dengan harga yang sangat murah.",
            'price' => 25000,
            'category_id' => 2,
            'productphoto' => 'img/Beauty11.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Avoskin Miraculous Retinol Ampoule",
            'productslug' => Str::slug('Avoskin Miraculous Retinol Ampoule'),
            'productdesc' => "Miraculous Retinol Ampoule dari Avoskin ini adalah ampoule pertama yang mengandung 3% Actosome Retinol. Kandungan retinol-nya dapat membantu mencegah penuaan dini pada kulit.",
            'price' => 210000,
            'category_id' => 2,
            'productphoto' => 'img/Beauty12.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Avoskin Miraculous Retinol Toner",
            'productslug' => Str::slug('Avoskin Miraculous Retinol Toner'),
            'productdesc' => "Avoskin Miraculous Retinol Toner mengandung retinol, niacinamide, peptide, dan ekstrak buah delima yang dapat membantu kamu untuk merawat kulit agar tetap awet muda.",
            'price' => 145000,
            'category_id' => 2,
            'productphoto' => 'img/Beauty13.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Avoskin The Great Shield Sunscreen",
            'productslug' => Str::slug('Avoskin The Great Shield Sunscreen'),
            'productdesc' => "Tabir surya ini mengandung SPF 50 PA +++ yang dapat melindungi kulit dari paparan UVA dan UVB. The Great Shield Sunscreen juga dilengkapi dengan zinc oxide, niacinamide, centella asiatica, dan vitamin C.",
            'price' => 89000,
            'category_id' => 2,
            'productphoto' => 'img/Beauty14.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Avoskin Hydrating Treatment Essence",
            'productslug' => Str::slug('Avoskin Hydrating Treatment Essence'),
            'productdesc' => "Hydrating Treatment Essence dari Avoskin ini dilengkapi dengan ekstrak bahan alami lainnya, seperti forsythia suspensa dan peppermint oil yang dapat memberikan kesan menyejukkan pada kulit. ",
            'price' => 109000,
            'category_id' => 2,
            'productphoto' => 'img/Beauty15.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Sekiro: Shadows Die Twice",
            'productslug' => Str::slug('Sekiro: Shadows Die Twice'),
            'productdesc' => "Game ini membawa kisah tentang seorang ninja bernama Sekiro. Dia bertugas menyelamatkan Kuro. Kuro, seorang anak kecil dengan kekuatan mistis yang sangat dahsyat bernama Divine Heir di dalam tubuhnya.",
            'price' => 729000,
            'category_id' => 3,
            'productphoto' => 'img/Game1.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Persona 5 Royal",
            'productslug' => Str::slug('Persona 5 Royal'),
            'productdesc' => "Persona 5 Royal menceritakan sebuah insiden dan fenomena misterius yang terjadi di Tokyo yang berfokus pada sekelompok anak remaja SMA dari sekolah Shujin Academy",
            'price' => 798000,
            'category_id' => 3,
            'productphoto' => 'img/Game2.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Final Fantasy X HD Remaster",
            'productslug' => Str::slug('Final Fantasy X HD Remaster'),
            'productdesc' => "Mengambil tempat di suatu dunia khayalan bernama Spira, kisah permainan ini berfokus pada sekelompok petualang dan misinya dalam mengalahkan suatu daya yang menghancurkan, yang dikenal sebagai Sin.",
            'price' => 199000,
            'category_id' => 3,
            'productphoto' => 'img/Game3.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Elden Ring",
            'productslug' => Str::slug('Elden Ring'),
            'productdesc' => "Sebagai mantan kesatria Tarnished, kamu akan ditugaskan untuk mengumpulkan beberapa pecahan dari Cincin Elden yang dikisahkan bekas milik dewa.",
            'price' => 599000,
            'category_id' => 3,
            'productphoto' => 'img/Game4.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Final Fantasy XV",
            'productslug' => Str::slug('Final Fantasy XV'),
            'productdesc' => "Final Fantasy XV mengisahkan pertikaian antara dua kerajaan, yakni Lucis dan Niflheim di sebuah dunia bernama Eos.",
            'price' => 695000,
            'category_id' => 3,
            'productphoto' => 'img/Game5.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Triangle Strategy",
            'productslug' => Str::slug('Triangle Strategy'),
            'productdesc' => "Triangle Strategy mengambil setting di wilayah Norzelia yang tengah dihadapkan pada konflik antar tiga kerajaan demi meraih kekuasaan tertinggi.",
            'price' => 749000,
            'category_id' => 3,
            'productphoto' => 'img/Game6.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Need For Speed Heat",
            'productslug' => Str::slug('Need For Speed Heat'),
            'productdesc' => "Dengan mimpi untuk merekrut dan membangun crew-nya kembali, Ana mulai melirik Anda sebagai salah satu pembalap potensial untuk mengisi salah satu ruang yang lowong.",
            'price' => 759000,
            'category_id' => 3,
            'productphoto' => 'img/Game7.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Persona 4 Golden",
            'productslug' => Str::slug('Persona 4 Golden'),
            'productdesc' => "Narukami Yuu, seorang remaja kota yang baru pindah ke desa kecil bernama Inaba. Di desa tersebut, ada sebuah mitos lokal dimana jika kita menyalakan tv tepat jam 12 malam, kita bisa melihat jodoh kita.",
            'price' => 259999,
            'category_id' => 3,
            'productphoto' => 'img/Game8.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Tales of Arise",
            'productslug' => Str::slug('Tales of Arise'),
            'productdesc' => "Selama berabad-abad, penduduk Dahna selalu melihat planet Rena sebagai lokasi yang suci dan religius, dimana jiwa-jiwa mereka yang mati akan beristirahat. Namun segala sesuatunya berubah ketika 300 tahun yang lalu, Rena tiba-tiba menginvasi Dahna.",
            'price' => 589000,
            'category_id' => 3,
            'productphoto' => 'img/Game9.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Scarlet Nexus",
            'productslug' => Str::slug('Scarlet Nexus'),
            'productdesc' => "Menceritakan masa depan, dimana hormon psionik ditemukan pada otak manusia dan memberikan kekuatan tambahan serta meningkatkan indera untuk mengubah dunia.",
            'price' => 549000,
            'category_id' => 3,
            'productphoto' => 'img/Game10.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Octopath Traveler",
            'productslug' => Str::slug('Octopath Traveler'),
            'productdesc' => "Octopath Traveler menceritakan kisah delapan orang yaitu Olberic, Cyrus, Therion, Ophilia, Primrose, Alfyn, Tressa, H’aanit. Masing-masing punya latar belakang dan cerita yang jadi alasan mereka untuk mengembara.",
            'price' => 570000,
            'category_id' => 3,
            'productphoto' => 'img/Game11.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Bravely Default 2",
            'productslug' => Str::slug('Bravely Default 2'),
            'productdesc' => "Cerita bermula dengan Seth sang pelaut yang terdampar di Kerajaan Halcyonia setelah sebuah badai yang ganas. Di sana ia ditemukan oleh Gloria, putri Musa yang terusir, dan pengawalnya Sloan.",
            'price' => 749000,
            'category_id' => 3,
            'productphoto' => 'img/Game12.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Monster Hunter World",
            'productslug' => Str::slug('Monster Hunter World'),
            'productdesc' => "Kamu akan berperan sebagai hunter yang tergabung di Fifth Fleet, sekelompok hunter yang dikirim ke New World untuk membantu Research Commision yang bermarkas di sana.",
            'price' => 339000,
            'category_id' => 3,
            'productphoto' => 'img/Game13.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Far Cry 5",
            'productslug' => Str::slug('Far Cry 5'),
            'productdesc' => "Sebuah cerita yang berbeda dengan menampilkan sosok antagonis yang karismatik sekaligus mematikan, yaitu Joseph Seed alias “The Father”",
            'price' => 619000,
            'category_id' => 3,
            'productphoto' => 'img/Game14.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Resident Evil Village",
            'productslug' => Str::slug('Resident Evil Village'),
            'productdesc' => "Ethan telah tinggal bersama istrinya Mia dan putrinya yang baru lahir Rosemary ketika Chris Redfield dan anak buahnya tiba-tiba muncul, membunuh istrinya dengan darah dingin, dan menculik dia dan bayi perempuannya.",
            'price' => 553999,
            'category_id' => 3,
            'productphoto' => 'img/Game15.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "One Piece Luffy",
            'productslug' => Str::slug('One Piece Luffy'),
            'productdesc' => "Action figure One Piece",
            'price' => 123000,
            'category_id' => 4,
            'productphoto' => 'img/Anime1.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "One Piece Shanks",
            'productslug' => Str::slug('One Piece Shanks'),
            'productdesc' => "Action figure One Piece",
            'price' => 480000,
            'category_id' => 4,
            'productphoto' => 'img/Anime2.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Jujutsu Kaisen Yuji Itadori",
            'productslug' => Str::slug('Jujutsu Kaisen Yuji Itadori'),
            'productdesc' => "Action figure Jujusu Kaisen",
            'price' => 333000,
            'category_id' => 4,
            'productphoto' => 'img/Anime3.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Naruto Akatsuki Deidara",
            'productslug' => Str::slug('Naruto Akatsuki Deidara'),
            'productdesc' => "Action figure Naruto",
            'price' => 250000,
            'category_id' => 4,
            'productphoto' => 'img/Anime4.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Demon Slayer Nezuko",
            'productslug' => Str::slug('Demon Slayer Nezuko'),
            'productdesc' => "Action figure Demon Slayer",
            'price' => 180000,
            'category_id' => 4,
            'productphoto' => 'img/Anime5.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Darling in The Fran XX Zero Two",
            'productslug' => Str::slug('Darling in The Fran XX Zero Two'),
            'productdesc' => "Action figure Darling in The Fran XX",
            'price' => 270000,
            'category_id' => 4,
            'productphoto' => 'img/Anime6.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Jujutsu Kaisen Gojo Satoru",
            'productslug' => Str::slug('Jujutsu Kaisen Gojo Satoru'),
            'productdesc' => "Action figure Jujusu Kaisen",
            'price' => 430000,
            'category_id' => 4,
            'productphoto' => 'img/Anime7.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Attack on Titan Levi Ackerman",
            'productslug' => Str::slug('Attack on Titan Levi Ackerman'),
            'productdesc' => "Action figure Attack on Titan",
            'price' => 529000,
            'category_id' => 4,
            'productphoto' => 'img/Anime8.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Attack on Titan Mikasa",
            'productslug' => Str::slug('Attack on Titan Mikasa'),
            'productdesc' => "Action figure Attack on Titan",
            'price' => 322000,
            'category_id' => 4,
            'productphoto' => 'img/Anime9.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Attack on Titan Eren Yeager",
            'productslug' => Str::slug('Attack on Titan Eren Yeager'),
            'productdesc' => "Action figure Attack on Titan",
            'price' => 371000,
            'category_id' => 4,
            'productphoto' => 'img/Anime10.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Haikyuu Kageyama Tobio",
            'productslug' => Str::slug('Haikyuu Kageyama Tobio'),
            'productdesc' => "Action figure Haikyuu",
            'price' => 403000,
            'category_id' => 4,
            'productphoto' => 'img/Anime11.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Haikyuu Hinata Shoyo",
            'productslug' => Str::slug('Haikyuu Hinata Shoyo'),
            'productdesc' => "Action figure Haikyuu",
            'price' => 268000,
            'category_id' => 4,
            'productphoto' => 'img/Anime12.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Spy x Family Yor Forger",
            'productslug' => Str::slug('Spy x Family Yor Forger'),
            'productdesc' => "Action figure Spy x Family",
            'price' => 280000,
            'category_id' => 4,
            'productphoto' => 'img/Anime13.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Spy x Family Anya Forger",
            'productslug' => Str::slug('Spy x Family Anya Forger'),
            'productdesc' => "Action figure Spy x Family",
            'price' => 150000,
            'category_id' => 4,
            'productphoto' => 'img/Anime14.jpg'
            ]);
            DB::table('products')->insert([
            'productname' => "Spy x Family Loid Forger",
            'productslug' => Str::slug('Spy x Family Loid Forger'),
            'productdesc' => "Action figure Spy x Family",
            'price' => 899000,
            'category_id' => 4,
            'productphoto' => 'img/Anime15.jpg'
            ]);


            DB::table('products')->insert([
            'productname' => "Adidas Terex Running Shoes",
            'productslug' => Str::slug('Adidas Terex Running Shoes'),
            'productdesc' => "Size : 39, 40, 41, 42, 43, 44",
            'price' => 149999,
            'category_id' => 5,
            'productphoto' => 'img/Sport1.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Adidas Runfalcon 2.0",
            'productslug' => Str::slug('Adidas Runfalcon 2.0'),
            'productdesc' => "Size : 39, 40, 41, 42, 43, 44",
            'price' => 400000,
            'category_id' => 5,
            'productphoto' => 'img/Sport2.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Diadora RUDOLPH",
            'productslug' => Str::slug('Diadora RUDOLPH'),
            'productdesc' => "Size : 40, 41, 42, 44",
            'price' => 259000,
            'category_id' => 5,
            'productphoto' => 'img/Sport3.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Yonex Astrox 99",
            'productslug' => Str::slug('Yonex Astrox 99'),
            'productdesc' => "Raket dari Yonex",
            'price' => 1230000,
            'category_id' => 5,
            'productphoto' => 'img/Sport4.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Yonex Nanoray 750",
            'productslug' => Str::slug('Yonex Nanoray 750'),
            'productdesc' => "Raket dari Yonex",
            'price' => 789000,
            'category_id' => 5,
            'productphoto' => 'img/Sport5.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Yonex Doura Z-Strike",
            'productslug' => Str::slug('Yonex Doura Z-Strike'),
            'productdesc' => "Raket dari Yonex",
            'price' => 740000,
            'category_id' => 5,
            'productphoto' => 'img/Sport6.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Yonex Bundling Nanoray 70 Light",
            'productslug' => Str::slug('Yonex Bundling Nanoray 70 Light'),
            'productdesc' => "Raket dari Yonex",
            'price' => 1100000,
            'category_id' => 5,
            'productphoto' => 'img/Sport7.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Yonex Nanoray Z-Speed",
            'productslug' => Str::slug('Yonex Nanoray Z-Speed'),
            'productdesc' => "Raket dari Yonex",
            'price' => 899000,
            'category_id' => 5,
            'productphoto' => 'img/Sport8.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Butterfly TBC",
            'productslug' => Str::slug('Butterfly TBC'),
            'productdesc' => "Bet Tenis Meja Butterfly",
            'price' => 244000,
            'category_id' => 5,
            'productphoto' => 'img/Sport9.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Butterfly Tenergy",
            'productslug' => Str::slug('Butterfly Tenergy'),
            'productdesc' => "Bet Tenis Meja Butterfly",
            'price' => 970000,
            'category_id' => 5,
            'productphoto' => 'img/Sport10.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "DHS Hurricane",
            'productslug' => Str::slug('DHS Hurricane'),
            'productdesc' => "Bet Tenis Meja DHS",
            'price' => 620000,
            'category_id' => 5,
            'productphoto' => 'img/Sport11.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Cornilleau Tacteo",
            'productslug' => Str::slug('Cornilleau Tacteo'),
            'productdesc' => "Bet Tenis Meja Cornilleau",
            'price' => 350000,
            'category_id' => 5,
            'productphoto' => 'img/Sport12.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Cornilleau Aero",
            'productslug' => Str::slug('Cornilleau Aero'),
            'productdesc' => "Bet Tenis Meja Cornilleau",
            'price' => 750000,
            'category_id' => 5,
            'productphoto' => 'img/Sport13.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Shuttlecock Yonex",
            'productslug' => Str::slug('Shuttlecock Yonex'),
            'productdesc' => "Bola Badminton Yonex",
            'price' => 125000,
            'category_id' => 5,
            'productphoto' => 'img/Sport14.jpg'
            ]);

            DB::table('products')->insert([
            'productname' => "Shuttlecock Samurai",
            'productslug' => Str::slug('Shuttlecock Samurai'),
            'productdesc' => "Bola Badminton Samurai",
            'price' => 150000,
            'category_id' => 5,
            'productphoto' => 'img/Sport15.jpg'
            ]);

        

    }
}
