<!doctype html>
<html lang="fr">


<head>
    <meta charset="utf-8">
    <link href="css/headers.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body>

<h1>Entrez vos coordonnées:</h1>

<form action="" method="post">
    <div>
        <select name="civilite">
            <option value="man">Monsieur</option>
            <option value="women">Madame</option>
            <option value="none">Non genrer</option>
        </select>
    </div>
    <div>
        <label for="name">Nom: </label>
        <input type="text" id="name" name="user_name" >

        <label for="firstname">Prénom: </label>
        <input type="text" id="firstname" name="user_firstname">

        <label for="mail">Mail: </label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <input type="radio" id="reasonJob" name="user_reason">
        <label for="reason">Proposition d'emploi </label><br>

        <input type="radio" id="reasonInfo" name="user_reason">
        <label for="reason">demande d'information </label><br>

        <input type="radio" id="reasonPrest" name="user_reason">
        <label for="reason">prestation </label>

    </div>
    <div>
        <label for="mesage">Message: </label>
        <textarea rows="4" id="message" name="user_message"></textarea>
    </div>
    <div>
        <input type="submit" value="Valider">
    </div>
    <?php
        filter_input(
                $name,
                $firstName,
                $mail = FILTER_VALIDATE_EMAIL,
                $reason

        )
    ?>
</form>

</body>