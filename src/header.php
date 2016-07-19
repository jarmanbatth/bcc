<?php
require 'include.php';
//if (!isset($_SESSION['User']))
  //  header("location:login.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Business Card</title>
<meta name="keywords" content="Business Card, card templates, Design  templates, CSS, HTML" />
<meta name="description" content="The Wall is a free website template provided by templatemo.com" />
<link href="/templatemo_style.css" rel="stylesheet" type="text/css" />
    
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="Nitish Kumar" />
    <script src="/js/jquery3-0.min.js" type="text/javascript"></script>
    
</head>
<body>
    <div id="templatemo_site_title_bar_wrapper">

    <div id="templatemo_site_title_bar">

        <div id="site_title">
            <h1><a href="#" target="_parent">
                    <img src="/images/logo.png" alt="css templates" />
                    <span>Easy way to Print Business card with dynamic Templates</span>
                </a></h1>
        </div>

    </div> <!-- end of templatemo_site_title_bar -->
</div> <!-- end of templatemo_site_title_bar_wrapper -->

<div id="templatemo_content_wrapper">

  <div id="templatemo_content">
    
    
    <!-- start of slider -->

<div class="slider-wrap">
	<div id="stripNavL0" class="stripNavL">
            <a href="#">Left</a></div>
        <div id="stripNav0" class="stripNav" style="width: 610px;">
             <ul>
           <?php if ($_SESSION['User']['email'] == "admin@printcards.com") { ?> 
           
                <li class="tab1" style=""><a href="/index.php" class="current">Home</a></li>
                <li class="tab1" style=""><a href="/employees.php" class="current">View Records</a></li>
                <li class="tab2" style=""><a href="/logout.php">Logout</a></li>
                <!---
                
                <li class="tab3" style=""><a href="#3">Portfolio</a></li>
                <li class="tab4" style=""><a href="#4">About Us</a></li>
                <li class="tab5" style=""><a href="#5">Contact Us</a></li>
                -->
           
           <?php } else { ?>
            
                <li class="tab1" style=""><a href="/index.php" class="current">Home</a></li>
                <li class="tab2" style=""><a href="/logout.php">Logout</a></li>
                <!---
                
                <li class="tab3" style=""><a href="#3">Portfolio</a></li>
                <li class="tab4" style=""><a href="#4">About Us</a></li>
                <li class="tab5" style=""><a href="#5">Contact Us</a></li>
                -->
            
           <?php } ?>
                </ul>
        </div>
    
            