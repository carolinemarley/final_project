<?php
require_once("util-db.php");
require_once("model-artists.php"); 

$pageTitle = "Artists";
include "view-header.php";
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
    case "Add":
      if (insertArtist($_POST['aName'], $_POST['aSName'])) {
          echo '<div class="alert alert-success" role="alert">Artist Added!</div>';
      } else {
           echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
      }
      break;
        case "Edit":
      if (updateArtist($_POST['aName'], $_POST['aSName'], $_POST['aid'])) {
          echo '<div class="alert alert-success" role="alert">Artist Edited!</div>';
      } else {
           echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
      }
      break;
         case "Delete":
      if (deleteArtist($_POST['aid'])) {
          echo '<div class="alert alert-success" role="alert">Artist deleted!</div>';
      } else {
           echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
      }
      break;
    }
    }

$artists = selectArtists();
include "view-artists.php";
include "view-footer.php";
?>
