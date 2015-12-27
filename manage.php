<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="sure.php" method="post">
<h3>add</h3>
path:<input type="text" name="addpath"/> input the websites you add to<br><br>
name: <input type="text" name="addname"/> <br><br> 
type:<input type="text" name="addtype"/> <br><br>
<h3>delete</h3>
<input type="text" name="delete"/> input the websites'name you desert <br><br>
<input type="submit" value="submit"/><br><br>
<?php
include('connection.php');
$sql = "select * from websites";
$res = $dbh->prepare($sql);
$res->execute();
$mess = $res->fetchAll(PDO::FETCH_ASSOC);
if($mess == NULL)
	 echo "these exists no websites!";
else{
foreach ((array)$mess as $key => $value) 
{
        $path = $value['path'];
        $name = $value['name'];
        echo "<a href='$path' target='_blank'>$name</a><br><br>";
}
}
?>
</form>
</body>
</html>
