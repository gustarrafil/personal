<?php
if(!isset($_POST['submit'])) {
    echo "error";
}

if (isset($_POST['name']) && isset($_POST['email'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = "gustavotarrafil@gmail.com";
    $subject = "alguem chamou no site";
    $message = $_POST['message'];
    $body = " ".$message." ";
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";

    

    if(empty($name)||empty($visitor_email)) {
        echo "preciso saber quem é você...";
        exit;
    }
    else {
        $send = mail($to, $subject, $body, $headers);
        if ($send) {
            echo "obrigado";
        } else {
            echo "erro ao mandar";
        }
    }

}

?>
<?php  ?>