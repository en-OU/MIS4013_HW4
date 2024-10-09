<?php
$pageTitle = "Home";
?>
<?php
$pageTitle = "Home";
include "view-header.php";
?>

<?php
function get_db_connection(){

    $conn = new mysqli(hw2.mysql.database.azure.com, D3misres, ILL92@41, 4013hw3db);
    
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>

<span style="color: violet; font-size: 20px; display: inline-block;">Home</span>
</br>
<span style="color: violet; font-size: 150px; display: inline-block;">MIS 4013 HW4 - Emily Newby</span>

