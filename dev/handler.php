<?php

$to = "drkierkegor@gmail.com";
$title = "Получено сообщение - заказ такси";

$headers  = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: TaxiNow \r\n";

if( !empty($_POST) ) {
	$msg = "
		<html><body>
			<p><b>Детали заказа:</b> ".$_POST['order']."</p>
		</body></html>";

	mail($to, $title, $msg, $headers);
}

?>