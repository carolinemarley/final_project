<?php
require_once("util-db.php");
require_once("model-artists-with-albums.php"); 

$pageTitle = "Artists with Albums";
include "view-header.php";
$artists = selectArtists();
include "view-artists-with-albums.php";
include "view-footer.php";
?>
