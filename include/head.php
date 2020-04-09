<?php 

	// check page
	$uri = $_SERVER['REQUEST_URI'];
	$pageTitle = '';

	
	if(strlen($uri) == 1) {
		$pageTitle = 'Home';
	}
	elseif(strpos($uri, "/notes") !== false) {
		$pageTitle = 'Notes';
	} elseif (strpos($uri, "/textbook") !== false) {
		$pageTitle = 'Textbook';
	} elseif (strpos($uri, "/workbook") !== false) {
		$pageTitle = 'Workbook';
	} elseif (strpos($uri, "/selection") !== false) {
		$pageTitle = 'Ayah Selection';
	} elseif (strpos($uri, "/answerbook") !== false) {
		$pageTitle = 'Answerbook';
	} elseif (strpos($uri, "/mocktest") !== false) {
		$pageTitle = 'Mock Test';
	} elseif (strpos($uri, "/videos") !== false) {
		$pageTitle = 'Videos';
	} elseif (strpos($uri, "/about") !== false) {
		$pageTitle = 'About';
	} elseif (strpos($uri, "/contact") !== false) {
		$pageTitle = 'Contact';
	}	
?>

<head>
	<title><?php echo $pageTitle; ?> - Quranic Arabic Institute</title>
	<meta charset="UTF-8">
	<meta name="description" content="<?php echo $pageTitle; ?> - Quranic Arabic Institute">
	<meta name="keywords" content="quranic, arabic, training, free, course, html, mauritius, islam">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
