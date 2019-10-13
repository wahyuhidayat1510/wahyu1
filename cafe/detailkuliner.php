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
                    <a href="index.php">Cafe</a>
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

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
       <section class="well">
            <div class="container">
				<a href="#"><h2><em>Detail Kuliner</em></h2></a>
				<div class="row">
				</div>
                
				<!DOCTYPE HTML>
				<html>  
				<body>
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "db_kuliner";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "SELECT * FROM tb_kuliner
						WHERE id_kuliner='".$_GET['id']."'";
				$result = mysqli_query($conn, $sql);
				//Sub Judul Halaman
				

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
					

				echo "Nama Kuliner: ".$row["nama_kuliner"]."<br>";
				echo "Alamat: ".$row["alamat"]."<br>";
				echo "Pemilik: ".$row["pemilik"]."<br>";
				echo "Latitude: ".$row["latitude"]."<br>";
				echo "Longitude: ".$row["longitude"]."<br>";
				echo "Menu Andalan: ".$row["menu"]."<br>";
				echo "Jam Buka: ".$row["jam_buka"]."<br>";
				echo "Keterangan: ".$row["keterangan"]."<br>"; ?>
				<div class="row">
            </div> 
				<h3><u><b><a href='datakuliner.php'>Lihat Data Kuliner</a></u></b></h3>
				<h3><u><b><a href='detail-kuliner-edit.php?id=<?php echo $row["id_kuliner"]?>'>Edit</a></u></b></h3>
				<?php
				   }
				} else {
					echo "Detil gagal tampil";
				}

				mysqli_close($conn);
				?>
				</body>
				</html>



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