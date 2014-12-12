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
<?php echo css('assets/js/fancybox/source/jquery.fancybox.css?v=2.1.5'); ?>
<?php echo css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'); ?>

<?php echo js('//code.jquery.com/jquery-latest.min.js'); ?>
<?php echo js('assets/js/bootstrap.js'); ?>
<?php echo js('assets/js/scripts.js'); ?>
<?php echo js('assets/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5'); ?>

</head>

<body>

<?php snippet('appointment'); ?>
<?php snippet('facebook'); ?>

<header>
	<div class="container">
		<a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo html($site->title()) ?>" class="logo" /></a>
		<div class="contact">
			<span class="inquiry">Have a Question? Call Now!</span><br/>
			<span class="number"><?php echo html($site->phone()) ?></span>
		</div>
		<?php snippet('menu'); ?>
	</div>
</header>

<?php if ($page->uid == 'home') : ?>
	<section id="banner">
		<div class="banner">
			<div class="curtains">
				<div class="container">
					<div class="row">
						<div class="span5"></div>
						<div class="span7">
							<div class="customerQuote">
								<p class="quotation">As always, my visit to your dental office was a pleasant experience. Dr. K. has been my dentist for all the 35 years he has been in practice so that should show that I think he is GREAT as well as his entire staff.</p>
								<p class="quoter text-right">&mdash; LaDonna McMurty</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php else : ?>
	<section id="subbanner">
		<div class="banner">
			<div class="curtains">
				<div class="container">
					<h1><?php print $page->title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section id="breadcrumb">
		<div class="container">
			<?php foreach ($site->breadcrumb() as $crumb) :
				if($crumb->isActive()) :
					print html($crumb->title());
				else :
					print '<a href="'.$crumb->url().'">'.html($crumb->title()).'</a>&nbsp;&nbsp;/&nbsp;&nbsp;';
				endif;
			endforeach; ?>
		</div>
	</section>
<?php endif; ?>