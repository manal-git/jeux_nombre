 <?php

session_start();

if (!isset($_SESSION['nombre'])) {
    $_SESSION['nombre'] = rand(1, 100);
}

if (isset($_POST['essai'])) {
    $essai = $_POST['essai'];
    $nombre = $_SESSION['nombre'];

    $_SESSION['tentatives'][] = $essai;

    if ($essai < $nombre) {
        $message = "C'est plus grand !";
    } elseif ($essai > $nombre) {
        $message = "C'est plus petit !";
    } else {
        $message = "Félicitations ! Vous avez trouvé le nombre  $nombre !";
        unset($_SESSION['nombre']);
    }
} else {
    $message = "Devinez un nombre entre 1 et 100";
}

if (isset($_POST['reset'])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu devineur de Nombre</title>
</head>
<body>
<style>
  body {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        background-color: blanchedalmond;
        font-family: 'Courier New', Courier, monospace
    }

    .wrapper {
        padding: 2rem;
        border-radius: 25px;
        display: flex;
        justify-content: center;
        align-items: flex;
        flex-direction: column;
    }
    .essai-form {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        gap: 15px;
        margin-bottom: 2rem;
        width: 100%;
    }

    .essai-form label {
        font-size: .9rem;
    }

    .essai-form input {
        padding: 10px 20px;
        border: none;
        box-shadow: 5px 5px 22px rgba(0, 0, 0, 0.188);
        border-radius: 25px;
    }

    .essai-form button {
        background-color: brown;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 1rem;
        font-weight: bold;
        transition: all .3s;
    }

    .essai-form button:hover {
        background-color: crimson;
    }

    .restart-form button {
        background-color: rgb(156, 91, 13);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 1rem;
        font-weight: bold;
        transition: all .3s;
    }

    .restart-form button:hover {
        background-color: rgb(93, 51, 1);
    }

    .F1{
        align-items: left;
        background-color: rgb(156, 91, 13);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 1rem;
        font-weight: bold;
    }

</style>
    <div class="wrapper">
        <h1>Devinez le Nombre !</h1>
        <form method="POST" class="essai-form">
            <label for="essai">Votre tentative :</label>
            <input type="number" name="essai" required="">
            <button type="submit">Soumettre</button>
        </form>
        <p>
            <?php
            echo $message;
            ?>
        </p>
    
        <?php
        if (isset($_SESSION['tentatives'])):
        ?>
            <h2>Historique des tentatives :</h2>
            <ol>
                <?php
                foreach ($_SESSION['tentatives'] as $tentatives):
                ?>
                    <li>Essai : <?php echo $tentatives; ?></li>
                <?php
                endforeach;
                ?>
            </ol>
        <?php
        endif;
        ?>
        <?php if (!isset($_SESSION['nombre'])): ?>
            <form method="POST" class="restart-form">
                <button type="submit" name="reset">Recommencer le jeu</button>
            </form>
        <?php endif; ?>
    </div>

<script class="F1" type="text/javascript">
    document.addEventListener('keydown', function(event) {
        if (event.key === 'F1') {
            event.preventDefault();
            window.location.href ='F1.php';
        }
    });
</script>
</body>

</html>