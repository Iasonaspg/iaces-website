<?php 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$msg = test_input($_POST["message"]);
$email = "iaces.thessaloniki@gmail.com";
$subject = test_input($_POST["name"]);
$headers = "From: ". test_input($_POST["email"]);
mail($email, $subject, $msg, $headers);
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;

?>