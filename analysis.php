<?php
require_once("util-db.php");
require_once("model-artists-chart.php"); 

$pageTitle = "Artists Chart";
include "view-header.php";
$artists = selectArtists();

if ($artists == null) {
  echo "Error: No artists data available.";
  exit; 
}

include "view-analysis.php";
include "view-footer.php";
?>
