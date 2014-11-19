<?php snippet('header'); ?>

<section class="content">
	<div class="container">
		<h1><?php print $page->title; ?></h1>
		<div class="row">
			<div class="span3 text-center">
				<img src="/assets/images/staff/drkrivohlavek.png" alt="Dr Brad Krivohlavek" />
			</div>
			<div class="span9">
				<?php echo kirbytext($page->drkrivohlavek()); ?>
			</div>
		</div>
		<div class="row">
			<div class="span3 text-center">
				<img src="/assets/images/staff/drhatfield.png" alt="Dr Jenna Hatfield" />
			</div>
			<div class="span9">
				<?php echo kirbytext($page->drhatfield()); ?>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>