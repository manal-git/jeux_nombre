<?php
$title = "Documentation"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Documentation</h1>
    <h2>Notice d'Utilisation du Jeu "Devineur de Nombre"</h2>

    <p>Bienvenue dans le jeu Devineur de Nombre ! Ce jeu simple mais 
        addictif vous permet de tester vos compétences en estimation.</p>

    <h1>Règles du Jeu</h1>

        <ul>1.Le jeu génère un nombre aléatoire entre 1 et 100.</ul>
        <ul>2.Vous devez essayer de deviner ce nombre en soumettant des essais.</ul>
        <ul>3.Après chaque essai, vous recevrez un indice pour vous aider à ajuster vos tentatives.</ul>
        <ul>4.Vous pouvez continuer à jouer autant de fois que vous le souhaitez, en réinitialisant le jeu à chaque fin de partie.</ul>
        <ul>5.Un historique de vos tentatives est affiché sous le message principal.
</ul>
    <p>
        <a href="index.php">retourne</a>
    </p>

<style>
    a{
        background-color: rgb(156, 91, 13);
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 1rem;
        font-weight: bold;
    }
    body {
        background-color: blanchedalmond;
        font-family: 'Courier New', Courier, monospace
    }
</style>
</body>
</html>
