<?php
session_start();
require_once('library.php');
isUser();
?>
<?php 

$sql_query = "select Month(book_date) as month, count(cid) as countnum from tbl_courier group by month";

$result=dbQuery($sql_query);
if($result == false)
{
	echo 'The query failed.';
	exit();
}
$data = array();
    foreach ($result as $row) {
	$data[] = $row;
}
echo json_encode($data);

?>
