<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //user-------------------------------------------------------------
        DB::table('users')->insert([
            'name' => 'Apriani Nur Raina',
            'username' => 'anraina',
            'level' => 'admin',
            'email' => 'anraina@gmail.com',
            'password' => bcrypt('123'),
        ]);
        \App\Models\User::factory(10)->create();

        //user close-------------------------------------------------------------

        //travel-------------------------------------------------------------
        DB::table('travel_agents')->insert([
            'name' => 'Panorama Destination',
            'image' => 'images/panorama.png',//baru
            'email' => 'PanoramaDestination@gmail.com',
            'username' => 'panorama',
            'level' => 'travel',
            'password' => bcrypt('123'),
        ]);

        DB::table('travel_agents')->insert([
            'name' => 'Butik Trip',
            'image' => 'images/butiktrip.jpg',//baru
            'email' => 'ButikTrip@gmail.com',
            'username' => 'butiktrip',
            'level' => 'travel',
            'password' => bcrypt('123'),
        ]);
        DB::table('travel_agents')->insert([
            'name' => 'Bayubuana',
            'image' => 'images/bayabuana.png',//baru
            'email' => 'Bayubuana@gmail.com',
            'username' => 'bayubuana',
            'level' => 'travel',
            'password' => bcrypt('123'),
        ]);
        DB::table('travel_agents')->insert([
            'name' => 'MMBC',
            'image' => 'images/mmbc.png',//baru
            'email' => 'MMBC@gmail.com',
            'username' => 'mmbc',
            'level' => 'travel',
            'password' => bcrypt('123'),
        ]);
        DB::table('travel_agents')->insert([
            'name' => 'Darmawisata Indonesiap',
            'image' => 'images/darmawisata.png',//baru
            'email' => 'DarmawisataIndonesia@gmail.com',
            'username' => 'darmawisata',
            'level' => 'travel',
            'password' => bcrypt('123'),
        ]);
        //travel close-------------------------------------------------------------

        //bundles-------------------------------------------------------------
        DB::table('bundles')->insert([
            'judulBundle' => 'Liburan Ramadhan di Bali',
            'image' => 'images/bundle1.jpg',//baru
            'hargaBundle' => '1500000',
            'deskripsiBundle' => 'Pergi muter-muter ke berbagai wisata Bali. Nusa Dua, Nusa Penida, Kuta, Pulau Penyu, Garuda Wisnu Kencana ',
            'tanggalExpBundle' => '2023-01-01',
        ]);
        DB::table('bundles')->insert([
            'judulBundle' => 'Road to Gunung Jawa',
            'image' => 'images/bundle2.jpg',//baru
            'hargaBundle' => '3000000',
            'deskripsiBundle' => 'Disana gunung disini gunung ditengah-tengahnya ada pulau Jawa! daripada bingung mending kita ngedaki gunung di Pulau Jawa!!. Gunung Bromo, Gunung Semeru, dan Gunung Rinjani',
            'tanggalExpBundle' => '2023-02-01',
        ]);
        DB::table('bundles')->insert([
            'judulBundle' => 'Pantai Yuk!',
            'image' => 'images/bundle3.png',//baru
            'hargaBundle' => '900000',
            'deskripsiBundle' => 'Nyantai! Nyaman di Pantai!. Papuma, Pasir Putih Situbondo, Nusa Dua, Nusa Penida, Kuta, Pulau Penyu, Garuda Wisnu Kencana ',
            'tanggalExpBundle' => '2023-04-01',
        ]);
        DB::table('bundles')->insert([
            'judulBundle' => 'Wisata Sumatera',
            'image' => 'images/bundle4.jpg',//baru
            'hargaBundle' => '2000000',
            'deskripsiBundle' => 'Menjelajahi Pulau Sumatera. Jembatan Ampera, Pantai Panjang, Rumah Soekarno Bengkulu, dan Benteng Malioboro',
            'tanggalExpBundle' => '2023-01-01',
        ]);
        DB::table('bundles')->insert([
            'judulBundle' => 'Pulau ke Pulau!',
            'image' => 'images/bundle5.jpg',//baru
            'hargaBundle' => '3000000',
            'deskripsiBundle' => 'Berangkat dari pulau ke pulau. Berawal dari Pulau Jawa - Sumatera, Kalimantan, Sulawesi, Papua, Hingga Akhir ke BalI!!!',
            'tanggalExpBundle' => '2023-01-05',
        ]);
        //bundles close-------------------------------------------------------------

       
        //wisata
        DB::table('wisatas')->insert([
            'namaWisata' => 'Pantai Papuma',
            'hargaWisata' => '100000',
            'image' => 'images/papuma.jpg',
            'map' => 'https://maps.google.com/maps?q=pantai%20papuma&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Pantai Papuma adalah sebuah pantai yang menjadi tempat wisata di Kabupaten Jember,Provinsi Jawa Timur, Indonesia. [1]Nama Papuma[2] sendiri sebenarnya adalah sebuah singkatan dari “Pasir Putih Malikan.

            Pantai papuma berada di Desa Lojejer, Kecamatan Wuluhan, Kabupaten Jember. Pantai papuma adalah salah satu pantai yang cukup populer dan terkenal di Jember. Walaupun jarak sekitar 40 kilometer cukup jauh dari pusat kota Jember. Namun, keindahan pasir putih Malikan ini cukup eksotis dan mampu menarik perhatian wisatawan lokal hingga mancanegara untuk datang kesana.',
            'lokasiWisata' => 'Jember',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Pantai Parai Tenggiri',
            'hargaWisata' => '200000',
            'image' => 'images/Tenggiri.jpg',
            'map' => 'https://maps.google.com/maps?q=Pantai%20Parai%20Tenggiri&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Pasti diantara kamu sudah pernah menyaksikan film populer Laskar Pelangi yang berlatar di Pulang Belitung, bukan? Selain alur ceritanya yang menarik, lokasi film ini juga banyak menyita perhatian penonton. 

            Berbeda dengan pantai lain pada umumnya, Parai Tenggiri memiliki struktur pantai yang landai dengan air laut berwarna hijau toska serta pasir putihnya yang lembut. Ombak di pantai ini juga tenang sehingga menjadi salah satu alasan yang menarik bagi wisatawan yang senang berenang. 
            
            Tidak hanya berenang, kamu juga bisa menikmati aktivitas memancing, parasailing, menyelam, snorkeling, dan masih banyak lainnya',
            'lokasiWisata' => 'Bangka Belitung',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Nusa Dua',
            'hargaWisata' => '100000',
            'image' => 'images/nusadua.jpg',
            'map' => 'https://maps.google.com/maps?q=Nusa%20Dua&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Pulau Seribu Dewa satu ini memang tidak perlu diragukan lagi terkait keindahan dan pesonanya dalam memikat para wisatawan dalam negeri maupun mancanegara. Di Bali, ada satu tempat wisata yang begitu cantik, yakni Nusa Dua. 

            Objek wisata pantai ini memiliki pasir putih yang lembut dan air laut yang berwarna biru jernih. Kamu akan dimanjakan dengan berbagai fasilitas saat berkunjung ke tempat satu ini. Mulai dari penginapan dan resort yang berkelas, restoran, pusat perbelanjaan, hingga aktivitas berselancar di pantainya.',
            'lokasiWisata' => 'Bali',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Gunung Rinjani',
            'hargaWisata' => '70000',
            'image' => 'images/rinjani.jpg',
            'map' => 'https://maps.google.com/maps?q=Gunung%20Rinjani&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Selain Gili Trawangan, di Nusa Tenggara Barat juga terdapat wisata yang tak kalah populer dan cocok bagi kamu yang suka mendaki, yakni Gunung Rinjani. Gunung ini adalah gunung berapi tertinggi kedua yang ada di Indonesia. 

            Gunung Rinjani memiliki pemandangan terindah se-Asia dengan hamparan bunga edelweis dan Danau Segara Anak. Di tempat ini juga bisa menjadi spot menarik bagi para pendaki untuk mendirikan tenda, mandi air hangat, maupun memancing ikan. 
            
            Namun sebelum itu, buatlah persiapan yang matang sebelum memutuskan untuk mendaki. Kamu juga perlu menyiapkan bekal mental dan stamina agar tidak menyerah di tengah jalan.',
            'lokasiWisata' => 'Lombok, Nusa Tenggara Barat',
        ]);DB::table('wisatas')->insert([
            'namaWisata' => 'Danau Toba',
            'hargaWisata' => '100000',
            'image' => 'images/toba.jpg',
            'map' => 'https://maps.google.com/maps?q=Danau%20Toba&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Danau Toba sudah lama terkenal sebagai salah satu objek wisata Indonesia favorit yang sering dikunjungi sejak tahun 1980-an lho!

            Objek wisata Indonesia yang terkenal di dunia ini memiliki luas 1.145 kilometer persegi. Di tengah danau terdapat Pulau Samosir yang luasnya hampir sebanding dengan negara Singapura. Bisa bayangin kan Toppers, betapa megahnya Danau Toba ini?
            
            Selain terluas, danau ini juga termasuk salah satu danau terdalam di dunia dengan kedalaman sekitar 450 meter.',
            'lokasiWisata' => 'Sumatera Utara',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Nusa Penida',
            'hargaWisata' => '300000',
            'image' => 'images/nusapenida.jpg',
            'map' => 'https://maps.google.com/maps?q=Nusa%20Penida&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Pulau Bali, sudah tidak bisa dipungkiri lagi namanya memang merajalela ke seluruh dunia karena pemandangannya yang indah, budayanya yang masih kental terasa dan pantai nya yang eksotis.

            Saat Toppers berkunjung ke Bali jangan heran kalau banyak banget turis berlalu lalang di sana, bahkan beberapa ada yang menetap di Bali lho!
            
            Salah satu objek wisata di Bali yang populer di mata dunia saat ini adalah Nusa Penida. Tempat wisata Indonesia favorit ini adalah pilihan tepat untuk Toppers yang suka melakukan Island Hoping, dan menikmati keindahan bawah laut dengan snorkeling.
            
            Dengan panorama pantai yang indah Nusa Penida dan pulau-pulau kecil sekitarnya menawarkan pengalaman berbeda dan tentunya akan memanjakan Toppers yang juga memiliki hobi fotografi.',
            'lokasiWisata' => 'Bali',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Taman Laut Bunaken',
            'hargaWisata' => '500000',
            'image' => 'images/bunaken.jpg',
            'map' => 'https://maps.google.com/maps?q=Taman%20Laut%20Bunaken&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Destinasi wisata di Indonesia yang populer di mancanegara selanjutnya adalah Taman Laut Bunaken yang berada di Teluk Manado.

            Bunaken menjadi salah satu objek wisata di Indonesia yang mengundang decak kagum karena keindahan taman bawah lautnya yang sulit ditemukan di negara lain.
            
            Berkunjung ke Taman Laut Bunaken, Toppers akan menemukan keindahan kehidupan di dalam laut yang membuat mata kamu tidak bisa berhenti memandangnya.
            
            Di dalam taman laut ini terdapat 13 jenis terumbu karang yang didominasi dengan bebatuan laut.
            
            Selain itu, pemandangan yang paling menarik adalah adanya terumbu karang terjal vertikal yang menjulang ke bawah sedalam 25 – 50 meter. Tidak sampai di situ, mata kita akan dimanjakan dengan 91 jenis ikan yang ada di dalamnya.
            
            Tidak heran kalau Taman Laut Bunaken menjadi salah satu destinasi bagi para wisatawan terutama para pecinta laut.
            
            Apalagi tujuan wisata Indonesia favorit wisatawan asing ini menyediakan fasilitas untuk scuba diving dengan 20 titik penyelaman terbaik, di mana penyelam dapat kesempatan berenang di dasar laut dengan beragam biota laut yang menakjubkan.',
            'lokasiWisata' => 'Sulawesi Utara',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Wakatobi',
            'hargaWisata' => '100000',
            'image' => 'images/wakatobi.jpg',
            'map' => 'https://maps.google.com/maps?q=Wakatobi&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Masih di Pulau Sulawesi, Taman Nasional Wakatobi juga merupakan salah satu tujuan wisata bawah laut yang populer dan mendunia.

            Dengan luas mencapai 13.900 km2, tujuan wisata terkenal asal Indonesia ini memiliki tak kurang dari 112 jenis terumbu karang yang bersimbiosis dengan ikan-ikan bawah laut sehingga menciptakan panorama bawah laut yang tiada tanding.
            
            Semuanya itu menjadikan Wakatobi sebagai salah satu surga menyelam bagi para traveler dari berbagai penjuru dunia.',
            'lokasiWisata' => 'Sulawesi Tenggara',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Kepulauan Raja Ampat',
            'hargaWisata' => '200000',
            'image' => 'images/rajaampat.jpg',
            'map' => 'https://maps.google.com/maps?q=Kepulauan%20Raja%20Ampat&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Surga dunia di Indonesia selanjutnya adalah kepulauan Raja Ampat yang terletak di Papua Barat dengan kekayaan laut terlengkap di bumi.

            Raja Ampat atau Empat Raja merupakan 4 pulau indah yang merupakan penghasil lukisan batu kuno. Empat pulau utama yang dimaksud adalah Waigeo, Salawati, Batanta, dan Misool.
            
            Nama-nama tersebut berasal dari mitos lokal dari warga di sekitar pulau Raja Ampat. Keindahan dan kemegahan dari objek wisata populer asal Indonesia ini mampu mengundang para wisatawan dari seluruh dunia untuk datang ke sini dan merasakan pengalaman sekaligus pemandangan yang tidak akan terlupakan.
            
            Dengan wilayah pulau mencakup hingga 4,6 juta hektar tanah dan laut, kita bisa menemukan 540 jenis karang, 1.511 spesies ikan, serta 700 jenis moluska.
            
            Perlu diketahui Toppers, menurut laporan The Nature Conservancy and Conservation International, ada sekitar 75% spesies laut dunia yang tinggal di pulau indah nan menakjubkan ini.',
            'lokasiWisata' => 'Papua Barat',

        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Gunung Bromo',
            'hargaWisata' => '450000',
            'image' => 'images/bromo.jpg',
            'map' => 'https://maps.google.com/maps?q=Gunung%20Bromo&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Kalau kamu pernah berkunjung ke Jawa Timur gak lengkap rasanya kalau belum menginjakkan kaki ke Gunung Bromo ini.

            Salah satu gunung berapi yang masih aktif ini memiliki pesona khas berupa gurun pasir yang sangat luat.
            
            Meskipun bukan salah satu gunung tertinggi di Indonesia, namun keindahan Gunung Bromo tidak ada duanya dan membuat para pengunjung dapat merasakan pemandangan yang fantastis dan spektakuler.
            
            Wisatawan dapat berkuda dan mendaki gunung bromo untuk menikmati keindahan yang menawan saat matahari terbit dan terbenam.
            
            Bisa jadi pengalaman secara langsung yang tidak terlupakan lho Toppers! Dengan keindahan yang menakjubkan itu tidak heran jika objek wisata di Indonesia satu ini menjadi para wisatawan mancanegara yang berkunjung ke Indonesia.',
            'lokasiWisata' => 'Jawa Timur',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Pulau Komodo',
            'hargaWisata' => '750000',
            'image' => 'images/komodo.jpg',
            'map' => 'https://maps.google.com/maps?q=Pulau%20Komodo&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Destinasi wisata Indonesia yang tersohor di mata dunia selanjutnya adalah Pulau Komodo. Pulau yang berlokasi di Kepulauan Nusa Tenggara Timur ini merupakan rumah bagi ratusan Komodo, hewan endemik yang hanya ada di Indonesia.

            Selain bisa mengamati perilaku dan mengeksplorasi habitat dari hewan purba ini, Pulau Komodo juga menawarkan panorama alam yang menakjubkan.
            
            Salah satunya adalah pantai dengan pasir berwarna merah muda yang dikenal dengan nama “Pink Beach“.
            
            Pantai seperti ini hanya terdapat tujuh di seluruh dunia sehingga menjadikannya sebagai salah satu tujuan wisata Indonesia yang mendunia.',
            'lokasiWisata' => 'Nusa Tenggara Timur',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Candi Borobudur',
            'hargaWisata' => '200000',
            'image' => 'images/borobudur.jpg',
            'map' => 'https://maps.google.com/maps?q=Candi%20Borobudur&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'alah satu ikon wisata budaya Indonesia yang mendunia lainnya adalah Candi Borobudur. Sebagai candi Budha terbesar di dunia dengan luas tak kurang dari 123 X 123 meter, candi yang dibangun pada masa kerajaan Mataram kuno ini merupakan warisan budaya dan sejarah Indonesia yang terkenal akan arsitektur yang memukau.

            Setiap tahunnya, tak cuma wisatawan domestik tetapi banyak juga wisatawan asing yang tertarik untuk mengamati keindahan dari Candi Borobudur.
            
            Berbagai relief yang menceritakan mengenai berbagai ajaran dalam agama Budha dan perjalanan hidup Sidharta Gautama hingga mencapai pencerahan sempurna bisa Toppers temukan di tempat wisata favorit asal Indonesia.
            
            Candi Borobudur sendiri memiliki total tak kurang dari 504 arca Buddha dan 2.672 panel relief pada dinding-dindingnya. Menakjubkan sekali, bukan?',
            'lokasiWisata' => 'Jawa Tengah',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Tana Toraja',
            'hargaWisata' => '300000',
            'image' => 'images/tanatoraja.jpg',
            'map' => 'https://maps.google.com/maps?q=Tana%20Toraja&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'ndonesia memang kaya akan adat dan budaya yang menarik mata dunia. Salah satu destinasi wisata Indonesia yang terkenal akan kekayaan tradisi budayanya adalah  Kabupaten Tana Toraja.

            Terletak di Sulawesi Selatan dikawasan pegunungan yang indah, Toppers masih bisa melihat uniknya keseharian dan tradisi masyarakat adat Tana Toraja.
            
            Selain keindahan arsitektur tradisional rumah tongkonan, wisatawan juga bisa mengamati tradisi unik upacara kematian yang dikenal sebagai Rambu Solo yang biasanya diselenggarakan pada Juli dan Agustus
            
            Keunikan dari tradisi ini menjadikan Tana Toraja sebagai tempat wisata asal Indonesia yang memiliki daya tarik mendunia.',
            'lokasiWisata' => 'Sulawesi Selatan',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Gili Trawangan',
            'hargaWisata' => '350000',
            'image' => 'images/terawangan.jpg',
            'map' => 'https://maps.google.com/maps?q=Gili%20Trawangan&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Untuk pecinta pantai, Gili Trawangan merupakan tujuan wisatawan dari seluruh dunia. Dengan kombinasi langit biru dengan semburat awan putih, jernihnya air laut dibingkai pasir putih menjadikan Gili Trawangan sebagai tujuan wisata populer baik bagi wisatawan dalam negeri maupun luar negeri.

            Selain pantai dan alam bawah laut, tempat wisata Nusantara yang berada di Provinsi Nusa Tenggara Barat ini juga memiliki berbagai lansekap menakjubkan dan juga spot-spot foto yang instagramable, lho.',
            'lokasiWisata' => 'Nusa Tenggara Barat',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Goa Gong',
            'hargaWisata' => '80000',
            'image' => 'images/goagong.jpg',
            'map' => 'https://maps.google.com/maps?q=Goa%20Gong&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Goa Gong yang terletak di Pacitan, Jawa Timur.

            Panorama eksotik yang ditawarkan oleh objek wisata alam Indoneisa ini disebut-sebut sebagai salah satu goa terindah di Asia Tenggara.
            
            Bertualang di Goa Gong, Toppers akan disuguhkan keeksotisan struktur stalaktit dan stalakmit yang terbentuk secara alami di Goa ini.
            
            Meskipun tidak sepopuler tempat wisata Indonesia lainnya, Goa Gong merupakan destinasi wisata favorit bagi para traveler dunia yang berjiwa petualang.',
            'lokasiWisata' => 'Jawa Timur',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Danau Kelimutu',
            'hargaWisata' => '900000',
            'image' => 'images/kalimutu.jpg',
            'map' => 'https://maps.google.com/maps?q=Danau%20Kelimutu&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Selain Danau Toba, destinasi wisata danau milik Indonesia yang mendunia adalah Danau Kelimutu. Danau ini merupakan danau vulkanik yang berada di puncak Gunung Kelimutu. Untuk mencapai danau indah ini, Toppers harus melakukan hiking terlebih dahulu.

            Keistimewaan danau yang terletak di Pulau Flores, NTT ini adalah pemandangan danau dengan tiga warna yakni hijau, putih dan biru. Setiap tahun, danau eksotik ini selalu ramai dikunjungi wisatawan mancanegara.',
            'lokasiWisata' => 'Nusa Tenggara Timur',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Ngarai Sianok',
            'hargaWisata' => '100000',
            'image' => 'images/ngaraisianok.jpg',
            'map' => 'https://maps.google.com/maps?q=Ngarai%20Sianok&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Ngarai Sianok yang terletak di perbatasan Kota Bukittinggi, Kabupaten Agam, Sumatra Barat ini terkenal akan keindahannya yang mendunia.

            Jurang yang membentang sepanjang 15 kilometer dengan kedalaman lebih dari 100 meter ini membentuk patahan alam yang indah tiada duanya. Terlebih di tengah patahan tersebut mengalir Sungai Batang Sianok yang mengairi alam lembah nan hijau dan permai.',
            'lokasiWisata' => 'Sumatra Barat',
        ]);
        DB::table('wisatas')->insert([
            'namaWisata' => 'Kawah Ijen',
            'hargaWisata' => '40000',
            'image' => 'images/kawahijen.jpg',
            'map' => 'https://maps.google.com/maps?q=Kawah%20Ijen&t=&z=11&ie=UTF8&iwloc=&output=embed',
            'deskripsiWisata' => 'Dari Banyuwangi, terdapat pesona kawah Ijen yang baru-baru ini mulai terkenal sampai ke mancanegara. Salah satu daya pikatnya adalah blue fire atau pesona api biru yang menyala dari kawah Gunung Ijen.',
            'lokasiWisata' => 'Jawa Timur',
        ]);
    }
}
