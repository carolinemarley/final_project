<?php 
require_once("util-db.php"); 
require_once("model-genres-by-album.php");

$pageTitle = "Genres by Album";
include "view-header.php";
$genres = selectGenresByAlbum($_POST['genre_id']); 
include "view-genres-by-album.php";
include "view-footer.php";
?>
