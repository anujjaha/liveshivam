<?php
include('cn.php');
$query = "select * from hdata";
$run = mysql_query($query);
$sr=0;
while($row = mysql_fetch_assoc($run)) {
	$data[$sr] = unserialize($row['data']);
	$sr++;
}

//echo "<pre>";

$fp = fopen('file.csv', 'w');

foreach ($data as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
//print_r($data);
?>
<script type="text/javascript">
window.location.assign("file.csv");
</script>