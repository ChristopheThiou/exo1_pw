<?php session_start(); 
    include_once('config/mysql.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1_pw</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
<div class="container">
    <h1>Entrainement php</h1>
    <p>Bonjour et bienvenu sur mon site d'apprentissage du php</p>
    <h2>Créer votre compte</h2>
    <form action="<?php echo ($rootUrl . 'exo_pw/users/post_create_user.php'); ?>" method="POST">
        <div class="mb-3">
            <label for="full_name" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="full_name" name="full_name"
            aria-describedby="full_name-help">
            <div id="full_name-help" class="form-text">Ou votre pseudo</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Votre email</label>
            <input class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Votre message</label>
            <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Votre pays</label>
            <select name="country" id="country">
                <option value="France" selected>France</option>
                <option value="Belgique">Belgique</option>
                <option value="Canada">Canada</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="cg" class="form-label">Conditions générales</label>
            <input type="checkbox" name="cg">
            Amet commodo nulla duis cupidatat officia tempor ullamco dolore culpa exercitation ut dolor exercitation id. Anim culpa nisi nulla anim ad quis sunt consequat. Voluptate aliqua Lorem sint excepteur ut occaecat do ut.
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
</body>
</html>
