<?php
include 'oeuvres.php'; // Inclure le fichier central avec les données des oeuvres
$oeuvreId = 8; // L'identifiant de l'œuvre à afficher

// Trouver l'œuvre correspondant à l'identifiant
$oeuvre = null;
foreach ($oeuvres as $o) {
    if ($o["id"] == $oeuvreId) {
        $oeuvre = $o;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>

</head>

<body>
	<?php include('header.php'); ?>
	<main>
		<article id="detail-oeuvre">
			<div id="img-oeuvre">
				<img src='<?php echo $oeuvre["image"]; ?>' alt='<?php echo $oeuvre["titre"]; ?>' >
			</div>
			
			<div id="contenu-oeuvre">
				<h1><?php echo $oeuvre["titre"]; ?></h1>
				<p class="description"> <?php echo $oeuvre["auteur"]; ?></p>
				<p class="description-complete"><?php echo $oeuvre["description"]; ?></p>
			</div>
		</article>
	</main>
	<?php include('footer.php'); ?>
</body>
</html>
