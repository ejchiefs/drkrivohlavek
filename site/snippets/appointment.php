<?php 

if ($_POST) {

	$message = 'Name: '.$_POST['contact_name'].'<br/>';
	$message .= 'Address: '.$_POST['contact_address'].'<br/>';
	$message .= 'City: '.$_POST['contact_city'].'<br/>';
	$message .= 'State: '.$_POST['contact_state'].'<br/>';
	$message .= 'Zip: '.$_POST['contact_zip'].'<br/>';
	$message .= 'Phone: '.$_POST['contact_phone'].'<br/>';
	$message .= 'Email: '.$_POST['contact_email'].'<br/>';
	$message .= 'Comments: '.$_POST['contact_comments'].'<br/>';

	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_USERPWD, 'api:key-8tend1xjk7996avof9uve2gkgrj54u47');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v2/drkrivohlavek.com/messages');
	curl_setopt($ch, CURLOPT_POSTFIELDS, array('from' => 'webmaster@drkrivohlavek.com',
	'to' => 'drkoffice@cableone.net',
	'subject' => 'Site Submissions',
	'html' => $message));

	$result = curl_exec($ch);
	curl_close($ch);

	echo "<script language=\"Javascript\" type=\"text/Javascript\">location = \"/\"</script>";
}

?>

<div style="display:none">
	<div id="appointment">

		<?php /* < script type="text/javascript"  src="http://www.dentalratingsnetwork.com/myofficeratings/requestapptform?id=7PyCxA6gn0fOKu4"></script> */ ?>
		
		<form name="contactform" action="contact.php" method="POST" enctype="x-www-form-encoded">
		
		<input type="hidden" name="recipient" value="drk@drkrivohlavek.com">
		<input type="hidden" name="subject" value="Contact Response Form">
		<input type="hidden" name="title" value="Contact Response Form">
		<input type="hidden" name="redirect" value="/">
		
		<table cellspacing="0" cellpadding="0" border="0" width="400">
		<tr>
			<td width="220" height="25" align="left" valign="middle">Name</td>
			<td width="180" height="25" align="left" valign="middle"><input name="contact_name" type="text" size="25" class="contact" /></td>
		</tr>
		<tr>
			<td width="220" height="25" align="left" valign="middle">Address</td>
			<td width="180" height="25" align="left" valign="middle"><input name="contact_address" type="text" size="25" class="contact" /></td>
		</tr>
		<tr>
			<td width="220" height="25" align="left" valign="middle">City</td>
			<td width="180" height="25" align="left" valign="middle"><input name="contact_city" type="text" size="25" class="contact" /></td>
		</tr>
		<tr>
			<td width="220" height="25" align="left" valign="middle">State</td>
			<td width="180" height="25" align="left" valign="middle"><input name="contact_state" type="text" size="25" class="contact" /></td>
		</tr>
		<tr>
			<td width="220" height="25" align="left" valign="middle">Zip</td>
			<td width="180" height="25" align="left" valign="middle"><input name="contact_zip" type="text" size="25" class="contact" /></td>
		</tr>
		<tr>
			<td width="220" height="25" align="left" valign="middle">Phone Number</td>
			<td width="180" height="25" align="left" valign="middle"><input name="contact_phone" type="text" size="25" class="contact" /></td>
		</tr>
		<tr>
			<td width="220" height="25" align="left" valign="middle">Email Address</td>
			<td width="180" height="25" align="left" valign="middle"><input name="contact_email" type="text" size="25" class="contact" /></td>
		</tr>
		<tr>
			<td width="400" align="left" valign="top" colspan="2">
				<br>Questions or Comments<br><br/>
				<textarea name="contact_comments" rows="4" cols="35" class="contact"></textarea>
			</td>
		</tr>
		<tr>
			<td height="15" colspan="2"></td>
		</tr>
		<tr>
			<td align="left" valign="top" colspan="2"><input type="submit" name="submit" value="SUBMIT" class="contact" /></td>
		</tr>
		</table>
		
		</form>
		
	</div>
</div>
