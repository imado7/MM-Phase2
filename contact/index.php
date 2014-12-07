<?php
	require_once dirname(__FILE__) . '/../include/lib/Swift/swift_required.php';
	require_once './SwiftHelper.php';
	require_once dirname(__FILE__) . '/../include/lib/securimage/securimage.php';
	
	header('content-type: application/json');
	$image = new Securimage();

	//sleep(1);
	$regions = array(
		'EMEA' => 'nikki.alexander@motivforce.com',
		'NORTHAMERICA' => 'lsmith@hmiaward.com',
		'LATINAMERICA' => 'nelson.henriquez@motivforce.com',
		'CHINA' => 'tony.zhang@motivforce.com',
		'APAC' => 'john.kovacevic@motivforce.com',
	);

	if (!array_key_exists($_POST['region'], $regions)) $region = 'EMEA';
	else $region = $_POST['region'];

	if ($image->check($_POST['ct_captcha'])) {
		// If we got here, the captcha was correct - and we can assume that the form input was ok.
		$message = new Swift_Message();
		
		$message->addTo($regions[$region]);
		$message->setSubject('MMI website enquiry');
		$message->setFrom($regions[$region], 'MMI Website');
		$message->setBody(getBody());
		$message->setReplyTo($_POST['email'], $_POST['name']);

		$result = SwiftHelper::sendMessage($message);
		
		echo json_encode(array_merge(array('status' => 'OK', 'result' => $result)));
	} else {
		$errors = array('ct_captcha' => 'The code entered was incorrect');
		echo json_encode(array_merge(array('status' => 'ERROR', 'errors' => $errors), $_POST));
	} 
	

	function getBody() {
		$body = <<<EOF
An enquiry was made on the MMI website contact form...
----------------------------------------
Name: {$_POST['name']}
Email: {$_POST['email']}
Phone: {$_POST['phone']}
Company: {$_POST['company']}
----------------------------------------
{$_POST['message']}
----------------------------------------
EOF;
		return $body;
	}