
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "golrefreformas@gmail.com";
    $subject = "Нове повідомлення з сайту";
    $name = strip_tags(trim($_POST["name"]));
    $city = strip_tags(trim($_POST["city"]));
    $telefono = strip_tags(trim($_POST["telefono"]));
    
    $message = "Ім’я: $name
Місто: $city
Телефон: $telefono";
    $headers = "From: noreply@golrefreformas.com";

    mail($to, $subject, $message, $headers);
    header("Location: thankyou.html");
    exit;
}
?>
