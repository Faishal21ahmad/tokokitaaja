-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 04:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokokitaaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(2) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `userName`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya_kirim`
--

CREATE TABLE `tbl_biaya_kirim` (
  `idBiayaKirim` int(5) NOT NULL,
  `idKurir` int(3) DEFAULT NULL,
  `idKotaAsal` int(4) DEFAULT NULL,
  `idKotaTujuan` int(4) DEFAULT NULL,
  `biaya` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya_kirim`
--

INSERT INTO `tbl_biaya_kirim` (`idBiayaKirim`, `idKurir`, `idKotaAsal`, `idKotaTujuan`, `biaya`) VALUES
(1, 1, 3, 1, 45000),
(2, 3, 1, 2, 25000),
(4, 4, 5, 4, 75000),
(9, 1, 1, 3, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `idDetailOrder` int(5) NOT NULL,
  `idOrder` int(5) DEFAULT NULL,
  `idProduk` int(5) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorit`
--

CREATE TABLE `tbl_favorit` (
  `idFavorit` int(5) NOT NULL,
  `idKonsumen` int(5) NOT NULL,
  `idProduk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_favorit`
--

INSERT INTO `tbl_favorit` (`idFavorit`, `idKonsumen`, `idProduk`) VALUES
(17, 1, 19),
(3, 2, 2),
(2, 2, 3),
(1, 2, 4),
(4, 2, 5),
(20, 2, 19),
(21, 4, 19),
(6, 5, 3),
(5, 5, 4),
(18, 5, 19),
(12, 8, 3),
(7, 8, 6),
(8, 8, 8),
(9, 8, 12),
(14, 8, 17),
(16, 8, 19),
(19, 9, 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idkat` int(5) NOT NULL,
  `namakat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idkat`, `namakat`) VALUES
