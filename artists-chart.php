<?php
require_once("util-db.php");
require_once("model-artists-chart.php"); 
$pageTitle = "Artists Chart";
include "view-header.php";

try {
    $artists = selectArtists();
} catch (Exception $e) {
    echo "Error retrieving artists: " . $e->getMessage();
    exit;
}

include "js1.php";
include "view-footer.php";
?>
