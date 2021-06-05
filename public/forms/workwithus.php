<?php 
  $to = 'contato@gavdesenvolvimento.com.br';
    $message .= $_POST['name'] . '<br>';
    $message .= $_POST['email'] . '<br>';
    $message .= $_POST['subject'] . '<br>';
    $message .= $_POST['message'] . '<br>';

		$subject = 'Contato GAV';
		$headers .= 'To: GAV <contato@gavdesenvolvimento.com.br'."\r\n";
		$headers .= 'From: '.$_POST['email']."\r\n"; // remetente
		$headers = "MIME-Version: 1.1"."\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
		$headers .= "Content-type: text/html; charset=utf-8"."\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion ();
		$headers .= "X-Priority: 5"."\r\n";
		$envio = mail($to, $subject, $message, $headers, "-f $to");
		
		if(isset($envio) && $envio){
			header('Location: /');
		} else {
			header('Location: /');
		} 
