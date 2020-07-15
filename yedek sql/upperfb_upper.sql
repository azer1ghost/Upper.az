-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 19 Ağu 2017, 13:14:36
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `upperfb_upper`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_login` varchar(20) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_surname` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_date` varchar(15) NOT NULL,
  `admin_city` varchar(50) NOT NULL,
  `admin_country` varchar(50) NOT NULL,
  `admin_password` varchar(128) NOT NULL,
  `admin_mission` varchar(20) NOT NULL,
  `admin_picurl` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_login`, `admin_name`, `admin_surname`, `admin_email`, `admin_date`, `admin_city`, `admin_country`, `admin_password`, `admin_mission`, `admin_picurl`) VALUES
(1, 'admin', 'Azər', 'Məmmədov', 'mamedovazer124@gmail.com', '0000-00-00', 'Mardakan', 'Azerbaijan', '66a1dc381503d6ad2dce997c68cf9d97', 'President of site', 'img_admin/301882140911754812_379578688908465_5402916525991090644_o.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar 1`
--

CREATE TABLE `ayarlar 1` (
  `ayar_id` int(11) NOT NULL,
  `ayar_analystic` varchar(200) NOT NULL,
  `ayar_author` varchar(200) NOT NULL,
  `ayar_description` varchar(250) NOT NULL,
  `ayar_facebook` varchar(200) NOT NULL,
  `ayar_google` varchar(200) NOT NULL,
  `ayar_googlemap` varchar(100) NOT NULL,
  `ayar_haqqimizda` varchar(3000) NOT NULL,
  `ayar_instagram` varchar(150) NOT NULL,
  `ayar_keywords` varchar(300) NOT NULL,
  `ayar_logourl` varchar(100) NOT NULL,
  `ayar_mail` varchar(100) NOT NULL,
  `ayar_recapchta` varchar(100) NOT NULL,
  `ayar_sitename` varchar(100) NOT NULL,
  `ayar_siteurl` varchar(100) NOT NULL,
  `ayar_smtphost` varchar(50) NOT NULL,
  `ayar_smtppassword` varchar(64) NOT NULL,
  `ayar_smtpport` varchar(10) NOT NULL,
  `ayar_smtpuser` varchar(100) NOT NULL,
  `ayar_tel` varchar(50) NOT NULL,
  `ayar_title` varchar(40) NOT NULL,
  `ayar_youtube` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar 1`
--

INSERT INTO `ayarlar 1` (`ayar_id`, `ayar_analystic`, `ayar_author`, `ayar_description`, `ayar_facebook`, `ayar_google`, `ayar_googlemap`, `ayar_haqqimizda`, `ayar_instagram`, `ayar_keywords`, `ayar_logourl`, `ayar_mail`, `ayar_recapchta`, `ayar_sitename`, `ayar_siteurl`, `ayar_smtphost`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_smtpuser`, `ayar_tel`, `ayar_title`, `ayar_youtube`) VALUES
(1, '', '', 'Xarici ölkə universitetlərinə tələbə qəbulu həyata keçirən UPPER Education xarici ölkələrdə təhsil, təqaüd, mübadilə proqramları, iş imkanları, dil kursları, yay məktəbləri, qəbul imtahanlarına, beynəlxalq imtahanlara hazırlıq üz', '', '', '', '', '', 'Upper, Upper.az, xaricdə təhsil, upper az. təhsil, hazırlıq, dil kursları,', 'assets/images/3138824051logo.png', '', '', 'Upper Education', '', '', '', '', '', '', 'Upper Education', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_author` varchar(50) NOT NULL,
  `blog_date` text NOT NULL,
  `blog_durum` int(1) NOT NULL DEFAULT '1',
  `blog_gundem` int(1) NOT NULL DEFAULT '0',
  `blog_keywords` text NOT NULL,
  `blog_name` varchar(500) NOT NULL,
  `blog_option` int(1) NOT NULL,
  `blog_picurl` varchar(200) NOT NULL,
  `blog_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_author`, `blog_date`, `blog_durum`, `blog_gundem`, `blog_keywords`, `blog_name`, `blog_option`, `blog_picurl`, `blog_text`) VALUES
(5, 'Azər Məmmədov', '19.08.2017', 1, 0, 'afga asdg a agsdg', 'piniqivin', 2, 'blog/images/blog/3143531742Penguins.jpg', '<p>xt of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n'),
(6, 'Azər Məmmədov', '19.08.2017', 1, 1, 'azer,dilare,vefa', 'azerbaycan', 3, 'blog/images/blog/2971526086Desert.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dovlethaz`
--

CREATE TABLE `dovlethaz` (
  `dovlet_id` int(11) NOT NULL,
  `dovlet_icon` varchar(100) NOT NULL,
  `dovlet_panelname` varchar(100) NOT NULL,
  `dovlet_text` varchar(3000) NOT NULL,
  `dovlet_btntext` varchar(200) NOT NULL,
  `dovlet_btnlink` varchar(50) NOT NULL,
  `2dovlet_icon` varchar(200) NOT NULL,
  `2dovlet_panelname` varchar(100) NOT NULL,
  `2dovlet_text` varchar(3000) NOT NULL,
  `2dovlet_btntext` varchar(50) NOT NULL,
  `2dovlet_btnlink` varchar(200) NOT NULL,
  `3dovlet_icon` varchar(200) NOT NULL,
  `3dovlet_panelname` varchar(100) NOT NULL,
  `3dovlet_text` varchar(3000) NOT NULL,
  `3dovlet_btntext` varchar(50) NOT NULL,
  `3dovlet_btnlink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dovlethaz`
--

INSERT INTO `dovlethaz` (`dovlet_id`, `dovlet_icon`, `dovlet_panelname`, `dovlet_text`, `dovlet_btntext`, `dovlet_btnlink`, `2dovlet_icon`, `2dovlet_panelname`, `2dovlet_text`, `2dovlet_btntext`, `2dovlet_btnlink`, `3dovlet_icon`, `3dovlet_panelname`, `3dovlet_text`, `3dovlet_btntext`, `3dovlet_btnlink`) VALUES
(1, '', 'DÖVLƏT ORQANLARINA HAZIRLIQ', 'Dövlət qulluğuna hazırlaşanlar üçün Mərkəzimizdə hazırlıq kursları təşkil edilir. Tədris proqramı 2 hissəyə ayrılır:<br>1) Müsabiqəyə, yəni 1-ci tura hazırlq<br>2) Müsahibəyə, yəni 2-ci tura hazırlıq<br>Müsabiqə mərhələsinə hazırlıq Dövlət İmtahan Mərkəzi tərəfindən təsdiq olunmuş 4 istiqamət üzrə aparılır. <br>✔Dünyagörüşü <br>✔Qanunvericilik<br>✔İnformatika <br>✔Məntiq&nbsp;<br>', 'Online qeydiyyat', '#', '', 'GÖMÜRÜK ORQANLARINA HAZIRLIQ', 'Dərslər peşəkar müəllimlər tərəfindən tədris edilir və Gömürük orqanlarına işə qəbulla bağlı hazırlanmış proqram əsasında nəzəri və praktiki hissələrdən ibarət olmaqla 3 istiqaməti əhatə edir:<br>✔Qanunvericilik <br>✔Məntiq <br>✔İnformatika<br><br><br><br><br>', 'Online qeydiyyat', '#', '', 'VERGİ ORQANLARINA HAZIRLIQ', 'Dərslər vergi orqanlarına işə qəbul sahəsində böyük təcrübəyə malik peşəkar müəllim heyəti tərəfindən tədris olunur. Tədris prosesi vergi orqanlarına işə qəbulla bağlı hazırlanmış proqram əsasında nəzəri və praktiki hissələrdən ibarət olmaqla 3 istiqamət üzrə aparılır:<br>✔Qanunvericilik <br>✔Məntiq <br>✔İnformatika&nbsp;<br><br><br><br>', 'Online qeydiyyat', '#');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `external`
--

CREATE TABLE `external` (
  `external_id` int(11) NOT NULL,
  `external_name` varchar(50) NOT NULL,
  `external_bannerpicurl` varchar(200) NOT NULL,
  `external_text` text NOT NULL,
  `external_btnlink` varchar(200) NOT NULL,
  `external_picurl1` varchar(100) NOT NULL,
  `external_picurl2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `external`
--

INSERT INTO `external` (`external_id`, `external_name`, `external_bannerpicurl`, `external_text`, `external_btnlink`, `external_picurl1`, `external_picurl2`) VALUES
(1, 'İTALİYADA ', 'assets/images/thumb-1920-2000x1250.jpg', '<blockquote>\r\n<p>İtaliyada D&Ouml;VLƏT TƏQA&Uuml;D&Uuml; ilə oxumaq şansı əldən vermə! Bununla sən, İtalyanın ən n&uuml;fuzlu təhsil ocaqlarında istədiyin ixtisasa uyğun təhsil almaq f&uuml;rsətini qazanmaqla, həm də d&uuml;nyanın m&uuml;xtəlif yerlərindən olan tələbə yoldaşlarınla birgə b&ouml;y&uuml;k lahiyələrə imza ata bilərsənİtaliya d&uuml;nyada rəqabətə davamlı və y&uuml;ksək səviyyədə ixtisaslaşmış ali təhsil məkanı kimi tanınır. Təsad&uuml;fi deyil ki, burada əhalinin savadlılıq səviyyəsi 98,5 faiz təşkil edir. &Ouml;lkə universitetlərində təxminən 1,25 milyon tələbə təhsil alır. İtalyada 95 universitet fəaliyyət g&ouml;stərir ki, bu ali məktəblərin də 70 faizi d&ouml;vlət universitetləridir.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>Bu universitetlərdə kənd təsərr&uuml;fatı, arxitektura, iqtisadiyyat, əcza&ccedil;ılıq, h&uuml;quq, m&uuml;həndislik, humanitar fənnlər, m&uuml;asir dillər, təhsil, biotəbabət, tibb, baytarlıq, təbiət elmləri, fizika, riyaziyyat, siyasi elmlər &uuml;zrə bakalavr, magistr və doktor dərəcəli m&uuml;təxəssislər hazırlanır. Hər il Azərbaycandan 300 nəfərə yaxın insan təhsil almaq &uuml;&ccedil;&uuml;n İtalyaya yollanır. İtaliyada dərs ili 2 semestrə b&ouml;l&uuml;n&uuml;r. 1-ci semestr oktyabrın ilk g&uuml;nlərində, 2-ci semestr isə martın ilk g&uuml;nlərində başlayır. &quot;Bakalavr&quot; səviyyəsinə uyğun ilk diplomu laurea (C.L.) almaq &uuml;&ccedil;&uuml;n 4-6 il oxumaq tələb olunur. Filoloqlar bu dərəcəni 4 ildən sonra, kimya&ccedil;ılar və memarlar 5 ildən sonra, həkimlər isə 6 ildən sonra ala bilərlər. Magistraturaya uyğun olan n&ouml;vbəti dərəcə &ndash; Diploma universitario (C.D.U.) adlanır. Kurs 3 il davam edir. Həm&ccedil;inin iki illik Scuole dirette a fini speciali ixtisaslaşma kursu var ki, bunun nəticəsində C.D.U.-ya oxşayan dərəcə almaq olar TƏQA&Uuml;DL&Uuml; təhsil almaq &uuml;&ccedil;&uuml;n qeydiyyatdan ke&ccedil;məyə tələsin!</p>\r\n</blockquote>\r\n', 'https://docs.google.com/forms/d/e/1FAIpQLSeTRx4aNNkKNRAJYzyQ7pCSnqGrpcNoK7Hd0NwyWEGHkmgsgw/viewform?c=0&w=1', 'assets/images/it-1400x1578.png', 'assets/images/it-2-1400x1578.png'),
(2, 'aaaaaaaaaa', 'assets/images/2996228321', '<p>a</p>\r\n', 'a', 'a', 'a'),
(3, 'aaaa53', 'assets/images/2076629130Penguins.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hrclubaz`
--

CREATE TABLE `hrclubaz` (
  `hr_id` int(11) NOT NULL,
  `hr_title` varchar(200) NOT NULL,
  `hr_subtitle` varchar(500) NOT NULL,
  `hr_facebook` varchar(500) NOT NULL,
  `hr_google` varchar(300) NOT NULL,
  `hr_youtube` varchar(300) NOT NULL,
  `hr_instagram` varchar(300) NOT NULL,
  `hr_bg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hrclubaz`
--

INSERT INTO `hrclubaz` (`hr_id`, `hr_title`, `hr_subtitle`, `hr_facebook`, `hr_google`, `hr_youtube`, `hr_instagram`, `hr_bg`) VALUES
(1, 'HR Club Azerbaijan', 'Insan Resurslarının idarə edilməsi sahəsində fəaliyyət göstərən şəxslərin peşəkar klubudur\r\n\r\nMəqsədimiz \r\nHR menecerləri (mütəxəssisləri) birliyinin təmin edilməsi və marifləndirmə işinin həyata keçirilməsidir.\r\n', '#', '#', '#', '#', 'https://www.youtube.com/watch?v=uNCr7NdOJgw');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hrtelimler`
--

CREATE TABLE `hrtelimler` (
  `hrtelim_id` int(11) NOT NULL,
  `hrtelim_durum` int(1) NOT NULL DEFAULT '1',
  `hrtelim_sira` int(2) NOT NULL,
  `hrtelim_text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hrtelimler`
--

INSERT INTO `hrtelimler` (`hrtelim_id`, `hrtelim_durum`, `hrtelim_sira`, `hrtelim_text`) VALUES
(1, 1, 1, 'HR şirkət rəhbərinin biznes partnyoru rolunda'),
(2, 1, 2, 'İnsan Resurslarının idarə edilməsi və HR strategiyası'),
(3, 1, 3, 'Əmək Qanunvericiliyi və sənədləşdirmə. Kadr kargüzarlığı'),
(4, 1, 4, 'İşçi heyətin sosial, iqtisadi və psixoloji idarə edilməsi'),
(5, 1, 5, 'Şirkətin biznes məqsədləri fonunda iş yerlərinin (işçi heyətin) planlaşdırılması'),
(6, 1, 6, 'İşə qəbulun texnikası (sirləri)'),
(7, 1, 7, 'Yeni işçilərin adaptasiya proqramı'),
(8, 1, 8, ' İzləmə xəritələri və karyera inkişaf planı'),
(9, 1, 9, 'KPİ və Performans dəyərləndirilməsi. Dəyərləndirmə üsulları'),
(10, 1, 10, 'Motivasiya və stimullaşdırıcı tədbirlər sistemi'),
(11, 1, 11, 'Komanda işi (team-building)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ielts`
--

CREATE TABLE `ielts` (
  `ielts_id` int(11) NOT NULL,
  `ielts_title` varchar(30) NOT NULL,
  `ielts_subtitle` varchar(200) NOT NULL,
  `ielts_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ielts`
--

INSERT INTO `ielts` (`ielts_id`, `ielts_title`, `ielts_subtitle`, `ielts_text`) VALUES
(1, 'IELTS', 'International English Language Testing System', 'IELTS (International English Language Testing System) təhsil, immiqrasiya və peşəkar akkreditasiya zamanı ingiliscə dörd ünsiyyət bacarığını (dinləmə, oxu, yazı və danışıq) yoxlayan etibarlı və qüvvədə olan testdir. Bu test yoxlanılması əsasında qiymətləndirmənin ən yüksək beynəlxalq standartlarını ifadə edir. \nXaricdə təhsil almaq üçün müraciət edərkən universitetlər əsasən akademik kursa qəbul üçün 6.0 və ya 6.5 bal tələb edirlər.\nUPPER Education IELTS imtahanlarına sizləri hazırlamaq üçün xüsusi hazırlıq proqramları təşkil edir. Effektivliyi ilə seçilən bu proqramlarda siz:<br><br>\n✔ gündəlik vəziyyətlərdə əməli dil bacarığnızı inkişaf etdirəcək;<br>\n✔ oxu, yazı, danışıq və qulaq asma qavrayışınızı yüksəldəcək;<br>\n✔ imtahanın verilməsi texnikasını məşq edəcək;<br>\n✔ pulsuz sınaq imtahanlarında iştirak edəcək;<br>\n✔ mütəxəssislərimizin fərdi məsləhətlərindən yararlanacaqsınız.<br>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ieltsmod`
--

CREATE TABLE `ieltsmod` (
  `ieltsmod_id` int(11) NOT NULL,
  `ieltsmod_title` varchar(200) NOT NULL,
  `ieltsmod_subtitle` varchar(800) NOT NULL,
  `ieltsmod_btntext` varchar(50) NOT NULL,
  `ieltsmod_btnlink` varchar(200) NOT NULL,
  `ieltsmod_picurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ieltsmod`
--

INSERT INTO `ieltsmod` (`ieltsmod_id`, `ieltsmod_title`, `ieltsmod_subtitle`, `ieltsmod_btntext`, `ieltsmod_btnlink`, `ieltsmod_picurl`) VALUES
(1, 'ŞOK KOMPANİYA 3 aylıq IELTS 199 AZN', 'Kompaniyadan istifadə edən şəxslər 3 ay üçün cəmisi 199 AZN ödəyəcəksiniz. Əks təqdirdə ödəniş qaytarılır!', 'QEYDİYYATDAN KEÇ', 'https://docs.google.com/forms/d/e/1FAIpQLSf8o7-yRdjrG93lDbTlNe7B2G82VqrBNIaInhJYLsVCr5pnBA/viewform?c=0&w=1', 'assets/images/2-2000x1423.jpg'),
(2, '6.0 score zəmanətlə IELTS 85 AZN', 'Dərslər həftədə 3 dəfə 1.5 saat keçiriləcək: Tələbələr aylıq \"Trial IELTS\" imtahanından keçirilir, Rəsmi İmtahana 1 ay qalmış onların zəif olduğu hissələrdən ödənişsiz dərslər təyin olunacaq. didmət haqqı ayda 85 AZN', 'QEYDİYYATDAN KEÇ', 'https://docs.google.com/forms/d/e/1FAIpQLSf8o7-yRdjrG93lDbTlNe7B2G82VqrBNIaInhJYLsVCr5pnBA/viewform?c=0&w=1&usp=send_form', 'assets/images/15228c-ab0e9ff1faca484a95f6d5808a6edb8d-mv2-1400x875.jpg'),
(3, 'IELTS sınaq imtahanı', 'Siz IELTS Rəsmi İmtahanlarına hazırlamaq üçün Sınaq Test imtahanlarında iştirak etməklə öz hazırlıq səviyyənizi aydınlaşdıra biərsiniz. İmtahan da qeydiyyatdan keçən ilk 10 yer üçün sadəcə 3 Azn. Digər tələbələr üçün isə 5 Azn təşkil edir.Upper Education İELTS və Pre-İELTS tələbələrinə imtahan ödənişsizdir.\r\nOnline qeydiyyatdan keçdikdən sonra ofisimizdən yaxınlaşıb Candidate number götürülməlidir, əks halda qeydiyyatınız keçərsiz sayılır.', 'QEYDİYYATDAN KEÇ', 'https://docs.google.com/forms/d/e/1FAIpQLScp99rFZ9tATwJpSWrT9oLwfmW-8UpdXB5gbVo-cMTPKV2duQ/viewform?c=0&w=1', 'assets/images/15228c-f09e7aebf8064fe6b397c445120dd279-mv2-1400x1400.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `italy`
--

CREATE TABLE `italy` (
  `itlay_id` int(11) NOT NULL,
  `italy_br` varchar(500) NOT NULL,
  `italy_text` text NOT NULL,
  `italy_btntext` varchar(50) NOT NULL,
  `italy_btnlink` varchar(200) NOT NULL,
  `italy_pic1` varchar(120) NOT NULL,
  `italy_pic2` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `italy`
--

INSERT INTO `italy` (`itlay_id`, `italy_br`, `italy_text`, `italy_btntext`, `italy_btnlink`, `italy_pic1`, `italy_pic2`) VALUES
(1, 'İtaliyada DÖVLƏT TƏQAÜDÜ ilə oxumaq şansı əldən vermə! Bununla sən, İtalyanın ən nüfuzlu təhsil ocaqlarında istədiyin ixtisasa uyğun təhsil almaq fürsətini qazanmaqla, həm də dünyanın müxtəlif yerlərindən olan tələbə yoldaşlarınla birgə böyük lahiyələrə imza ata bilərsən', '<br><blockquote>İtaliya dünyada rəqabətə davamlı və yüksək səviyyədə ixtisaslaşmış ali təhsil məkanı kimi tanınır. Təsadüfi deyil ki, burada əhalinin savadlılıq səviyyəsi 98,5 faiz təşkil edir. Ölkə universitetlərində təxminən 1,25 milyon tələbə təhsil alır. İtalyada 95 universitet fəaliyyət göstərir ki, bu ali məktəblərin də 70 faizi dövlət universitetləridir. Bu universitetlərdə kənd təsərrüfatı, arxitektura, iqtisadiyyat, əczaçılıq, hüquq, mühəndislik, humanitar fənnlər, müasir dillər, təhsil, biotəbabət, tibb, baytarlıq, təbiət elmləri, fizika, riyaziyyat, siyasi elmlər üzrə bakalavr, magistr və doktor dərəcəli mütəxəssislər hazırlanır. Hər il Azərbaycandan 300 nəfərə yaxın insan təhsil almaq üçün İtalyaya yollanır.</blockquote><blockquote>İtaliyada dərs ili 2 semestrə bölünür. 1-ci semestr oktyabrın ilk günlərində, 2-ci semestr isə martın ilk günlərində başlayır.</blockquote><blockquote>\"Bakalavr\" səviyyəsinə uyğun ilk diplomu laurea (C.L.) almaq üçün 4-6 il oxumaq tələb olunur. Filoloqlar bu dərəcəni 4 ildən sonra, kimyaçılar və memarlar 5 ildən sonra, həkimlər isə 6 ildən sonra ala bilərlər.</blockquote><blockquote><p>Magistraturaya uyğun olan növbəti dərəcə – Diploma universitario (C.D.U.) adlanır. Kurs 3 il davam edir. Həmçinin iki illik Scuole dirette a fini speciali ixtisaslaşma kursu var ki, bunun nəticəsində C.D.U.-ya oxşayan dərəcə almaq olar</p><p><br></p><p><strong>TƏQAÜDLÜ təhsil almaq üçün qeydiyyatdan keçməyə tələsin!</strong></p></blockquote>', 'Online qeydiyyat', 'https://docs.google.com/forms/d/e/1FAIpQLSeTRx4aNNkKNRAJYzyQ7pCSnqGrpcNoK7Hd0NwyWEGHkmgsgw/viewform?c=0&amp;w=1', 'assets/images/it-1400x1578.png', 'assets/images/it-2-1400x1578.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(150) NOT NULL DEFAULT 'no name',
  `menu_link` varchar(150) NOT NULL DEFAULT 'javascript:void(0)',
  `menu_durum` int(1) NOT NULL DEFAULT '1',
  `menu_sira` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `menu_mother` int(1) NOT NULL DEFAULT '0',
  `menu_blank` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `menu_link`, `menu_durum`, `menu_sira`, `parent_id`, `menu_mother`, `menu_blank`) VALUES
(1, 'ANA SƏHİFƏ', 'index.php#slider-q', 1, 1, 0, 0, 0),
(2, 'XARİCDƏ TƏHSİL', 'index.php#features3-2', 1, 2, 0, 1, 0),
(3, 'UPPER EDUCATION', 'javascript:void(0)', 1, 5, 0, 1, 0),
(4, 'UPPER CONSULTING', 'uppercon.php', 1, 17, 0, 1, 0),
(5, 'HR CLUB AZERBAIJAN', 'hrclubaz.php', 1, 24, 0, 0, 0),
(7, 'XARİCİ DİLLƏR', 'javascript:void(0)', 1, 7, 3, 1, 0),
(8, 'İELTS', 'ielts.php', 1, 12, 3, 0, 0),
(9, 'İNGİLİS DİLİ', 'https://www.facebook.com/upper.az/photos/a.1086588851405000.1073741828.1086463641417521/1580542572009623/?type=3&theater', 1, 8, 7, 0, 1),
(10, 'TestDaF', 'javascript:void(0)', 0, 13, 3, 0, 0),
(11, 'RUS DILI', 'https://www.facebook.com/upper.az/photos/a.1086588851405000.1073741828.1086463641417521/1580542572009623/?type=3&theater', 1, 9, 7, 0, 1),
(13, 'ABİTURİYENT-MAGİSTR', 'javascript:void(0)', 0, 15, 3, 0, 0),
(14, 'DÖVLƏT QULLUĞU', 'dovlethaz.php', 1, 14, 3, 0, 0),
(15, 'KOMPUTER VƏ DİZAYN', 'javascript:void(0)', 0, 6, 3, 0, 0),
(17, 'ALMAN DİLİ', 'javascript:void(0)', 1, 10, 7, 0, 0),
(18, 'İSPAN DİLİ', 'javascript:void(0)', 1, 11, 7, 0, 0),
(22, 'İTALİYADA TƏHSİL', 'external.php?external_id=1?countryname=İTALİYADA ', 1, 3, 2, 0, 0),
(23, 'TÜRKİYƏDƏ  TƏHSİL', 'turkey.php', 1, 4, 2, 0, 0),
(24, 'STUDENT CLUB AZERBAIJAN', 'https://www.studentclubaze.com/', 1, 25, 0, 0, 1),
(25, 'Məktəbli', 'javascript:void(0)', 0, 16, 3, 0, 0),
(28, 'MENECMENT SİSTEMLƏRİ', 'uppercon.php#header2-k', 1, 19, 33, 0, 0),
(29, 'SATIŞ VƏ MARKETING', 'uppercon.php#header2-l', 1, 20, 33, 0, 0),
(30, 'MALİYYƏ VƏ AUDİT ', 'uppercon.phpl#header2-m', 1, 21, 33, 0, 0),
(31, 'HR  ', 'uppercon.php#header2-n', 1, 22, 33, 0, 0),
(32, 'KONSALTİNQ/AUTSORSİNQ ', 'uppercon.php#header2-o', 1, 23, 4, 0, 0),
(33, 'BİZNES TƏLİMLƏRİ', '', 1, 18, 4, 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `metbuat`
--

CREATE TABLE `metbuat` (
  `met_id` int(11) NOT NULL,
  `met_title` varchar(300) NOT NULL,
  `met_subtitle` varchar(1000) NOT NULL,
  `met_btntext` varchar(50) NOT NULL,
  `met_btnlink` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `metbuat`
--

INSERT INTO `metbuat` (`met_id`, `met_title`, `met_subtitle`, `met_btntext`, `met_btnlink`) VALUES
(1, 'HR-club Azerbaijan Dəyirmi masa keçirdi', 'HR menecerlərin peşə klubu olan HR Club Azerbaijan tərəfindən növbəti dəyirmi masa təşkil edilb. Sayca 2-ci dəfə keçirilən dəyirmi masada bu dəfə...', 'Ardını oxu', 'http://www.azadinform.az/news/a-101010.html'),
(2, 'Mənim Karyeram və HR menecer mövzusunda təlim keçirilib', 'Samir Soltanov/AZADİNFORM. “HR-club” Azerbaijan tərəfindən SABAH qruplarının qeyri - HR ixtisasi üzrə təhsil alan tələbələri üçün “Mənim Karyeram və HR menecer” mövzusunda təlim keçirilib...', 'Ardını oxu', 'http://www.azadinform.az/news/a-99932.html');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modul`
--

CREATE TABLE `modul` (
  `modul_id` int(11) NOT NULL,
  `modul_picurl` varchar(200) NOT NULL,
  `modul_name` varchar(200) NOT NULL,
  `modul_text` varchar(400) NOT NULL,
  `modul_sira` int(2) NOT NULL,
  `modul_durum` int(1) NOT NULL DEFAULT '1',
  `modul_btntext` varchar(30) NOT NULL,
  `modul_url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `modul`
--

INSERT INTO `modul` (`modul_id`, `modul_picurl`, `modul_name`, `modul_text`, `modul_sira`, `modul_durum`, `modul_btntext`, `modul_url`) VALUES
(1, 'assets/images/money-600x338.jpg', 'Vergi və mühasibatlıq heç vaxt indiki kimi asan olmayıb', '<p>Son maliyyə hesabatının tərtib edilməsinədək lazım olan b&uuml;t&uuml;n maliyyə və m&uuml;hasibat əməliyyatlarını təlimlərimizə qatılmaqla &ouml;yrən, vergi və m&uuml;hasibat sahəsindəki biliklərinizi &ccedil;alışmalarla kompleks şəkildə təkmilləşdir.<br />\r\n&nbsp;</p>\r\n', 1, 1, 'ƏTRAFLI', 'hrclubaz.php'),
(2, 'assets/images/ielts-600x400.jpg', 'IELTS Mock Exam qeydiyyatdan keçməklə biliyini sına', 'IELTS rəsmi imtahanını verməzdən öncə bizim təşkil etdiyimiz sınaq imtahanına qatılmaqla dil səviyyənizi, eləcə də təxmini nəticənizi yoxlaya, güclü və zəif tərəflərinizi öyrənib inkişaf etdirmək imkanı əldə edə bilərsiniz', 2, 1, 'Online qeydiyyat', 'https://docs.google.com/forms/d/e/1FAIpQLScp99rFZ9tATwJpSWrT9oLwfmW-8UpdXB5gbVo-cMTPKV2duQ/viewform?c=0&w=1'),
(3, 'assets/images/ir-600x337.jpg', 'Optimal və effektiv İR idarəetmə', '<p>Şirkət haqqında ilkin fikri şirkətin siması olaraq HR sahəsində &ccedil;alışan əməkdaşlar<br />\r\nformalaşdırır. Təlimlərimizə qatılaraq siz tam bir peşəkar HR kimi yetişəcək, iş m&uuml;hitin g&uuml;cl&uuml; və zəif tərəflərindən n&uuml;munələvi &ccedil;alışmalarla<br />\r\nxəbərdar olacaqsınız</p>\r\n', 3, 1, 'ƏTRAFLI', 'hrclubaz.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_picurl` varchar(200) NOT NULL,
  `slider_durum` varchar(1) NOT NULL DEFAULT '1',
  `slider_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_picurl`, `slider_durum`, `slider_sira`) VALUES
(2, 'assets/images/2329128015College.jpg', '1', 2),
(3, 'assets/images/2980023868baku.jpg', '1', 3),
(4, 'assets/images/2465728560Desert.jpg', '1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turkey`
--

CREATE TABLE `turkey` (
  `turkey_id` int(11) NOT NULL,
  `turkey_picurl` varchar(100) NOT NULL,
  `turkey_name` varchar(50) NOT NULL,
  `turkey_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `turkey`
--

INSERT INTO `turkey` (`turkey_id`, `turkey_picurl`, `turkey_name`, `turkey_link`) VALUES
(3, 'assets/images/3072831633Sakarya Universiteti.jpg', 'Sakarya Universiteti', 'https://www.facebook.com/UpperSA/photos/a.1388312777855330.1073741828.1367814273238514/1453966871289920/?type=3&theater'),
(4, 'assets/images/2935124595Giresun Universiteti .jpg', 'Giresun Universiteti ', 'https://www.facebook.com/UpperSA/photos/a.1388312777855330.1073741828.1367814273238514/1458716317481642/?type=3&theater'),
(5, 'assets/images/2231424546Karabük Universiteti .jpg', 'Karabük Universiteti ', 'https://www.facebook.com/UpperSA/photos/a.1388312777855330.1073741828.1367814273238514/1461719977181276/?type=3&theater'),
(6, 'assets/images/2526431787Kırıkkale Universiteti.jpg', 'Kırıkkale Universiteti', 'https://www.facebook.com/UpperSA/photos/a.1388312777855330.1073741828.1367814273238514/1462967633723177/?type=3&theater'),
(7, 'assets/images/2726131651Pamukkale Universiteti.jpg', 'Pamukkale Universiteti', 'https://www.facebook.com/UpperSA/photos/a.1388312777855330.1073741828.1367814273238514/1463897640296843/?type=3&theater'),
(8, 'assets/images/2498331231Recep Tayyip Erdoğan Universiteti .jpg', 'Recep Tayyip Erdoğan Uni...', 'https://www.facebook.com/UpperSA/photos/a.1388312777855330.1073741828.1367814273238514/1460651333954807/?type=3&theater');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uppercon`
--

CREATE TABLE `uppercon` (
  `uppercon_id` int(11) NOT NULL,
  `uppercon_bg` varchar(100) NOT NULL,
  `upperpicurl` varchar(500) NOT NULL,
  `uppercon_name` varchar(100) NOT NULL,
  `uppercon_text` varchar(1000) NOT NULL,
  `section_id` varchar(100) NOT NULL,
  `uppercon_nextid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uppercon`
--

INSERT INTO `uppercon` (`uppercon_id`, `uppercon_bg`, `upperpicurl`, `uppercon_name`, `uppercon_text`, `section_id`, `uppercon_nextid`) VALUES
(2, 'assets/images/2362724959ing.jpg', 'assets/images/2295230161consult.jpg', 'MENECMENT SİSTEMLƏRİ  TƏLİMLƏRI', '<p align=\"left\">✔ ISO 9001 Keyfiyyəti İdarəetmə sistemi<br />\r\n✔ ISO 22000 Qida məhsullarının təhl&uuml;kəsizliyi<br />\r\n✔ ISO 14001 Ekoloji Menecment Sistemi<br />\r\n✔ OHSAS 18001</p>\r\n', 'header2-k', 'header2-l'),
(3, 'assets/images/2629229868consultingSlide.jpg', 'assets/images/2239028053consult.jpg', 'SATIŞ VƏ MARKETING TƏLİMLƏRİ', '<p>✔ Strateji analiz və planlaşdırma<br />\r\n✔ Tələbat və bazarın təbəqələrə (seqmentə) ayrılması<br />\r\n✔ M&uuml;ştəri məmnunluğu<br />\r\n✔ Qiymətqoyma və məhsulun bazara &ccedil;ıxarılması sirləri<br />\r\n✔ Ticarət zənciri və loqistika<br />\r\n✔ &Uuml;st&uuml;n satış işinin təşkili<br />\r\n✔ Satışın stimullaşdırılması.</p>\r\n', 'header2-l', 'header2-m'),
(4, 'assets/images/2318627742BusinessMenCollaborating.png', 'assets/images/2169329510consult.jpg', 'MALİYYƏ VƏ AUDİT TƏLİMLƏRİ', '<p align=\"left\">✔ Vergi işinin təşkili<br />\r\n✔ Audit proseslərinin idarə edilməsi<br />\r\n✔ Vergi qanunvericiliyinin şərhini &ouml;yrənəcək,<br />\r\n✔ Əmək haqqı ilə bağlı əməliyyatlar<br />\r\n✔ Sadələşdirilmiş vergi<br />\r\n✔ Gəlir vergisi və onunla bağlı əməliyyatlar<br />\r\n✔ &Ouml;dəmə mənbəyindən verginin tutulması<br />\r\n✔ Əlavə dəyər vergisi<br />\r\n✔ Digər vergi (əmlak, torpaq, yol və s) tutulmaları<br />\r\n✔ Mənfəət vergisi və onunla bağlı əməliyyatlar</p>\r\n', 'header2-m', 'header2-n'),
(5, 'assets/images/3183631741ing.jpg', 'assets/images/2761421291images.jpg', 'HR TƏLİMLƏRİ', '<p align=\"left\">✔ HR şirkət rəhbərinin biznes partnyoru rolunda<br />\r\n✔ İnsan Resurslarının idarə edilməsi və HR strategiyası<br />\r\n✔ Əmək Qanunvericiliyi və sənədləşdirmə. Kadr karg&uuml;zarlığı<br />\r\n&nbsp;İş&ccedil;i heyətin sosial, iqtisadi və psixoloji idarə edilməsi<br />\r\n✔ Şirkətin biznes məqsədləri fonunda iş yerlərinin (iş&ccedil;i heyətin) &nbsp; &nbsp;planlaşdırılması&nbsp;<br />\r\n✔ İşə qəbulun texnikası (sirləri)<br />\r\n✔ Yeni iş&ccedil;ilərin adaptasiya proqramı<br />\r\n✔ İzləmə xəritələri və karyera inkişaf planı<br />\r\n✔ KPİ və Performans dəyərləndirilməsi. Dəyərləndirmə &uuml;sulları<br />\r\n✔ Motivasiya və stimullaşdırıcı tədbirlər sistemi<br />\r\n✔ Komanda işi (team-building)</p>\r\n', 'header2-n', 'header2-o'),
(6, 'assets/images/2934620863BusinessMenCollaborating.png', 'assets/images/3047727310management-consulting-940x400-776x400.jpg', 'KONSALTİNQ və AUTSORSİNQ XİDMƏTLƏRİ ', '<p align=\"left\">✔ İnsan Resurslarının İdarə edilməsi sisteminin qurulması<br />\r\n✔ Əmək qanunvericiliyi və kadr karg&uuml;zarlığı ilə bağlı sənədləşdırmə işinin təşkili<br />\r\n✔ M&uuml;hasibatlıq işinin təşkili<br />\r\n✔ Vergi yoxlamasına hazırlıq<br />\r\n✔ Əməyin m&uuml;hafizəsi və texniki təhl&uuml;kəsizliklə bağlı sənədləşdırmə işinin təşkili<br />\r\n✔ ISO 9001 BS-yə uyğun keyfiyyət sisteminin qurulması<br />\r\n✔ ISO 22000 BS-yə uyğun keyfiyyət sisteminin qurulması<br />\r\n✔ HACCP sisteminin qurulması<br />\r\n✔ Keyfiyyət laboratoriyalarının yaradılması</p>\r\n', 'header2-o', 'features1-r');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `upperconheader`
--

CREATE TABLE `upperconheader` (
  `uppercon1_id` int(11) NOT NULL,
  `uppercon1_bg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `uppercon1_picurl` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `uppercon1_name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `uppercon1_txt` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `upperconheader`
--

INSERT INTO `upperconheader` (`uppercon1_id`, `uppercon1_bg`, `uppercon1_picurl`, `uppercon1_name`, `uppercon1_txt`) VALUES
(1, 'assets/images/2500823835Consulting.jpg', 'assets/images/2124221966consult.jpg', 'Upper Consulting', '<p>Biznesinizdə etibarlı k&ouml;mək&ccedil;iniz</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `xaric`
--

CREATE TABLE `xaric` (
  `mod_id` int(11) NOT NULL,
  `mod_picurl` varchar(100) NOT NULL,
  `mod_name` varchar(100) NOT NULL,
  `mod_text` varchar(400) NOT NULL,
  `mod_btntext` varchar(30) NOT NULL,
  `mod_btnurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `xaric`
--

INSERT INTO `xaric` (`mod_id`, `mod_picurl`, `mod_name`, `mod_text`, `mod_btntext`, `mod_btnurl`) VALUES
(2, 'assets/images/italy-1-600x398.jpg', 'TƏHSİLİNƏ İTALİYADA DAVAM ET&nbsp;', 'İtalyada həm təhsil al, həmdə dünyanın müxtəlif yerindən olan tələbə yoldaşlarınla birgə böyük lahiyələrə imza at.', 'ƏTRAFLI', 'external.php?external_id=1?countryname=İTALİYADA'),
(3, 'assets/images/turkey-1-600x399.jpg', 'TÜRKİYƏDƏ OXUMAQ FÜRSƏTi', '<p>İstədiyiniz ixtisasa uyğun həm bakalavr, həm də magistr pilləsi &uuml;zrə T&uuml;rkiyənin ən n&uuml;fuzlu universitetlərində təhsil almaq istəyirsiz?</p>\r\n', 'ƏTRAFLI', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `xaricbas`
--

CREATE TABLE `xaricbas` (
  `xaric_id` int(11) NOT NULL,
  `xaric_name` varchar(100) NOT NULL,
  `xaric_text` varchar(500) NOT NULL,
  `xaric_bg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `xaricbas`
--

INSERT INTO `xaricbas` (`xaric_id`, `xaric_name`, `xaric_text`, `xaric_bg`) VALUES
(1, 'UPPER Xaricdə Təhsil', 'Hər akademik il üçün xarici ölkə universitetlərinə tələbə qəbulu həyata keçirən UPPER Xaricdə Təhsil xarici ölkələrdə təhsil, təqaüd, mübadilə proqramları, iş imkanları, dil kursları, yay məktəbləri, qəbul imtahanlarına, beynəlxalq imtahanlara hazırlıq üzrə ixtisaslaşıb.', 'assets/images/mbr-2000x1333.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar 1`
--
ALTER TABLE `ayarlar 1`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `dovlethaz`
--
ALTER TABLE `dovlethaz`
  ADD PRIMARY KEY (`dovlet_id`);

--
-- Tablo için indeksler `external`
--
ALTER TABLE `external`
  ADD PRIMARY KEY (`external_id`);

--
-- Tablo için indeksler `hrclubaz`
--
ALTER TABLE `hrclubaz`
  ADD PRIMARY KEY (`hr_id`);

--
-- Tablo için indeksler `hrtelimler`
--
ALTER TABLE `hrtelimler`
  ADD PRIMARY KEY (`hrtelim_id`);

--
-- Tablo için indeksler `ielts`
--
ALTER TABLE `ielts`
  ADD PRIMARY KEY (`ielts_id`);

--
-- Tablo için indeksler `ieltsmod`
--
ALTER TABLE `ieltsmod`
  ADD PRIMARY KEY (`ieltsmod_id`);

--
-- Tablo için indeksler `italy`
--
ALTER TABLE `italy`
  ADD PRIMARY KEY (`itlay_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `metbuat`
--
ALTER TABLE `metbuat`
  ADD PRIMARY KEY (`met_id`);

--
-- Tablo için indeksler `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`modul_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `turkey`
--
ALTER TABLE `turkey`
  ADD PRIMARY KEY (`turkey_id`);

--
-- Tablo için indeksler `uppercon`
--
ALTER TABLE `uppercon`
  ADD PRIMARY KEY (`uppercon_id`);

--
-- Tablo için indeksler `upperconheader`
--
ALTER TABLE `upperconheader`
  ADD PRIMARY KEY (`uppercon1_id`);

--
-- Tablo için indeksler `xaric`
--
ALTER TABLE `xaric`
  ADD PRIMARY KEY (`mod_id`);

--
-- Tablo için indeksler `xaricbas`
--
ALTER TABLE `xaricbas`
  ADD PRIMARY KEY (`xaric_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `ayarlar 1`
--
ALTER TABLE `ayarlar 1`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `dovlethaz`
--
ALTER TABLE `dovlethaz`
  MODIFY `dovlet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `external`
--
ALTER TABLE `external`
  MODIFY `external_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `hrclubaz`
--
ALTER TABLE `hrclubaz`
  MODIFY `hr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `hrtelimler`
--
ALTER TABLE `hrtelimler`
  MODIFY `hrtelim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `ielts`
--
ALTER TABLE `ielts`
  MODIFY `ielts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `ieltsmod`
--
ALTER TABLE `ieltsmod`
  MODIFY `ieltsmod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `italy`
--
ALTER TABLE `italy`
  MODIFY `itlay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Tablo için AUTO_INCREMENT değeri `metbuat`
--
ALTER TABLE `metbuat`
  MODIFY `met_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `modul`
--
ALTER TABLE `modul`
  MODIFY `modul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `turkey`
--
ALTER TABLE `turkey`
  MODIFY `turkey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `uppercon`
--
ALTER TABLE `uppercon`
  MODIFY `uppercon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `upperconheader`
--
ALTER TABLE `upperconheader`
  MODIFY `uppercon1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `xaric`
--
ALTER TABLE `xaric`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `xaricbas`
--
ALTER TABLE `xaricbas`
  MODIFY `xaric_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
