<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/styleConnexion.css') ?>">

    <title>Connexion à CVVEN</title>
</head>
<body>

    <form method="post" action="">
        <button type="submit" name="register">S'Inscrire</button>
    </form>
    
    <br>

    <h2>Connexion à CVVEN</h2>
    
    <?php if (isset($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
