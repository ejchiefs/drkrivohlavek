<?php

snippet('header');

$i = 1;
$tips = $pages->findBy('uid','tips')->children();

?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2><?php print kirbytext($page->title()); ?></h2>
				<p><?php print kirbytext($page->text()); ?></p>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="span12"><h3>View our other tips:</h3></div>
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