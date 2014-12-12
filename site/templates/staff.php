<?php snippet('header'); ?>

<?php
$staffDoctors = $pages->children()->filterBy('role', 'doctor');
$staffBusiness = $pages->children()->filterBy('role', 'business');
$staffAssistants = $pages->children()->filterBy('role', 'assistant');
$staffHygienists = $pages->children()->filterBy('role', 'hygienist');
?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="span3"><h2>Doctors</h2></div>
			<?php foreach($staffDoctors as $person): ?>
				<div class="span3 centered">
					<img src="/assets/images/staff/<?php print $person->image; ?>.png" alt="<?php print $person->name; ?>" class="staff" />
					<p class="text14"><?php print $person->name; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="grid_break_40"></div>
		<div class="row">
			<div class="span3"><h2>Business Staff</h2></div>
			<?php foreach($staffBusiness as $person): ?>
				<div class="span3 centered">
					<img src="/assets/images/staff/<?php print $person->image; ?>.png" alt="<?php print $person->name; ?>" class="staff" />
					<p class="text14"><?php print $person->name; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="grid_break_40"></div>
		<div class="row">
			<div class="span3"><h2>Dental Assistants</h2></div>
			<?php foreach($staffAssistants as $person): ?>
				<div class="span3 centered">
					<img src="/assets/images/staff/<?php print $person->image; ?>.png" alt="<?php print $person->name; ?>" class="staff" />
					<p class="text14"><?php print $person->name; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="grid_break_40"></div>
		<div class="row">
			<div class="span3"><h2>Dental Hygienists</h2></div>
			<?php foreach($staffHygienists as $person): ?>
				<div class="span3 centered">
					<img src="/assets/images/staff/<?php print $person->image; ?>.png" alt="<?php print $person->name; ?>" class="staff" />
					<p class="text14"><?php print $person->name; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>