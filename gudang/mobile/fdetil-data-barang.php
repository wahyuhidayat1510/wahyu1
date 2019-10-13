
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
<!-- Post -->
<div data-role="page" id="post" data-title="Detil Barang">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> <h4>Detil Barang</h4>
    </div><!-- END OF: Header -->
    
    <div class="wrapper">
        <!-- Content -->
        <div data-role="content" class="content">
<?php
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("gudang");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
	if (isset($_GET['id'])) {
		$kode_brg = $_GET['id'];
	} else {
		die ("Error. No Kode Selected! ");	
	}
	//Tampilkan data dari tabel barang
	$query = "SELECT * FROM barang WHERE kode_brg='$kode_brg'";
	$sql = mysql_query ($query);
	$hasil = mysql_fetch_array ($sql);
	$kode_brg	= $hasil['kode_brg'];
	$nama_brg		= $hasil['nama_brg'];
	$jenis_brg	= $hasil['jenis_brg'];
	$kuantitas	= $hasil['kuantitas'];
	$image	= $hasil['image'];		
        echo "<h4>Detil Kode: </h4><h2>$kode_brg</h2>";
		if (empty($image)) 
					echo "<img src='images/no-img.png'>No Image";
					else
					echo "<img class='shadow' src='images/$image' title='$image'>";
            echo("       <h3>$nama_brg</h3>
					<p>$nama_brg - $jenis_brg </p>
                    <p>tersedia $kuantitas buah</p>");
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
        </div><!-- END OF: Content -->
				
				<div data-role="collapsible" data-content-theme="a" data-theme="a" id="comment-form-collapsible">
					<h3>Leave Comment</h3>
					<div id="comment-form-wrapper">

						<form action="#" method="post" id="comment-form">
							<div data-role="fieldcontain" class="ui-hide-label no-field-separator">
								<label for="name">Name (required)</label>
							    <input type="text" id="name" name="name" placeholder="Name (required)" class="required" />
							</div>
							<div data-role="fieldcontain" class="ui-hide-label no-field-separator">	
								<label for="email">Email (optional)</label>
							    <input type="email" id="email" name="email" placeholder="Email (optional)" class="email"/>

							</div>
							<div data-role="fieldcontain" class="ui-hide-label no-field-separator">	
								<label for="comment">Comment (required)</label>
								<textarea name="textarea" id="comment" placeholder="Leave your comment here" class="required"></textarea>
							</div>
								<button type="submit" id="submit">Submit Comment</button>
						</form>
					</div>

					<div id="comment-form-success"></div>
				</div>	
				<div data-role="collapsible" data-content-theme="a" data-theme="a">
				   <h3>View Comments</h3>
				   		<ul style="list-style: none;">
					   	 	<li>
									<h3>Art Ramadani</h3>

						   	 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
						   	 		<span class="blog-comment-date">15.35pm 24th Jan 2012</span>
						  	  		<a href="#">Reply &rarr;</a>
					   	 	</li>
							
							<hr/>
							
					   	 	<li>
									<h3>Arlind Nushi</h3>
						   	 		<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
						   	 		<span class="blog-comment-date">15.35pm 24th Jan 2012</span>
						  	  		<a href="#">Reply &rarr;</a>
					   	 	</li>
														
						</ul>
				</div>
    </div>
    
</div><!-- END OF: Post -->

</body>
</html>