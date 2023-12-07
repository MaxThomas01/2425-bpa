<?php
if($_POST!='' && isset($_POST)){
	
	if($_REQUEST['userName']!='' || $_REQUEST['userEmail']!='' || $_REQUEST['userMobileNumber']!='' || $_REQUEST['bookDate']!='' || $_REQUEST['bookTime']!='' || $_REQUEST['NoofPersons']!='')
	{
		$to = "info@morselrestaurant.com"; 
		$name = strip_tags($_REQUEST['userName']); 
		$from = strip_tags($_REQUEST['userEmail']); 
		$mobilenumber = strip_tags($_REQUEST['userMobileNumber']);
		$date = strip_tags($_REQUEST['bookDate']); 
		$time = strip_tags($_REQUEST['bookTime']); 
		$totlepersons = strip_tags($_REQUEST['NoofPersons']); 		
		$headers = 'From:'.$from. "\r\n" .
		'Reply-To:'.$from. "\r\n" .
		'X-Mailer: PHP/' . phpversion();	
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
		
		$subject = "You have a message sent from your site";
		
		$body   = '<html>';
		$body  .= '<body>';
		$body  .= 'Hello Delicious Restaurant,<br><br>';
		$body  .= 'Name: '.$name.'<br>';		
		$body  .= 'Email: '.$from.'<br>';
		$body  .= 'Phone Number: '.$mobilenumber.'<br>';
		$body  .= 'Date: '.$date.'<br>';		
		$body  .= 'Time: '.$time.'<br>';
		$body  .= 'No of Persons: '.$totlepersons.'<br>';
		$body  .= '</body>';
		$body  .= '</html>';
			
		$send = @mail($to, $subject, $body, $headers);
		
		if($send == true)
		{
			header('location:reservation.html#success');
		}
		else
		{
			header('location:reservation.html#failed');
		}
	}
	else
	{
		header('location:reservation.html#data-missing');
	}		
}
?>