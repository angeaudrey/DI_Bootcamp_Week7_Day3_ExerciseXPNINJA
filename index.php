<?php

if (isset($_COOKIE['couleur_prefere'])) {
    $couleur_prefere = $_COOKIE['couleur_prefere'];
} else {
    $couleur_prefere = 'light';
}

if (isset($_POST['couleur_prefere'])) {
    setcookie('couleur_prefere', $_POST['couleur_prefere'], time() + 60 * 60 * 24 * 7);
    $couleur_prefere = $_POST['couleur_prefere'];
    $message = 'Couleur préférée sauvegardée';
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Couleurs préférées de l'utilisateur</title>
</head>

<body>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post">
        <label>
            <input type="radio" name="couleur_prefere" value="light" <?php echo $couleur_prefere == 'light' ? 'checked' : ''; ?>> Light
        </label>
        <br>
        <label>
            <input type="radio" name="couleur_prefere" value="dark" <?php echo $couleur_prefere == 'dark' ? 'checked' : ''; ?>> Dark
        </label>
        <br>
        <input type="submit" value="Sauvegader">
    </form>
    
</body>

</html>