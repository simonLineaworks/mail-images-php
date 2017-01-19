<?php
	$mansionname = $mansion->mansion_name ;
// To
	$to = 'simon@lineaworks.jp';

// Many people mail array

	// $destination = array('simon@lineaworks.jp','test@lineaworks.jp','example@lineaworks.jp'); //

 
// Subject
	$subject = 'New message from Premium Value Bank : '.$mansionname;
 
// clé aléatoire de limite
	$boundary = md5(uniqid(microtime(), TRUE));
	
 
// Headers
	$headers = 'From: New message from Premium Value Bank <mail@server.com>'."\r\n";
	$headers .= 'Mime-Version: 1.0'."\r\n";
	$headers .= 'Content-Type: multipart/mixed;boundary='.$boundary."\r\n";
	$headers .= "\r\n";
 
// Message
	$msg = 'New message from Premium Value Bank : '.$mansionname."\r\n\r\n";
 
// Message HTML
	
	$msg .= '--'.$boundary."\r\n";
	$msg .= 'Content-type: text/html; charset=utf-8'."\r\n\r\n";
	$msg .= 

			'<div style="padding:5px; width:600px; background-color:#E0EBF5; border:#000000 thin solid">
			
				<div>
		        	<h1>You have a new message from Premium Value Bank.</h1>
		        	<p>
		        		<h1 style="color:red;">
		        		'.$mansionname.'
		        		</h1>
		        	</p>
		        	<img src="https://list.p-v-b.com/cms/wp-content/uploads/2015/01/rogo-2-240x240.jpg" alt="">
		    	</div>
		    
		    	<div>
		    		<h2 id="php" style="color:#274E9C; text-decoration:underline">New message from Premium Value Bank</h2>
		    	</div>

			</div>'


			."\r\n";
 
// Fin
	$msg .= '--'.$boundary."\r\n";
 
// Function mail()

	mail($to, $subject, $msg, $headers);

	/////// To send Email to many people////////

	// foreach ($destination as $k=>&$n)
    
	// mail($n, $subject, $msg, $headers);
	
	////////////////////////////////////////////

?>