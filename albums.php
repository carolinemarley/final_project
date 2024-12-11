<?php 
require_once("util-db.php"); 
require_once("model-albums.php");

$pageTitle = "Albums";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
    case "Add":
      if (insertAlbum($_POST['aTitle'], $_POST['aOnHand'], $_POST['aPrice'], $_POST['aYear'])) {
          echo '<div class="alert alert-success" role="alert">Album Added!</div>';
      } else {
           echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
      }
      break;
        case "Edit":
      if (updateAlbum($_POST['aTitle'], $_POST['aOnHand'], $_POST['aPrice'], $_POST['aYear'], $_POST['aid'])) {
          echo '<div class="alert alert-success" role="alert">Album Edited!</div>';
      } else {
           echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
      }
      break;
         case "Delete":
      if (deleteAlbum($_POST['aid'])) {
          echo '<div class="alert alert-success" role="alert">Album deleted!</div>';
      } else {
           echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
      }
      break;
    }
    }

$albums = selectAlbums(); 
include "view-albums.php";
include "view-footer.php";
?>
