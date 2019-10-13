<?php
require_once 'Mobile_Detect.php';
$detect_device = new Mobile_Detect;

// For All Mobile Devices
if($detect_device->isMobile() ) 
{
	// For All Tablet Devices
  if( $detect_device->isTablet()) 
  {
    header('Location: responsive/index.php');
    exit;
  }
  header('Location: mobile/index.php');
  exit;
}

// For All Tablet Devices
if( $detect_device->isTablet()) 
{
 header('Location: responsive/index/php');
 exit;
}

// For Specific Operating System
if( $detect_device->isAndroidOS()) 
{
 echo "<link rel='stylesheet' href='android.css type='text/css' />";  
}
if( $detect_device->isiOS()) 
{
 echo "<link rel='stylesheet' href='ios.css type='text/css' />"; 
}
if( $detect_device->isWindowsPhoneOS()) 
{
 echo "<link rel='stylesheet' href='windows.css type='text/css' />";  
}