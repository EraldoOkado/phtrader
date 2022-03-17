<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - PH Trader</title>
</head>
<body>
<div class="container">
	<div class="sidebar">
	 <a class="logo-expand"><img src="img/logo.png"></a>
	 <div class="side-wrapper">
	  <div class="side-menu">
	   <a class="sidebar-link discover is-active" href="home">
		<svg viewBox="0 0 24 24" fill="currentColor">
		 <path d="M9.135 20.773v-3.057c0-.78.637-1.414 1.423-1.414h2.875c.377 0 .74.15 1.006.414.267.265.417.625.417 1v3.057c-.002.325.126.637.356.867.23.23.544.36.87.36h1.962a3.46 3.46 0 002.443-1 3.41 3.41 0 001.013-2.422V9.867c0-.735-.328-1.431-.895-1.902l-6.671-5.29a3.097 3.097 0 00-3.949.072L3.467 7.965A2.474 2.474 0 002.5 9.867v8.702C2.5 20.464 4.047 22 5.956 22h1.916c.68 0 1.231-.544 1.236-1.218l.027-.009z" />
		</svg>
		Dashboard
	   </a>
	   <a class="sidebar-link trending" href="sinais">
		<svg viewBox="0 0 24 24" fill="currentColor">
		 <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.007l.002.354c.012 1.404.096 2.657.242 3.451 0 .015.16.802.261 1.064.16.38.447.701.809.905a2 2 0 00.91.219c.249-.012.66-.137.954-.242l.244-.094c1.617-.642 4.707-2.74 5.891-4.024l.087-.09.39-.42c.245-.322.375-.715.375-1.138 0-.379-.116-.758-.347-1.064-.07-.099-.18-.226-.28-.334l-.379-.397c-1.305-1.321-4.129-3.175-5.593-3.79 0-.013-.91-.393-1.343-.407h-.057c-.665 0-1.286.379-1.603.991-.087.168-.17.496-.233.784l-.114.544c-.13.874-.216 2.216-.216 3.688zm-6.332-1.525C3.673 10.482 3 11.162 3 12a1.51 1.51 0 001.503 1.518l3.7-.328c.65 0 1.179-.532 1.179-1.19 0-.658-.528-1.191-1.18-1.191l-3.699-.327z" />
		</svg>
		Sinais
	   </a>
	   <a class="sidebar-link" href="estatisticas">
		<svg viewBox="0 0 24 24" fill="currentColor">
      		<path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2h9.34c3.4 0 5.32 1.93 5.33 5.33v9.34c0 3.4-1.93 5.33-5.33 5.33H7.33C3.93 22 2 20.07 2 16.67V7.33C2 3.93 3.93 2 7.33 2zm4.72 15.86c.43 0 .79-.32.83-.75V6.92a.815.815 0 00-.38-.79.84.84 0 00-1.28.79v10.19c.05.43.41.75.83.75zm4.6 0c.42 0 .78-.32.83-.75v-3.28a.839.839 0 00-1.28-.79.806.806 0 00-.38.79v3.28c.04.43.4.75.83.75zm-8.43-.75a.827.827 0 01-.83.75c-.43 0-.79-.32-.83-.75V10.2a.84.84 0 01.39-.79c.27-.17.61-.17.88 0s.42.48.39.79v6.91z" />
     	</svg>
     	Estatísticas
	   </a>
	  </div>
	 </div>
	</div>
	<div class="wrapper">
	 <div class="header">
	  <div class="search-bar">
		<div class='small-box'>
			<div class="top-box">
				<i class="fa-solid fa-bell"></i>
				<h2> Qtd. Sinais</h2>
			</div>
			<p>5</p>
		</div>
		<div class='small-box'>
			<div class="top-box">
				<i class="fa-solid fa-input-numeric"></i>
				<h2> Placar</h2>
			</div>
			<p>5 x 0</p>
		</div>
		<div class='small-box'>
			<div class="top-box">
				<i class="fa-solid fa-clock-twelve fa-spin"></i>
				<h2> Assinatura até:</h2>
			</div>
			<p>30/03/2022</p>
		</div>
	  </div>
	  <div class="user-settings">
	   <img class="user-img" src="img/user.png" alt="">
	   <div class="user-name">Eraldo Okado</div>
	  </div>
	 </div>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
	 <div class="main-container">
	  	<?php include('home.php'); ?>
	  </div>
	</div>
	  <footer>
		<div class="footer">
			<p>Grupo Barbosa & CIA - Todos os direitos reservados.</p>
		</div>
	  </footer>
</body>
</html>