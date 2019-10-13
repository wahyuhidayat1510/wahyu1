
<!DOCTYPE html> 
<html><head> 
	<title>Inventaris Gudang</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="description" content="Woody is a clean theme for mobile devices.">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" href="css/default.min.css" />
    <link rel="stylesheet" href="css/woody.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/photoswipe.css" type="text/css" rel="stylesheet" />    
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,700' rel='stylesheet' type='text/css'>

	<!-- JavaScripts -->
 	<script type="text/javascript" src="js/klass.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.mobile-1.0.1.js"></script>
	<script src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/code.photoswipe.jquery-3.0.4.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/misc.js"></script>

</head>

<body> 
<div data-role="page" id="input-data-barang" data-title="About">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> 
       <h4>Data Barang</h4>
    </div><!-- END OF: Header -->


    <!-- Wrapper -->
    <div class="wrapper">
    
        <!-- Content -->
        <div data-role="content" class="content">
			
		</div><!-- END OF: Content -->
        <!--Posts -->
        <ul data-role="listview" data-inset="true">
            <!-- Post -->
			
<?php
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("gudang");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
	$Cari="SELECT * FROM barang ORDER BY kode_brg";
	$Tampil = mysql_query($Cari);
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($Tampil)) {
			$kode_brg	= stripslashes ($hasil['kode_brg']);
			$nama_brg	= stripslashes ($hasil['nama_brg']);
			$jenis_brg	= stripslashes ($hasil['jenis_brg']);
			$kuantitas	= stripslashes ($hasil['kuantitas']);
			$image		= stripslashes ($hasil['image']);
		{
			$nomer++;
			echo (
				"<li>
                <a href='fdetil-data-barang.php?id=$kode_brg'>");
					if (empty($image)) 
					echo "<img src='images/no-img.png'>No Image";
					else
					echo "<img class='shadow' src='images/$image' title='$image'>";
            echo("       <h3>$nama_brg</h3>
					<h2>$kode_brg</h2>
                    <p>$nama_brg - $jenis_brg </p>
                    <p>tersedia $kuantitas buah</p>
                </a>
            </li>
			");			
    
		}
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>             <li>
                <a href="fdetil-data-barang.php">
                    <img src="images/thumb/001.jpg" />
                    <h3>First Post</h3>
                    <p>Sample short description</p>
                </a>
            </li>
			
			<!-- END OF: Post -->			
        </ul><!-- END OF: Posts -->

        <fieldset class="ui-grid-a">
            <div class="ui-block-a"><a href="#" data-role="button">&laquo; Newer</a></div>
            <div class="ui-block-b"><a href="#" data-role="button">Older &raquo; </a></div>	   
        </fieldset>   
    </div><!--END OF: Wrapper -->
    
    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: About -->

</body>
</html>