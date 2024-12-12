<?php
require_once("util-db.php");
require_once("model-analysis2.php"); 

$pageTitle = "Albums Chart";
include "view-header.php";
$albums = selectAlbums();

if ($albums == null) {
  echo "Error: No albums data available.";
  exit; 
}

include "view-analysis2.php";
include "view-footer.php";
?>
