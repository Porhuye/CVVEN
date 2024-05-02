<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation d'activités</title>
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

        .activite {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .activite-col {
            flex-basis: 30%; /* Largeur des colonnes */
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
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
        <h1>Présentation d'activités</h1>
        <nav>
            <ul>
                <li><a href="accueil">Accueil</a></li>
                <li><a href="reservation">Réservations</a></li>
                <li><a href="aide">Aide</a></li>
                <li><a href="compte">Compte</a></li>
                <li><a href="connexion">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <div class="activite">
        <div class="activite-col">
            <nav>
                <ul>
                    <li><a href="#activite1">Activité 1</a></li>
                    <li><a href="#activite2">Activité 2</a></li>
                    <li><a href="#activite3">Activité 3</a></li>
                </ul>
            </nav>
        </div>
        <div class="activite-col">
            <div class="onglet" id="activite1">
                <h2>Activité 1</h2>
                <p>Description de l'activité 1...</p>
            </div>
            <div class="onglet" id="activite2">
                <h2>Activité 2</h2>
                <p>Description de l'activité 2...</p>
            </div>
            <div class="onglet" id="activite3">
                <h2>Activité 3</h2>
                <p>Description de l'activité 3...</p>
            </div>
        </div>
        <div class="activite-col">
            <nav>
                <ul>
                    <li><a href="#activite4">Activité 4</a></li>
                    <li><a href="#activite5">Activité 5</a></li>
                    <li><a href="#activite6">Activité 6</a></li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>
