<?php 

print '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/
 1999/xhtml" xml:lang="en"
 lang="en">

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>' . $title . '</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="resize.js"></script>
    <script type="text/javascript" src="menu.js"></script>
    <script type="text/javascript" src="lightbox.js"></script>
    <script type="text/javascript" src="ie.js"></script>
</head>
<body onload="msieversion()">

	<div id="container">
		
		<nav id="mobile-nav">
			<img id="close-menu" src="images/close.png" alt="close" />
			<div>
				<ul>
					<li><a href="index.php">HJEM</a></li>
					<li><a href="profile.php">OM OS</a></li>
					<li><a href="menucard.php">MENU</a></li>
					<li><a href="winecard.php">VIN</a></li>
					<li><a href="take-away.php">UD AF HUSET</a></li>
					<li><a href="contact.php">KONTAKT</a></li>
				</ul>
				<br />
				<br />
				<br />
				<ul>
					<li><a href="#">EN</a></li>
					<li><a href="#">DA</a></li>
				</ul>
			</div>
		</nav>

		<header>
			<div id="logo">
				<img alt="Logo" src="images/logo.svg" />
			</div>
			<button id="menu-button">MENU</button>
			<nav id="desktop-and-tablet-nav">				
				<div>
					<ul id="navbar">
						<li><a href="index.php">HJEM</a></li>
						<li><a href="profile.php">OM OS</a></li>
						<li><a href="menucard.php">MENU</a></li>
						<li><a href="winecard.php">VIN</a></li>
						<li><a href="take-away.php">UD AF HUSET</a></li>
						<li><a href="contact.php">KONTAKT</a></li>
					</ul>
					
					<ul id="langbar">
						<li><a href="">EN</a></li>
						<li><a href="">DA</a></li>
					</ul>
				</div>
			</nav>
		</header>';

?>