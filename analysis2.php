<?php
require_once("util-db.php");
require_once("model-analysis2.php"); 

$pageTitle = "Artists Chart";
include "view-header.php";
$albums = selectAlbums();

if ($artists == null) {
  echo "Error: No artists data available.";
  exit; 
}

include "view-analysis2.php";
include "view-footer.php";
?>
