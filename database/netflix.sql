-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2021 at 05:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_adm` varchar(255) NOT NULL,
  `pass_adm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_adm`, `pass_adm`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `batas_usia`
--

CREATE TABLE `batas_usia` (
  `id_batas_usia` int(11) NOT NULL,
  `batas_usia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batas_usia`
--

INSERT INTO `batas_usia` (`id_batas_usia`, `batas_usia`) VALUES
(1, 'SU'),
(2, '13+'),
(3, '17+'),
(4, '21+');

-- --------------------------------------------------------

--
-- Table structure for table `detail_eps`
--

CREATE TABLE `detail_eps` (
  `id_det_eps` int(11) NOT NULL,
  `id_series` int(11) NOT NULL,
  `id_season` int(11) NOT NULL,
  `id_eps` int(11) NOT NULL,
  `durasi_eps` varchar(255) NOT NULL,
  `deskripsi_eps` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_eps`
--

INSERT INTO `detail_eps` (`id_det_eps`, `id_series`, `id_season`, `id_eps`, `durasi_eps`, `deskripsi_eps`, `created`) VALUES
(2, 1, 1, 1, '29m', 'emily membawa sikap optimis Amerika dan ide - ide segarnya ke kantor barunya di Paris, tetapi ketidakmampuannya berbicara bahasa Prancis ternyata merupakan kesalahan besar', '2021-01-05 21:51:24'),
(3, 2, 1, 1, '48m', 'Dalam perjalanan pulang dari rumah temannya, Will melihat sosok mengerikan. Tak jauh dari sana, sebuah rahasia jahat terselundup di dalam lab pemerintah.', '2021-01-05 21:54:31'),
(4, 2, 2, 1, '48m', 'Saat kota bersiap menyambut Halloween, rival peraih skor tinggi mengguncang semuanya di arena bermain, dan Hopper yang skeptis menyelidiki ladang labu yang membusuk', '2021-01-05 21:56:31'),
(5, 2, 1, 2, '55m', 'Lucas, Mike, dan Dustin mencoba mengajak bicara gadis yang mereka temui di hutan. Hopper menanyai Joyce yang gelisah tentang panggilan telepon yang meresahkan.', '2021-01-05 22:04:55'),
(6, 2, 1, 3, '52m', 'Nancy yang semakin cemas mencari Barb dan mengetahui apa yang dilakukan Jonathan. Joyce yakin bahwa Will mencoba berbicara dengannya.', '2021-01-05 22:05:19'),
(7, 2, 1, 4, '50m', 'Menolak memercayai bahwa Will telah tewas, Joyce mencoba menghubungi putranya. Anak – anak merombak penampilan Eleven. Nancy dan Jonathan bersekutu', '2021-01-05 22:05:49'),
(8, 2, 1, 5, '53m', 'Hopper membobol lab, sementara Nancy dan Jonathan menghadapi kekuatan yang menculik Will. Anak – anak menanyakan cara memasuki dimensi lain kepada Tn. Clarke', '2021-01-05 22:06:11'),
(9, 2, 2, 2, '56m', 'Setelah Will menyaksikan sesuatu yang mengerikan di malam Halloween, Mike penasaran apakah Eleven masih berada di luar sana. Nancy bergumul dengan kebenaran tentang Barb.', '2021-01-05 22:10:28'),
(10, 2, 2, 3, '51m', 'Dustin mengadopsi piaraan baru yang aneh, dan Eleven makin tak sabar. Bob yang berniat baik mendesak Will untuk mengalahkan ketakutannya.', '2021-01-05 22:10:48'),
(11, 2, 2, 4, '46m', 'Will yang sakit berterus terang kepada Joyce dengan akibat yang meresahkan. Saat Hopper menggali kebenaran, Eleven menyingkap temuan yang mengejutkan.', '2021-01-05 22:11:08'),
(12, 2, 2, 5, '51m', 'Hubungan Will dengan monster bayangan kian kokoh, tetapi tak seorang pun tahu cara menghentikannya. Di tempat lain, Dustin dan Steve menjalin ikatan tak biasa.', '2021-01-05 22:11:41'),
(13, 2, 3, 1, '50m', 'Musim panas membawa banyak tugas baru dan benih – benih asmara. Namun, suasana berubah saat radio Dustin menangkap siaran berbahasa Rusia, dan Will merasa ada yang janggal.', '2021-01-05 22:16:28'),
(14, 2, 3, 2, '50m', 'Nancy dan Jonathan mengikuti sebuah petunjuk. Steve dan Robin terlibat misi rahasia, sedangkan Max dan Eleven pergi berbelanja. Billy melihat penampakan yang meresahkan.', '2021-01-05 22:17:16'),
(15, 2, 3, 3, '49m', 'Sementara El dan Max mencari Billy, Will mendeklarasikan hari tanpa gadis. Steve dan Dustin melakukan pengintaian. Joyce dan Hopper kembali ke Laboratorium Hawkins.', '2021-01-05 22:17:36'),
(16, 2, 3, 4, '52m', 'Sinyal bahaya mempersatukan geng ini kembali guna menghadapi iblis yang tak asing. Karena mendesak Nancy untuk melanjutkan penyelidikan, dan Robin menembukan peta berguna.', '2021-01-05 22:17:56'),
(17, 2, 3, 5, '52m', 'Kejutan misterius tersembunyi di dalam sebuah peternakan tua dan jauh di bawah Starcourt Mall. Sementara itu, Mind Flayer sedang mengumpulkan kekuatan.\r\n', '2021-01-05 22:18:19'),
(18, 1, 1, 2, '26m', 'Emily terlibat dalam lika-liku percintaan ala Prancis ketika antusiasmenya di acara kerja membuat seorang klien genit yang telah menikah terkesan.', '2021-01-05 22:22:58'),
(19, 1, 1, 3, '26m', 'Emily menyampaikan kekhawatiran soal kampanye iklan baru yang provokatif sambil mengurusi masalah perpipaan, pelajaran bahasa, dan para rekan kerja yang tak menyenangkan.', '2021-01-05 22:23:24'),
(20, 1, 1, 4, '27m', 'Seorang kenalan baru yang manis membantu Emily mengendus seorang klien baru yang berpotensi besar, tetapi hubungan kerja yang berantakan membahayakan kesepakatan itu.\r\n\r\n', '2021-01-05 22:23:44'),
(21, 1, 1, 5, '26m', 'Emily menyadari bahwa akun media sosialnya yang semakin besar membuka peluang untuknya di Paris dan ia bertemu Gabriel saat sedang menikmati malam di kota ini.', '2021-01-05 22:24:03'),
(22, 1, 1, 6, '29m', 'Saat pertemuannya dengan perancang adibusana yang legendaris berujung kacau karena kesalahan mendasar, Emily menemukan kenyamanan dari seorang professor yang menawan.', '2021-01-05 22:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id_fav` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `newest` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`id_fav`, `id_user`, `id_film`, `newest`) VALUES
(1, 12, 11, '2021-01-05 17:28:08'),
(2, 12, 10, '2021-01-05 17:28:08'),
(3, 12, 3, '2021-01-05 17:28:35'),
(4, 14, 3, '2021-01-05 21:58:25'),
(5, 15, 10, '2021-04-27 22:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(150) NOT NULL,
  `tahun_film` varchar(20) NOT NULL,
  `id_batas_usia` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `alur_film` varchar(255) NOT NULL,
  `pemeran_film` text NOT NULL,
  `trailer_film` varchar(255) DEFAULT NULL,
  `poster_film` varchar(255) NOT NULL,
  `durasi_film` varchar(255) NOT NULL,
  `deskripsi_film` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `tahun_film`, `id_batas_usia`, `id_genre`, `alur_film`, `pemeran_film`, `trailer_film`, `poster_film`, `durasi_film`, `deskripsi_film`, `created`) VALUES
(10, 'Avengers: Endgame', '2019', 2, 2, 'Aksi, menegangkan, seru', 'Robert Downey jr. , Chris Hemsworth, Chris Evans, Tom Holland, Tom Hiddleton', 'https://youtu.be/TcMBFSGVi1c', 'avengers_endgame.jpg', '3j 2m', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', '2021-01-05 12:10:09'),
(11, 'Kong: Skull Island', '2017', 2, 7, 'seru', 'Brie Larson, Tom Hiddleston', 'https://youtu.be/44LdLqgOpjo', 'kong.jpg', '2j', 'A crew that reaches Skull Island to map it, is attacked by a humongous ape. The survivors then regroup to find out more about the ape, the islands natives and underground monsters.', '2021-01-05 12:59:04'),
(12, 'The Maze Runner', '2014', 2, 10, 'Aksi, menegangkan, seru', 'Dylan Obrien, Kaya Scodelario, Will Poulter', 'https://youtu.be/AwwbhhjQ9Xk', 'maze_runner.jpg', '1j 53m', 'Thomas loses his memory and finds himself trapped in a massive maze called the Glade. He and his friends try to escape from the maze and eventually learn that they are subjects of an experiment.', '2021-01-05 20:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'Drama'),
(2, 'Action'),
(3, 'Komedi'),
(4, 'Horor'),
(5, 'Romance'),
(6, 'Fantasy'),
(7, 'Adventure'),
(8, 'Thriller'),
(10, 'Sci-fi'),
(11, 'Misteri'),
(14, 'Crime'),
(15, 'Sport'),
(16, 'Dokumenter'),
(17, 'Biografi'),
(18, 'Musical');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `paket` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `paket`) VALUES
(1, 'Ponsel'),
(2, 'Standar'),
(3, 'Premium');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama_user`, `email_user`, `pass_user`, `id_paket`) VALUES
(8, '', 'amatulndmk@gmail.com', 'd41d8cd98f00b204e9800998ecf842', 0),
(9, 'meimei kacamata', 'meican@email.com', 'e962c96829241f53c3d68a67f80c4eb7', 3),
(10, 'amatulnd', 'matul@gmail.com', 'bbecee9a64c18653dba0ad7af5b93325', 2),
(11, 'ipin', 'budaknakal@email.com', '1617309f37368466bcbbed50f4096f05', 1),
(12, 'ehsan manja', 'budakmanja@email.com', 'b710d8b89edfe2e12b884817691fbdce', 3),
(13, 'mail', 'duasringgit@email.com', 'c036f67534584076a72cce5cd6938ec4', 1),
(14, 'dea', 'dea@gmail.com', '96991368fec63c8a1bfc48a70010f84a', 3),
(15, 'deashn', 'dea@email.com', 'd7950722aeb2d41d4402922d40baad89', 3);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id_series` int(11) NOT NULL,
  `judul_srs` varchar(150) NOT NULL,
  `tahun_srs` varchar(20) NOT NULL,
  `id_batas_usia` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `alur_srs` varchar(255) NOT NULL,
  `pemeran_srs` text NOT NULL,
  `trailer_srs` varchar(255) DEFAULT NULL,
  `poster_srs` varchar(255) NOT NULL,
  `deskripsi_srs` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id_series`, `judul_srs`, `tahun_srs`, `id_batas_usia`, `id_genre`, `alur_srs`, `pemeran_srs`, `trailer_srs`, `poster_srs`, `deskripsi_srs`, `created`) VALUES
(1, 'Emily in Paris', '2020', 2, 5, 'Romantic-comedy, drama', 'Lily Collins, Lucas Bravo, Ashley Park', 'https://youtu.be/lptctjAT-Mk', 'emily in paris.jpg', 'Chicago marketing executive Emily Cooper is hired to provide an American perspective at a marketing firm in Paris.', '2021-01-05 20:45:02'),
(2, 'Stranger Things', '2016', 2, 4, 'Mystery, supernatural', 'Millie Bobby Brown, Billy Hargrove, Mike Wheeler', 'https://youtu.be/b9EkMc79ZSU', 'stranger things.png', 'Its the fall of 1984, about a year after Will Byers was found, and he has been plagued by seeing visions of the Upside Down featuring a more dangerous monster. That leads the boy to see a suspiciously friendly new doctor, with the possibility that Will`s visions are the result of suffering from PTSD. Nancy deals with survivor`s remorse over the death of best friend Barb. Meanwhile, a new sinister entity threatens the Hawkins residents who survived the year-earlier events. New to the town is tomboy Max, who befriends the boys and attracts the romantic interests of Dustin and Lucas.', '2021-01-05 20:50:08'),
(3, 'Money Heist', '2017', 4, 2, 'penuh ketegangan, seru', 'Ursula Corbero, Alvaro Morte, Itziar Ituno, lainnya', 'https://www.youtube.com/watch?v=GZD8pBF9J2E', 'Money Heist 2017 ‧ Crime ‧ 1 season.jpeg', 'Berkisah tentang sekelompok perampok bank tersebut yang dipimpin oleh seseorang yang bernama \"Profesor\". Dia merencanakan perampokan ini dengan sangat teliti dan sangat terkesan melihat semuanya tersusun rapi. Walau jenius dalam merencanakan perampokan, dia juga sangat menentang yang namanya pembunuhan dalam perampokan itu. Para perampok ini memiliki nama-nama kota sebagai panggilannya, itu semua termasuk kedalam rencana \"Profesor\" dimana tidak boleh ada data pribadi yang diketahui oleh masing-masing perampok dan tidak boleh ada hubungan lebih dari sekedar \"rekan kerja\". Namun, konflik yang selalu datang bertubi-tubi dan datang dari segala arah, konflik ini bisa datang dari perampok, profesor, polisi, dan juga para sandera.', '2021-01-07 18:59:50'),
(4, 'Alice In Borderland', '2020', 3, 2, 'penuh ketegangan, seru', 'Anya Taylor-Joy, Bill Camp, Marielle Heller,lainnya', 'https://www.youtube.com/watch?v=CDrieqwSdgI', 'Imawa no Kuni no Alice.png', 'ecjkqbcjr', '2021-01-07 19:06:10'),
(5, 'Start Up', '2020', 1, 11, 'pengetahuan, semangat', 'Bae Suzy, Nam Joo-hyuk, Kim Seon-ho,Kang Han-na,lainnya', 'https://www.youtube.com/watch?v=CDrieqwSdgI', 'thecall.png', 'Berkisah tentang sekelompok perampok bank tersebut yang dipimpin oleh seseorang yang bernama \"Profesor\". Dia merencanakan perampokan ini dengan sangat teliti dan sangat terkesan melihat semuanya tersusun rapi. Walau jenius dalam merencanakan perampokan, dia juga sangat menentang yang namanya pembunuhan dalam perampokan itu. Para perampok ini memiliki nama-nama kota sebagai panggilannya, itu semua termasuk kedalam rencana \"Profesor\" dimana tidak boleh ada data pribadi yang diketahui oleh masing-masing perampok dan tidak boleh ada hubungan lebih dari sekedar \"rekan kerja\". Namun, konflik yang selalu datang bertubi-tubi dan datang dari segala arah, konflik ini bisa datang dari perampok, profesor, polisi, dan juga para sandera.', '2021-01-07 19:09:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batas_usia`
--
ALTER TABLE `batas_usia`
  ADD PRIMARY KEY (`id_batas_usia`);

--
-- Indexes for table `detail_eps`
--
ALTER TABLE `detail_eps`
  ADD PRIMARY KEY (`id_det_eps`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id_fav`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id_series`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batas_usia`
--
ALTER TABLE `batas_usia`
  MODIFY `id_batas_usia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_eps`
--
ALTER TABLE `detail_eps`
  MODIFY `id_det_eps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id_series` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
