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

<?php
$testimonialArray = array(
	array(
		"quote" => "As always, my visit to your dental office was a pleasant experience. Dr. K. has been my dentist for all the 35 years he has been in practice so that should show that I think he is GREAT as well as his entire staff.",
		"name" => "LaDonna"),
	array(
		"quote" => "I am always thoroughly impressed with my visits to this office. The staff is extremely friendly and knowledgeable and I feel comfortable with everyone there. Always an excellent experience!",
		"name" => "Heather"),
	array(
		"quote" => "I have always had a great experience at Dr. Krivohlavek's dental office. I almost feel like family. They know us by name and make sure we feel comfortable from beginning to end. Both of my daughters have always been actually excited to go for a dental check-up, which is nice.",
		"name" => "Amber")
);
?>

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
								<?php $quotation = array_rand($testimonialArray); ?>
								<p class="quotation"><?php print $testimonialArray[$quotation]['quote']; ?></p>
								<p class="quoter text-right">&mdash; <?php print $testimonialArray[$quotation]['name']; ?></p>
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
					<?php if ($page->parent()) : ?>
						<h1><?php print $page->parent()->title(); ?></h1>
					<?php else : ?>
						<h1><?php print $page->title(); ?></h1>
					<?php endif; ?>
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