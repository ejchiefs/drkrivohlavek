<?php snippet('header'); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span3 text-center">
				<div class="break_20"></div>
				<img src="/assets/images/staff/<?php print $page->image; ?>.png" alt="<?php print $page->name(); ?>" />
			</div>
			<div class="span9">
				<?php print kirbytext($page->name()); ?>
				<?php print kirbytext($page->biography()); ?>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>