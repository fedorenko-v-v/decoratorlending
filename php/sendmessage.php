<?php

$data = $_POST;

if (isset($data) && !empty($data)){

	foreach($data as $key => $one){
		$one = trim($one);
		if(empty($one)){
			$result_array[$key] = 'error';
			$errors_counter++;
		}
		else{
			$result_array[$key] = $one;
		}
	}
	// $resultGoogle = json_encode(cUrlPost('https://www.google.com/recaptcha/api/siteverify', array(
		// 'secret' => '6LdEwB4UAAAAALCk2Oi8U5S5EcsDmT4opM--OOsT',
		// 'response' => $result_array['g-recaptcha-response']
	// )));
	// if (!$resultGoogle['success']){
		// $result_array['resultGoogle'] = $resultGoogle;
		// $result_array['g-recaptcha-response'] = 'error';
		// $errors_counter++;
	// }
	if ($errors_counter == 0){

		$title = 'Сообщение из обратной связи';
		//$mess =  'Пожелания: '.$result_array["companyMessagePresentation"];
		$from =  'Сообщение от пользователя: '.$result_array["inputName"];
		// $to - кому отправляем
		$to = 'chigrus@yandex.ru';
		//$to = 'info@integrysys.ru';
		
		// устанавливаем тип сообщения Content-type, если хотим
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		// $from - от кого
		//$from = 'Сообщение от пользователя: '.$result_array["companyFirstNamePresentation"].'<br>Компания: '.$result_array["companyNamePresentation"].'<br>e-mail: '.$result_array["companyEmailPresentation"].'<br>Контактный телефон: '.$result_array["companyPhonePresentation"];
		// функция, которая отправляет наше письмо.
		
		$mess = '<html>
	<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Сообщение из обратной связи</title>
	</head>
	<body>
		<p><b>Сообщение от пользователя:</b> '.$result_array["inputName"].'</p>
		<p><b>Контактный телефон:</b> '.$result_array["inputPhone"].'</p>
		<p><b>e-mail:</b> '.$result_array["inputMail"].'</p>
		<p><b>Пожелания:</b> '.$result_array["inputMessage"].'</p>
	</body>
	</html>';
		//mail($to, $title, $mess, $from);
		mail($to, $title, $mess, $headers);

		echo 'SendToMail';
	}
	else{
		echo json_encode($result_array);
	}
}
	
// function cUrlPost($url, $post_data){
	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, $url);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_POST, 1);
	// curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
	// $output = curl_exec($ch);
	// curl_close($ch);
	// return $output;
// }

?>
