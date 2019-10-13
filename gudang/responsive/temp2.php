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
				case 'laporan-data-barang-keluar' : include "laporan-data-barang-keluar.php"; break;
				case 'laporan-data-barang-keluar-bydate' : include "laporan-data-barang-keluar-bydate.php"; break;
				case 'laporan-data-barang-keluar-byname' : include "laporan-data-barang-keluar-byname.php"; break;
				case 'form-input-data-user' : include "form-input-data-user.php"; break;
				case 'input-data-user' : include "input-data-user.php"; break;
				case 'main' :
				default : include 'home.php';	
			}
			?>