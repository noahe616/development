<?php

include "connection.php";

?>

<?php

$sql = "SELECT sku,location,number_picked FROM sku_info";
$result = mysqli_query($con,$sql);

$data = array();

while ( $row = mysqli_fetch_assoc($result) )
{
  $data[] = $row;
}
echo json_encode( $data );




?>
