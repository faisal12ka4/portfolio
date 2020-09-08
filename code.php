<?php
if (isset($_POST["submit"])) {
    $_SESSION["msg"] = true;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    $to = "whatfaisal12ka4@gmail.com";
    $subject = "New Message From Faisal12ka4.com";
    $body = "<b>Name: </b>$name\n<b>Email: </b>$email\n<b>Mobile: </b>$mobile\n<b>Message: </b>$message";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $mail = mail($to, $subject, $body, $headers);

    if ($mail) {
        $_SESSION["alert"] = "success";
        $_SESSION["text"] = "Message sent successfully, you will be replied soon !";
    } else {
        $_SESSION["alert"] = "danger";
        $_SESSION["text"] = "Message not sent, sorry for the inconvenience !";
    }

    // header("location:index.php");
}
