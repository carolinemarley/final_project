<?php 
require_once("util-db.php"); 
require_once("model-albums-by-artist.php");

$pageTitle = "Albums by Artist";
include "view-header.php";
$albums = selectAlbumsByArtist($_GET['id']); 
include "view-albums-by-artist.php";
include "view-footer.php";
?>
