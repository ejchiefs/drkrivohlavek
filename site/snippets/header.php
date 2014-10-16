<!DOCTYPE html>
<html lang="en">
<head>
  
<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
<meta charset="utf-8" />
<meta name="description" content="<?php echo html($site->description()) ?>" />
<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
<meta name="robots" content="index, follow" />

<?php echo css('assets/styles/bootstrap-responsive.css'); ?>
<?php echo css('assets/styles/bootstrap.css'); ?>
<?php echo css('assets/styles/styles.css'); ?>

<?php echo css('assets/js/bootstrap.js'); ?>

</head>

<body>

<header>
	<div class="container">
		<a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo html($site->title()) ?>" class="logo" /></a>
		<div class="contact">
			<span class="inquiry">Have a Question? Call Now!</span><br/>
			<span class="number">(402) 371-1170</span>
		</div>
		<?php snippet('menu'); ?>
   </div>
</header>

<section id="banner">
	<div class="banner">
		<div class="curtains"></div>
	</div>
</section>