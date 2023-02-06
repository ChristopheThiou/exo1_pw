<?php
session_start();

include_once('./../config/mysql.php');


$postData = $_POST;

if (
    !isset($postData['full_name'])
    || !isset($postData['email'])
    || !isset($postData['message'])
    || !isset($postData['country'])
    || !isset($postData['cg'])
    )
{
	echo('tout les champs sont obligatoire.');
    return;
}	

$full_name = $postData['full_name'];
$email = $postData['email'];
$message = $postData['message'];
$country = $postData['country'];
$cg = $postData['cg'];

$createaccount = $mysqlClient->prepare('INSERT INTO entrainement(full_name, email, message, country, cg) 
VALUES (:full_name, :email, :message, :country, :cg)');
$createaccount->execute([
    'full_name' => $full_name,
    'email' => $email,
    'message' => $message,
    'country' => $country,
    'cg' => $country,
])or die(print_r($mysqlClient->errorInfo()));

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Création de recette</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <h1>Message envoyer avec succes !</h1>
    </div>
</body>
</html>
