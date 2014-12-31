<footer>
	<div class="rug"">
		<div class="container">
			<div class="row">
				<div class="span8">
					<div class="fb-like" data-href="https://www.facebook.com/pages/Bradley-J-Krivohlavek-DDS-PC/127702727298822" data-layout="standard" data-action="recommend" data-colorscheme="dark" data-show-faces="true" data-share="true"></div>
				</div>
				<div class="span2 text-right">
					<a href="http://www.nedental.org/" target="_blank"><img src="<?php echo url('assets/images/logo-nda.png') ?>" alt="NDA" /></a>
				</div>
				<div class="span2 text-right">
					<a href="http://www.ada.org/en/" target="_blank"><img src="<?php echo url('assets/images/logo-ada.png') ?>" alt="ADA" /></a>
				</div>
			</div>
		</div>
	</div>
	<div class="floor">
		<div class="container">
			<div class="row">
				<div class="span10">
					<p><?php echo html($site->streetaddress()); ?></p>
					<p><?php echo html($site->city()); ?>, <?php echo html($site->state()); ?> <?php echo html($site->zip()); ?></p>
					<p><?php echo html($site->phone()); ?></p>
				</div>
				<div class="span2 text-right">
					<i class="fa fa-star gold"></i> <a href="http://www.rateadentist.com/addarating?officeId=7PyCxA6gn0fOKu4" target="_blank">Rate Us</a>
				</div>
			</div>
		</div>
	</div>
</footer>

</body>

</html>