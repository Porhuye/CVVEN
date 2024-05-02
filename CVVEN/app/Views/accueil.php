<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        /* Réinitialisation des styles par défaut */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        header h1 {
            text-align: center;
        }

        nav ul {
            list-style-type: none;
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

        nav ul li a:hover {
            background-color: #777;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur notre site</h1>
        <nav>
            <ul>
                <li><a href="reservation">Réservations</a></li>
                <li><a href="activiter">Activités</a></li>
                <li><a href="aide">Aide</a></li>
                <li><a href="compte">Compte</a></li>
                <li><a href="connexion">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <p>Contenu de la page d'accueil</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Page by Valadier</p>
    </footer>
</body>
</html>
