<?php
$con=mysqli_connect("localhost","root","","noah");

$do = mysqli_query($con,"SELECT * FROM noahtest");

$num_results = mysqli_num_rows($do);

$fp = fopen('test.csv','a');
$headers = array('Location','Order Number');
fputcsv($fp, array_values($headers), ',', ' ');
for($x = 1; $x <= $num_results; $x++){
    $row = mysqli_fetch_array($do);
    
   
  
    $list =array($row['Location'],$row['OrderNumber']);
   	echo $list[0].$list[1].'<br>';
	fputcsv($fp, array_values($list), ',', ' ');
    
    //unlink('test.prn');
    
}

fclose($fp);
?>