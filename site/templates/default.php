<?php snippet('header'); ?>

<section class="content">
	<article>
		<div class="container">
			<h1><?php echo html($page->title()); ?></h1>
			<?php echo kirbytext($page->text()); ?>
		</div>
	</article>
</section>

<?php snippet('footer'); ?>