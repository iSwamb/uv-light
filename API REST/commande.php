<?php

  header('Access-Control-Allow-Origin:*');

  // Se connecter à la base de données
  include("db_connect.php");
  $request_method = $_SERVER["REQUEST_METHOD"];
  
  switch($request_method)
  {
    case 'GET':
      if(!empty($_GET["id"]))
      {
        // Récupérer un seul produit
        $id = intval($_GET["id"]);
        getCommandeCommentaire($id);
      }
      else
      {
        // Récupérer tous les produits
        getCommandeCommentaire();
      }
      break;
    default:
      // Requête invalide
      header("HTTP/1.0 405 Method Not Allowed");
      break;
  }

  function getCommandeCommentaire()
  {
    global $conn;
    $query = "SELECT * FROM commande LEFT JOIN commentaire ON commande.id = commentaire.id_commentaire";
    $response = array();
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result))
    {
      $response[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
  }
?>