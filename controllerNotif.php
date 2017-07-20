<?php 

require_once 'vendor/autoload.php';// Loads the library
use Twilio\Rest\Client;

require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mailgun = new Mailgun('key-ba89958c1a4d7d4b3742c5ef362a4609', new \Http\Adapter\Guzzle6\Client());

class controllerNotif{
	
	public function sendMail($mail, $subject, $corps){
		
		
		$mail = "matthieu.nauleau@gmail.com";
		
		# Instantiate the client.
		$mgClient = new Mailgun('key-ba89958c1a4d7d4b3742c5ef362a4609');
		$domain = "sandbox49f3e5fc8ab64b2c86a838ed8c28fe7f.mailgun.org";
		
		
		
		# Make the call to the client.
		$result = $mgClient->sendMessage($domain,
				array('from'    => 'Admin <admin@samples.mailgun.org>',
						'to'      => $mail,
						'subject' => $subject,
						'text'    => $corps));
		echo 'ok';
			
	}
	
	public function sendSMS($num, $corps){
		
		
		
		// Your Account Sid and Auth Token from twilio.com/user/account
		$sid = "AC734aee1505aee2a4e4885d58499f1d66";
		$token = "1b01644ffc5f72ad5771dfe65eae0f1a";
		$client = new Client($sid, $token);
		$client->messages->create(
				$num,
				array(
						'from' => "+33644602705",
						'body' => $corps,
						'mediaUrl' => "https://climacons.herokuapp.com/clear.png",
				)
				);
		return;
	}
	
}
?>