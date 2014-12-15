<?php

snippet('header');

$i = 1;
$services = $pages->findBy('uid','dental-care')->children();

?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span3 text-center">
				<a href="/staff/dr-brad-krivohlavek"><img src="/assets/images/home/drkrivohlavek.png" alt="Dr Brad Krivohlavek" /></a>
				<p class="text12"><a href="/staff/dr-brad-krivohlavek">Dr. Brad Krivohlavek</a></p>
				<div class="break_20"></div>
				<a href="/staff/dr-jenna-hatfield"><img src="/assets/images/home/drhatfield.png" alt="Dr Jenna Hatfield" /></a>
				<p class="text12"><a href="/staff/dr-jenna-hatfield">Dr. Jenna Hatfield</a></p>
			</div>
			<div class="span9">
				<?php echo kirbytext($page->text()); ?>
				<div class="row">
					<div class="span4">
						<ul>
							<?php foreach($services as $service): ?>
							<li><a href="/<?php print $service->uri; ?>"><?php print $service->title; ?></a></li>
							<?php if ($i % (round($services->count() / 2)) == 0 && $i < $services->count()) : ?>
						</ul>
					</div>
					<div class="span5">
						<ul>
							<?php endif; ?>
							<?php $i++; ?>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="break_40"></div>
				<div class="row text-center">
					<a href="#appointment" class="button button_large green fancybox">Request an Appointment</a>
					<div class="break_10"></div>
					<p class="text14">or call us at <?php echo html($site->phone()) ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>