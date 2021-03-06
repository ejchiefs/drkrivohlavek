<?php

snippet('header');

$i = 1;
$services = $page->children();

?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span12"><p><?php echo kirbytext($page->introtext()); ?></p></div>
		</div>
		<div class="row">
			<div class="span6">
				<ul>
				<?php foreach($services as $service): ?>
					<li><a href="/<?php print $service->uri; ?>"><?php print $service->title; ?></a></li>
					<?php if ($i % (round($services->count() / 2)) == 0 && $i < $services->count()) : ?>
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
		<div class="break_40"></div>
		<div class="row">
			<div class="span12"><p><?php echo kirbytext($page->outrotext()); ?></p></div>
		</div>
		<div class="break_40"></div>
		<div class="row text-center">
			<a href="#appointment" class="button button_large green fancybox">Request an Appointment</a>
			<div class="break_10"></div>
			<p class="text14">or call us at <?php echo html($site->phone()) ?></p>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>