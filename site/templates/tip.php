<?php snippet('header'); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2><?php print kirbytext($page->title()); ?></h2>
				<p><?php print kirbytext($page->text()); ?></p>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>