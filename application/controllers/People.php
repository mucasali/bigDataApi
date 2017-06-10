<?php

header('Access-Control-Allow-Origin=>*');
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	function __construct(){
			parent::__construct();
	}

 public function index(){
			$people = array(
				  [
				    "info"=>[],
				    "name"=>"Febi",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/16298724_1834790703459769_7718029549422309057_n.jpg?efg=eyJpIjoidCJ9&oh=d03ec074a0aae1d46e2bb844731f4c31&oe=59B4EA7D",
				    "url"=>"https://m.facebook.com/febriana.nursimaagustin.9?slog=5&seq=1675052725&rk=0&st=user&fbtype=2048&refid=8&fref=search&ref=content_filter"
				  ],
				  [
				    "info"=>[],
				    "name"=>"Febi Amalia Futri",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c0.19.120.120/p120x120/13508843_112414702520338_4026571900617438302_n.jpg?efg=eyJpIjoidCJ9&oh=c063fa5879b27ab7f7e19e4a3e6c64c1&oe=59C169EF",
				    "url"=>"https://m.facebook.com/febi.a.futri?slog=5&seq=1675052725&rk=1&st=user&fbtype=2048&refid=8&fref=search&ref=content_filter"
				  ],
				  [
				    "info"=>[
				      "Tinggal di Daerah Khusus Ibukota Jakarta",
				      "Dari Kota Cirebon"
				    ],
				    "name"=>"Febi Febiola",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/14067561_164785670621619_9025038533500522484_n.jpg?efg=eyJpIjoidCJ9&oh=b1bd6e269feca2b1ca4202b819c9b949&oe=5980E088",
				    "url"=>"https://m.facebook.com/febi.febiola.77985?slog=5&seq=1675052725&rk=2&st=user&fbtype=2048&refid=8&fref=search&ref=content_filter"
				  ],
				  [
				    "info"=>[
				      "Bekerja di Sex Panther Cologne",
				      "Pernah belajar di Trisakti University",
				      "Pernah belajar di SMA Negeri 78"
				    ],
				    "name"=>"Febi Ananda",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c40.12.144.144/s120x120/298877_100996506676479_562511510_n.jpg?efg=eyJpIjoidCJ9&oh=7759b3d5c89cbab43ab655f8b7cb67ed&oe=597C70D7",
				    "url"=>"https://m.facebook.com/febi.ananda.92?slog=5&seq=1675052725&rk=3&st=user&fbtype=2048&refid=8&fref=search&ref=content_filter"
				  ],
				  [
				    "info"=>[
				      "Tinggal di Daerah Khusus Ibukota Jakarta",
				      "Dari Daerah Khusus Ibukota Jakarta"
				    ],
				    "name"=>"Febi Blink",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c29.29.368.368/s120x120/600040_112498432224711_1488689447_n.jpg?efg=eyJpIjoidCJ9&oh=b2604f1d57b3cac7e001fff367d14270&oe=59B963F5",
				    "url"=>"https://m.facebook.com/febi.blink.923?slog=5&seq=1675052725&rk=4&st=user&fbtype=2048&refid=8&fref=search&ref=content_filter"
				  ],
				  [
				    "info"=>[
				      "Pernah belajar di SMA Negeri 70 Jakarta",
				      "Tinggal di Daerah Khusus Ibukota Jakarta"
				    ],
				    "name"=>"Febi Rastanti",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c57.17.207.207/s120x120/20723_106536566187553_370748151_n.jpg?efg=eyJpIjoidCJ9&oh=1b1e100ada4fa8c6e62ab51eaffddf1a&oe=597BBD2C",
				    "url"=>"https://m.facebook.com/febi.rastanti.1?slog=5&seq=1953034326&rk=5&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Pernah belajar di Smp Adhyaksa 1 jambi"
				    ],
				    "name"=>"Febi Krenzz",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c19.0.113.113/24101_101822456525877_6234900_n.jpg?efg=eyJpIjoidCJ9&oh=3be0891eafce5d192bb5bdcfd2da80ec&oe=59BFE043",
				    "url"=>"https://m.facebook.com/febi.krenzz?slog=5&seq=1953034326&rk=6&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[],
				    "name"=>"Febilla Rahmayani",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/17904112_204148356745863_7819809980193051498_n.jpg?efg=eyJpIjoidCJ9&oh=8c09906e42e27da44b101984bb90e3b4&oe=5977E649",
				    "url"=>"https://m.facebook.com/rahmayani.hanneman?slog=5&seq=1953034326&rk=7&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Pernah belajar di AKBID HAFSHAWATY ZAINUL HASAN GENGGONG",
				      "Pernah belajar di Sman 1 Kraksaan",
				      "Lajang",
				      "Dari Kota Probolinggo"
				    ],
				    "name"=>"Febi Arianti",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c32.9.116.116/425902_113996365394893_1236987090_n.jpg?efg=eyJpIjoidCJ9&oh=41ee2a706e9410f6f4f102212e1adca8&oe=59BAE5E1",
				    "url"=>"https://m.facebook.com/febi.arianti.9?slog=5&seq=1953034326&rk=8&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Member of Parliament di JKT48 Fans Club",
				      "Bekerja di Mafia Medis",
				      "Pernah belajar di SMK JKT48 HIGHT SCHOOL",
				      "Tinggal di Kota Semarang",
				      "Dari Kota Semarang"
				    ],
				    "name"=>"Ir'Febi",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c0.0.120.120/p120x120/18118480_1162042793921745_2751699201534259929_n.jpg?efg=eyJpIjoidCJ9&oh=b532a5c04148b0989de0bf24a5600c9c&oe=59800659",
				    "url"=>"https://m.facebook.com/andhika.jokam?slog=5&seq=1953034326&rk=9&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Jurusan Ekonomi di ITB (Institut Teknologi Bandung)",
				      "Pernah belajar di SMA Negeri 1 Makassar",
				      "Tinggal di Kota Makassar",
				      "Dari Kota Makassar"
				    ],
				    "name"=>"Febi Suarez",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/16174871_1013060855504010_8994840706766839263_n.jpg?efg=eyJpIjoidCJ9&oh=866b7241dbaa6896b4c9e463b90107b2&oe=59B847A3",
				    "url"=>"https://m.facebook.com/fpatrycia?slog=5&seq=1953034326&rk=10&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[],
				    "name"=>"Febiola Santika",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/18194867_121336688419615_4715163036950590455_n.jpg?efg=eyJpIjoidCJ9&oh=5339aaf0f1ac7cec87b5f2523da96924&oe=59C1EA18",
				    "url"=>"https://m.facebook.com/febiola.santika.31?slog=5&seq=1953034326&rk=11&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Pernah bekerja sebagai  Guru di Pendidikan Anak Usia Dini",
				      "Pernah belajar di S1 - Pendidikan Bahasa Ingris",
				      "Jurusan IPA di SMA Negeri 1 Mojokerto",
				      "Pernah belajar di SMA Negeri 1 Mojokerto",
				      "Tinggal di Kota Mojokerto",
				      "Bertunangan",
				      "Dari Kota Mojokerto"
				    ],
				    "name"=>"Febi Sendirian",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/12193757_1019672481386182_1614044263855505303_n.jpg?efg=eyJpIjoidCJ9&oh=b77b6b54d1086b7fc1fa425801bac952&oe=5984E175",
				    "url"=>"https://m.facebook.com/febi.sendirian?slog=5&seq=1953034326&rk=12&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Bekerja di Avenged Sevenfold",
				      "Bekerja di PT.Kreon-Gemscool",
				      "Pernah belajar di FC Barcelona",
				      "Pernah belajar di SMP Negeri 3 Karawang Barat",
				      "Tinggal di Karawang, Karawang",
				      "Dari Kota Yogyakarta",
				      "Diikuti oleh 12 orang"
				    ],
				    "name"=>"Febianhartanto Harta Hartanto",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c23.0.120.120/p120x120/17458053_1098803216932346_4912178162495517141_n.jpg?efg=eyJpIjoidCJ9&oh=9475225459deedc555a1afe706c82ebe&oe=597F5C2A",
				    "url"=>"https://m.facebook.com/gori.anda?slog=5&seq=1953034326&rk=13&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Bekerja di Perjuangan Semut",
				      "Bekerja di Gombal Gembel",
				      "Dari Kota Tangerang",
				      "Diikuti oleh 139 orang"
				    ],
				    "name"=>"Dede Febi",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/10845914_351532431674718_8055899783561335674_n.jpg?efg=eyJpIjoidCJ9&oh=94fa50d3023a239fc858497713536ba3&oe=5984AA18",
				    "url"=>"https://m.facebook.com/dede080?slog=5&seq=1953034326&rk=14&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[],
				    "name"=>"Febi Psk",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c37.37.466.466/s120x120/296098_105286742908271_6594393_n.jpg?efg=eyJpIjoidCJ9&oh=438e96b33a5bf73c8ccc18f225d7cde8&oe=59BD3AE3",
				    "url"=>"https://m.facebook.com/febi.psk?slog=5&seq=1902737621&rk=15&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Tinggal di Tegal",
				      "Dari Kota Semarang"
				    ],
				    "name"=>"Febi Milik Amel",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c37.37.466.466/s120x120/148637_115137578553923_989725_n.jpg?efg=eyJpIjoidCJ9&oh=3936e2c9f0247306657c725c1101fc85&oe=597DAAE0",
				    "url"=>"https://m.facebook.com/febi.m.amel?slog=5&seq=1902737621&rk=16&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[],
				    "name"=>"Febi Febiola",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c13.13.158.158/s120x120/269827_109771442448586_2487166_n.jpg?efg=eyJpIjoidCJ9&oh=cce7915b53a068f5c31b0e4c10e1c323&oe=5984B2C8",
				    "url"=>"https://m.facebook.com/febi.febiola.9887?slog=5&seq=1902737621&rk=17&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Pernah belajar di SDN 02 Cilincing Jakarta Utara"
				    ],
				    "name"=>"Febi Blink",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c129.27.342.342/s120x120/294902_111380928996290_835495459_n.jpg?efg=eyJpIjoidCJ9&oh=ce59c627edc540236b99b39faaec6574&oe=597885C6",
				    "url"=>"https://m.facebook.com/febi.blink.39?slog=5&seq=1902737621&rk=18&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Bekerja di Pt.Rizky Sule",
				      "Pernah belajar di SMP BPI 1 Bandung",
				      "Tinggal di Daerah Khusus Ibukota Jakarta",
				      "Lajang",
				      "Diikuti oleh 61.030 orang"
				    ],
				    "name"=>"Rizky Febian",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c70.14.175.175/s120x120/625441_135587426615663_669457867_n.jpg?efg=eyJpIjoidCJ9&oh=0203401febebe3cd3ce446195857a357&oe=597476E9",
				    "url"=>"https://m.facebook.com/rizky.f.sutisna?slog=5&seq=1902737621&rk=19&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[],
				    "name"=>"Febi Rastanty Blink",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c59.13.158.158/s120x120/560857_108744339298674_1896218724_n.jpg?efg=eyJpIjoidCJ9&oh=ffd241e3bbd43623d01c3c7ff0f007d6&oe=597EE53C",
				    "url"=>"https://m.facebook.com/indah.unyu.315?slog=5&seq=1902737621&rk=20&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Pernah belajar di SMP Praja Mukti",
				      "Tinggal di Kota Surabaya",
				      "Berpacaran",
				      "Dari Kota Surabaya"
				    ],
				    "name"=>"Febifeb",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c7.0.120.120/p120x120/17426096_1808311662756388_4296884967195832000_n.jpg?efg=eyJpIjoidCJ9&oh=7669f88e7d7feced5ec850e1e17ac83c&oe=597A81A3",
				    "url"=>"https://m.facebook.com/luluk.febianti?slog=5&seq=1902737621&rk=21&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Bekerja di Es teh poci",
				      "Pernah belajar di SMA NEGERI 1 Lebakwangi",
				      "Tinggal di Kuningan Satu, Jawa Barat, Indonesia",
				      "Berpacaran dengan Wijdan Arief",
				      "Dari Daerah Khusus Ibukota Jakarta"
				    ],
				    "name"=>"Febi Ramayanti",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/18301477_413349945714588_2029897201908463721_n.jpg?efg=eyJpIjoidCJ9&oh=5407af8a34e35b020adae3b0353a2284&oe=59B43E02",
				    "url"=>"https://m.facebook.com/febi.ramayanti.9?slog=5&seq=1902737621&rk=22&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[],
				    "name"=>"Feby Febiola",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/1934672_106106619788115_612098312984958647_n.jpg?efg=eyJpIjoidCJ9&oh=c41bbc848a7b71487e785e8a9f3f21fd&oe=597EA765",
				    "url"=>"https://m.facebook.com/feby.febiola.1671?slog=5&seq=1902737621&rk=23&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Teacher di Guru SD Negeri",
				      "Jurusan IPA4 di Institut Teknologi Bandung",
				      "Pernah belajar di Sman 1 Indramayu",
				      "Tinggal di Daerah Khusus Ibukota Jakarta",
				      "Dari Jatibarang, Jawa Barat, Indonesia"
				    ],
				    "name"=>"Feby Febiola",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c20.0.120.120/p120x120/13516276_1711512519098019_2439711093321309721_n.jpg?efg=eyJpIjoidCJ9&oh=fbd95d4022884d90b370ac30cfdf2b33&oe=59BD57F5",
				    "url"=>"https://m.facebook.com/rosyanti.rosyanti.12532?slog=5&seq=1902737621&rk=24&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Management di INDONESIAN DEATHCORE",
				      "Tukang gulung kabel di God For Messiah",
				      "Pernah belajar di SBDM \u2020 SEKOLAH BERSTANDART DEATH METAL \u2020",
				      "Pernah belajar di Smp Negeri 14",
				      "Tinggal di Kota Surabaya",
				      "Dari Jombang, Jawa Timur, Indonesia"
				    ],
				    "name"=>"Febian D'Youra",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c95.31.420.420/s120x120/13267935_998112403569465_4013411607460318082_n.jpg?efg=eyJpIjoidCJ9&oh=bb887c0fea83f5a608213273512c47c0&oe=59B92A7A",
				    "url"=>"https://m.facebook.com/febian.nightofthelonely?slog=5&seq=298958263&rk=26&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Pernah belajar di SMP NEGERI 1 CIDAHU",
				      "Pernah belajar di SMK MODEL PATRIOT IV CIAWIGEBANG"
				    ],
				    "name"=>"Febiyansah Bijunk",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c0.0.120.120/p120x120/16832361_1822302808018843_7331156893473752990_n.jpg?efg=eyJpIjoidCJ9&oh=76264eed8b174fcef452b7526235aa0b&oe=59B3E167",
				    "url"=>"https://m.facebook.com/profile.php?id=100007174248757&slog=5&seq=298958263&rk=27&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Bekerja di SMPN 15  SURABAYA",
				      "Pernah belajar di SDN gading IV surabaya",
				      "Pernah belajar di sdn gading 4",
				      "Tinggal di Kota Surabaya",
				      "Berpacaran",
				      "Dari Kota Surabaya"
				    ],
				    "name"=>"Riska Febiola",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/11350444_468244470003199_8648325153671365865_n.jpg?efg=eyJpIjoidCJ9&oh=748df2cfe00703f27c7fda25a486a830&oe=59774741",
				    "url"=>"https://m.facebook.com/riska.febiola.5?slog=5&seq=298958263&rk=28&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Manager di SPG Mall Matahari jakarta",
				      "Jurusan MANEJEMEN INFORMATIKA di University of Indonesia",
				      "Pernah belajar di SMA 48 Jakarta",
				      "Tinggal di Daerah Khusus Ibukota Jakarta",
				      "Lajang",
				      "Dari Daerah Khusus Ibukota Jakarta"
				    ],
				    "name"=>"Febby Febiola Febiola",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/12645268_134992940217841_732088223029323124_n.jpg?efg=eyJpIjoidCJ9&oh=919d80a7d922698fb03b4a15b310c041&oe=597AEF62",
				    "url"=>"https://m.facebook.com/febbyfebiola.febiola.7?slog=5&seq=298958263&rk=29&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[],
				    "name"=>"Febi Blink",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c59.13.158.158/s120x120/389187_104869612988736_975230049_n.jpg?efg=eyJpIjoidCJ9&oh=0cdef2cbddd8818ea16fa59741ecdc21&oe=59AF317D",
				    "url"=>"https://m.facebook.com/grezt21?slog=5&seq=298958263&rk=30&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Mengambil konsentrasi Teknik Pemesinan di SMKN 5 surabaya",
				      "Pernah belajar di SMPN 15 SURABAYA",
				      "Pernah belajar di STM Pembangunan - Stemba  / SMKN 5 Surabaya",
				      "Pernah belajar di SMPN 15 sby",
				      "Tinggal di Kota Surabaya",
				      "Lajang",
				      "Dari Kota Surabaya",
				      "Diikuti oleh 14 orang"
				    ],
				    "name"=>"Febi Ferdiansyah",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c0.4.120.120/p120x120/14908323_1246017025469373_6722431147056789217_n.jpg?efg=eyJpIjoidCJ9&oh=87fa66f7261c0c6f5348ed42c868d6d9&oe=59AEF737",
				    "url"=>"https://m.facebook.com/feby.ferdiansyah?slog=5&seq=298958263&rk=31&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "Pernah belajar di UNILA",
				      "Pernah belajar di smp Al-Kautsar Bandar Lampung",
				      "Tinggal di Kota Bandar Lampung",
				      "Dari Kota Bandar Lampung"
				    ],
				    "name"=>"Febiola Yola",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p120x120/1483441_1494156000811209_1259212476_n.jpg?efg=eyJpIjoidCJ9&oh=10266265ae153313133bd33b7d39e33f&oe=59BF12B9",
				    "url"=>"https://m.facebook.com/febiola.yola.944?slog=5&seq=298958263&rk=32&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ],
				  [
				    "info"=>[
				      "ibu rmh tngga di mengurus anakq' trsyang",
				      "Pernah belajar di SMA PASUNDAN 3 BNDNG",
				      "Tinggal di Daerah Khusus Ibukota Jakarta"
				    ],
				    "name"=>"Febi Febiola",
				    "photo"=>"https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c0.0.120.120/p120x120/13087706_100680833679020_2613962667023756604_n.jpg?efg=eyJpIjoidCJ9&oh=14e7c8853455e6e5232de335595264e3&oe=59AF372C",
				    "url"=>"https://m.facebook.com/profile.php?id=100012113101561&slog=5&seq=298958263&rk=33&st=user&fbtype=2048&refid=8&tsid&fref=search"
				  ]
			);
			header('Content-Type=>application/json');
			sleep(10);
			echo json_encode($people, JSON_PRETTY_PRINT);
  }



}
