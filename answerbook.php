<!DOCTYPE html>
<html lang="zxx">
<!-- Head section  -->
<?php include 'include/head.php';?>
<!-- Head section  -->
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<?php include 'include/header.php';?>
	<!-- Header section end  -->
	
	<!-- Page top section  -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/6.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2>Answerbook</h2>
					<!-- <p></p>
					<a href="" class="site-btn">Contact us</a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- Page top section end  -->

	<!-- Elements section  -->
	<section class="elements-section spad">
		<div class="container">
			

			<?php
				$pass = $_POST['pass'];

				if($pass == "qa_2021")
				{
						include("include/element.php");
				}
				else
				{
					if(isset($_POST))
					{?>
							<p>Enter your password to get access to these materials</p>
							<?php if($pass != '') {
							?>
								<p class="small-title">Incorrect password, please try again</p>
							<?}?>
							<div class="col-lg-3">
								<form method="POST" action="" class="contact-form">
								<input type="password" placeholder="Password" name="pass" maxlength="10"></input><br/>
								<input type="submit" name="submit" value="Get Access" class="site-btn sb-dark"></input>
								</form>
							</div>
					<?}
				}
			?>


			<!-- Element section -->
			<?php #include 'include/element.php';?>
			<!-- Element section  end -->
	</section>
	<!-- Elements section end  -->

	<!-- Call to action section  -->
	<?php include 'include/action.php';?>
	<!-- Call to action section end  -->

	<!-- Footer section -->
	<?php include 'include/footer.php';?>
	<!-- Footer section end -->

	<!-- Libraries section  -->
	<?php include 'include/libraries.php';?>
	<!-- Libraries section end -->

	</body>
</html>