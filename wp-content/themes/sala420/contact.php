<?php 
	
	require_once(dirname(_FILE_).'/phpmailer/class.phpmailer.php');
	$mail = new PHPMailer();
	
    $mail->Host = "localhost";
    //$mail->CharSet = "iso-8859-1";
    $mail->CharSet = "UTF-8";
    $mail->FromName = $_POST['nombre'];
	$mail->From = $_POST['email'];
	$mail->isHTML(true);
	
	//$body  = "Nombre: ".$_POST['nombre']."<br>";
    //$body .= "Email: ".$_POST['email']."<br>";
   
	//if($_POST['tipo']=='contacto'){
		//$mail->AddAddress("robertostringa@hotmail.com");
		
		$subject = "Consulta desde www.sala420.com: ";
		$body  = "Nombre: ".$_POST['nombre']."<br><br>";
        $body .= "Email: ".$_POST['email']."<br><br>";
		$body .= "Area de Destino: ".$_POST['area']."<br><br>";
		
		$body .= "Consulta: ".$_POST['comentarios']."<br><br><br>";
		
		if ( isset($_POST['suscribirme']) ){
		
		$body .= "<strong>* Deseo suscribirme al Boletín de Novedades</strong>";
		$mail->AddAddress("boletin@sala420.com");
		}
		
		if ( $_POST['area'] == 'taller' ){
		$mail->AddAddress("talleres@sala420.com");
		
		}
		elseif ( $_POST['area'] == 'produccion' ){
		$mail->AddAddress("producciones@sala420.com");
		
		} elseif ( $_POST['area'] == 'prensa' ){
		$mail->AddAddress("prensa@sala420.com");
			
		} elseif ( $_POST['area'] == 'tecnica' ){
		$mail->AddAddress("tecnica@sala420.com");
		
		} 
			
		else {
			
		$mail->AddAddress("info@sala420.com");
			
		}
	

    $mail->Body = $body;
	//$mail->Body = utf8_decode($body);
	$AltBody = nl2br($body);
	$mail->Subject = $subject.$_POST['nombre'];
    
	if($mail->Send()){
		$data='ok';		
	}else{
		$data='error';
		
	}
	echo $data;
	exit;

?>