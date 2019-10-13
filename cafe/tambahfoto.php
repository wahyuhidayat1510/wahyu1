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
				<a href="#"><h2><em>Upload Foto</em></h2></a>
				<div class="row">
				</div>
                
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kuliner";
$id_last=0;
$id_temp=0;
$nm_foto="";

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
	
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
	
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	echo "<br><h3><b><u><a href='datacafe.php'>Kembali</a></b></u></h3>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		//baca tabel kuliner
		$sql = "SELECT id_kuliner FROM tb_kuliner 
				ORDER BY id_kuliner DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$id_last=$row["id_kuliner"];
			$id_temp=$id_last+1;
		
			$nm_foto=basename( $_FILES["fileToUpload"]["name"]);
			//$nm_foto = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_FILENAME);
			//Simpan ke tabel foto
			$sql = "INSERT INTO tb_foto
					(id_kuliner,nama_file)
					VALUES ($id_temp,'".$nm_foto."')";
			if (mysqli_query($conn, $sql)) {
				echo "Foto berhasil ditambah";	
				echo $id_last." menjadi : ".$id_temp;
			} else {
				echo "Gagal tambah foto: " . $sql . "<br>" . mysqli_error($conn);
			}
		}else {
				echo "Gagal baca last ID: " . $sql . "<br>" . mysqli_error($conn);
			}
		mysqli_close($conn);
		echo "<br><h3><b><u><a href='datacafe.php'>Kembali</a></b></u></h3>";
		
    } 
	
	else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



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