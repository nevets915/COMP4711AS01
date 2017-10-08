<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 * 
 * Yes, this is using an old version of Bootstrap. too bad.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>AirLines</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/layout.css" type="text/css" media="all">
    <script type="text/javascript" src="assets/js/jquery-1.5.2.js" ></script>
    <script type="text/javascript" src="assets/js/cufon-yui.js"></script>
    <script type="text/javascript" src="assets/js/cufon-replace.js"></script>
    <script type="text/javascript" src="assets/js/Cabin_400.font.js"></script>
    <script type="text/javascript" src="assets/js/tabs.js"></script>
    <script type="text/javascript" src="assets/js/jquery.jqtransform.js" ></script>
    <script type="text/javascript" src="assets/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="assets/js/atooltip.jquery.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <style type="text/css">.main, .tabs ul.nav a, .content, .button1, .box1, .top { behavior:url("../js/PIE.htc")}</style>
    <![endif]-->
</head>    
<body>
    <header>
    <div class="wrapper">
      <h1><a href="index.html" id="logo">AirLines</a></h1>
      <span id="slogan">Fast, Frequent &amp; Safe Flights</span>
      <nav id="top_nav">
        <ul>
          <li><a href="index.html" class="nav1">Home</a></li>
          <li><a href="#" class="nav2">Sitemap</a></li>
          <li><a href="contacts.html" class="nav3">Contact</a></li>
        </ul>
      </nav>
    </div>
    <nav>
      <ul id="menu">
        <li id="menu_active"><a href="index.html"><span><span>About</span></span></a></li>
        <li><a href="offers.html"><span><span>Offers</span></span></a></li>
        <li><a href="book.html"><span><span>Book</span></span></a></li>
        <li><a href="services.html"><span><span>Services</span></span></a></li>
        <li><a href="safety.html"><span><span>Safety</span></span></a></li>
        <li class="end"><a href="contacts.html"><span><span>Contacts</span></span></a></li>
      </ul>
    </nav>
    </header>
    
    <section id="content">
        {content}
    </section>
    
    <footer>
        <div class="wrapper">
          <ul id="icons">
            <li><a href="#" class="normaltip"><img src="assets/images/icon1.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="assets/images/icon2.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="assets/images/icon3.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="assets/images/icon4.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="assets/images/icon5.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="assets/images/icon6.jpg" alt=""></a></li>
          </ul>
          <div class="links">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</div>
        </div>
    </footer>
</body>
</html>
