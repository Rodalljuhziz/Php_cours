<!doctype html>
<html lang="fr">


<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>

<h1>Entrez vos coordonnées</h1>

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
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="firstname">Prénom: </label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="mail">Mail: </label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="reason">Object de la demande: </label>
        <input type="radio" id="reason" name="user_reason">
    </div>

</form>

</body>