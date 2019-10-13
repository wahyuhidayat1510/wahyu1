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
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">

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

        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-thumb="images/slide01_thumb.jpg" data-src="images/cafe27.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="images/slide02_thumb.jpg" data-src="images/djago.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="images/slide03_thumb.jpg" data-src="images/oceanview.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
				<div data-thumb="images/slide01_thumb.jpg" data-src="images/sriyacafe.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
				<div data-thumb="images/slide02_thumb.jpg" data-src="images/mbscafe.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="index.php">Galeri</a>
                </h1>
            </div>
        </div>
        
        <div class="toggle-menu-container">
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
                        <a href="galeri.php">Galeri</a>
                    </li>
                    <li>
                        <a href="kuliner.php">Kuliner</a>
                    </li>
                    <li>
                        <a href="#">Data Kuliner</a>
                        <ul>
                            <li>
                                <a href="tambah.php">Tambah</a>
                            </li>
                            <li>
                                <a href="edit.php">Edit</a>
                            </li>
							<li>
                                <a href="hapus.php">Hapus</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Login</a>
                        <ul>
                            <li>
                                <a href="dafpelanggan.php">Daftar Pelanggan</a>
                            </li>
                            <li>
                                <a href="dafpedagang.php">Daftar Pedagang</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>            
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        
			
            <div class="gallery">
                <div class="gallery_col-1">
                    <a data-fancybox-group="gallery" href="images/page-1_img03_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.96551724137931%;">
                        <img data-src="images/menu1.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>Waroeng Cafe 27</em></p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img04_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 74.13793103448276%;">
                        <img data-src="images/menu4.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>MBS Bistro Cafe</em></p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img05_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 94.6551724137931%;">
                        <img data-src="images/menu7.png" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>Djago Cafe</em></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery_col-2">
                    <a data-fancybox-group="gallery" href="images/galeri1.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 52.48322147651007%;">
                        <img data-src="images/galeri1.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>Waroeng Cafe 27</em></p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/galeri2.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 55.97315436241611%;">
                        <img data-src="images/galeri2.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>Djago Cafe</em></p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/galeri3.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 96.10738255033557%;">
                        <img data-src="images/galeri3.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>Ocean View</em></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery_col-3">
                    <a data-fancybox-group="gallery" href="images/page-1_img09_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                        <img data-src="images/cafe27.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>Waroeng Cafe 27</em></p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img10_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 72.23168654173765%;">
                        <img data-src="images/menu6.png" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>Djago Cafe</em></p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img11_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                        <img data-src="images/menu9.jpeg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Kuliner</em></p>
                                <p><em>Ocean View</em></p>
                            </div>
                        </div>
                    </a>
					
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