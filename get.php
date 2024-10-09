<?php
function get_db_connection(){

    $conn = new mysqli(hw2.mysql.database.azure.com, D3misres, ILL92@41, 4013hw3db);
    
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
