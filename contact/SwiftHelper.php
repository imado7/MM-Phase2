<?php
class SwiftHelper
{
	public static function htmlMessage($to,$template,$subject){
		global $container;
		
		$config = $container->getEmailConfig();
		
		// Create a message
		$message = Swift_Message::newInstance($subject)
			->setFrom($config->get('general.fromAddress'))
			->setTo($to)
			->setBody($template, 'text/html')
			->setContentType('text/html');
		
		// Send the message
		$num_sent = self::sendMessage($message);
		
		if($num_sent<1)
			return false;
		else
			return true;
		
	}
	
	public static function sendMessage($swift_message)
	{
		$swift = self::getSwift();
		
		try{
			return $swift->send($swift_message);
		}
		catch(\Exception $e) {
			return 0;
		}

	}

	/**
	 * 
	 * @return 
	 */
	public static function getSwift()
	{
		switch(strtolower(php_uname('n')))
		{
/*			case 'machine-name':
				$transport = Swift_SmtpTransport::newInstance('192.168.0.1', 25);
				break;
*/
			case 'tom-vaio':
				$transport = Swift_SmtpTransport::newInstance('localhost', 25);
				break;			
			default:
				$transport = Swift_MailTransport::newInstance();
				break;
		}

		$swift = Swift_Mailer::newInstance($transport);
		return $swift;
	}
}