<?php snippet('header'); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span3 text-center">
				<img src="/assets/images/staff/drkrivohlavek.png" alt="Dr Brad Krivohlavek" />
				<p class="text12">Dr. Brad Krivohlavek</p>
				<div class="break_20"></div>
				<img src="/assets/images/staff/drhatfield.png" alt="Dr Jenna Hatfield" />
				<p class="text12">Dr. Jenna Hatfield</p>
			</div>
			<div class="span9">
				<?php echo kirbytext($page->text()); ?>
				<div class="row">
					<div class="span4"><?php echo kirbytext($page->servicescolone()); ?></div>
					<div class="span4"><?php echo kirbytext($page->servicescoltwo()); ?></div>
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