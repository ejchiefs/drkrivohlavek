<?php snippet('header'); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span8">
				<p><?php print kirbytext($page->introtext()); ?></p>
			</div>
			<div class="span4">
				<img src="/assets/images/what-to-expect/lobby.png" />
				<div class="break_40"></div>
				<img src="/assets/images/what-to-expect/coffee.png" />
				<div class="break_40"></div>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="span8">
				<p><?php print kirbytext($page->childrentext()); ?></p>
			</div>
			<div class="span4">
				<div class="break_40"></div>
				<div class="break_40"></div>
				<img src="/assets/images/what-to-expect/children.png" />
				<div class="break_40"></div>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="span12">
				<p><?php print kirbytext($page->emergencytext()); ?></p>
			</div>
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