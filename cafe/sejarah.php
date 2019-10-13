<?php
	$json_data=file_get_contents("http://localhost/cafe/cafe/kategori.php");
	$obj = json_decode($json_data);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rumah Cafe</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a> 
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
 
    <script src='js/device.min.js'></script> 
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
	

        <div class="toggle-menu-container">
		<div class="container">
		<div class="brand">
                    <h1 class="brand_name">
                        <a href="index.php">Rumah Cafe</a>
                    </h1>
                </div>
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Profil</a>
                        <ul>
                            <li>
                                <a href="sejarah.php">Sejarah</a>
                            </li>
                            <li>
                                <a href="pembuat.php">Pembuat</a>
                            </li>
							<li>
                                <a href="hubungikami.php">Hubungi Kami</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="#">Cafe</a>
                        <ul>
                            <li>
                                <a href="cafe27.php">Waroeng Cafe 27</a>
                            </li>
                            <li>
                                <a href="djagocafe.php">Djago Cafe</a>
                            </li>
							<li>
                                <a href="oceanview.php">Ocean View</a>
                            </li>
							<li>
                                <a href="sriyacafe.php">Sriya Cafe</a>
                            </li>
							<li>
                                <a href="mbscafe.php">MBS Bistro Cafe</a>
                            </li>
							
                        </ul>
                    </li>
					<li>
                        <a href="datacafe.php">Data Cafe</a>

                    </li>
					
                   
                </ul>
            </nav>     
        </div>
	</div>
    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
       <section class="well">
            <div class="container">
				<a href="#sejarah"><h2><em>Sejarah</em></h2></a>
				<div class="row">
				</div>
                <div class="row">
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/cafe27.jpg" alt=""></div></div>
                        <p class="center indents-1"> Pada 5 Maret 2016, secara resmi Waroeng Cafe 27 milik Adji Watono dibuka untuk umum. Sebuah cafe modern dengan standar internasional yang berlokasi di
						Jalan Cempaka, belakang Pasar Kliwon Kudus. Ia menerapkan konsep warung dan kafe yang bergaya internasional. Namun taste menunya tetap lokal. Adji Watono mendirikan Waroeng 
						Cafe 27 dengan tujuan mulia, yaitu untuk menginspirasi pemuda pemudi Kudus agar tidak takut mewujudkan impian mereka dan mencapai kesuksesan masing-masing. Saat memasuki Waroeng Cafe 27, 
						pengunjung akan merasakan betapa kontrasnya atmosfer pasar dengan Waroeng Cafe 27 yang menyajikan suasana yang berbeda dari kafe yang sudah pernah ada. Tampilan Waroeng Cafe 27 terkesan homey dengan pernik
						interior yang sering dijadikan background foto selfie. ”Kami ingin menghadirkan kafe bagi semua kalangan. Baik yang dewasa hingga young people. Ada konsep internasional di sini, namun
						tetap dengan taste lokal. Kami juga menghadirkan live music setiap malam minggu untuk memberikan hiburan bagi para pengunjung. Dan untuk setiap bulannya kita juga membuat acara
						musik tematik,” ungkap Adji. Hadirnya konsep internasional terletak dari beberapa sajian menu yang berbeda. 
						</div>
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/djago.jpg" alt=""></div></div>
                        <p class="center indents-1">Djago Cafe & Resto Jepara adalah salah satu restoran yang sedang naik daun di kalangan masyarakat Jepara. Berbagai pilihan menu makanan dan minuman disajikan disini 
						dengan kualitas tinggi dari bahan-bahan pilihan. Djago Cafe & Resto Jepara adalah salah satu restoran yang sedang naik daun di kalangan masyarakat Jepara. Berbagai pilihan menu makanan dan minuman disajikan 
						disini dengan kualitas tinggi dari bahan-bahan pilihan. Aspek Tradisional diisi dengan makanan dan minuman oriental khas daerah sekitar sehingga memiliki cita rasa original khas Jepara. Tapi tentunya mode
						tradisional ini dikemas dengan tampilan yang elegan dan mewah. Sehingga ketika kita memakan atau meminumnya kita mendapatkan 2 aspek, yaitu aspek rasa yang original dan kemasan yang menarik.
						Aspek Modern di presentasikan dengan beberapa makanan dan minuman western food atau khas barat. Makanan pastry sangat menarik mulai dari kue maupun pudding yang disajikan benar-benar akan memanjakan lidah siapa saja yang mencobanya.
						</div>
                </div>
				<div class="row">
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/oceanview.jpg" alt=""></div></div>
                        <p class="center indents-1">Ocean View hotel & cafe adalah sebuah hotel yang ramah, dengan lokasi yang cukup jauh dari pusat keramaian menciptakan suasana kekeluargaan yang hangat, riang dan santai dari saat Anda tiba-bersama-sama dengan sentuhan yang lebih pribadi. 
						Jika  Anda seorang wisatawan atau pelancong bisnis, Ocean View Residence-hotel adalah pilihan yang cocok untuk akomodasi ketika mengunjungi Jepara. 
						Hotel ini tidak terlalu jauh dari pusat kota: hanya 0.5 Km jauhnya, dan umumnya hanya membutuhkan sekitar 120 menit untuk mencapai bandara. Untuk berjalan-jalan dan berwisata lokal, tidak perlu pergi jauh-jauh karena hotel ini terletak dekat dengan Pantai Kartini.
						</div>
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/sriyacafe.jpg" alt=""></div></div>
                        <p class="center indents-1">Berbagai kreasi terus dilakukan Sriya Cafe Homestay & Family Resto. Tak hanya desain tempat menarik, Sriya Cafe juga terus memunculkan menu-menu baru. Saat ini, ada lima menu baru yang diangkat tempat tersebut.
						Menu-menu itu yakni Manggo Kulfie, Strawberry Kulfie, Chicken Steak with Potato's Crunch, Combo Sandwich serta Nasi Goreng Matahari Jeparadise. Semuanya ditawarkan dengan tampilan menarik sekaligus harga sangat terjangkau mulai akhir bulan ini.
						Sriya Cafe Homestay & Family Resto yang beralamat di Jalan Kusumo Utoyo tersebut buka setiap hari mulai pukul 11.00 sampai 23.00 WIB. Tempat tersebut melayani berbagai acara, pesan antar hingga homestay yang nyaman. 
						</div>
                </div>
				<div class="row">
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/mbscafe.jpg" alt=""></div></div>
                        <p class="center indents-1">MBS Bistro Cafe adalah tempat kuliner yang berkonsep Mewah namun dgn Budget Murah, makanan khas eropa dgn rasa indonesia mengandalkan menu STEAK PASTA dan SEAFOOD, memasuki era dunia kuliner pada saat ini 
						MBS Bistro telah hadir dengan nuansa Cafe yang nyaman, bersih, lezat dan mempunyai ciri khas dlm Rasa, pelayanan yang prima serta memiliki beragam menu yang sangat istimewa, MBS Bistro Cafe adalah salah satu tempat wisata kuliner yang 
						cocok untuk semua golongan, anak2 hingga dewasa, MBS Bistro Cafe berdiri pada tanggal 04 Januari 2007 dengan mengandalkan konsep perpaduan European,  Oriental & Traditional Concept, saat ini per Maret 2014 mempunyai 47 Cabang.
						MBS Bistro Cafe akan terus membuka cabang-cabang lagi di seluruh kota di Indonesia, bahkan untuk planning ke depan MBS Bistro akan hadir di luar negeri seperti Singapore, Malaysia, bahkan sampai Hongkong.
						</div>
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/oceanview2.jpg" alt=""></div></div>
                        <p class="center indents-1">Ocean View hotel & cafe adalah sebuah hotel yang ramah, dengan lokasi yang cukup jauh dari pusat keramaian menciptakan suasana kekeluargaan yang hangat, riang dan santai dari saat Anda tiba-bersama-sama dengan sentuhan yang lebih pribadi. 
						Jika  Anda seorang wisatawan atau pelancong bisnis, Ocean View Residence-hotel adalah pilihan yang cocok untuk akomodasi ketika mengunjungi Jepara. 
						Hotel ini tidak terlalu jauh dari pusat kota: hanya 0.5 Km jauhnya, dan umumnya hanya membutuhkan sekitar 120 menit untuk mencapai bandara. Untuk berjalan-jalan dan berwisata lokal, tidak perlu pergi jauh-jauh karena hotel ini terletak dekat dengan Pantai Kartini.
						</div>
                </div>
               <div class="row">
            </div>          
			</div>
			
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="tm"><a href="#"><img src="images/TM_logo.png" alt=""></a></div>
    </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>