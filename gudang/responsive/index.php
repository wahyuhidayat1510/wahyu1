<!DOCTYPE html>
<html lang="en">
<head>
  <title>Iventaris Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?page=main">Home</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Master Data
				<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="?page=lihat-data-barang">Data Barang</a></li>
					<li><a href="?page=form-input-master-barang">Input Barang</a></li>
					<li class="divider"></li>
					<li><a href="?page=form-input-data-user">Users</a></li>                        
				</ul>				
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Transaksi
				<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="?page=form-input-barang-masuk">Data Masuk Barang</a></li>
					<li><a href="?page=form-input-barang-keluar">Data Keluar Barang</a></li>					                        
				</ul>				
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Laporan
				<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="?page=lihat-barang-masuk">Laporan Masuk Barang</a></li>
					<li><a href="?page=lihat-barang-keluar">Laporan Keluar Barang</a></li>					                        
				</ul>				
		</li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Log-In</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="img/bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        Ada barang masuk baru. Periksa.
      </div>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <!--<p contenteditable="true">Status: Feeling Blue</p>-->
              <?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'login' : include "default.php"; break;
				case 'input-master-barang' : include "input-master-barang.php"; break;
				case 'input-barang-masuk' : include "input-barang-masuk.php"; break;
				case 'input-barang-keluar' : include "input-barang-keluar.php"; break;
				case 'form-input-master-barang' : include "form-input-master-barang.php"; break;
				case 'form-input-barang-masuk' : include "form-input-barang-masuk.php"; break;
				case 'form-input-barang-keluar' : include "form-input-barang-keluar.php"; break;
				case 'lihat-data-barang' : include "lihat-data-barang.php"; break;
				case 'lihat-barang-masuk' : include "lihat-barang-masuk.php"; break;
				case 'lihat-barang-keluar' : include "lihat-barang-keluar.php"; break;
				case 'review-input-barang-masuk' : include "review-input-barang-masuk.php"; break;
				case 'review-input-barang-keluar' : include "review-input-barang-keluar.php"; break;
				case 'delete-input-barang-masuk' : include "delete-input-barang-masuk.php"; break;
				case 'delete-input-barang-keluar' : include "delete-input-barang-keluar.php"; break;
				case 'delete-data-barang' : include "delete-data-barang.php"; break;
				case 'edit-data-barang' : include "edit-data-barang.php"; break;
				case 'laporan-data-barang-masuk' : include "laporan-data-barang-masuk.php"; break;
				case 'laporan-data-barang-keluar-bydate' : include "laporan-data-barang-keluar-bydate.php"; break;
				case 'laporan-data-barang-keluar-byname' : include "laporan-data-barang-keluar-byname.php"; break;
				case 'form-input-data-user' : include "form-input-data-user.php"; break;
				case 'input-data-user' : include "input-data-user.php"; break;
				case 'main' :
				default : include 'home.php';	
			}
			?>
           
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="well">
           <p>halaman konten</p>
		   
          </div>
        </div>
      </div>
          
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="img/mugas.jpg" alt="Kampus Mugas" width="400" height="300">
        <p><strong>Unisbank Kampus Mugas Semarang</strong></p>
        <p>Thu. 18 January 2018</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>Agenda 1</p>
      </div>
      <div class="well">
        <p>Agenda 2</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Project of Responsive Web; Faculty of Information Technology 2018</p>
</footer>

</body>
</html>
