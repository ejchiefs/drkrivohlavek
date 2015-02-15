<?php snippet('header'); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span9">
				<p><?php print kirbytext($page->text()); ?></p>
				<div class="break_40"></div>
				<h3>Office Hours</h3>
				<div class="row">
					<div class="span4"><b><p>Monday</p></b></div>
					<div class="span5"><p><?php print $page->officehoursm(); ?></p></div>
				</div>
				<div class="row">
					<div class="span4"><b><p>Tuesday</p></b></div>
					<div class="span5"><p><?php print $page->officehourst(); ?></p></div>
				</div>
				<div class="row">
					<div class="span4"><b><p>Wednesday</p></b></div>
					<div class="span5"><p><?php print $page->officehoursw(); ?></p></div>
				</div>
				<div class="row">
					<div class="span4"><b><p>Thursday</p></b></div>
					<div class="span5"><p><?php print $page->officehoursr(); ?></p></div>
				</div>
				<div class="row">
					<div class="span4"><b><p>Friday</p></b></div>
					<div class="span5"><p><?php print $page->officehoursf(); ?></p></div>
				</div>
				<div class="break_40"></div>
				<div class="row">
					<div class="span9"><p><?php print $page->afterhours(); ?></p></div>
				</div>
			</div>
			<div class="span3 text-center">
				<img src="/assets/images/contact-us/office.png" />
				<div class="break_20"></div>
				<p class="text12"><?php print $site->streetaddress(); ?><br/><?php print $site->city(); ?>, <?php print $site->state(); ?> <?php print $site->zip(); ?><br/><?php print $site->phone(); ?><br/><a href="https://www.google.com/maps/place/Bradley+J+Krivohlavek+DDS,PC/@42.045627,-97.446509,15z/data=!4m2!3m1!1s0x0:0x6257bba57f30a438" target="_blank">Get Directions</a></p>
			</div>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>