(12, 'Prosesor'),
(13, 'SSD'),
(14, 'HDD'),
(15, 'VGA'),
(16, 'PSU'),
(17, 'Peralatan Pendakian'),
(18, 'ATK'),
(19, 'Pakaian'),
(20, 'Mainan'),
(21, 'Alat Makan'),
(22, 'Kain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfirmasi`
--

CREATE TABLE `tbl_konfirmasi` (
  `idKonfirmasi` int(5) NOT NULL,
  `idOrder` int(5) DEFAULT NULL,
  `buktiTeransfer` varchar(100) DEFAULT NULL,
  `validasi` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `idKota` int(4) NOT NULL,
  `namaKota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`idKota`, `namaKota`) VALUES
(1, 'Wonogiri'),
(2, 'Solo'),
(3, 'Semarang'),
(4, 'Malang'),
(5, 'Banten'),
(6, 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurir`
--

CREATE TABLE `tbl_kurir` (
  `idKurir` int(2) NOT NULL,
  `namaKurir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kurir`
--

INSERT INTO `tbl_kurir` (`idKurir`, `namaKurir`) VALUES
(1, 'GoBox'),
(2, 'JNE'),
(3, 'JNT'),
(4, 'AnterinAja'),
(5, 'Ninja Express');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `idKonsumen` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namaKonsumen` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `idKota` int(4) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `tlpn` varchar(30) NOT NULL,
  `statusAktif` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`idKonsumen`, `username`, `password`, `namaKonsumen`, `alamat`, `idKota`, `email`, `tlpn`, `statusAktif`) VALUES
(1, 'dodo', 'dodo1', 'dododidi', 'Wonogiri', 1, 'dodo@gmail.coom', '082227287930', 'Y'),
(2, 'faishal', 'fais1234s', 'Faishalbahy Ahmad fathuni', 'wonogiri wuryantoro', 1, 'fais2020@gmail.com', '081118976754', 'Y'),
(4, 'faisisal', 'isal123', 'faisisal ahmad', 'serang banten ', 5, 'isal123isal@gmail.com', '081385078622', 'Y'),
(5, 'dididi1', 'didi11', 'dididi', 'depan pamela', 2, 'dididi@gmail.com', '083456341234', NULL),
(7, 'qwer', 'qwer12', 'qwer', 'aergaerga', 3, 'qwer@gmail.com', '081385078644', 'Y'),
(8, 'ahmad', '1234', 'ahmad', 'depan di depan selalu di depan', 1, 'ahmad@gmail.com', '081385078643', 'Y'),
(9, 'amri', '1234', 'amri', 'yogyakarta', 6, 'amri@gmail.com', '0876577775555', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `idOrder` int(5) NOT NULL,
  `idKonsumen` int(5) DEFAULT NULL,
  `tglOrder` date DEFAULT NULL,
  `statusOrder` enum('Belum Dibayar','Dikemas','Dikirim','Diterima','Selesai','Dibatalkan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `idProduk` int(5) NOT NULL,
  `idKat` int(5) DEFAULT NULL,
  `idToko` int(5) DEFAULT NULL,
  `namaProduk` varchar(100) NOT NULL,
  `foto` varchar(140) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(100) DEFAULT NULL,
  `berat` int(100) DEFAULT NULL,
  `deskripsiProduk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`idProduk`, `idKat`, `idToko`, `namaProduk`, `foto`, `harga`, `stok`, `berat`, `deskripsiProduk`) VALUES
(1, 12, 7, 'intel 12300U', 'images3.jpg', 2000000, 12, 1, 'srthtrshrtsrhrt'),
(2, 12, 7, 'AMD Ryzen 5600G ', 'Ryzen5000G.jpg', 2500000, 12, 1, 'AMD Ryzen 5600G  6 Core 12 Thread'),
(3, 13, 7, 'Seagate Firecuda 528GB', 'firecuda-seagate.png', 1000000, 500, 1, 'Seagate Firecuda 528GB  M.2  Nvme 4.0 \r\n\r\nGaransi Sesmi] Seagate \r\n\r\nRead  4000Mbps\r\nWrite 4500Mbps'),
(4, 15, 7, 'GeForce RTX 3060 MSI VENTUS 2X 12G OC', 'RTX3060.jpg', 7146000, 20, 5, 'GeForce RTX™ 3060\r\n\r\nBoost Clock / Memory Speed\r\n- 1807 MHz / 15 Gbps\r\n- 12GB GDDR6\r\n- DisplayPort x 3\r\nHDMI x 1 (Supports 4K@120Hz as specified in HDMI 2.1)'),
(5, 16, 7, 'PSU Gigabyte GP P750GM 750W 80+ Gold Full Modular', 'PSU_Gigabyte_P750GM.jpg', 1350000, 50, 2, 'Gigabyte PSU GP P750GM 750W 80+ Gold Full Modular\r\n\r\n80 PLUS Gold certified\r\nFully modular design\r\n120mm Smart Hydraulic Bearing (HYB) Fan\r\nMain Japanese capacitors\r\nPowerful single +12V rail\r\nOVP/OPP/SCP/UVP/OCP/OTP protection\r\nCompact size\r\n5 years warranty (Adjusted according to different regions)'),
(6, 17, 10, 'Kompor Portable', 'kompor_postable.jpg', 60000, 50, 500, 'Kompor postable untuk  perapian memasak di tengah alam agar perut tidak kelaparan'),
(7, 17, 10, 'Matras camping 50x170cm', 'Matras.jpg', 40000, 100, 1, 'matras  pendakian muat untuk 1 orang di gunakan \r\n\r\nberukuran 50x170cm\r\ndengan bobot 700gram'),
(8, 17, 10, 'Tongkat stik Pendakian | Cutik', 'Cutik.jpg', 300000, 100, 1, 'tongkat pendakian ajaib dapat menunjuk arah dengan tepat tanapa tersesat\r\nTinggi Lipat = 30cm\r\nTinggi poll   = 120cm'),
(9, 17, 10, 'Peralatan Pendakian | Paket Lengkap', 'PaketLengkap.jpg', 1500000, 10, 12, 'Paket Lengkap Pralatan Pendakian \r\n\r\nTas 60L\r\nMatras\r\nSleepingBag\r\nTongkat Ajaib \r\nSenter Kepala \r\nBatrai AAA\r\nKompor portable\r\nGas mini portable \r\nTali 10M\r\nPralatan Masak Portable'),
(10, 17, 10, 'SleepingBag', 'sb.jpg', 120000, 300, 1, 'SleepingBag cantung tidur untuk Menjaga suhu badan tetap hangat di alam liar \r\n\r\nukuran 65x180cm\r\nmuat 1 orang'),
(11, 17, 10, 'Senter XLM P70', 'Senter_XLM_P70.jpg', 240000, 30, 40, 'Barang-barang yang anda dapat dalam kotak produk:\r\n\r\n1 x Senter LED USB Rechargeable P70 XHP50 50W 1000 Lumens - XLMP70\r\n1 x USB Cable\r\n\r\nVarian Complete Set :\r\n(Complete dengan Battery 26650 6800mAh dan Senter Case)\r\n1 x Senter LED USB Rechargeable P70 XHP50 50W 1000 Lumens - XLMP70\r\n1 x USB Cable'),
(12, 17, 10, 'Senter LED XML T6 8000 lumens', 'Senter_LED_XML_T6_8000_lumens.jpg', 30000, 60, 100, 'Barang-barang yang Anda dapat dari Paket Komplit Senter LED Cree Laser E17 XM-L T6 :\r\n♠ E17 Senter LED Cree XM-T6 8000 Lumens 1 pcs\r\n♠ Adapter AAA ke 18650\r\n♠ PLastik Tabung 18650\r\n- Battre 18650\r\n- charger\r\n\r\nSpesifikasi dan detail produk Senter LED Cree Laser E17 XM-L T6 Magnet :\r\n♠ E17 adalah senter LED yang sangat powerful dan memiliki body yang sangat solid.\r\n♠ Dapat menghasilkan cahaya hingga 8000Lm dengan jarak throw 500 meter.\r\n♠ Tactical tail switch berfungsi untuk On/Off senter dan mengganti mode, keterangan senter.\r\n♠ Senter LED ini menggunakan 1 buah baterai 18650 atau 3 buah baterai AAA.\r\n\r\nDimensi 135 X 35 X 24 Mm'),
(15, 22, 11, 'Kain Lap Microfiber Mobil Serbaguna 30x30 cm 10pcs', 'microfiber.jpg', 70000, 1000, 500, 'Item : Paket 10 pcs Lap Microfiber 30x30cm Tebal 320 GSM Mix Colour (Warna Campur)\r\nBerikut adalah spesifikasi detail dari lap microfiber yang kami jual :\r\n\r\nUkuran Asli : ±30x30 cm (toleransi selisih 1-2cm)\r\nBerat kotor (diluar berat packaging): ±29 gram/pc (toleransi selisih 1-2gr/pc)\r\nBerat volumetrik : 40 gr/pc (p x l x t ÷ 6000) = 1 kg bisa muat 30 pc\r\nFeature: Quick-Dry, super absorbent, durable, unfaded, material 80% polyester 20% polyamide, ketebalan ± 320 GSM\r\nWarna : biru, baby pink, rose purple, green, brown (ready stock)\r\nPemakaian : car cleaning, desk cleaning, home/kitchen cleaning, etc\r\n\r\nLap microfiber adalah salah satu alat kebersihan yg berbahan dasar sintetis yg terbuat dari 80 persen bahan polyester dan 20 persen polyamide.\r\nJenis lap ini memiliki serat yg sangat halus dan tekstur yg sangat lembut, bahkan 10 kali lebih lembut dari sutera. Benang-benang ini pun dpt mengangkat debu, kotoran, hingga bakteri dg jumlah lebih banyak ketimbang kain lap biasa.\r\n\r\nCara perawatan :\r\n\r\nPerawatan kain microfiber berbeda dengan kain lap biasanya. Tidak perlu menggunakan obat pembersih kimia tambahan. Cukup menggunakan air, sabun cuci biasa, atau cuka, kotoran langsung hilang seketika.\r\n\r\nSebelum mencuci dg mesin cuci, sebaiknya bilas kain microfiber terlebih dahulu. Kotoran dan debu yg menempel dibersihkan terlebih dahulu sehingga tdk membawa bakteri apa pun yg bisa mengotori pakaian lain.\r\n\r\nGunakan air dingin dan deterjen biasa untuk mencucinya. Jangan keringkan di bawah panas matahari yang terlalu terik karena bisa melelehkan komponen benang kain. Cukup gantungkan saja dalam ruangan kosong dg suhu sedang.\r\n\r\nNote :\r\n- khusus pembelian promo/flashsale warna tidak bisa request (kami kirim mix/random sesuai stok yang tersedia)\r\n- foto hanyalah ilustrasi dan harap baca deskripsi produk baik-baik sebelum membeli produk kami (kami tidak melayani complain pengembalian / return barang dengan alasan apapun yang disebabkan kelalaian pembeli)'),
(16, 22, 11, 'Kain Goni Baru Per 1 Yard', 'kaingoni.jpg', 50000, 999, 500, 'Kini tersedia #KainGoni dalam kondisi 100% baru (tidak bekas), sangat cocok untuk kamu yang gemar berkreasi dengan menggunakan bahan-bahan natural dan ramah lingkungan.\r\n\r\nHarga tertera adalah harga per Yard. Ukuran Produk:\r\n1 YARD = panjang 91,4 cm\r\ndan ada 2 macam lebar, 115 cm dan 135 cm(Goni Lokal grade A dan B). Serta Goni Impor dan Goni Motif dengan lebar 115 cm.\r\n\r\n\r\n\r\n**CATATAN**\r\n\r\n-BELI LEBIH DARI 1 PCS DAPAT UTUH (TIDAK DIPOTONG).\r\nMISAL BELI 2 PCS, DAPAT KAIN GONI UTUH PANJANG 2 YARD.\r\n\r\nKINI TERSEDIA 6 VARIAN\r\n- Grade A LOKAL : Lebar 135 cm, warna lebih cerah (mirip Goni Impor Grade B), tenunan serat lebih rapat (1×1), serat paling rapi.\r\n\r\n- Grade B LOKAL: lebar 115 cm, warna goni biasa(warna paling gelap dibanding varian lain), tenunan serat 1x2, serat rapi dibandingkan goni impor\r\n\r\n-Goni Impor Grade A : lebar 115 cm, warna paling cerah dibanding varian lain,\r\n\r\n-Goni Impor Grade B, lebar 115 cm, kecerahan warna seperti goni lokal grade A, dan terkadang tenunan kurang rapi(lihat foto). BELI=SETUJU. Tidak menerima komplain tentang serat ya. Mohon pengertiannya.\r\n\r\n-Goni Lokal Motif Anyam Liris, lebar 115 cm, warna seperti goni lokal Grade B. motif Anyaman seperti di foto, bentuk zigzag.\r\n\r\n-Goni Lokal Motif Anyam Catur, lebar 115 cm, warna seperti goni lokal Grade B. motif Anyaman seperti di foto, bentuk kotak dengan serat 2 x 2\r\n\r\n\r\nSelamat berbelanja :)\r\n\r\nTerima Kasih :)\r\n'),
(17, 19, 11, 'Kaos Polos Cotton Combed 30s', 'Kaos_Polos_Cotton_Combed_30s.jpg', 30000, 999, 250, 'TULIS WARNA YANG DIINGINKAN CATATAN\r\n\r\nJika tidak , akan kami kirim warna bebas\r\n\r\nStock Ready 100%\r\n\r\nWarna:\r\n- Hitam\r\n- Putih\r\n- Merah Maroon\r\n- Fuchsia\r\n- Biru BCA\r\n- Biru Navy\r\n- Merah Cabe\r\n- Hijau Army\r\n\r\nSize chart (cm): Lebar Dada x Panjang\r\nSS = 33 x 49\r\nS = 40 x 56\r\nM = 42 x 65\r\nL = 49 x 70\r\nXL = 54 x 76\r\nXXL = 57 x 79\r\n\r\nTOLERANSI SIZE 1-3 CM , Karena SDM\r\n\r\n- Bahan 100% Katun Kombed 30s\r\n- Bisa dipakai pria dan wanita\r\n- Kualitas tidak main-main\r\n- Kerah Lingkar O neck\r\n- Jahitan rapih disetiap sisi\r\n\r\nBahan dijamin 100% KATUN COMBED! Bahan kaos cocok dipakai untuk semua kegiatan, tidak gerah, elastis dan sangat nyaman untuk dipakai. Untuk sema orang yang ingin terlihat stylish namun terkesan casual, tidak salah lagi membeli kaos ini!'),
(18, 19, 11, 'Kaos Polos Katun Premium 24s', 'Kaos_Polos_Katun_Premium_24s.jpg', 20000, 999, 250, 'TOLONG CANTUMKAN WARNA YANG DIINGINKAN DI CATATAN UNTUK PENJUAL\r\n\r\nJIKA TIDAK DICANTUMKAN AKAN KAMI KIRIM WARNA SECARA BEBAS\r\n\r\nWarna:\r\n- Hitam\r\n- Putih Bluis\r\n- Merah Maroon\r\n- Biru Muda\r\n- Biru BCA\r\n- Biru Navy\r\n- Merah Cabe\r\n- Abu Gelap\r\n- Abu Terang\r\n- Hijau Army\r\n- Hijau Terang\r\n- Orange\r\n- Kuning\r\n- Tosca\r\n\r\n\r\nTIDAK BISA RETUR JIKA SALAH PILIH SIZE & WARNA\r\nTOLERANSI SIZE +- 1-2 CM\r\n\r\nDeskripsi Kaos Polos Premium Cotton Carded 24s\r\n- Bahan 100% Premium Cotton\r\n- Bisa dipakai pria dan wanita\r\n- Kualitas tidak main-main\r\n- Kerah Lingkar O neck\r\n- Jahitan rapih disetiap sisi\r\n\r\nBahan dijamin 100% Premium Cotton! Bahan kaos cocok dipakai untuk semua kegiatan, tidak gerah, elastis dan sangat nyaman untuk dipakai. Untuk sema orang yang ingin terlihat stylish namun terkesan casual, tidak salah lagi membeli kaos ini! YUK BURUAN BELI!! DIJAMIN BIKIN NAGIH DEH! CUS!\r\n'),
(19, 22, 11, 'KAIN TENUN BLANGKET JEPARA 017', 'KAIN_TENUN_BLANGKET_JEPARA_017.jpg', 200000, 999, 500, '????Brand tenun kami adalah brand terbaik yg ada ditokopedia yang menyuguhkan keanekaragaman motif tenun etnik nusantara dengan tujuan untuk memajukan salah satu warisan budaya indonesia\r\n\r\n????Kenapa kamu harus beli kain tenun di toko kami??\r\nKarena setiap motif yang kami jual merupakan salah satu mahakarya anak bangsa yang patut untuk kita apresiasi\r\n-Kain asli 100% tenun handmade\r\n-Bukan cap atau printing\r\n-Alat tenun masih menggunakan alat tenun tradisional bukan mesin\r\n\r\n????Apasih kegunaan kain tenun??Kain tenun dapat di jadikan\r\n-Bahan Baju\r\n-Hordeng\r\n-Taplak Meja\r\n-Hiasan Dinding\r\n-Accesoris Foto\r\n\r\n????Ukuran Kain\r\n-Panjangnya 240 cm\r\n-Lebar Kain 120 cm\r\n????Cara Perawatan Kain Tenun\r\n-Jangan Mencucinya Pakai Deterjen\r\n-Saat Penjemuran Kain Usahakan Jangan Terkena Sinar Matahari Secara Langsung\r\n\r\n????Kami Juga Ada Garangsi Kok Apabila Kami Salah Kirim Motif Atau Barang Yg Kami Kirim Cacat..Kami Akan Bertanggungjawab dan Kain Boleh diRetur/Uang kembali\r\n\r\nSelamat Berbelanja dan Apabila Barang Sudah Sampai Jangan Lupa Kasih Ulasan dan Kasih Bintang 5???????????????????? dan Semoga Terkesan Dengan Produk Dan Layanan Yang Kami Berikan Di Toko Kami.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saldo`
--

CREATE TABLE `tbl_saldo` (
  `idSaldo` int(5) NOT NULL,
  `idToko` int(5) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `idToko` int(5) NOT NULL,
  `idKonsumen` int(5) DEFAULT NULL,
  `namaToko` varchar(100) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `statusAktif` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`idToko`, `idKonsumen`, `namaToko`, `logo`, `deskripsi`, `statusAktif`) VALUES
(7, 8, 'GudangCom', 'cardiogram.png', 'Tersedia berbagai Komponen Computer Lengkap ', 'Y'),
(8, 8, 'GudangSeragam', 'duit.png', 'tersedia berbagai seragam sd hinga Pejabaat', 'N'),
(9, 8, 'ElektrikSentosa', 'dumum.png', 'sedia berbagai elektrik', 'N'),
(10, 1, 'DodoStore', 'dodo.jpg', 'sedia berbagai macam Peralatan Pendakian', 'Y'),
(11, 9, 'SerbaKain', 'kaintoko.jpg', 'Toko kain tersedia berbagai jenis kain untuk pakaian, dan berbagai pakaian ', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD PRIMARY KEY (`idBiayaKirim`),
  ADD KEY `idKurir` (`idKurir`),
  ADD KEY `idKotaAsal` (`idKotaAsal`),
  ADD KEY `idKotaTujuan` (`idKotaTujuan`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`idDetailOrder`),
  ADD KEY `idOrder` (`idOrder`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indexes for table `tbl_favorit`
--
ALTER TABLE `tbl_favorit`
  ADD PRIMARY KEY (`idFavorit`),
  ADD KEY `idKonsumen` (`idKonsumen`,`idProduk`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idkat`);

--
-- Indexes for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD PRIMARY KEY (`idKonfirmasi`),
  ADD KEY `idOrder` (`idOrder`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`idKota`);

--
-- Indexes for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  ADD PRIMARY KEY (`idKurir`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`idKonsumen`),
  ADD KEY `idKota` (`idKota`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `idKonsumen` (`idKonsumen`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idKat` (`idKat`),
  ADD KEY `idToko` (`idToko`);

--
-- Indexes for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD PRIMARY KEY (`idSaldo`),
  ADD KEY `idToko` (`idToko`);

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`idToko`),
  ADD KEY `idKonsumen` (`idKonsumen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  MODIFY `idBiayaKirim` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_favorit`
--
ALTER TABLE `tbl_favorit`
  MODIFY `idFavorit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idkat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `idKota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  MODIFY `idKurir` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `idKonsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `idToko` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_1` FOREIGN KEY (`idKurir`) REFERENCES `tbl_kurir` (`idKurir`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_2` FOREIGN KEY (`idKotaAsal`) REFERENCES `tbl_kota` (`idKota`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_3` FOREIGN KEY (`idKotaTujuan`) REFERENCES `tbl_kota` (`idKota`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `tbl_detail_order_ibfk_1` FOREIGN KEY (`idOrder`) REFERENCES `tbl_order` (`idOrder`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_detail_order_ibfk_2` FOREIGN KEY (`idProduk`) REFERENCES `tbl_produk` (`idProduk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_favorit`
--
ALTER TABLE `tbl_favorit`
  ADD CONSTRAINT `tbl_favorit_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `tbl_produk` (`idProduk`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_favorit_ibfk_2` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD CONSTRAINT `tbl_konfirmasi_ibfk_1` FOREIGN KEY (`idOrder`) REFERENCES `tbl_order` (`idOrder`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD CONSTRAINT `tbl_member_ibfk_1` FOREIGN KEY (`idKota`) REFERENCES `tbl_kota` (`idKota`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`idKat`) REFERENCES `tbl_kategori` (`idkat`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`idToko`) REFERENCES `tbl_toko` (`idToko`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD CONSTRAINT `tbl_saldo_ibfk_1` FOREIGN KEY (`idToko`) REFERENCES `tbl_toko` (`idToko`) ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD CONSTRAINT `tbl_toko_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
