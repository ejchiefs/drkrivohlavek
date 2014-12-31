<?php snippet('header'); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span3 text-center">
				<div class="break_20"></div>
				<img src="/assets/images/staff/<?php print $page->image; ?>.png" alt="<?php print $page->name(); ?>" />
			</div>
			<div class="span9">
				<h2><?php print kirbytext($page->name()); ?></h2>
				<p><?php print kirbytext($page->biography()); ?></p>
				<div class="break_40"></div>
				<p><a href="/staff">Return to Staff</a></p>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>