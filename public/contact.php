<?php

//j'inclus la config
require_once __DIR__.'/../inc/config.php';

//Initialisation des données
$email = '';
$firstname = '';
$lastname = '';

// Si formulaire soumis
if (!empty($_POST)) {
  //print_r($_POST);
  //exit;

  //récupération des données
  $lastname = isset($_POST['lastName']) ? $_POST['lastName'] : '';
  $firstname = isset($_POST['firstName']) ? $_POST['firstName'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';

  // Traiter les données
  $lastname = strtoupper(trim(strip_tags($lastname))); // retire les espaces au debut et à la fin
  $firstname = ucfirst(trim(strip_tags($firstname)));

  // Validation des données
    $formOk = true;
    if (empty($lastname)) {
      echo 'Nom vide<br>';
      $formOk = false;
    }
    else if (strlen($lastname) < 2) {
      echo 'Nom incorrect<br>';
      $formOk = false;
    }

    if (empty($firstname)) {
      echo 'Prénom vide<br>';
      $formOk = false;
    }
    else if (strlen($firstname) < 2) {
      echo 'Prénom incorrect<br>';
      $formOk = false;
    }
    // Si aucune erreur
    if ($formOk) {
      $sql='
      INSERT INTO mail (`ema_firstName`,`ema_lastName`,`ema_email`)
      VALUES (:firstname, :lastname, :email)
      ';
      $pdoStatement = $pdo->prepare($sql);
      $pdoStatement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
      $pdoStatement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
      $pdoStatement->bindValue(':email', $email, PDO::PARAM_STR);

      if ($pdoStatement->execute() === false) {
      	print_r($pdoStatement->errorInfo());
      	exit;
      }else{
        $htmlContent = "<p>ok</p>";
        sendEmail($email, 'Your message to Aurélien', $htmlContent);
        header("Location: index.php");
    }
  } else {
    header("Location: 404.php");
  }
}


//A la fin, j'affiche
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/contact.php';
require_once __DIR__.'/../view/footer.php';
