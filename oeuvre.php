<?php
include 'oeuvres.php'; // fichier central avec les données des œuvres

// Récupérer l'identifiant d'œuvre depuis l'URL
if (isset($_GET['id'])) {
    $idOeuvre = intval($_GET['id']); // Convertir en entier pour des raisons de sécurité ?

    // Rechercher l'œuvre correspondant à l'identifiant
    $oeuvre = null;
    foreach ($oeuvres as $o) {
        if ($o['id'] === $idOeuvre) {
            $oeuvre = $o;
            break;
        }
    }

    // Si l'œuvre est trouvée, afficher ses détails
    if ($oeuvre !== null) {
        ?>


<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="css/style.css">
            <title><?php echo $oeuvre['titre']; ?></title>
        </head>
        <body>

            <?php include('header.php'); ?>

            <main>
                <article id="detail-oeuvre">
					<div id="img-oeuvre">
						<img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
					</div>
					<div id="contenu-oeuvre">	
						<h1><?php echo $oeuvre['titre']; ?></h1>
						<p class="description"><?php echo $oeuvre['auteur']; ?></p>
						<p><?php echo $oeuvre['description']; ?></p>
					</div>	
                </article>
            </main>

            <?php include('footer.php'); ?>


<?php
    } else {
        // Si l'œuvre n'est pas trouvée, afficher un message d'erreur.
        echo "Oeuvre non trouvée";
    }

    } else {
    // Si l'identifiant d'œuvre n'est pas présent dans l'URL, afficher un message d'erreur.
    echo "Identifiant d'oeuvre manquant dans l'URL";
    }
?>


        </body>
    </html>
       