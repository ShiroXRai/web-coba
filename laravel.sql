-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2020 pada 13.29
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `gambar`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'Olahraga Di Tengah Pandemi?', '1591452808.jpeg', 'Wow, tidak terasa sudah hampir 3 bulan kita #dirumahaja. Nah, untuk menjaga imunitas dan kebugaran tubuh perlu sekali Workout from Home! Tidak butuh waktu lama dan alat yang berat, kita bisa berolahraga dari rumah dengan hasil yang maksimal tentunya apabila dilakukan dengan rutin ya pastinya! yuk langsung aja dicoba!', '2020-06-06 00:13:28', '2020-06-06 00:13:28'),
(3, 'NEW NORMAL STARTER KIT', '1591452259.jpeg', 'Dalam rangka menuju \"New Normal\" yuk kita persiapkan diri kita dengan baik supaya kita tetap aman saat beraktivitas di luar rumah dan mencegah adanya gelombang baru pandemi covid-19 ini!', '2020-06-06 00:04:19', '2020-06-06 00:04:19'),
(4, 'Raditya Dika', '1587560615.jpg', 'Dika Angkasaputra Moerwani Nasution yang lebih dikenal dengan Raditya Dika (lahir di Jakarta, 28 Desember 1984; umur 35 tahun[1]) adalah seorang penulis, komedian, sutradara, dan aktor. Buku pertamanya berjudul Kambing Jantan masuk kategori best seller.[1] Buku tersebut menampilkan kehidupan Dika (Raditya Dika) saat kuliah di Australia.[butuh rujukan] Tulisan pria yang akrab disebut Raditya Dika itu bisa digolongkan sebagai genre baru.[butuh rujukan] Kala ia merilis buku pertamanya tersebut, memang belum banyak yang masuk ke dunia tulisan komedi.[1] Apalagi bergaya diari pribadi (personal essay).[1]\r\n\r\n\r\nDaftar isi\r\n1	Karya\r\n2	Perjalanan dan Pemikiran\r\n3	Pendidikan\r\n4	Buku\r\n4.1	Novel\r\n4.2	Komik (bersama Adriano Rudiman)\r\n5	Filmografi\r\n6	Acara TV\r\n7	Referensi\r\n8	Pranala luar\r\nKarya\r\nKarya pertama yang mengangkat namanya adalah buku berjudul Kambing Jantan: Sebuah Catatan Harian Pelajar Bodoh (2005).[2] Buku ini menceritakan kehidupan Radith ketika masih berkuliah di Adelaide, Australia.[butuh rujukan] Cerita yang dibawakan Radith adalah kisah-kisahnya sebagai pelajar Indonesia yang berkuliah di luar negeri.[3] Buku ini ditampilkan dalam format diary (buku harian).[butuh rujukan] Seluruh cerita dalam karyanya tersebut berasal dari blog pribadi terdahulu milik Radit, www.kambingjantan.com, yang sekarang menjadi www.radityadika.com.[1]\r\n\r\nBuku keduanya berjudul Cinta Brontosaurus, diterbitkan pada tahun 2006.[4] Hampir sama dengan buku sebelumnya, cerita-cerita dalam buku ini berasal dari kisah keseharian Radith.[4] Namun, buku kedua ini menggunakan format cerita pendek (cerpen) yang bercerita mengenai pengalaman cinta Radith yang sepertinya selalu tidak beruntung.[4] Isi dari buku ini meliputi kisah dari sewaktu Radith mengirim surat cinta pertama ke teman saat SD, hingga pengalaman Radith memerhatikan kucing Persia-nya yang jatuh cinta dengan kucing kampung tetangganya.[4]\r\n\r\nBuku ketiganya yang berjudul Radikus Makankakus: Bukan Binatang Biasa terbit pada tanggal 29 Agustus 2007.[5] Buku ketiga ini mengisahkan Radith yang pernah menjadi badut Monas dalam sehari, mengajar bimbingan belajar, lalu saat Radith dikira hantu penunggu WC, sampai cerita mengenai kutukan orang NTB.[5] Sementara, buku keempatnya berjudul Babi Ngesot: Datang Tak Diundang Pulang Tak Berkutang terbit pada bulan April 2008.[1]\r\n\r\nIa juga bermain dalam film yang diangkat dari pengalaman hidupnya, Kambing Jantan: The Movie.[6] Pada pertengahan bulan November 2009, melalui situs resminya, Radith mengumumkan bahwa buku kelimanya yang berjudul Marmut Merah Jambu akan segera terbit dengan jadwal edar sementara pada bulan Desember 2009.[1] Namun pada pertengahan bulan Desember silam, Radith kembali lewat situs resminya menyatakan bahwa buku kelimanya tersebut masih mengalami sedikit perubahan dan juga penambahan cerita pada beberapa bagian, sehingga kemungkinan besar penerbitan buku tersebut akan mundur beberapa waktu.[1] Melalui situs resmi pribadinya pada bulan Oktober 2011 ini Raditya Dika juga mengumumkan bahwa bukunya yang berjudul Manusia Setengah Salmon akan segera terbit tanggal 24 Desember 2011. Di situs itu Raditya Dika membuat countdown pada blognya agar para penggemarnya ingat tanggal terbit buku Manusia Setengah Salmon.', '2020-04-22 06:03:35', '2020-04-22 06:03:35'),
(7, 'LFH? Jangan Gaptek lagi ya!', '1591451524.jpeg', 'Tahukah kamu  fakta bahwa Google merekrut 80.000 karyawannya dari lulusan online learning Udacity? dan juga, taukah kamu bahwa Indonesia menduduki peringkat ke-6 pengguna E-Learning di dunia?\r\n\r\nSesuai dengan namanya, E-Lerning atau Digital Learning adalah proses pembelajaran yang menggunakan perangkat digital sebagai sarana belajar mengajar. seiring dengan perkembangan teknologi yang berlangsung sangat pesat, E-Learning menjadi media pembelajaran tidak bisa dipandang sebelah mata. Materi yang ditawarkan pun begitu beragam dengan jadwal belajar yang sangat fleksibel. Saat ini, mulai banyak perusahaan yang menerima sertifikat dari lulusan online learning seperti Google, Apple, Microsoft, Amazon, dan masih banyak lagi. Bahkan di beberapa negara, gelar yang didapat dari lulusan online Learning sudah diakui, loh!  Tidak hanya tingkat SD, SMP, dan SMA, tapi juga S1, S2, dan S3!\r\n\r\nwow, menarik kan? so, kamu penasaran bagaimana serunya belajar dengan sistem E-Learning?\r\n\r\nIni dia 10 website digital learning yang harus kamu coba:\r\n\r\n\r\n1. https://www.coursera.org/\r\nCoursera adalah website E-Learning favorit saya. Pembelajaran E-Learning disini berbasis video, dan materinya disampaikan langsung oleh pengajar dari universitas-universitas ternama didunia. materi yang ditawarkan sangat beragam, seperti busines economy, computer science, health & medical, art& humanities, dan masih banyak lagi. selain itu, dalam proses pembelajarannya kita diberi deadline untuk menyelesaikan materi (namun dengan waktu yang fleksibel). Setelah menyelesaikan setiap sub bab materi, biasanya akan ada test untuk menentukan apakah kita lulus atau tidak. jika lulus, kita bisa lanjut ke materi selanjutnya, namun jika tidak, kita harus mengulang. Belajar disini ada yang gratis (Tanpa sertifikat), dan ada juga yang berbayar (dengan sertifikat). Biaya untuk mendapatkan sertifikat sekitar USD $50.\r\n\r\n2. https://www.edx.org/\r\nEdX juga merupakan website E-Learning kesukaan saya. Universitas yang turut hadir dalam media ini salah satunya adalah Harvard University, MIT, Berkeley University, dan masih banyak lagi. materi yang ditawarkan pun sangat beragam. Sistem pembelajaran yang digunakan sama dengan coursera, yaitu berbasis video, modul, dan ada juga beberapa kelas yang menggunakan direct face to face dengan menggunakan webcam. namun pada website ini,  kebanyakan kelas yang ditawarkan tidak berlangsung lama. sehingga apabila kita telat mendaftar atau gagal ditengah jalan, kita tidak bisa mengikutinya lagi, atau harus menunggu beberapa waktu sampai kelas baru dibuka. Belajar disini ada yang gratis (Tanpa sertifikat), dan ada juga yang berbayar (dengan sertifikat). Biaya untuk mendapatkan sertifikat sekitar USD $50 - USD $100 \r\n\r\n3. https://www.udacity.com/ \r\nUdacity sangat terkenal bagi orang-orang yang menggeluti dunia computer science, website, dan developer. banyak perusahaan besar yang merekrut lulusan dari pembelajaran online di situs ini, seperti Google, Apple, Microsoft, dan sebagainya, sehingga kualitas pembelajaran yang ditawarkan tentu tidak diragukan lagi. Ada dua program yang ditawarkan, yaitu nanodegree program (berbayar & bersertifikat), dan free course. Biaya untuk mengikuti nanodegree program adalah USD $200/ bulan, dan setiap program bisa diselesaikan dalam jangka waktu 6 - 12 bulan. \r\n\r\n4. https://www.khanacademy.org/ \r\nSedikit berbeda dengan coursera dan EdX, Khan Academy adalah website pembelajaran yang berbasis video. materi yang ditawarkan cukup beragam, namun tidak semua pengajarnya adalah pengajar resmi dari sekolah atau universitas, melainkan ada juga yang merupakan praktisi, atau bahkan sekedar wawancara biasa, sehingga meteri yang diberikan bukanlah academic base. Namun meski begitu, Khan academy tetap menarik untuk dipelajari. semua materi yang ada disini gratis, tidak ada batasan waktu, dan tidak ada sertifikat. \r\n\r\n5. https://www.udemy.com/ \r\nKebanyakan kelas yang ditawarkan Udemy adalah kelas berbayar dengan kisaran harga USD $10 - $500 / kelas (sampai selesai). Sama seperti Khan Academy,  tidak semua pengajarnya adalah pengajar resmi dari sekolah atau universitas. Namun yang menarik adalah, variasi yang ditawarkan oleh Udemy lebih beragam. Tidak hanya pengetahuan yang umum didapat dari bangku kuliah, namun ada juga kelas-kelas seperti Wing-cun, kung fu, yoga, cooking, dan sebagainya. \r\n\r\n6. https://alison.com/ \r\nBagi kamu yang mempunyai koneksi internet terbatas tidak perlu khawatir. Alison menawarkan sistem pembelajaran yang kebanyakan berbasis text, sehingga lebih ringan dan hemat akses internet. meskipun berbasis text, Alison tetap menawarkan materi yang menarik dengan diselingi gambar-gambar agar kita tidak bosan. menariknya lagi, kita bisa mendapat sertifikat dengan gratis apabila lulus dari kelas yang diikuti! \r\n\r\n7. https://www.edmodo.com/ \r\nEdmodo dikhususkan untuk anak SD, SMP, dan SMA. Edmodo adalah jaringan pendidikan global yang membantu menghubungkan semua peserta didik dengan orang dan sumber belajar yang dibutuhkan untuk mencapai potensi penuh mereka. pembelajaran disini terbilang unik, karena guru, siswa, dan orang tua yang mendaftar harus saling terhubung. \r\n\r\n8. https://video.quipper.com/id \r\nTentu kalian tidak asing lagi dengan Quipper Video, kan? website E-Learning ini sudah sering kali tampil di comercial break layar kaca. Quipper Video menawarkan materi untuk anak SMP dan SMA, terutama bagi mereka yang ingin mempersiapkan diri untuk masuk SMA (bagi anak SMP) dan perguruan tinggi (bagi anak SMA). Materi yang ditawarkan sangat lengkap, serta dilengkapi latihan soal dan pembahasan. Biaya yang perlu dikeluarkan pun cukup murah. hanya dengan Rp 380.000, kita sudah bisa menikmati semua fasilitas di Quipper Video. \r\n\r\n9. https://www.zenius.net/ \r\nZenius adalah website E-learning kesukaan saya waktu SMA dulu. website ini menyediakan materi untuk SD, SMP, dan juga SMA. Materi yang disampaikan sangat menarik dan penjelasan yang diberikan cukup mudah dipahami. selain itu ada juga informasi-informasi tambahan yang menarik untuk dipelajari, diluar materi sekolah. selain berbasis online, Zenius juga ada kelas offline, dan juga menyediakan DVD pembelajaran lengkap yang bisa dibeli di Gramedia. kita bisa menikmati fasilitas Zenius dengan gratis, atau berbayar jika menginginkan versi yang lebih lengkapnya. \r\n\r\n10. http://elearn.xlfutureleaders.com/ \r\nXL Future Leaders adalah program CSR dari PT. XL Axiata berbasis pelatihan softskill untuk mahasiswa/i tahun ke 2 dan 3 dari seluruh indonesia. Dalam program ini, peserta diberi berbagai macam pelatihan seperti entrepreneurship, managing change, creative & innovative, dan sebagainya. Nah, E-learning ini adalah materi yang diajarkan oleh XL Future Leaders untuk peserta programnya. Sehingga diharapkan ilmu dari program XL Future Leaders tidak hanya bisa dinikmati oleh peseta programnya, tapi juga bisa dinikmati semua orang.  Nah, itu dia 10 website E-Learning yang wajib kamu coba. Mana yang jadi favoritmu?', '2020-06-05 23:52:04', '2020-06-05 23:52:04'),
(10, 'NEW NORMAL? Cek Faktanya!', '1591453052.jpeg', '\"New Normal\" sekarang menjadi perbincangan di kalangan masyarakat dan juga trending di berbagai platform media massa. Namun, apakah kita tahu sebenarnya bagaimana \"New Normal\" yang akan diterapkan di Indonesia? So, here\'s some information about \"New Normal\"\r\n\r\n1. Apa maksudnya new normal?\r\nNew normal adalah langkah percepatan penanganan COVID-19 dalam bidang kesehatan, sosial, dan ekonomi. Skenario new normal dijalankan dengan mempertimbangkan kesiapan daerah dan hasil riset epidemiologis di wilayah terkait.\r\n\r\n\"Badan bahasa sudah memberikan istilah Indonesianya yaitu Kenormalan Baru. Kata Normal sebetulnya dalam bahasa Inggris sudah dijadikan nomina makanya jadi New Normal. Badan bahasa kemudian membuat padanannya menjadi Kenormalan. Karena kalau normal itu adjektiva kata sifat, jadi Kenormalan Baru,\" kata ahli bahasa Prof. Dr. Rahayu Surtiati Hidayat dari Universitas Indonesia.\r\n\r\n2. New normal vs corona\r\nLembaga Biologi Molekuler atau LBM Eijkman sempat menyatakan, virus corona tidak akan hilang dari muka bumi dalam waktu yang lama. Karena itu, istilah berdampingan lebih tepat digunakan daripada berdamai dengan virus corona.\r\n\r\n\"Artinya berdampingan itu ya kita bisa aja musuhan sama siapa, tapi jalan bersama-sama itu bisa. Tapi kalau damai, ya itu istilah aja sih, tapi mungkin dari sudut virologi, istilah berdampingan itu lebih dapat dipraktikkan ya,\" kata Kepala LBM Eijkman Prof Amin Soebandrio.\r\n\r\nManusia punya sejarah dan pengalaman hidup berdampingan dengan mikroba seperti virus influenza, HIV, dan demam berdarah. Menurut Prof Amin yang perlu dilakukan adalah mengenali virus tersebut untuk bisa mencegah penularannya.\r\n\r\n3. Life with new normal\r\nPresiden Jokowi telah meminta seluruh jajarannya mempelajari kondisi lapangan untuk mempersiapkan tatanan normal yang baru di tengah pandemi COVID-19. Saat ini sudah ada 4 provinsi serta 25 kabupaten/kota yang tengah bersiap menuju new normal.\r\n\r\n\"Saya minta protokol beradaptasi dengan tatanan normal baru ini yang sudah disiapkan oleh Kementerian Kesehatan ini disosialisasikan secara masif kepada masyarakat,\" kata Jokowi.\r\n\r\nPenerapan new normal nantinya bersamaan dengan pendisiplinan protokol kesehatan yang dikawal jajaran Polri dan TNI. Selanjutnya, tatanan normal yang baru akan diperluas jika dinilai efektif.\r\n\r\n4. Protokol new normal\r\nOrganisasi kesehatan dunia WHO telah menyiapkan pedoman transisi menuju new normal selama pandemi COVID-19. Dalam protokol tersebut, negara harus terbukti mampu mengendalikan penularan COVID-19 sebelum menerapkan new normal.\r\n\r\nPengendalian ini juga harus bisa dilakukan di tempat yang memiliki kerentanan tinggi misal panti jompo, fasilitas kesehatan mental, dan wilayah dengan banyak penduduk. Langkah pengendalian dengan pencegahan juga harus diterapkan di tempat kerja.\r\n\r\n\"Langkah-langkah pencegahan di tempat kerja mulai ditetapkan seperti jarak fisik, fasilitas mencuci tangan, dan etika pernapasan,\" kata Direktur Regional WHO untuk Eropa Henri P Kluge dikutip dari situs resmi lembaga kesehatan dunia tersebut.\r\n\r\n5. New normal di Surabaya dan Semarang\r\nSemarang berencana menerapkan new normal usai pembatasan kegiatan masyarakat (PKM) pada 7 Juni 2020. Salah satu yang sudah berencana menerapkan new normal adalah Dinas Pendidikan dengan pola masuk sekolah yang baru.\r\n\r\n\"Misal Dinas Pendidikan, saya minta kepala sekolah dan yayasan punya masukan apa. Misal, Bulan Juli kelas 5 dan 6 sudah boleh masuk dengan SOP kesehatan. Kelas 1 sampai 4 mungkin seminggu dua kali masuk, jadi kelas longgar, ada jarak atau mungkin pakai sekat,\" kata Wali Kota Semarang Hendrar Prihadi.\r\n\r\nSedangkan untuk Surabaya masih memilih fokus pada penanganan COVID-19 untuk warganya. Penerapan new normal dipertimbangkan setelah kondisi menjadi lebih baik. Belakangan, Wali Kota Surabaya Tri Rismaharini merasa kecewa karena mobil PCR bantuan BNPB yang awalnya untuk pemeriksaan warganya dialihkan untuk daerah lain.\r\n\r\n6. New normal di Jakarta dan Jawa Barat\r\nAwalnya Provinsi Jawa Barat berencana menerapkan new normal pada 1 Juni 2020. Namun muncul kebijakan memperpanjang penerapan Pembatasan Sosial Berskala Besar atau PSBB. Perpanjangan PSBB ternyata tidak lantas membatalkan awal penerapan new normal.\r\n\r\n\"Tidak batal, kalau Jabar tanggal 1 Juni sebagai launching new normal. Lebih tepatnya dimulainya budaya Adaptasi Kebiasaan Baru (AKB),\" kata Juru Bicara Gugus Tugas Percepatan Penanggulangan (GTPP) COVID-19 Berli Hamdani.\r\n\r\nDKI Jakarta beberapa kali disinggung sebagai provinsi yang paling siap menerapkan tatanan kehidupan normal baru. Meski begitu, Jakarta memilih memperpanjang PSBB hingga 4 Juni 2020 dan mempertimbangkan data kasus terakhir sebelum menerapkan new normal.', '2020-06-06 00:17:32', '2020-06-06 00:17:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi`
--

CREATE TABLE `isi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `isi`
--

INSERT INTO `isi` (`id`, `nama`, `nrp`, `email`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Sarimin', '123456890', 'sarimin@gmail.com', 'Sija', '2020-03-12 11:59:23', NULL),
(2, 'Jona', '123331111', 'jona@gmail.com', 'Sijaa', '2020-03-12 11:59:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `isi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'raihan', 'joni@gmail.com', 'sadsad adascas', '2020-04-24 02:59:50', '2020-04-24 02:59:50', NULL),
(3, 'raihan', 'raihanvans@gmail.com', 'bagus', '2020-06-14 03:38:22', '2020-06-14 03:38:22', NULL),
(4, 'ktp', 'ktp@gmail.com', 'Mantap', '2020-06-14 04:20:07', '2020-06-14 04:20:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_03_12_115354_create_isi_table', 1),
(8, '2020_03_12_122251_student', 2),
(9, '2020_03_12_125943_create_students_table', 3),
(10, '2020_03_15_131151_add_soft_delete_to_students', 4),
(12, '2020_03_22_100050_create_artikels_table', 5),
(13, '2020_04_06_032505_create_students_table', 6),
(14, '2020_04_24_092412_kontak_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(9) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `user_id`, `nama`, `nrp`, `email`, `jurusan`, `avatar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'admin', 999999999, 'admin@gmail.com', 'admin', '1587560615.jpg', '2020-05-11 17:00:00', '2020-05-14 03:00:20', NULL),
(7, 7, 'raihan', 987654222, '1tp@gmail.com', 'SIJA', '1587560615.jpg', '2020-05-03 23:09:45', '2020-06-14 04:26:54', NULL),
(17, 13, 'joni1', 987654333, 'joni@gmail.com', 'SIJA', NULL, '2020-05-12 01:51:16', '2020-06-06 06:48:32', NULL),
(19, 20, 'ktp', 123456781, 'ktp@gmail.com', 'sija', NULL, '2020-05-20 08:05:25', '2020-05-20 08:11:32', NULL),
(22, 27, 'doni', NULL, 'doni@gmail.com', NULL, NULL, '2020-06-14 04:28:13', '2020-06-14 04:28:13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `213` varchar(245) DEFAULT NULL,
  `id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$qcVA7jOFRIieofLkHHUxfuUyaynp7vLHYEdKvsfItDBCaJKdZcmvO', NULL, '2020-04-28 00:14:57', '2020-05-14 03:00:21'),
(7, 'siswa', 'raihan', '1tp@gmail.com', NULL, '$2y$10$c9V7Y.BGwv//Wsv.xIgRLeAY5ffjVnZ5MLDdHYsanA8T8fsPMizzG', 'oSbGi0nqsf1m3Z3gJWvy3s7w3TekLYUfUnDc2PSTTNXoTOOYmo0IrxgdbmBz', '2020-05-03 23:09:45', '2020-06-14 04:26:54'),
(13, 'siswa', 'joni1', 'joni@gmail.com', NULL, '$2y$10$4ZFjUkaAUVtO1hAQAjtpzeuCsRy1j2JRFsdGrlaKFuYbxUimZhXiq', '44dAIcue7yGX9EFQg6yjij5ar4Cu7WeQ17FzB5JTCrD0OJSHKWAdfLJ95jNm', '2020-05-12 01:51:16', '2020-05-14 01:09:36'),
(20, 'siswa', 'ktp', 'ktp@gmail.com', NULL, '$2y$10$7F3teic1DcFxROvxvQ3C5.ND3W9TtYla6IecIXsVxXMWuAKU4oHya', 'oUcOdpuedW5Y5rzfKQdxSsfw7poDgnwqexYtNYgJWFBOd11lXEVlR66k3PUf', '2020-05-20 08:05:25', '2020-05-20 08:11:33'),
(27, 'siswa', 'doni', 'doni@gmail.com', NULL, '$2y$10$19CV3..dWGES5qeugFrenOS15kiyrPKNan8c6jgt0XPS61h0NCSo2', 'ywTfkwWh7kwWlOhnrWEhW5b5GpNY6W10ioUB0qkKexWs78ucYYeieCmRJYyY', '2020-06-14 04:28:13', '2020-06-14 04:28:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `isi`
--
ALTER TABLE `isi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isi_nrp_unique` (`nrp`),
  ADD UNIQUE KEY `isi_email_unique` (`email`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kontak_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_nrp_unique` (`nrp`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `isi`
--
ALTER TABLE `isi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
