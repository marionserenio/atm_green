<?php $page = ''; ?>
  <?php 
//include header.php
include_once('includes/header.php');
?>

<div id="content_aboutus" class="container">
		<h2><?php echo $lang['ABOUT_US_HEADER'] ?></h2>
		<div class="divider"></div>
			<div class="row">
				<div class="span10">

				<h3><?php echo $lang['ABOUT_US_WHO_WE_ARE'] ?></h3>
					<p><?php echo $lang['ABOUT_US_WHO_WE_ARE_P'] ?>
					</p>

				<h3><?php echo $lang['ABOUT_US_WHY_CHOOSE'] ?></h3>
				<p><?php echo $lang['ABOUT_US_WHY_CHOOSE_P'] ?>
				</p>

				<h3><?php echo $lang['ABOUT_US_CLIENTS'] ?></h3>
				<ul>
					<li><a href="#">Lorem ipsum dolor sit amet</a></li>
					<li><a href="#">consectetur adipiscing elit</a></li>
					<li><a href="#">Praesent tempus consequat</a></li>
					<li><a href="#">et interdum. Nullam at ipsum</a></li>
					<li><a href="#">Etiam convallis pretium</a></li>
					<li><a href="#">nunc nec malesuada</a></li>
					<li><a href="#">Sed rhoncus erat quis turpis</a></li>
					<li><a href="#">ullamcorper eget fermentum</a></li>
					<li><a href="#">nulla tristique. Nullam quam</a></li>
					<li><a href="#">convallis vel laoreet vel</a></li>
				</ul>
				</div>
			</div>	
			<div class="divider"></div>
</div>	

<?php 
//include footer.php
include_once('includes/footer.php');
?>