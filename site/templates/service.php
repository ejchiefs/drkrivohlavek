<?php

snippet('header');

$i = 1;
$img = '';
$services = $pages->findBy('uid','dental-care')->children();

if ($page->hasImages()):
	foreach ($page->images() as $image):
		$img = $image->url();
	endforeach;
endif;

?>

<section class="content">
	<div class="container">
		<div class="row">
			<?php if ($img): ?>
			<div class="span12"><h2><?php print kirbytext($page->title()); ?></h2></div>
			<div class="span9">
				<p><?php print kirbytext($page->text()); ?></p>
			</div>
			<div class="span3">
				<img src="<?php print $img; ?>" />
			</div>
			<?php else : ?>
			<div class="span12">
				<h2><?php print kirbytext($page->title()); ?></h2>
				<p><?php print kirbytext($page->text()); ?></p>
			</div>
			<?php endif; ?>
		</div>
		<div class="break_40"></div>
		<div class="row text-center">
			<a href="#appointment" class="button button_large green fancybox">Request an Appointment</a>
			<div class="break_10"></div>
			<p class="text14">or call us at <?php echo html($site->phone()) ?></p>
		</div>
		<hr/>
		<div class="row">
			<div class="span12"><h3>View our other services:</h3></div>
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
	</div>
</section>

<?php snippet('footer'); ?>