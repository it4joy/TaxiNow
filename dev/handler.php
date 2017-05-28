<?php

$to = "drkierkegor@gmail.com";
$title = "Получено сообщение - заказ такси";

$headers  = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: TaxiNow \r\n";

//$success_page = "http://xn--90amdhskf9a2c6b.xn--p1ai/success.php";
//$error_page = "http://xn--90amdhskf9a2c6b.xn--p1ai/failure.php";

if( !empty($_POST) ) {
	$order = json_decode( $_POST['test'], true );
	$msg = "
		<html><body>
			<p><b>Детали заказа:</b> ".$order."</p>
		</body></html>";
		
	mail($to, $title, $msg, $headers);
}

?>