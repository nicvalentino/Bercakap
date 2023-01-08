<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        user::factory(15)->create();

        pertanyaan::create([
            'user_id' => 7,
            'body' => 'Ciri-ciri apa yang menandakan kesehatan mental seseorang terganggu?',
        ]);

        comment::create([
            'pertanyaan_id' => 1,
            'user_id' => 1,
            'body' => 'Ada banyak ciri yang menandakan kesehatan mental seseorang terganggu, sebagai
            contoh adalah merasa tidak sabar, cepat marah, kualitas tidur buruk, pola makan berubah
            drastis, mengisolasi diri, dan masih banyak ciri lainnya. Jika anda merasa tidak sehat secara
            mental, segera konsultasikan diri anda ke psikiater.'

        ]);

        comment::create([
            'pertanyaan_id' => 1,
            'user_id' => 7,
            'body' => 'Oh begitu yaa, terima kasih atas jawabannyaa.'

        ]);

        pertanyaan::create([
            'user_id' =>11,
            'body' => 'Penyebab gangguan jiwa dan apakah bisa menurun secara genetik?',
        ]);

        comment::create([
            'pertanyaan_id' => 2,
            'user_id' => 2,
            'body' => 'Gangguan mental atau gangguan jiwa, dapat terjadi ketika seseorang sulit mengendalikan emosi, 
            pola pikir, dan perilaku sehingga dapat menyulitkan aktivitas dan pekerjaannya sehari-hari, 
            tanpa pengobatan secara rutin.
            
            Gangguan jiwa tentunya sangat erat kaitannya dengan faktor genetik atau keturunan yang dapat 
            mempengaruhi ketidakseimbangan zat kimia di otak, terutama jika ditambah dengan adanya 
            riwayat pernah mengalami peristiwa traumatis yang dapat mencetus munculnya gangguan jiwa 
            tersebut pada periode usia tertentu.
            
            Oleh karena itu, sangat penting untuk melakukan deteksi dan pengobatan sedari dini oleh 
            dokter psikiater, pada seseorang yang sudah memiliki riwayat keluarga dengan masalah 
            psikologis terutama yang juga sudah mengalami peristiwa traumatis di hidupnya, untuk dapat 
            mencegah bertambah buruknya gejala gangguan mental di kemudian hari, sehingga tidak 
            terlanjur berakibat terjadinya gejala berat yang sudah mengganggu aktivitas sehari-hari.
            
            Demikian yang dapat saya sampaikan, semoga bermanfaat.'

        ]);

        pertanyaan::create([
            'user_id' => 8,
            'body' => 'Bagaimana cara mengatasi mudah emosi akibat kecanduan game online?',
        ]);

        comment::create([
            'pertanyaan_id' => 3,
            'user_id' => 2,
            'body' => 'Kecanduan game online dapat dialami oleh siapa saja baik anak-anak, remaja hingga 
            dewasa. Bermain game seharusnya menjadi aktivitas menyenangkan yang dilakukan untuk 
            mengilangkan stres bukan malah menyebabkan emosi meningkat hingga melakukan kekerasan 
            verbal.

            Kecanduan game online adalah gangguan mental akibat bermain game dalam waktu yang lama 
            hingga tidakmemedulikan aktivitas lainnya. Kecanduan juga dapat menimbulkan penderita 
            berisiko mengalami masalah psikologis misalnya mengalami gangguan kecemasan hingga depresi.

            Terima kasih, semoga membantu.'
        ]);

        pertanyaan::create([
            'user_id' => 17,
            'body' => 'Bagaimanakah tanda seseorang dinyatakan sedang mengalami bipolar?',
        ]);

        comment::create([
            'pertanyaan_id' => 4,
            'user_id' => 3,
            'body' => 'Gangguan bipolar adalah salah satu jenis gangguan kejiwaan yang ditandai dengan perubahan 
            suasana hati secara sangat drastis, dari yang awalnya manik (sangat bahagia) menjadi depresi 
            (sangat sedih) atau sebaliknya. Kondisi ini terjadi akibat terganggunya keseimbangan senyawa 
            kimia di otak yang dipengaruhi juga oleh faktor genetik, lingkungan, gaya hidup, dan status 
            kesehatan secara umum.

            Mengacu pada keterangan Anda yang kerap merasakan senang dan sedih secara bersamaan, memang 
            mungkin saja hal ini menandakan Anda mengalami gangguan bipolar. Akan tetapi, keluhan yang 
            dialami oleh penderita gangguan bipolar semestinya sangatlah hebat, tidak terkendali, dan 
            sampai membuat aktifitas serta fungsi dirinya menjadi sangat terganggu. Jika keluhan yang 
            Anda alami masih tergolong ringan, bisa jadi hal tersebut masih merupakan variasi suasana 
            hati yang wajar.

            Di samping gangguan bipolar, keluhan yang Anda alami sesungguhnya mungkin pula muncul karena 
            faktor lain, seperti gangguan stres pasca trauma, gangguan kepribadian, gangguan siklotimik, 
            skizofrenia, dan sebagainya.

            Membedakan kondisi mana yang termasuk sebagai gangguan kejiwaan dan yang tidak, serta 
            memastikan gangguan kejiwaan seperti apa yang dialami, tentu tidak semudah ini. Terlebih 
            dulu, Anda perlu periksakan diri Anda ke psikiater atau psikolog terdekat agar bisa ditangani 
            dengan tepat.

            Jadilah pribadi yang tenang, perbanyak meditasi, tingkatkan kedekatan Anda pada Tuhan YME
            Sadari bahwa setiap ada kesulitan pasti ke depannya akan ada kemudahan, demikian pula sebaliknya
            Perbaiki hubungan Anda dengan keluarga, carilah juga lingkungan pergaulan yang baik dan bisa memberi semangat positif pada hidup Anda
            Sibukkan diri Anda menjalani beragam aktifitas yang baik, kembangkan bakat dan hobi Anda
            Jangan buang waktu untuk terlalu banyak menyendiri, menyalahkan nasib atau siapapun, apalagi berinteraksi dengan rokok, alkohol, dan NAPZA
            Semoga membantu.'
        ]);

        pertanyaan::create([
            'user_id' => 15,
            'body' => 'Bagaimana cara mengatasi stres pada ibu rumah tangga agar tidak berkelanjutan?',
        ]);

        comment::create([
            'pertanyaan_id' => 5,
            'user_id' => 5,
            'body' => 'Stress merupakan reaksi ketika tubuh menghadapi ancaman, tekanan, maupun situasi 
            yang baru, termasuk kondisi Anda yang semula ibu bekerja kemudian menjadi ibu rumah tangga. 
            Tubuh membutuhkan adaptasi dan penyesuaian dimana pekerjaan rumah selalu ada dan seperti 
            tidak pernah selesai, dan ditambah dengan kurangnya support dari orang terdekat tentu dapat 
            menyebabkan stress.

            Untuk membantu mengelola stress Anda bisa melakukan beberapa tips berikut ini:
            
            Istirahat cukup
            Lakukan pekerjaan semampunya, usahakan tidak terlalu memaksakan diri
            Komunikasikan dengan suami Anda mengenai kendala yang Anda rasakan dirumah
            Curhat dengan orang yang Anda percayai
            Lakukan me time yang Anda sukai
            Olahraga teratur
            Lakukan relaksasi
            Dengarkan musik yang menenangkan
            Jika Anda merasa keluhan tidak membaik atau stress tidak juga berkurang dan mulai mengganggu Anda, akan lebih baik bila Anda berkonsultasi langsung dengan psikolog atau psikiater supaya bisa dilakukan evaluasi dan agar Anda bisa diberikan penanganan yang lebih tepat ya.
            
            Semoga membantu Anda,'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

        // user::create([

        // ]);

    }


}
