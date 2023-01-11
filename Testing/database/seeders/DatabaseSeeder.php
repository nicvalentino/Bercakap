<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\post;

use App\Models\user;
use App\Models\artikel;
use App\Models\comment;
use App\Models\psikiater;
use App\Models\pertanyaan;
use Illuminate\Database\Seeder;
use App\Models\jawaban_psikiater;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        user::create([
            'name' => 'Melinda Wulandari S.Psim',
            'email' => 'MelindaWulandari@gmail.com',
            'password' => bcrypt('cobacoba')
        ]);

        user::create([
            'name' => 'Iwan Prasetyo S.Psim',
            'email' => 'IwanPrasetyo@gmail.com',
            'password' => bcrypt('cobacoba')
        ]);

        user::create([
            'name' => 'Dahlia Ninda S.Psim',
            'email' => 'DahliaNinda@gmail.com',
            'password' => bcrypt('cobacoba')
        ]);

        user::create([
            'name' => 'Eka Indah Nurmawati S.Psim', 
            'email' => 'EkaIndahM@gmail.com',
            'password' => bcrypt('cobacoba')
        ]);

        user::create([
            'name' => 'Admin Satu', 
            'email' => 'Admin1@gmail.com',
            'password' => bcrypt('passwordadmin1'),
            'is_admin' => 1,
        ]);

        user::factory(15)->create();

        post::create([
            'user_id' => 1,
            'title' => 'Jurusan kuliah yang terlalu dilebih-lebihkan',
            'body' => 'Apalagi kalau bukan yang namanya Manajemen Bisnis.

            Mahasiswa manbis, baca ini!
            
            Bukan maksud meremehkan atau merendahkan, tapi saya pribadi paham mengapa banyak orangtua selalu meremehkan jurusan ini. Jurusan yang biasanya menjadi jurusan sejuta umat orang keturunan Tionghoa, pokoknya S1 dan selesai bisa lanjutin usaha atau bisnis milik keluarga.
            
            Tapi percayalah, jika ingin bisnis atau usaha anda sukses, maka hal yang diperlukan adalah terjun sedini mungkin. Saya mulai memahami bisnis interior sejak kelas lima SD, walaupun saat itu masih sekedar iseng merapikan uang kas dan membantu ambilkan surat dari karyawan ke karyawan.
            
            Kalau kata papa saya, pengalaman jatuh adalah guru terbaik dalam bisnis, darisana kita bisa mengetahui kapasitas sesungguhnya dari diri kita sendiri. Memang berat dan tidak mudah, tapi jauh lebih efektif dengan belajar bisnis langsung dibandingkan mendengarkan teori - teori dari dosen yang mungkin sebenarnya tidak mampu kalau membangun bisnis dari nol.
            
            Teman - teman papa saya bahkan banyak yang suka mengejek jurusan satu ini, kenapa? Ya karena mereka bilang untuk apa mendengarkan cara sukses mengelola bisnis jika yang mengajar ternyata hanya naik mobil LCGC atau LMPV sejuta umat, maaf saya tidak menyinggung tapi itu perkataan orang lain. Mereka bilang, belajarlah bisnis dari orang - orang yang memang jatuh bangun dan mobilnya sekelas Mercedes-Benz atau BMW keatas.
            
            Saya pribadi merasa ada benarnya dan ada tidak benarnya juga. Tapi memang patut diakui bahwa jurusan Manajemen Bisnis terlalu overrated, anggapannya anda diajari bagaimana The Beatles bisa sukses melalui teori - teori musik ketika aslinya para personil The Beatles sibuk putar otak di studio perekaman.
            
            Tapi yang namanya ilmu, tidak ada yang sia - sia kok. Jangan masuk Manajemen Bisnis hanya karena anda bingung ingin kuliah apa atau pokoknya lulus S1 lanjutin bisnis orangtuanya, gitu mah mending langsung lanjutin enak tidak buang banyak uang. ',
            
            'excerpt' => 'Apalagi kalau bukan yang namanya Manajemen Bisnis.

            Mahasiswa manbis, baca ini!
            
            Bukan maksud meremehkan atau merendahkan, tapi saya pribadi paham mengapa banyak orangtua selalu meremehkan jurusan ini. Jurusan yang biasanya menjadi jurusan sejuta umat orang keturunan Tionghoa, pokoknya S1 dan selesai bisa lanjutin usaha atau bisnis milik ...'
        ]);

        comment::create([
            'post_id' => 1,
            'user_id' => 1,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 1,
            'user_id' => 2,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 1,
            'user_id' => 3,
            'body' => 'Comment 3'
        ]);
        comment::create([
            'post_id' => 1,
            'user_id' => 14,
            'body' => 'Comment 4'
        ]);
        comment::create([
            'post_id' => 1,
            'user_id' => 11,
            'body' => 'Comment 5'
        ]);

        post::create([
            'user_id' => 3,
            'title' => 'Pengalaman yang membuat saya trauma',
            'body' => 'Saya adalah wanita, saat itu saya berumur 11 tahun. Saya diperkosa oleh seorang lelaki berusia 23 tahun, hingga hampir dua kali. Kejadian tersebut sangat saya tidak sadari sebelumnya akan terjadi pada saya. Pria ini merupakan saudara jauh dari nenek saya dan kebetulan berteman akrab dengan kakak saya. Entah dia berteman dengan kakak saya untuk mengincar saya atau alasan lain, saya tidak tahu.

            Saya dan kakak saya tinggal dengan kakek nenek saya. Saat itu pria ini menginap di rumah saya. Karena dia adalah teman kakak saya, maka kakek nenek saya mengijinkan dia untuk menginap. Dia tidur bersama kakak saya di kamarnya. Kamar saya dan kakak berada di lantai dua. Malam itu, tiba-tiba saya terbangun dan terkejut. Pria itu telah berada diatas saya, menindihi badan saya. Ketika saya terbangun, dia langsung menutup mulut saya menggunakan tangannya sambil berkata "diam, jangan berisik". Saya yang sebelumnya belum pernah terpapar dengan seks education atau pun self defense, saat itu hanya diam saja. Perlahan pria itu membuka celananya dan memeloroti celana saya. Saya, anak berusia 11 tahun, terdiam, ketakutan, menangis, kesakitan, sakit, sangat sakit sekali waktu itu. Saya menangis, disaat itu dan setelahnya. Setelah selesai, dia kemudian berkata "besok cuci celananya", "jangan bilang siapa-siapa, awas kamu kalau bilang siapa-siapa". Saya menangis, sesenggukan. Hingga akhirnya ketiduran.
            
            Ketika terbangun paginya, saya berpikir kejadian yang saya alami tadi malam adalah mimpi. Tetapi saat mengecek celana saya, ternyata basah. Dan ketika itulah saya sadar semuanya bukan mimpi, keperawanan saya telah hilang, saya diperkosa oleh seorang pria dewasa. Saya mengurung diri dalam kamar setelah kejadian itu hingga berminggu-minggu. Kakek nenek saya sempat hawatir, namun saya tidak memiliki keberanian untuk menceritakan hal yang saya alami karena pada saat itu pemerkosaan benar-benar hal yang sangat dianggap tabu dan benar-benar mencoreng nama baik keluarga. Belum lagi keluarga saya adalah keluarga terhormat, ayah saya selalu menekankan untuk menjaga martabat keluarga.
            
            Kejadian itu membuat saya trauma selama bertahun-tahun. Saya selalu merasa risih, dan selalu berpikiran akan diperkosa apabila didekati oleh pria yang berumur terpaut jauh dari saya. Bahkan mencium bau pria lain saja saya jijik. Saya takut, ketika didekati oleh pria, walaupun itu adalah paman atau saudara saya sendiri.
            
            Trauma yang saya alami tidak hanya itu saja. Ketika saya kuliah, saya memiliki masalah yang besar. Saya kehabisan pikiran untuk menyelesaikannya, hingga seorang teman menyarankan saya untuk mengunjungi guru spiritualnya. Saya merupakan wanita yang buta akan agama saat itu. Saya berpikir mungkin dengan menemui guru spiritual saya akan mendapat pencerahan tentang bagaimana harus menyelesaikan masalah yang hadapi.
            
            Sore itu saya menemani teman saya menemui guru spiritualnya. Saya dikenalkan olehnya dengan guru tersebut. Guru tersebut adalah lelaki tua, mungkin umurnya berkisar 50 tahun. Pada kunjungan itu, saya dinasehati banyak hal dengan kehidupan. Hal itu lah yang membuat saya datang lagi kerumahnya untuk kunjungan kedua. Di kunjungan kedua, bapak itu meminta saya mengikuti kalimat bahasa arab yang diucapkannya kemudian meminum air yang diberikannya. Kemudian pada kunjungan ketiga beliau menyuruh saya untuk membawa pulang air yang telah disiapkannya, dan mengoleskan suatu minyak pada daerah intim saya, beliau bilang itu akan mengusir setan yang berada pada tubuh saya. Saya ikuti instruksi tersebut. Kemudian di kunjungan keempat, beliau bertanya kapan terakhir saya menstruasi, saya jawab seminggu yang lalu, lalu beliau berkata bahwa saat saya menstruasi itu setan telah keluar dari tubuh saya dan saya harus segera menutup jalan masuknya, maka saya harus melakukan sebuah terapi. Saya diminta mengganti baju dan melilit tubuh saya dengan kain, setelah itu beliau memandikan saya. Setelah itu, beliau meminta saya mengambil beras di dalam mulutnya dengan lidah saya. Ya! Benar! Dengan lidah saya! Saya kaget dan menangis dalam hati saat itu, saya telah terperangkap dalam sexual abuse untuk kedua kalinya.
            
            Saya tidak memutuskan untuk kembali menemui bapak itu setelah kejadian itu. Seminggu setelahnya, teman saya memaksa saya untuk menemui bapak itu. Saya temani dia menemui bapak itu. Pada kunjungan itu, bapak itu menyuruh saya membuka celana untuk mengoleskan minyak ke kemaluan saya, saya kaget, kaget sekali, teman saya hanya diam mendengar hal tersebut. Kemudian saya mengelak dan berkata bahwa saya sedang datang bulan dan berkata "bapak mau megang darah mens saya?". Barulah bapak itu mengurungkan niatnya. Saya bergegas pulang saat itu. Gila, hanya itu kata yang terlintas dalam otak saya.
            
            Dua hal tersebut meninggalkan trauma yang sangat dalam bagi saya. Itu juga yang menjadi alasan saya tidak mudah didekati oleh laki-laki. Sekarang saya sudah bisa berdamai dengan diri sendiri dan mepelajari berbagai self defense, sehingga saya memiliki cukup keberanian sekarang ketika dihadapkan pada situasi yang darurat.',
        
            'excerpt' => 'Saya adalah wanita, saat itu saya berumur 11 tahun. Saya diperkosa oleh seorang lelaki berusia 23 tahun, hingga hampir dua kali. Kejadian tersebut sangat saya tidak sadari sebelumnya akan terjadi pada saya. Pria ini merupakan saudara jauh dari nenek saya dan kebetulan berteman akrab dengan kakak saya. Entah dia berteman dengan kakak saya untuk mengincar saya atau alasan lain, saya tidak ...'
        ]);

        comment::create([
            'post_id' => 2,
            'user_id' => 3,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 2,
            'user_id' => 4,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 2,
            'user_id' => 5,
            'body' => 'Comment 3'
        ]);

        post::create([
            'user_id' => 5,
            'title' => 'Pengalaman yang membuat saya trauma',
            'body' => 'Terkena ledakan minyak goreng panas.

            Mohon agar teman-teman jangan langsung menggoreng bahan makanan dari kulkas, jangan lupa untuk didiamkan terlebih dahulu.
            
            Sampai sekarang saya trauma mendengar suara letupan minyak goreng ketika memasak, refleks memalingkan wajah sambil menutup mata karena ketakutan.
            
            Kejadian tersebut ketika saya menginjak semester 2 atau satu tahun yang lalu. Saya sampai di Bintaro pada hari Minggu pagi, kemudian Senin sudah mulai aktif kuliah.
            
            Sudah menjadi hal biasa kalau mahasiswa pulang kampung halaman akan membawa oleh-oleh untuk teman se-kost begitu kembali ke kota tempat kuliah. Teman saya yang dari Palembang membawa empek-empek dan diletakkan di freezer. Kami sepakat untuk menggoreng empek-empek di Minggu malam.
            
            Kesalahan yang tidak kami sadari adalah kami baru mengeluarkan empek-empek tersebut begitu hendak digoreng. Seharusnya empek-empek yang dari freezer harus didiamkan terlebih dahulu supaya tidak meletup-letup ketika digoreng.
            
            Awalnya, saat kami menggoreng masih tampak baik-baik saja. Tak lama, empek-empek mulai meletup. Dua teman saya agak takut untuk menggoreng, saya mengajukan diri untuk menggoreng karena saya sudah terbiasa membantu Mama memasak, kalau terkena cipratan minyak saya langsung menyiramnya dengan air mengalir.
            
            Sayangnya, tidak berlangsung lama setelah letupan pertama, terjadi letupan kedua yang lebih besar berkali-kali lipat daripada letupan pertama. Minyak goreng menciprat kemana-mana seolah-olah ada batu besar yang dijatuhkan ke minyak. Saya sampai terjungkal ke belakang karena refleks menghindar. Empek-empek berserakan keluar dari wajan, bahkan minyak diwajan berkurang setengah karena ledakan tersebut.
            
            Suara derap kaki yang berada dilantai dua terdengar buru-buru menuruni anak tangga untuk menengok apa yang terjadi. Semua penghuni kost berkumpul di dapur. Ada yang mengira jika gasnya meledak, saking kerasnya suara ledakan minyak sampai ke lantai 2.
            
            Setelah terkena ledakan minyak panas itu, saya merasakan seluruh wajah saya seperti terbakar, punggung tangan saya terasa sangat panas. Saya awalnya hanya merintih kesakitan sambil berlari ke arah keran untuk menyiram wajah saya dengan air mengalir.
            
            Rasa sensasi terbakar semakin menjadi-jadi, saya tak kuasa menahan tangis. Teman-teman saya kebingungan dan bertanya apa yang bisa mereka lakukan. Saat saya sedang sibuk membasuh wajah saya seperti kesetanan, salah satu penghuni kost melarang saya untuk dibasuh dengan air karena dapat memperparah rasa sakitnya. Dan saya justru menuruti larangan tersebut karena dilanda bingung dan kesakitan.
            
            Singkat cerita setelah rasa sakit yang tak kunjung berhenti, akhirnya teman-teman saya menelepon teman kami di kost lain yang merupakan mahasiswi kedokteran untuk datang. Setelah mahasiswi itu datang dan melihat kondisi saya, dia menyarankan agar saya segera dibawa ke rumah sakit terdekat untuk mendapat pengobatan yang lebih baik.
            
            Bagaikan drama, saya yang sudah menangis karena kesakitan dan luka bakar yang mulai melepuh ternyata begitu sampai di rumah sakit terdekat saya ditolak karena UGD sudah sesak dengan pasien. Saya pun terpaksa dibawa ke rumah sakit yang lain, yang jaraknya lebih jauh. Sepanjang perjalanan hanya terdengar isakan tangis saya sementara teman saya terus menyemangati saya.
            
            Memang sakit sekali, saya berpikir bagaimana orang yang mengalami luka bakar lebih parah dari saya yang pasti lebih menyakitkan. Saya dalam hati juga istighfar, ini seperti dapat spoiler nol koma nol sekiaaaaaaaaaaaan persen rasa sakit dineraka. Inipun hanya dibagian tangan dan wajah. Sebenarnya luka bakarnya tidak hanya ditangan dan diwajah, ternyata ada luka bakar juga dileher, lengan atas, bahkan dekat lutut. Padahal saya waktu itu mengenakan kaus dan celana yang cukup tebal.
            
            Begitu sampai di rumah sakit yang kedua, dokter bertanya bagaimana kejadiannya, dimana saja letak rasa sakitnya. Dokter juga menyayangkan karena perih yang saya rasakan tidak akan terlalu sakit jika begitu terkena minyak saya terus menyiramnya dengan air mengalir.
            
            "Beruntung sekali tidak terkena matamu, jika itu terjadi saya tidak tahu apakah kamu bisa melihat lagi"
            
            Iya, karena ketika kejadian saya refleks menghalangi mata saya dengan tangan kiri. Alhasil tangan kiri saya yang cukup parah. Tapi saya bersyukur, itu saja sudah saya tutupi dengan tangan ledakan minyaknya masih nyaris mengenai mata saya.
            
            Saya menghabiskan satu malam dirumah sakit tanpa tidur karena terus merintih kesakitan. Lebih baik sakit gigi karena masih ada jeda tidak sakit ketika cenat-cenut, karena rasa sensasi terbakar itu tidak ada jeda walau sedetik.
            
            Saya tidak masuk kuliah hanya dua hari, hari ketiga pascakejadian saya nekat masuk karena saya takut untuk absen kuliah. Iya, dengan luka bakar yang sangat terpampang diwajah saya. Saya yang benci jadi pusat perhatian terpaksa menahannya ketika orang-orang yang berpapasan dengan saya melihatnya, bahkan sampai ada yang bergidik :) Terima kasih, saya sempat insecure karena ini.
            
            Sebenarnya jika saya absen selama seminggu, otomatis saya hanya absen satu kali disetiap matkul. Tapi saya tidak berani ambil risiko, saya tidak tahu apakah ke depannya saya akan sakit lagi. Saya takut jika suatu saat saya sakit lagi. Di kampus saya ada peraturan yang tidak memperbolehkan mahasiswa absen lebih dari dua kali disetiap matkul. Jika lebih dari dua kali, nilai otomatis E dan tentu saja berakhir Drop Out.',
        
            'excerpt' => 'Terkena ledakan minyak goreng panas.

            Mohon agar teman-teman jangan langsung menggoreng bahan makanan dari kulkas, jangan lupa untuk didiamkan terlebih dahulu.
            
            Sampai sekarang saya trauma mendengar suara letupan minyak goreng ketika memasak, refleks memalingkan wajah sambil menutup mata karena ketakutan.
            
            Kejadian tersebut ketika saya menginjak semester 2 atau satu tahun yang lalu. Saya sampai di Bintaro pada hari Minggu pagi, kemudian Senin sudah mulai aktif kuliah.
            
            Sudah menjadi hal biasa kalau mahasiswa pulang kampung halaman akan membawa oleh-oleh untuk teman se-kost begitu kembali ke kota tempat kuliah. Teman saya yang dari Palembang membawa empek-empek dan diletakkan di freezer. Kami sepakat untuk menggoreng empek-empek di Minggu malam.
            
            Kesalahan yang tidak kami sadari adalah kami baru mengeluarkan empek-empek tersebut begitu hendak digoreng. Seharusnya empek-empek yang dari freezer harus didiamkan terlebih dahulu supaya tidak meletup-letup ketika digoreng.
            
            Awalnya, saat kami menggoreng masih tampak baik-baik saja. Tak lama, empek-empek mulai meletup. Dua teman saya agak takut untuk menggoreng, saya mengajukan diri untuk menggoreng karena saya sudah terbiasa membantu Mama memasak, kalau terkena cipratan minyak saya langsung menyiramnya dengan air ...'
        ]);

        comment::create([
            'post_id' => 3,
            'user_id' => 3,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 3,
            'user_id' => 4,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 3,
            'user_id' => 1,
            'body' => 'Comment 3'
        ]);


        post::create([
            'user_id' => 6,
            'title' => 'Pengalaman yang membuat saya trauma',
            'body' => 'Sewaktu kecil hingga remaja, saya memiliki masalah dalam bergaul dengan teman saya. Saya merupakan orang yang penyendiri. Beberapa teman saya juga berkata bahwa saya terlalu tertutup. Saya juga merupakan orang yang sangat tidak percaya diri pada saat itu. Saya merasa diri saya benar-benar buruk sampai-sampai untuk hidup saja, saya terkadang merasa tak layak. Saat SMA, saya pernah berpikir untuk bunuh diri tetapi tidak saya lakukan karena saya masih ingat orang tua saya.

            Saya sempat didiagnosa memiliki PTSD (gangguan stress pasca trauma) oleh seorang psikolog. Saya memiliki trauma berat disertai dengan psikosomatis. Hal ini membuat psikolog menyarankan saya untuk pergi ke psikiater tetapi saya menolaknya. Saya masih belum punya banyak uang untuk itu jadi saya tahan dulu niat ke psikiaternya. Karena itu, saya memilih untuk menulis sebagai bentuk sublimasi dari rasa sakit yang saya derita.
            
            Pernah sesekali saya merasa sangat sesak saat mengingat kejadian di masa lalu. Saya merasa sangat sesak seperti akan meninggal. Karena pada saat itu kondisi saya sedang di kos, salah satu teman saya mengunjungi saya dan membawa saya ke puskesmas. Sungguh kejadian yang tidak mengenakkan. Rasa sakit hati benar-benar bisa membunuh.',
        
            'excerpt' => 'Sewaktu kecil hingga remaja, saya memiliki masalah dalam bergaul dengan teman saya. Saya merupakan orang yang penyendiri. Beberapa teman saya juga berkata bahwa saya terlalu tertutup. Saya juga merupakan orang yang sangat tidak percaya diri pada saat itu. Saya merasa diri saya benar-benar buruk sampai-sampai untuk hidup saja, saya terkadang merasa tak layak. Saat SMA, saya pernah berpikir untuk bunuh diri tetapi tidak saya lakukan karena saya masih ingat orang ...'
        ]);

        comment::create([
            'post_id' => 4,
            'user_id' => 11,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 4,
            'user_id' => 6,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 4,
            'user_id' => 1,
            'body' => 'Comment 3'
        ]);

        post::create([
            'user_id' => 7,
            'title' => 'Pengalaman unik selama di kos',
            'body' => 'Pertama kali saya ngekost pas koas di salah satu RS di Jakarta. Kostnya cuma selemparan batu dari RS, sengaja pilih yang super deket, biar pagi2 bisa cepet2 ke RS.. tapi pengalaman terunik selama di kost bukan setiap pagi dikejar2 ama anjing tetangga kost dari gerbang kost sampe gerbang RS kok, kalo pengalaman yang ini mah traumatis :p

            pengalaman terunik saya selama ngekost masih relate dengan hobi saya, JAJAN.
            
            Begini ceritanya…
            
            Di kawasan kost saya, ada tukang es podeng keliling, biasa dipanggil pak Haji sama orang sekitar. Udah jadi langganan, bisa 3–4x beli per minggu asal lagi gak jaga malem, bahkan saya suka nyetok di freezer kost. kalo orang2 beli Rp. 2000 (ukuran gelas air mineral), saya suka beli Rp.10.000 ditaro di kotak makan trus dimasukin ke freezer buat cemilan ngerjain tugas kalo malem. Malahan kalo waktunya pulang ke rumah, saya nyetok 3–4 tempat makan buat di rumah.
            
            Berbekal ilmu SKSD dari papa, saya sering ngobrol pak Haji kalau beliau sedang menjajakan dagangannya di dekat kost. Yang diobrolin mulai dari kampung halaman (kebetulan Pak Haji satu kampung halaman sama papa), isu2 ekonomi dan kesehatan, sampe tentang anaknya pak Haji yang dapet beasiswa di luar negeri. Gak jarang juga saya ikutan nemenin pak Haji mangkal di pos ronda deket kost. Kadang2 malah saya ikutan melayani pembeli kalo pak Haji lagi sholat di masjid.
            
            Entah bagaimana ceritanya, tanggal ulang tahun saya bocor ke telinga pak Haji. Seminggu sebelum ulang tahun, pak Haji nanya….
            
            "Neng, minggu depan kan ulang tahun. Saya kepengen banget ngasih es buat neng makan sama temen2 sekost. Neng mau es podeng apa es doger?"
            
            duh ga enak dong, mosok yo tega minta gratisan es buat warga sekost… tapi liat muka bapaknya kayanya kepengen banget ngasih sesuatu jadilah saya jawab es doger aja, soalnya kan es podeng udah setiap hari makannya.
            
            Seminggu kemudian, pas ulang tahun, pak Haji kirim sms sekitar jam 12 siang ngucapin selamat ulang tahun dan ngasih tau kalo es dogernya sudah mendarat dengan selamat di kost dan bisa dinikmati sama temen2 kost. Balas sms ucapin terima kasih ke pak Haji dong. Hati seneng banget, kebayang pulang dari RS sore2 trus minum es doger, nikmat! Karena ga sabar, langsung pulang dulu ke kost (kebetulan lagi jam makan siang juga), mau ngebekel es doger buat preskas sore harinya. Tapi begitu sampe kost, SHOCKED!!!!!!!! ini mungkin kata paling tepat buat menggambarkan reaksi saya liat jumlah es doger yang dikasi sama pak Haji.
            
            Kalian tau ukuran panci raksasa (eh wadahnya itu namanya panci bukan sih?) yang dipake sama abang2 es doger buat keliling menjajakan dagangannya??? Nah, pak Haji ini ngasihnya 2 panci raksasa itu. Udah dipindahin setengah panci ke freezer sama mbak di kost, tapi masih ada sisa 1,5 panci. Belum lagi pelengkapnya kaya roti, tape, ketan item, sagu mutiara. Sumpah, udah kaya stand es doger di kondangan2 gitu. Ga ngerti lagi gimana cara ngabisin es sebanyak itu. Ga mungkin bisa dihabiskan cuma sama 14 orang penghuni kost, wong kalo kondangan aja porsi segitu bisa buat puluhan tamu.
            
            Akhirnya kirim BBM ke temen2 dan orang2 RS "Ada yang mau doger????" dan disambut dengan antusiasme yang luar biasa. Akhirnya dibawalah 1 panci raksasa (dan pelengkapnya) ke RS dengan bantuan suaminya mbak kost. Seumur2 ngerasain nraktir orang makan es doger segitu banyaknya.
            
            Masih ada sisa 1/2 panci di kost, akhirnya pulang dari RS buka stand es doger di depan kost. Siapa aja yang lewat di traktir es doger, sampe abang2 makanan tempat saya biasa jajan di depan RS kebagian es doger semua. Selesai? eeeiiittsss.. belumm!!! masih ada 1/2 panci yang sudah berhasil diamankan di freezer. Butuh 1 minggu buat akhirnya ngabisin semua persediaan es doger pemberian pak Haji, itupun di hari ke-3 temen2 sekost sudah menyerah karena udah mabok es doger.
            
            PS: Pak Hajinya nolak buat dibayar, padahal es sebanyak itu pasti mahal buangettt…
            
            EDIT 26/04
            
            Terima kasih untuk upvote, komentar, dan semua doanya.
            
            Terakhir saya kontak dengan pak Haji tahun 2013, setelah itu saya belum berkesempatan lagi ketemu dengan beliau. Semoga suatu saat bisa kembali bersua dengan beliau yang sudah banyak mengajarkan ilmu berbagi dalam kondisi apapun. Saya pun senantiasa mendoakan semoga beliau senantiasa dilimpahi berkah yang melimpah dimanapun beliau berada :)',
        
            'excerpt' => 'Pertama kali saya ngekost pas koas di salah satu RS di Jakarta. Kostnya cuma selemparan batu dari RS, sengaja pilih yang super deket, biar pagi2 bisa cepet2 ke RS.. tapi pengalaman terunik selama di kost bukan setiap pagi dikejar2 ama anjing tetangga kost dari gerbang kost sampe gerbang RS kok, kalo pengalaman yang ini mah traumatis :p

            pengalaman terunik saya selama ngekost masih relate dengan hobi ...'
        ]);

        comment::create([
            'post_id' => 5,
            'user_id' => 2,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 5,
            'user_id' => 4,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 5,
            'user_id' => 3,
            'body' => 'Comment 3'
        ]);

        post::create([
            'user_id' => 8,
            'title' => 'Pengalaman unik selama di kos',
            'body' => 'Cantik-cantik maling


            Jadi teman kostan saya sebut saja namanya si cantik, kemaren malam meminta izin ke saya untuk tidur satu malam aja dikamar saya dengan alasan dia lagi takut tidur sendirian dan seperti ada yg intipin .
            
            Karna kasihan dan khawatir saya izinkan lah si cantik tidur dikamar saya untuk semalam . Ketika pukul 01.00 malam bayi saya udah tidur dan saya pun mengantuk, saya meminta izin sm si cantik untuk tidur duluan . Dia masih sibuk dgn laptop ntah mengerjakan apa.
            
            Pukul 03.00 saya terbangun karna tangisan bayi saya yg kehausan . si cantik udah bobok cantik disebelah saya. Tiba-tiba Saya lihat pop mie dan energen saya udh dimakan dong :) padahal baru aja td malam saya beli dan rencana nya mau dimakan untuk sarapan pagi tadi . Pantesan td malam kecium aroma pop mie tp karna mengantuk saya malas membuka mata. Ya udh saya ikhlasin karna saya ga tega kalo soal makanan . Pukul 07.00 si cantik bangun dan izin kembali ke kamarnya karna ia ada kuliah pagi .
            
            Daaaan pagi ini ketika saya mau belanja uang 160 rb saya di bawah bakul pakaian anak saya hilang dooong , tinggal dompet saya yg resleting nya terbuka. Pdhl td malam sehabis belanja saya simpan didalam dompet dan seperti biasa saya letak di bawah bakul pakaian anak saya .
            
            Saya harus nuduh siapa lagi dong selain si cantik? Kan dia yang semalaman ada dikamar saya . Saya WA baik-baik menanyakan apakah melihat uang saya ? Dia malah memarahi saya dan mengirimi hadist tentang fitnah . Dia juga mengingatkan saya barangkali dicuri tuyul karna akhir2 ini sedang marak uang dicelengan hilang diambil tuyul. Saya balas dong kalau tuyul yg curi gak mungkin resleting nya terbuka. Dia hanya baca pesan saya dan ga balas lagi .
            
            Benar-benar ga habis pikir sama perilaku nya. Saya benar-benar kapok mengizinkan dia masuk kekamar saya lagi. Udh ambil makanan tanpa izin, nyolong uang pula.
            
            Dia sebenarnya udh beberapa kali dicurigai mencuri barang-barang penghuni kost lain. Tp karna tidak ada bukti kuat makanya dia bisa mengelak . Pernah hoodie teman saya yg lain hilang di jemuran, dan kedapatan didalam lemari nya. Dia masih bisa mengelak bilang mungkin dia ga sengaja terbawa waktu lagi ambil jemuran .
            
            Dia juga pernah kedapatan membawa pacarnya tidur dikamarnya 2 hari . Ibu kost marah besar karna melanggar peraturan . Ketika mau diusir dia pura-pura kesurupan dan bikin heboh satu kostan .',
        
            'excerpt' => 'Cantik-cantik maling

            Jadi teman kostan saya sebut saja namanya si cantik, kemaren malam meminta izin ke saya untuk tidur satu malam aja dikamar saya dengan alasan dia lagi takut tidur sendirian dan seperti ada yg intipin .
            
            Karna kasihan dan khawatir saya izinkan lah si cantik tidur dikamar saya untuk semalam . Ketika pukul 01.00 malam bayi saya udah tidur dan saya pun mengantuk, saya meminta izin sm si cantik untuk tidur duluan . Dia masih sibuk dgn laptop ntah mengerjakan ...'
        ]);

        comment::create([
            'post_id' => 6,
            'user_id' => 1,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 6,
            'user_id' => 2,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 6,
            'user_id' => 3,
            'body' => 'Comment 3'
        ]);
        comment::create([
            'post_id' => 6,
            'user_id' => 4,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 6,
            'user_id' => 5,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 6,
            'user_id' => 6,
            'body' => 'Comment 3'
        ]);

        post::create([
            'user_id' => 8,
            'title' => 'Pengalaman terseram saya',
            'body' => 'Ini bukan cerita mistis, tapi manusia2 iblis.

            Pengalaman seram saya adalah ketika menghadapi mafia yang merampok tanah saya. Boss mafianya seorang jenderal polisi dan boss yg kedua seorang pejabat DKI. Dilapangan ada preman2nya, dipimpin seorang pensiunan kapten TNI.
            
            Mereka menerbitkan dokumen AJB ilegal dan menguasai tanah saya untuk dijual kepada dua orang jenderal TNI aktif.
            
            Satu2nya modal saya adalah Sertifikat Hak Milik, Allah, dan keyakinan bahwa setiap sen yang saya miliki, termasuk tanah ini, adalah harta halal. Tidak ada sepeserpun yang hasil mencuri atau menipu atau mengambil hak orang lain, semua hasil tetesan keringat. Dan akhirnya, keyakinan bahwa semua itu milik Allah.
            
            Apabila dengan segala perjuangan saya, saya harus mengembalikan nya kepada Allah, saya ikhlas.
            
            Tanpa dukungan kekuasaan, tanpa preman, tanpa uang pelicin dan tanpa pengacara; tapi dengan mengucapkan bismillah saya mulai, sambil belajar.
            
            Tapi mafia2 itu saya bikin susah. Sudah 4 orang yg meninggal. Ber kali2 mereka minta berdamai, bahkan melalui Mabes Polri. "Apa yang mau didamaikan? Keluar saja dari tanah saya dan gugurkan dokumen AJB ilegal kamu. Selesai."
            
            Saya juga gencar, sudah ber kali2 saya surati Kapolri maupun Mendagri. Satu2nya hambatan atau kelambanan adalah diinstansi Polri dan Kemendagri. Kalau mereka bekerja sesuai proses hukum, harusnya sudah lama selesai, karena kasus ini saya buat jelas, obvious, kepada mereka. Pidana murni.
            
            Mereka membuat dokumen tsb pada tahun 1999. Jadi perkara ini sudah berjalan 20 tahun. Sudah 7 tahun saya tidak bisa bekerja, jobless, karena saya berada dibawah ancaman.
            
            Pencapaian saya hingga saat ini sudah melebihi ekspektasi yang tertinggi. Benar, Allah tidak tidur, sudah banyak mujizat dlm.kasus ini.
            
            Doakan saya ya.Terimakasih.',
        
            'excerpt' => 'Ini bukan cerita mistis, tapi manusia2 iblis.

            Pengalaman seram saya adalah ketika menghadapi mafia yang merampok tanah saya. Boss mafianya seorang jenderal polisi dan boss yg kedua seorang pejabat DKI. Dilapangan ada preman2nya, dipimpin seorang pensiunan kapten TNI.
            
            Mereka menerbitkan dokumen AJB ilegal dan menguasai tanah saya untuk dijual kepada dua orang jenderal TNI aktif.
            
            Satu2nya modal saya adalah Sertifikat Hak Milik, Allah, dan keyakinan bahwa setiap sen yang saya miliki, termasuk tanah ini, adalah harta ...'
        ]);
        comment::create([
            'post_id' => 7,
            'user_id' => 7,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 7,
            'user_id' => 4,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 7,
            'user_id' => 1,
            'body' => 'Comment 3'
        ]);

        post::create([
            'user_id' => 7,
            'title' => 'Pengalaman terseram saya',
            'body' => 'Kejadian ini sekitar 7 tahun yang lalu.

            Jadi setelah lulus SMA, saya dan teman-teman tongkrongan saya kebingungan untuk mencari tempat nongkrong, dikarenakan masing-masing dari kami sudah sibuk dengan kuliah masing-masing dan berbeda tempat. Walau beberapa ada juga yang satu kampus. Meski begitu kami jadi jarang berkumpul karna waktu yang tidak cocok.
            
            Maka kami memutuskan saat itu untuk menyewa sebuah kos-kosan dengan tujuan agar tempat tersebut menjadi basecamp bagi kami. Jadi siapapun diantara kami yang memilik waktu senggang bisa kesana dan menghabiskan waktu bersama. Tanpa terikat waktu.
            
            Sebagai latar tempat,
            
            Jadi kosan kami ini lebih mirip kontrakan. Ada 5 kamar berjejer. Setiap kamar itu berisikan 2 lantai dengan tangga kayu ditengahnya. Lantai pertama itu kami jadikan tempat menyipan barang, seperti minuman galon, rak sepatu dll. Dengan kamar mandi berada di pojokan ruangan. Lalu lantai 2 kami jadikan tempat berkumpul, dengan diisi beberapa kasur palembang dan kipas angin.
            
            Cerita pun dimulai.
            
            Jadi sudah jadi kebiasaan bagi kami untuk membawa teman dari luar circle kami, hanya untuk menambah luas pertemanan saja.
            
            Ketika itu salah seorang teman saya membawa seorang wanita, kita sebut saja dengan S. Anaknya baik dan supel, bahkan terhadap orang pendiam seperti saya. Beberapa kali main ke kosan barulah saya ketahui dari teman2 bahwa S ini bisa melihat hal-hal mistis. Namun S sama sekali tidak pernah menunjukan atau berkata apapun selama di kosan, jadi ya saya biasa-biasa saja.
            
            Sampailah pada suatu malam jumat,
            
            Teman saya menchat menanyakan posisi saya dan mengajak untuk ke kosan. Saya yang saat itu sedang ada kegiatan diluar rumah pun mengiyakan ajakannya. Mampir sekalian arah pulang dan mengecek keadaan kostan pikirku saat itu.
            
            Saat saya sampai tidak ada satupun teman saya yang berada dilantai bawah. Bisa saya pastikan mereka ada dilantai atas, maka naiklah saya bergegas ke lantai 2. Saat saya naik saya melihat 5 teman saya (3 orang cowok dan 2 orang cewek termasuk si S) sedang serius memandangi laptop. Ternyata mereka semua sedang menonton film. Setelah disambut dan bersalam2an duduklah saya berjejeran dengan mereka dengan maksud ingin melihat film apa yang sedang di tonton.
            
            Ternyata mereka sedang menonton film conjuring. Iya, malam jumat nonton film conjuring.
            
            Awalnya saya biasa saja, namun namanya wanita diajak nonton film serem pasti akan ada teriakan khas mereka serta beberapa teman cowok saya yang tertawa2.
            
            Setelah beberapa lama menonton, entah mengapa tiba-tiba perasaan saya jadi tidak enak. Karna yang saya tahu, jika kita menonton film seram lalu lantas menyebarkan aura ketakutan, bisa mengundang "mereka" untuk datang. Ditambah ini malam jumat dan hadirnya S. Dan menurutku saat itu kami pun terlalu berisik karna saat itu sudah jam 11 malam lewat. Namun film belum selesai saat itu.
            
            Dengan bijaknya saya berkata:
            
            "Sudahi saja yuk nontonnya. Matiin aja laptopnya. Kalo mau nongkrong disini ya lanjut saja, kalo mau pada bubar ya bubar."
            
            Karna saya adalah salah satu yang dituakan, akhirnya mereka menurut saja. Dengan pilihan tak lama dari itu mereka akan pulang, karna para cewe akan pulang dan sedang tidak ada yg ingin menginap di kostan saat itu.
            
            Kejadian mistis ini pun dimulai,
            
            Saat kami ingin bubar pulang, S ingin ke kamar mandi dulu untuk pipis. Tiba-tiba salah satu temen saya yg cowok (sebut saja R) iseng dengan mematikan lampu kamar mandi yang dimaan ada S didalamnya dengan niat becanda.
            
            Namun respond yang terjadi sungguh tidak diharapkan,
            
            Saat lampu dimatikan S berteriak, wajar lah menurut saya saat itu karna wanita. Namun herannya teriakannya itu tak sudah-sudah dan teekesan grabak grubuk ingin sekali keluar. Setelah pintu terbuka ia pun berlari menuju sudut ruangan duduk mendekap lututnyas sambil menangis. Saya yang berada dilantai 2 pun segera turun kebawah untuk memastikan semua baik2 saja.
            
            Sesaat saya berhenti ditangga, sambil melihat S saya tau hal buruk akan terjadi. Dan benar saja, kalian tau apa yang terjadi selanjutnya?
            
            S yang sedari tadi menunduk menangis tiba-tiba berubah menjadi tertawa seraya perlahan-lahan mendongakan kepalanya keatas.
            
            Saya langsung tersadar bahwa ini bukanlah becandaan. Pertama karna mata S saat melihatkan wajahnya itu langsung melotot, dan suara ketawanya berubah menjadi berat dan serak, layaknya seorang pria. Saya yakin saat itu S kesurupan.
            
            Saya teriak memerintahkan teman2 saya untuk memegangnya. S memberontak namun tetap sambil tertawa-tawa. Akhirnya kami berhasil menmegangnya. Saya langsung membacakan ayat kursi disampingnya, dan meminta teman saya untuk memencet jempol kakinya. S semakin berontak tidak karuan. Namun sepersekian detik ia terdiam, baik tawanya maupun gerakannya.
            
            Lalu kalian tau apa yang dia katakan? Saya tidak akan pernah lupa wajahnya serta ucapannya.
            
            Sambil melotot kearah kami, ia berkata:
            
            "SAYA BAWA YA TEMAN KALIAN INI", lantas dilanjutkan lagi dengan teetawa terbahak-bahak dan mulai berontak lagi.
            
            Saya takut dan shock sekali mendengar itu, takut teman kami itu kenapa-kenapa. Saya langsung mengambil hp dan mencoba menghubungi 2 teman saya yang terkenal bisa menangani hal2 seperti ini, mereka anak kosan jg. Seolah mengerti, tanpa perlu dijelaskan ia pun bisa menebak situasinya. Dan berkata "Otw, 10 menit". Untung dia tidak sibuk saat itu.
            
            Selama menunggu datangnya teman saya, saya dikejutkan kembali oleh yang merasuki S. Jadi posisi S ini dipojok ruangan dan berhadap-hadapan langsung dengan pintu masuk kostan yang terbuka.
            
            Sambil tertawa-tawa ia mengangkat tangannya lalu mulai melambai-lambaikan tangannya seolah memanggil seseorang di pintu kosan yang jelas tidak ada siapa-siapa disana. Dan berkata:
            
            "Sini… sini… kalian masuk aja. Kita bawa anak ini".
            
            Dengkul saya langsung lemes mendengarnya, saya lafalkan berkali-kali ayat kursi, berharap semua ini segera cepat berakhir.
            
            Saya takut sekali saat itu, bukan takut hantunya karna memang saya tidak bisa melihat. Namun takut terjadi apa-apa dengan S seperti apa yang "mereka" bilang.
            
            Singkat cerita tak lama kedua teman yang saya hubungi datang. Mereka meminta kronologis kejadiannya lalu langsung mengambil posisi. Satu dikepala S dan satu lagi di kaki S. Sambil baca dan komat kamit mereka perlahan mengusap kepala S seperti ingin mengeluarkan sesuatu, dan tak lama S pun tersungkur lemas.
            
            Singkatnya S pun sadar lalu langsung dibawa buru-buru pulang oleh teman saya karna takut ada "serangan" susulan.
            
            Nah disini bagian menariknya,
            
            Beberapa hari kemudian S bercerita pada saya tentang apa yg terjadi.
            
            Jadi saat lampu kamar mandi dimatikan oleh R, S reflek menutup matanya karna kaget. Namun setelah ia membuka matanya kembali, taukah kalian apa yg S liat?
            
            Ia melihat sesosok muka tepat hanya beberapa centi didepan wajahnya sedang senyum menyeringai :)
            
            Itulah yg membuat S teriak dan menangis lantas grabak grubuk ingin keluar.
            
            Sekian.
            
            Sebenarnya masih ada beberapa kejadian horror lain dikosan tersebut yang tak kalah seramnya, baik yang saya sendiri alami maupun oleh teman.
            
            Ada jg cerita tetangga kosan yang ternyata merupakan wanita panggilan.
            
            Hingga kosan saya dan teman-teman ini dianggap mengganggu lantas digrebek dan dihancurkan oleh warga.
            
            Mungkin lain waktu saja akan saya ceritakan :D',
        
            'excerpt' => 'Kejadian ini sekitar 7 tahun yang lalu.

            Jadi setelah lulus SMA, saya dan teman-teman tongkrongan saya kebingungan untuk mencari tempat nongkrong, dikarenakan masing-masing dari kami sudah sibuk dengan kuliah masing-masing dan berbeda tempat. Walau beberapa ada juga yang satu kampus. Meski begitu kami jadi jarang berkumpul karna waktu yang tidak cocok.
            
            Maka kami memutuskan saat itu untuk menyewa sebuah kos-kosan dengan tujuan agar tempat tersebut menjadi basecamp bagi kami. Jadi siapapun diantara kami yang memilik waktu senggang bisa kesana dan menghabiskan waktu bersama. Tanpa terikat ...'
        ]);

        comment::create([
            'post_id' => 8,
            'user_id' => 11,
            'body' => 'Comment 1'
        ]);
        comment::create([
            'post_id' => 8,
            'user_id' => 12,
            'body' => 'Comment 2'
        ]);
        comment::create([
            'post_id' => 8,
            'user_id' => 13,
            'body' => 'Comment 3'
        ]);




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

        // user::create([

        // ]);

    }


}
