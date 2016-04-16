<?php

include "connection.php";

?>

<?php

$query = "SELECT id,name FROM variables";
$connect_query = mysqli_query($con,$query);
$row = mysqli_fetch_row($connect_query);
echo json_encode($row);



?>
