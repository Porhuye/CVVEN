<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aide</title>
    <style>
        /* Styles généraux */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
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

        .onglets {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .onglet {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .onglet h2 {
            margin-bottom: 5px;
        }

        .onglet p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Aide</h1>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="reservation.php">Réservations</a></li>
                <li><a href="activiter.php">Activités</a></li>
                <li><a href="compte.php">Compte</a></li>
            </ul>
        </nav>
    </header>
    <div class="onglets">
        <div class="onglet">
            <h2>Problème technique</h2>
            <p>Contenu du problème technique...</p>
        </div>
        <div class="onglet">
            <h2>Demande d'information</h2>
            <p>Contenu de la demande d'information...</p>
        </div>
        <div class="onglet">
            <h2>Réclamation</h2>
            <p>Contenu de la réclamation...</p>
        </div>
    </div>
</body>
</html>
