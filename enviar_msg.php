<?php

require ("phpmiler/Excepton.php");
require ("phpmiler/OAuth.php");
require ("phpmiler/PHPMailer.php");
require ("phpmiler/POP3.php");
require ("phpmiler/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Excepton;




class mensagem {
  private $email = null;
  private $nome = null;
  private $msg = null;

  puclic function __get($atributo){
    return $this->$atributo;
  }

  puclic function __set($atributo,$valor){
    return $this->$atributo = $valor;
  }

   puclic function validarmensagem(){
     if( empty($this->email) || empty($this->nome) || empty($this->msg) ){
       return false;
     }else{
       return true;
     }
   }

}

$mensagem = new mensagem();
$mensagem->__set('email',$_POST['email']);
$mensagem->__set('nome',$_POST['nome']);
$mensagem->__set('msg',$_POST['msg']);

echo'<pre>';
print_r($mensagem);
echo'</pre>';

//echo $mesagem->validarmensagem();
if( !$mesagem->validarmensagem() ){
  echo 'mensagem invalida';
  header('Location:contato.php?msg=invalida');
}

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = false;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.example.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'cronomaz2020@gmail.com';                     
        $mail->Password   = 'crono2020max';                               
        $mail->SMTPSecure = 'tls';         
        $mail->Port       = 587;                                    

        //Recipients
        $mail->setFrom('cronomaz2020@gmail.com');
        $mail->addAddress($mensagem->__get('email'), ($mensagem->__get('email') );     

        // Attachments
        /*$mail->addAttachment('/var/tmp/file.tar.gz');         
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    

        // Content
        $mail->isHTML(true);                                  
        $mail->Subject = $mensagem->__get('nome');
        $mail->Body    = $mensagem->__get('msg');
        $mail->AltBody = 'Estrutura do email não suportada.';

        $mail->send();
        header('Location: contato.php?msg=sucesso');
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error:' {$mail->ErrorInfo};
    }

?>