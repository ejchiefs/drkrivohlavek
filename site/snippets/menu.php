<nav class="menu">
	<ul>
	<?php foreach($pages->visible() AS $p): ?>
		<li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
	<?php endforeach ?>
	<li class="right"><a href="http://www.rateadentist.com/com/rateadentist/view/officesummary/request-appointment.jsf?_afPfm=woyunv3q6" target="_blank">Request Appointment</a></li>
	</ul>
</nav>