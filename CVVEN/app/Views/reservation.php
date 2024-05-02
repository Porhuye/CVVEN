<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation Hôtellerie</title>
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
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        main {
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label,
        input,
        select {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .onglets {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .onglet {
            border: 1px solid #333;
            padding: 10px;
            cursor: pointer;
        }

        .onglet img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Réservation Hôtellerie</h1>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="activiter.php">Activités</a></li>
                <li><a href="aide.php">Aide</a></li>
                <li><a href="compte.php">Compte</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="traitement_reservation.php" method="POST">
            <label for="type_bien">Type de bien :</label>
            <select id="type_bien" name="type_bien" required>
                <option value="maison">Maison</option>
                <option value="appartement">Appartement</option>
                <option value="studio">Studio</option>
            </select>

            <label for="budget_min">Budget minimum :</label>
            <input type="number" id="budget_min" name="budget_min" required>

            <label for="budget_max">Budget maximum :</label>
            <input type="number" id="budget_max" name="budget_max" required>

            <label for="nb_pieces">Nombre de pièces :</label>
            <input type="number" id="nb_pieces" name="nb_pieces" required>

            <label for="nb_chambres">Nombre de chambres :</label>
            <input type="number" id="nb_chambres" name="nb_chambres" required>

            <label for="duree_sejour">Durée du séjour (en jours) :</label>
            <input type="number" id="duree_sejour" name="duree_sejour" required>

            <input type="submit" value="Rechercher">
        </form>

        <div class="onglets">
            <div class="onglet">
                <img src="chemin_vers_image1.jpg" alt="Chambre 1">
                <p>Chambre 1</p>
            </div>
            <div class="onglet">
                <img src="chemin_vers_image2.jpg" alt="Chambre 2">
                <p>Chambre 2</p>
            </div>
            <div class="onglet">
                <img src="chemin_vers_image3.jpg" alt="Chambre 3">
                <p>Chambre 3</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Nom de votre entreprise</p>
    </footer>
</body>
</html>
