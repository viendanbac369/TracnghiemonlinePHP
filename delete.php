
<?php
extract($_REQUEST);
$conn=new PDO('mysql:host=localhost; dbname=quiz', 'root', '') or die(mysql_error());
$query=$conn->query("select * from upload where id='$del'");
$row=$query->fetch();

unlink("files/$row[name]");

$query=$conn->query("delete from upload where id='$del'");
if($query){
	header("location:dash.php?q=6");
}
else{
	die(mysql_error());
}
?>