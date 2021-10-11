-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 11 Eki 2021, 16:17:09
-- Sunucu sürümü: 10.3.28-MariaDB
-- PHP Sürümü: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gazibil_old_www`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_04_09_110414_products', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `slug`, `title`, `context`, `image`, `added_date`) VALUES
(1, 'sunum-projesi', 'SUNUM PROJESİ', 'PowerPoint veya benzeri uygulamalarda hazırlanan sunumların bulut tabanlı bir sistem altında, hızlı, kolay, kurumsal kimliğe uygun bir formatta hazırlanmasını sağlayan bir uygulamadır.', '1', '2021-04-09 11:18:06'),
(3, 'pandemi-elcisi', 'PANDEMİ ELÇİSİ', 'Pandemi ortamında hasta denetimine yardımcı olmak amacıyla kurum tarafından belirlenen gönüllü vatandaşların hasta kişileri takip etmek için hazırlanmış bir projedir.\r\n\r\nProje kapsamında sistem üzerinden elçilerinde hasta durumları hakkında bildirilen durumlar ile bir puan kazanılır ve puanlar ile sistem içinden hediye talebinde bulunabilir\r\n', '2', '2021-04-09 11:18:06'),
(4, 'ikom', 'İKOM', 'İKOM, vatandaş ile kurum arasındaki tüm iletişimi, tek bir ekranda otomatik olarak toplayan iletişim yönetim sistemidir.\r\nÇağrı hattı entegrasyonu sayesinde web tarayıcı ile istenilen her yerden çalışmaktadır.\r\n', '3', '2021-04-09 11:18:06'),
(5, '#', '3D SİMÜLATÖR', '\r\n', '4', '2021-04-09 11:18:06'),
(6, 'gaziray-oylama', 'GAZİRAY OYLAMA\r\n', 'Gaziantep halkının kullanacağı hizmetleri kendi seçimlerine sunan projemizdir.\r\n', '5', '2021-04-09 11:18:06'),
(8, 'satin-alma-surec-yonetimi', 'SATIN ALMA SÜREÇ YÖNETİMİ ', 'Satın Alma Süreçlerinin mevzuata uygun yönetimini sağlayan bir paket yazılım uygulamasıdır. \r\n\r\nUygulama kamu, kamu iştirak ve özel şirketlerin Satın Alma Süreçlerinin dijital ortamda yürütülmesini sağlamaktadır. \r\n\r\nUygulama ile satın alma süreçlerinin yönetimi, raporlanması ve nitelikli veriler kullanılarak veri analizi yapılmaktadır.Bir şirketin birimleri tarafından oluşturulan talepler, yönetildikten sonra talep havuzunda bekleyen diğer kalemler ile satın alma birimi tarafından alım işi haline getirilir. Böylece satın alma süreci başlatılmış olur.\r\n\r\nKayıt edilen verilerin analizi, raporlanması ve ilgili dokümanların kolaylıkla sistem üzerinden alınabilmesini sağlar.\r\n\r\nSms ve mail entegrasyonları ile yetkili kişilere anlık bildirimler gönderilerek sürecin daha verimli ilerlemesi sağlanmaktadır.\r\n\r\n', '7', '2021-04-09 11:18:06'),
(9, 'ukome-bilgi-ve-evrak-yonetimi', 'UKOME – BİLGİ VE EVRAK YÖNETİMİ\r\n', 'Ulaşım Koordinasyon Merkezi için yapılan bu program ile;\r\nDilekçe ve talep girme\r\nToplantı (oturum) planlama\r\nGündem hazırlama (Genel kurul ve teknik komisyon için ayrı ayrı gündem maddeleri oluşturma)\r\nGirilen dilekçe ve talepleri oturuma bağlama\r\nKarar ve raporların otomatik olarak çıktısının alınması\r\nGeçmiş toplantıların ve toplantılarda alınan kararların evrak yükleme desteği ile girilebileceği arşiv.\r\nKararın birimlere, diğer kurumlara gönderilmesi\r\nTamamlanmış, beklemede olan, zaman aşımına uğrayan kararların takibi\r\nRaporlamalar\r\n', '8', '2021-04-09 11:25:24'),
(10, 'mahalle-kart', 'MAHALLE KARTI\r\n', 'Belediyemizin verdiği bütün hizmetler listelenir\r\n\r\nTalepler alınıp bu taleplere göre hizmetler şekillendirilir\r\n\r\nEn hızlı ve en doğru yatırımlar için karar alınmasına yardım eder. Mahalle Kartı web tarafında çıktı olarak alınan raporun mobil uygulama olarak kullanılması\r\nEk olarak;\r\nİlçe belediyeleri ve kaymakamlıkların gerçekleştirdiği ve planladığı yatırımlar\r\nÖnemli kurum adres ve telefonları\r\nFaaliyet Bildirim ekranı\r\nSorun ve Talep Bildirimi\r\n\r\n', '9', '2021-04-09 11:26:05'),
(11, 'gaziantep-valiligi-cagri-merkezi-ve-denetim', 'GAZİANTEP VALİLİĞİ ÇAĞRI MERKEZİ \r\nVE DENETİM\r\n', 'Covid19 Sağlık Destek Hattının kurulmasıyla oluşturulan çağrı merkezi yazılımı; \r\nValilik çağrı merkezini arayan vatandaşların kaydını tutarak takibinin sağlanmasını içeren sistemdir.\r\n\r\nCOVID-19 ile ilgili çağrı merkezine düşen tüm iş ve işlemler anlık olarak takip edilebilmektedir.Portal sayesinde detaylı raporlar alınabilmektedir.\r\n\r\nGünlük, haftalık, aylık girilen çağrı kayıtlarının özeti\r\n\r\nİlçelere göre sağlık veya denetim kayıtlarını ve sonlandırılan kayıtlar tespit edilmektedir.\r\n\r\n', '10', '2021-04-09 11:27:19'),
(12, 'ukome-ruhsat', 'UKOME - RUHSAT', 'Ulaşım Koordinasyon Merkezi için yapılan bu program ile;\r\nŞoför, rehber personel tanımlama, kara listeye alma\r\nS, T, H, K, JJ plaka ruhsat tanımlama (şahıs, şirket)\r\nPlaka tiplerine özel ruhsat işlemleri gerçekleştirme (Araç değişikliği, güzergah izin belgesi, şahıstan şahısa, şahıstan şirkete devir vs.)\r\nRaporlamalar\r\nİnşaat projelerindeki makbuz, rapor ve izin belgeleri  ile ilgili işleri hızlandırmak ve geçmişe yönelik onaylanan İnşaat projeleri hakkında bilgiye en  kısa zamanda ulaşmak için geliştirilmiş bir yazılımdır. \r\n\r\nAynı zamanda makbuz ve onaylanan proje arşivlerini tutulmasını sağlar.\r\n', '11', '2021-04-09 11:28:02'),
(13, 'kalite-yonetim-sistemi', 'KALİTE YÖNETİM SİSTEMİ\r\n', 'Kurum ve kuruluşların ISO 9001-2015 standartlarını baz alarak üretim ve hizmet kalitelerini artıran, bütün birimlerin ve faaliyetlerin gözden geçirilmesini ve iyileştirilmesini gerçekleştiren, dokümanların revizyonlarını takip eden, yetkisiz kullanıcıların dokümanlar üzerinde değişklik yapmasını engelleyen,tüm birimlerin birbirleri ile etkileşim içerisinde olduğu astın üste, üstün asta online bir şekilde bilgi verdiğibir otomasyon sistemidir.\r\n', '12', '2021-04-09 11:28:51'),
(14, 'anket-sistemi', 'ANKET SİSTEMİ\r\n', 'Anket sistemi, geleneksel ve bilindik olan anket sistemlerinden farklıdır. Her türlü bilginin dijital ortamda depolanması istemi bu projenin kırılma noktalarından biridir. Geliştirilen bu proje sayesinde kağıtlar ve fiziki dosyalama sistemi yerine dijital olarak depolanması hedeflenmiştir. \r\nDijital olarak toplanan veriler sonrası tüm bu verilerin farklı formatlarda (Excel, PDF vs) alınması da mümkündür. \r\nHazırlanmış olan sistem sayesinde yöneticiler, anketlerin hangi konumlarda yapıldığını kontrol edebilir ve haritalar üzerinden de bu konumlar incelenebilir. \r\n', '13', '2021-04-09 11:29:20'),
(15, 'personel-takip-sistemi', 'PERSONEL TAKİP SİSTEMİ (PDKS)\r\n', 'Mesai saatlerinin kontrol altına alınmasını ve personellerin konum bazlı kontrolünün sağlanmasını hedefleyen bir mobil/web uygulamadır.\r\n', '14', '2021-04-09 11:29:53'),
(16, 'evim-dunyalara-bedel', 'EVİM DÜNYALARA BEDEL\r\n', 'Proje kapasmında; belirlenen ihtiyaç sahibi yaşlıların telefonlarına yüklenecek uygulamanın ekranında bulunan butonlar yardımı ile belediye bünyesinde yer alan çağrı merkezlerine yönlendirilecek ve görüntülü veya sesli konuşma ile belediye hizmetlerine sıra beklemeden direkt ilgili personelin yardımı ile ulaşabileceklerdir.\r\n', '15', '2021-04-09 11:30:21'),
(17, 'hku-kamera-sistemi', 'HKU KAMERA TAKİP SİSTEMİ\r\n', 'Hasan Kalyoncu Üniversitesi rektörlüğü’ne yapılan “kamera takip projesi” ile rektörlüğün kampüse giriş - çıkış yapan yaya ve araçları anlık olarak takip edebilebilmektedir. Ayrıca istenilen bir zaman aralığındaki veriler de raporlanabilmektedir.\r\n', '16', '2021-04-09 11:30:41'),
(18, 'saybit-sayistay-format-donusturucu', 'SAYBİT (SAYIŞTAY FORMAT DÖNÜŞTÜRÜCÜ)\r\n', 'Sayıştay, kamu idarelerince tutulan defter, kayıt, belge ve bilgileri özel bir formatta istemektedir. Hali hazırda ki muhasebe programları buna bir çözüm geliştiremediği için şirketimiz tarafından bir format dönüştürücü program yazıldı.\r\n', '17', '2021-04-09 11:31:31'),
(19, 'scada-izleme-sistemi', 'SCADA İZLEME SİSTEMİ\r\n', 'SCADA takip sistemimizde depo seviyesi,analog çıkış değerleri ve alarmları görebildiğimiz bir sistemdir.\r\n\r\nScada değerlerini aynı zamanda animasyonlarla desteklemekteyiz.\r\n\r\nBunlara ek olarak her istasyonda oluşan alarmlarıda anlık olarak sistemden takip edebiliyoruz.Haritalandırma özelliği; istasyonları harita üzerinde konumlandırmaya yarar.\r\n\r\nOlası bir problem yaşandığında Çağrı Merkezi Sistemiyle anında yetkili kişiye ulaşılabiliyor.\r\n\r\n', '18', '2021-04-09 11:32:16'),
(20, 'kiralama-takip', 'KİRALAMA TAKİP\r\n', 'Tanımlanan kiracı ve taşınmazlara ait kira sözleşmeleri yapıp bunların ödeme planlarını çıkaran sistemimizde  tahsilat, gecikme faizi takibini gerçekleştirebiliyoruz. \r\n\r\nYapmış olduğumuz Kira Sözleşme Numarasına göre gerçekleştirilen tahsilatlar farklı şahıslardan gelse bile bir sözleşme altında kaydı tutuluyor.\r\n\r\nToplam ödenmesi gereken kira tutarı,\r\ntahsil edilen tutarlar, bu tahsilatın ne kadarı kira ödemesinde kullanılmış ve kalan ödenmesi gereken tutarda aynı şekilde gösterilmektedir.\r\n\r\nSonuç olarak; kira ödeme ve zam tarihlerini hatırlatan pratik bir uygulamadır.\r\n', '19', '2021-04-09 11:33:00'),
(21, 'sosyal-ag-projesi', 'BELEDİYE-SOSYAL AĞ PROJESİ\r\n', 'Gaziantep Bilişim – KoçSistem - Entegres Workplace ürünü, Belediyenin vatandaşlar ile iletişiminin sağlanması amacıyla kullanılması ve daha sonra Gaziantep Büyükşehir Belediyesi’nin önderliğinde diğer belediyelere satışı amaçlanmaktadır.\r\nVatandaşın kullanımının sağlanması amacıyla vatandaşların belediye hizmetlerini kullandıklarında ödül-puan kazanmaları ve bu puanı belediye hizmeti olarak harcamaları  proje kapsamındadır. \r\n', '20', '2021-04-09 11:33:30'),
(22, 'gazi-ciftci-oyunu', 'GAZİ ÇİFTÇİ OYUNU\r\n', 'Firmamızda bilgilendirici ve eğitsel oyunlar geliştirilmektedir. En son geliştirdiğimiz çiftlik temalı oyun kullanıcılara çiftlik ürünlerinin yetiştirilmesi ve hayvansal gıdaların üretilmesi konusunda bilgiler vermektedir.\r\n', '21', '2021-04-09 11:34:04'),
(23, 'e-sinav-sistemi', 'e-SINAV SİSTEMİ\r\n', 'Sınav yapan kurumlar için detaylı değerlendirme, ölçme ve takibin yapıldığı bir \r\ne-Sınav Sistemi geliştirdik\r\n', '22', '2021-04-09 11:34:26'),
(24, 'ogrenci-devamsizlik-takibi', 'ÖĞRENCİ DEVAMSIZLIK TAKİBİ\r\n', 'Geliştirilen devamsızlık yazılımı ile öğrencilerin hangi sebeple ve ne kadar sıklıkla devamsızlık yaptığının analizi kolayca yapılabilmektedir.\r\n', '23', '2021-04-09 11:34:57'),
(25, 'performans-takip', 'PERFORMANS TAKİP\r\n', 'Planlanmış işlerin personele dağılımı,\r\n\r\nVerilen işlerin anlık takibi ve kontrolü,\r\n\r\nProjelerin ve personellerin ayrıntılı raporlarla istatistiğinin çıkarılarak daha verimli ve hızlı yönetimi', '24', '2021-04-09 11:35:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
