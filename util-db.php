<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'caroli24_projectuser', 'Y$qEL~Qw3qph', 'caroli24_project');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
