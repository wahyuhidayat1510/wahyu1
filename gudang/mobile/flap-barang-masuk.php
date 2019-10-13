
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
	<link rel="stylesheet"  href="http://code.jquery.com/mobile/git/jquery.mobile-git.css" /> 
	<link rel="stylesheet" href="css/jquery.mobile.datepicker.css" />
	<link rel="stylesheet" href="css/jquery.mobile.datepicker.theme.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
	<script src="js/datepicker.js"></script>
	<script src="http://code.jquery.com/mobile/git/jquery.mobile-git.js"></script> 
	<script src="js/jquery.mobile.datepicker.js"></script>
	
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
<div data-role="page" id="flap-barang-masuk" data-title="Barang Masuk">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> 
       <h4>Data Barang Masuk</h4>
    </div><!-- END OF: Header -->


    <!-- Wrapper -->
    <div class="wrapper">     
    
        <!-- Content -->
        <div data-role="content" class="content">
			  <div class="form-group">
				<label for="sdari-tgl">Dari Tanggal:</label>
				<input type="text" data-role="date" data-inline="false" class="date-input" id="dari-tgl" >
			  </div>
			  <div class="form-group">
				<label for="ske-tgl">Sampai Tanggal:</label>
				<input type="text" data-role="date" data-inline="false" class="date-input" id="ke-tgl" >
			  </div>			  
			  <button onclick="location.href='#homepage'" type="button" class="btn btn-default">Lihat</button>
			  <button onclick="location.href='#homepage'" type="button" class="btn btn-default">Reset</button>
			 
		</div><!-- END OF: Content -->
        
               
    </div><!--END OF: Wrapper -->
    
    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: About -->

</body>
</html>