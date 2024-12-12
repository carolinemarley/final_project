<?php 
require_once("util-db.php"); 
require_once("model-genres-by-album.php");

$pageTitle = "Genres by Album";
include "view-header.php";
$genres = selectGenresByAlbum($_POST['aid']); 
include "view-genres-by-album.php";
include "view-footer.php";
?>
