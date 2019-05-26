<?php 
header('content-type:text/html; charset=utf-8');

$conn = mysql_connect('localhost','root','root')or die('链接失败');

mysql_set_charset('utf8');

mysql_select_db('wengdo')or die('选择失败');



$sql = "SELECT * FROM wd_test WHERE t_id=1";
$result = mysql_query($sql);

$row = mysql_fetch_assoc($result);







 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>显示详情</title>
	<style>
	div{
		width:80%; 
		border:2px solid red;
		margin:0 auto;
	}
	</style>
</head>
<body>
	<h1 align="center"><?php echo $row['t_title'] ?></h1>
	<div><?php echo $row['t_detail'] ?></div>
</body>
</html>