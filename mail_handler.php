<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $mail=$_POST['email'];
        $subjet=$_POST['subject'];
        $message = $_POST['message'];

        $to = 'contacto@i-mat.com.mx';
        $subject = $subject;
        $message = "Nombre: " .$name,"\n"."Dejo el siguiente mensaje: "."\n\n".$message;
        $headers = "De: " .$mail;

        if(mail($to,$subject,$message,$headers)){
            echo "<h1> Mensaje enviado, nos contactaremos enseguida con usted " .$name.". </h1>";
        }else{
            echo "Error al enviar su mensaje, por favor intentelo mas tarde";
        }

    }

?>