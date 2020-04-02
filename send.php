
    <?php

    if ($_POST) {
        $email_emisor = $_POST['email_emisor'];
        $email_receptor = $_POST['email_receptor'];
        $nombres = $_POST['nombres'];
        $celular = $_POST['celular'];
        $texto = $_POST['texto'];

        $to = $email_receptor;
        $subject = "Envio desde php email";

        $message =  'Corro electronico : ' . $email_receptor . '<br>' .
            'Nombre completo : ' . $nombres . '<br>' .
            'Número de celular : ' . $celular . '<br>' .
            'Mensaje : ' . $texto;

        $cabeceras = "From: " . $email_emisor;

        // $cabeceras = 'From: webmaster@example.com' . "\r\n" .
        //     'Reply-To: webmaster@example.com' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $cabeceras);

        header('Location: index.php');
    }
    ?>
