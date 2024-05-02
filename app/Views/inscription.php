<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <style>
        /* Reset CSS */
        body, h1, h2, h3, h4, h5, h6, p, blockquote, pre, dl, dt, dd, ul, ol, li, fieldset, form, label, table, caption, tbody, tfoot, thead, tr, th, td {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-weight: inherit;
            font-style: inherit;
            font-size: 100%;
            font-family: inherit;
            vertical-align: baseline;
        }

        h2 {
            font-size: 36px; /* Taille de la police */
            color: #333; /* Couleur du texte */
            margin-top: 50px; /* Marge supérieure pour l'éloigner du haut de la page */
            margin-bottom: 30px; /* Marge inférieure pour l'éloigner du reste du contenu */
            text-transform: uppercase; /* Convertit le texte en majuscules */
            letter-spacing: 2px; /* Espacement entre les lettres */
            font-weight: bold; /* Poids de la police en gras */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Ombre du texte pour lui donner de la profondeur */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #555;
        }


        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-image: url('background-image: url('../../static/images/centreVacances.jpg');'); /* Chemin vers ton image de fond */
            background-size: cover; /* Ajuste la taille de l'image pour remplir le conteneur */
            background-position: center; /* Positionne l'image au centre */
            background-repeat: no-repeat; /* Empêche la répétition de l'image */
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label,
        input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 18px); /* Prend en compte la largeur du padding et de la bordure */
            padding: 8px;
            box-sizing: border-box; /* Permet de conserver la largeur à 100% */
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    
    <h2>Inscription</h2>

    <header>
        <nav>
            <ul>
                <li><a href="accueil">Accueil</a></li>
                <li><a href="reservation">Réservations</a></li>
                <li><a href="activiter">Activités</a></li>
                <li><a href="aide">Aide</a></li>
                <li><a href="compte">Compte</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- test -->
        <!-- <img src="../../static/images/centreVacances.jpg"/> -->


    <!-- Afficher les éventuels messages d'erreur ici -->
    <?php if (isset($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (isset($validation)) : ?>
        <?php foreach ($validation as $error) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <form name="inscription" method="post" action="<?= base_url('inscription.php') ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required>

        <label for="nom">Nom:</label>
        <input type="text" name="nom">

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom">

        <button type="submit" name="register">S'inscrire</button>
    </form>
    <br>
    <form method="post" name="form_redirect_login" action="<?php echo base_url('inscription.php'); ?>">
        <label for="redirect_login">Déjà un compte ?</label>
        <button type="submit" name="redirect_login">Se connecter</button>
    </form>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Page Faite Par Mercier Yoann.</p>
    </footer>
</body>
</html>
