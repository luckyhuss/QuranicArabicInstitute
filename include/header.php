<?php 

	$uri = $_SERVER['REQUEST_URI'];
	$active = 'class="active"';
	# home menu underlined
	$homeActive = strlen($uri) == 1 ? $active : '';
	# documents menu underlined
	$documentsActive = strpos($uri, "/notes") !== false || strpos($uri, "/textbook") !== false || strpos($uri, "/workbook") !== false || strpos($uri, "/answerbook") !== false || strpos($uri, "/selection") !== false || strpos($uri, "/mocktest") !== false ? $active : '';
	# videos menu underlined
	$videosActive = strpos($uri, "/videos") !== false ? $active : '';
	# about menu underlined
	$aboutActive = strpos($uri, "/about") !== false ? $active : '';
	# contact menu underlined
	$contactActive = strpos($uri, "/contact") !== false ? $active : '';
?>

	<header class="header-section clearfix">
		<!-- <div class="header-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<p></p>
					</div>
					<div class="col-md-6 text-md-right">
						<p>Quranic Arabic Institute</p>
					</div>
				</div>
			</div>
		</div> -->
		<div class="site-navbar">
			<!-- Logo -->
			<a href="/" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
			<div class="header-right">
				<?php include 'include/contactdetails.php';?>
				<!-- <button class="search-switch"><i class="fa fa-search"></i></button> -->
			</div>
			<!-- Menu -->
			<nav class="site-nav-menu">
				<ul>
					<li <?php echo $homeActive; ?>><a href="/">Home</a></li>
					<li <?php echo $documentsActive; ?>><a href="#" onclick="return false;">Documents</a>
						<ul class="sub-menu">
							<li><a href="notes">Notes</a></li>
							<li><a href="textbook">Textbook</a></li>
							<li><a href="workbook">Workbook</a></li>
							<li><a href="selection">Selection</a></li>
							<li><a href="answerbook">Answerbook</a></li>
							<li><a href="mocktest">Mock Test</a></li>
							<li><a href="https://ejtaal.net/aa" target="_blank">Hans Wehr Dictionary</a></li>
						</ul>
					</li>
					<li <?php echo $videosActive; ?>><a href="videos">Videos</a></li>
					<li <?php echo $aboutActive; ?>><a href="about">About</a></li>
					<li <?php echo $contactActive; ?>><a href="contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
