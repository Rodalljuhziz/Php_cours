<!doctype html>
<html lang="fr">


<head>
    <meta charset="utf-8">
    <link href="css/headers.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body>

<?php
    /*$name = filter_input(INPUT_POST, 'user_name');
    $firstName = filter_input(INPUT_POST, 'user_firstName');
    $mail = filter_input(INPUT_POST, 'user_email', FILTER_VALIDATE_EMAIL);
    $reason = filter_input(INPUT_POST, 'user_reason');
    $message = filter_input(INPUT_POST, 'user_message');
    $date = date("Y m d H i s");
    $tableauForm  = [$name, $firstName, $mail, $reason,$message];
    $i =0;
    while ($i < count($tableauForm)  && !empty($tableauForm[$i])){
        $i++;
        if($i == count($tableauForm)){
            file_put_contents("Contact/contact " .$date .".txt",$tableauForm);
        }
    }*/
    $writeit = !empty($_POST);

    foreach ($_POST as $key =>$value){
        if(empty($value)){
            $writeit = false;
        }
    }
    if ($writeit){
        file_put_contents("Contact/contact " .date("Y m d H i s") .".txt",$_POST);
    }

    // var $ecrireOuPas = true
    // boucle sur $_POST
    // si problème alors $ecrireOuPas = false
    // fin boucle
    // si $ecrire ? ecrire dans fichier

?>

<h1>Entrez vos coordonnées:</h1>

<form action="" method="post">
    <div>
        <select name="civilite">
            <option value="Homme">Monsieur</option>
            <option value="Femme">Madame</option>
            <option value="NonBinaire">Non binaire</option>
            <p class="<?php echo (!empty($_POST) && empty($_POST["civilite"])) ? 'visible': '' ?>">Le champ ne doit pas être vide</p>
        </select>
    </div>
    <div>
        <label for="name">Nom: </label>
        <input type="text" id="name" name="user_name" placeholder="Ex:Dupont">
        <p class="<?php echo (!empty($_POST) && empty($_POST["user_name"])) ? 'visible': '' ?>">Le champ ne doit pas être vide</p>


        <label for="firstname">Prénom: </label>
        <input type="text" id="firstname" name="user_firstname" placeholder="Ex: jean">
        <p class="<?php echo (!empty($_POST) && empty($_POST["user_firstname"])) ? 'visible': '' ?>">Le champ ne doit pas être vide</p>

        <label for="mail">Mail: </label>
        <input type="email" id="mail" name="user_mail" placeholder="monmail@exemple.com">
        <p class="<?php if (!FILTER_VALIDATE_EMAIL) echo 'visible'?>">Le champs compléter n'est pas valide</p>
        <p class="<?php echo (!empty($_POST) && empty($_POST["user_mail"])) ? 'visible': '' ?>">Le champ ne doit pas être vide</p>

    </div>
    <div>
        <input type="radio" value="travail"id="reasonJob" name="user_reason" >
        <label for="reason">Proposition d'emploi </label><br>

        <input type="radio" value="information" id="reasonInfo" name="user_reason">
        <label for="reason">demande d'information </label><br>

        <input type="radio" value="Prestation" id="reasonPrest" name="user_reason">
        <label for="reason">prestation </label>
        <p class="<?php echo (!empty($_POST) && empty($_POST["user_reason"])) ? 'visible' : '' ?>">Selectionner l'objet de votre demande</p>
    </div>

    <div>
        <label for="mesage">Message: </label>
        <textarea rows="4" id="message" name="user_message" placeholder="La raison de mon message ici" ></textarea>
        <p class="<?php echo (isset($_POST["user_message"]) && empty($_POST["user_message"])) ? 'visible': '' ?>">Le champ ne doit pas être vide</p>
        <p class="<?php echo (isset($_POST["user_message"]) && strlen($_POST["user_message"]) < 5) ? 'visible': '' ?>">il faut au moins 5 caractères</p>
    </div>
    <div>
        <input type="submit" value="Valider">
    </div>
</form>

</body>