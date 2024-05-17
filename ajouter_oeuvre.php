    <?php
   session_start();

   
   // Inclure le fichier central avec les données des œuvres
   include 'oeuvres.php';

   // Récupérer les données du formulaire
   $nom = $_POST['nom'];
   $titre = $_POST['titre'];
   $auteur = $_POST['auteur'];
   $description = $_POST['description'];

   // Traitement de l'image 
   $target_dir = "img/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

   // Générer un nouvel identifiant d'œuvre 
   $nouvelId = count($oeuvres) + 1;

   // Créer la nouvelle œuvre
   $nouvelleOeuvre = [
       "id" => $nouvelId,
       "image" => $target_file,
       "titre" => $titre,
       "auteur" => $auteur,
       "description" => $description
   ];

   // Ajouter la nouvelle œuvre au tableau
   $oeuvres[] = $nouvelleOeuvre;

   // Mettre à jour le fichier central avec les données des œuvres
   file_put_contents('oeuvres.php', '<?php $oeuvres = ' . var_export($oeuvres, true) . ';');

   // Rediriger vers ....  après l'ajout
   header("Location: index.php");
   exit();
   ?>