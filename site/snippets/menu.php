<nav class="menu">
	<ul>
	<?php foreach($pages->visible() AS $p): ?>
		<li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
	<?php endforeach ?>
	<li class="right"><a href="#appointment" class="fancybox">Request Appointment</a></li>
	</ul>
</nav>