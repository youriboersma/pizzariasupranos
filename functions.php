<?php

function htmlheader($p_strTitle) {

	echo("<!DOCTYPE html>
		<html lang='en'>

		<head>
			<meta charset='UTF-8'>
			<title>".$p_strTitle."</title>
			<meta name='viewport' content='width=device-width, initial-scale=1'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
			<script src='https://kit.fontawesome.com/0399110f0f.js' crossorigin='anonymous'></script>
			<link rel='stylesheet' href='../styling/style.css'>
            
		</head>
	");

}

function htmlcontact($p_strTitle) {

	echo("<!DOCTYPE html>
		<html lang='en'>

		<head>
			<meta charset='UTF-8'>
			<title>".$p_strTitle."</title>
			<meta name='viewport' content='width=device-width, initial-scale=1'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
			<script src='https://kit.fontawesome.com/0399110f0f.js' crossorigin='anonymous'></script>
			<link rel='stylesheet' href='../styling/style.css'>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>

		</head>
	");

}

function htmlberichten($p_strTitle) {
	echo('<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
			<title>'.$p_strTitle.'</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
            <script src="https://kit.fontawesome.com/0399110f0f.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="../styling/style.css">
        </head>'
        );
}

function bg() {

    echo("<!-- partial:index.partial.html -->
		<header class='banner'>
		  <div class='banner__overlay'>
			<div class='banner__container'>
			  <h1 class='banner__hero'>Pizzeria soprano's</h1>
			  <div>
				<a href='./menu.php' class='button button--primary'>Bekijk het menu</a>
			  </div>
			</div>
		  </div>");

}

function htmlnavbar() {

	echo("<body>
		
		  <!-- start navigation -->
          <nav>
            <span class='nav-button'></span>
            <ul class='nav' role='navigation'>
              <li class='burger-menu'>
                <a href='#'><i class='fa-solid fa-bars'></i></a>
                <ul class='nav__sub'>
                  <li>
                    <a href='./menu.php'>Menu</a>
                  </li>
                  <li>
                    <a href='./contact.php'>Contact</a>
                  </li>
                  <li>
                    <a href='./about.php'>About</a>
                  </li>
                </ul>
              </li>
              <li class='home'>
                <a class='home-image' href='./index.php'><img src='../images/sopranos.png' style='width: 240px;'></a>
              </li>
              <li class='cart'>
                <a href='./winkelwagen.php'><i class='fa-solid fa-cart-shopping'></i></a>
              </li>
              <li class='account'>
                <a href='./login.php'><i class='fa-solid fa-user'></i></a>    
              </li>
            </ul>
          </nav>
        </header>
	");

}