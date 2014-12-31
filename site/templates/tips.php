<?php

snippet('header');

$i = 1;
$tips = $page->children();

?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span12"><p><?php echo kirbytext($page->text()); ?></p></div>
		</div>
		<div class="row">
			<div class="span6">
				<ul>
					<?php foreach($tips as $tip): ?>
					<li><a href="/<?php print $tip->uri; ?>"><?php print $tip->title; ?></a></li>
					<?php if ($i % (round($tips->count() / 2)) == 0 && $i < $tips->count()) : ?>
				</ul>
			</div>
			<div class="span6">
				<ul>
					<?php endif; ?>
					<?php $i++; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>