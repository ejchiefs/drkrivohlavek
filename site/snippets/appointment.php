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
		<? /*< script type="text/javascript"  src="http://www.dentalratingsnetwork.com/myofficeratings/requestapptform?id=7PyCxA6gn0fOKu4">
		</script> */ ?>
		
		<FORM name="contactform" action="contact.php" method="POST" enctype="x-www-form-encoded">
		
		<INPUT type="hidden" name="recipient" value="drk@drkrivohlavek.com">
		<INPUT type="hidden" name="subject" value="Contact Response Form">
		<INPUT type="hidden" name="title" value="Contact Response Form">
		<INPUT type="hidden" name="redirect" value="http://www.drkrivohlavek.com/thankyou.php">
		
		<table cellspacing="0" cellpadding="0" border="0" width="600">
		<tr>
			<td width="600" height="300" align="center" valign="top">
				<table cellspacing="0" cellpadding="0" border="0" width="600">
				<tr>
					<td width="300" align="left" valign="top">
						<table cellspacing="0" cellpadding="0" border="0" width="300">
						<tr>
							<td width="120" height="25" align="left" valign="middle">Name</td>
							<td width="180" height="25" align="left" valign="middle"><INPUT name="contact_name" type="text" size="25" class="contact"></td>
						</tr>
						<tr>
							<td width="120" height="25" align="left" valign="middle">Address</td>
							<td width="180" height="25" align="left" valign="middle"><INPUT name="contact_address" type="text" size="25" class="contact"></td>
						</tr>
						<tr>
							<td width="120" height="25" align="left" valign="middle">City</td>
							<td width="180" height="25" align="left" valign="middle"><INPUT name="contact_city" type="text" size="25" class="contact"></td>
						</tr>
						<tr>
							<td width="120" height="25" align="left" valign="middle">State</td>
							<td width="180" height="25" align="left" valign="middle"><INPUT name="contact_state" type="text" size="25" class="contact"></td>
						</tr>
						<tr>
							<td width="120" height="25" align="left" valign="middle">Zip</td>
							<td width="180" height="25" align="left" valign="middle"><INPUT name="contact_zip" type="text" size="25" class="contact"></td>
						</tr>
						<tr>
							<td width="120" height="25" align="left" valign="middle">Phone Number</td>
							<td width="180" height="25" align="left" valign="middle"><INPUT name="contact_phone" type="text" size="25" class="contact"></td>
						</tr>
						<tr>
							<td width="120" height="25" align="left" valign="middle">Email Address</td>
							<td width="180" height="25" align="left" valign="middle"><INPUT name="contact_email" type="text" size="25" class="contact"></td>
						</tr>
						<tr>
							<td width="300" align="left" valign="top" colspan="2">
								<br>Questions or Comments<br><br>
								<TEXTAREA name="contact_comments" rows="4" cols="35" class="contact"></TEXTAREA>
							</td>
						</tr>
						<tr>
							<td width="300" height="15" colspan="2"></td>
						</tr>
						<tr>
							<td width="300" align="left" valign="top" colspan="2">
								<INPUT type="reset" name="reset" value="RESET" class="contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<INPUT type="submit" name="submit" value="SUBMIT" class="contact">
							</td>
						</tr>
						</table>
					</td>
					<td width="300" align="left" valign="top">
						<table cellspacing="0" cellpadding="0" border="0" width="300">
						<tr>
							<td width="300" height="215"></td>
						</tr>
						<tr>
							<td width="300" align="center" valign="top">
								<b>Dr. Bradley J. Krivohlavek, D.D.S.,P.C.</b><br>
								2501 Lakeridge Drive, Suite 102<br>
								Norfolk, NE 68701<br>
								402.371.1170<br><br>
								<b>Office Hours</b>
							</td>
						</tr>
						</table>
						
						<table cellspacing="0" cellpadding="0" border="0" width="300">
						<tr>
							<td width="145" align="right" valign="top">
								Mon,Wed,Thurs:<br>
								Tuesday:<br>
								Friday:
							</td>
							<td width="10"></td>
							<td width="145" align="left" valign="top">
								8-12 and 1-5<br>
								7-1<br>
								7-12
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
		
		</FORM>
		
	</div>
</div>
