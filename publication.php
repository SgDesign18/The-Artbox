<?php
include 'oeuvres.php'; // Inclure le fichier central avec les données des oeuvres
?>

<!doctype html>
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
		<div id="formulaire">
		

		   <form action="ajouter_oeuvre.php" method="post" enctype="multipart/form-data">
			  

			   <label for="titre">Titre :</label>
			   <input type="text" id="titre" name="titre" required><br>

			   <label for="auteur">Auteur :</label>
			   <input type="text" id="auteur" name="auteur" required><br>

			   <label for="description">Description :</label>
			   <textarea id="description" name="description" required></textarea><br>

			   <label for="image">Image :</label>
			   <input type="file" id="image" name="image" accept="image/*" required><br>

			   <input type="submit" value="Ajouter l'œuvre">
		   </form>
		</div>
	</main>


	<?php include('footer.php'); ?>
	
</body>
</html>