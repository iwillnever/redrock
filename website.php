<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>网址大全</title>
</head>
<br>
<body>
<h1>WELCOME HERE!</h1>
<?php
include('connection.php');
?>
<div class="website">
<h3>campus</h3>
<div class="campus">
<?php
$sql1 = "select * from websites where type='campus'";
$res = $dbh->prepare($sql1);
$res->execute();
$mess = $res->fetchAll(PDO::FETCH_ASSOC);
if($mess == NULL)
	 echo "these exists no campus websites!";
else{
foreach ((array)$mess as $key => $value) 
{
        $path = $value['path'];
        $name = $value['name'];
        echo "<a href='$path' target='_blank'>$name</a>";
}
}
?>
</div>
<div style="clear:both"></div>
<div class="manage">
<span title="you can add to some websites here"><a href="manage.php" class="add">+ add </a></span>
<span title="you can delete the websites you desert here"><a href="manage.php" class="delete">- delete</a></span>
</div>
</div>
<div style="clear:both"></div>
<div class="website">
<h3>study </h3>
<div class="study">
<?php
$sql2 = "select * from websites where type='study'";
$res = $dbh->prepare($sql2);
$res->execute();
$mess = $res->fetchAll(PDO::FETCH_ASSOC);
if($mess == NULL)
	 echo "these exists no study websites!";
else{
foreach ((array)$mess as $key => $value) 
{
        $path = $value['path'];
        $name = $value['name'];
        echo "<a href='$path' target='_blank'>$name</a>";
}
}
?>
</div>
<div style="clear:both"></div>
<div class="manage">
<span title="you can add to some websites here"><a href="manage.php" class="add">+ add </a></span>
<span title="you can delete the websites you desert here"><a href="manage.php" class="delete">- delete</a></span>
</div>
<div style="clear:both"></div>
<div class="website">
<h3>recreations</h3>
<div class="recreation">
<?php
$sql3 = "select * from websites where type='recreation'";
$res = $dbh->prepare($sql3);
$res->execute();
$mess = $res->fetchAll(PDO::FETCH_ASSOC);
if($mess == NULL)
	 echo "these exists no campus websites!";
else{
foreach ((array)$mess as $key => $value) 
{
        $path = $value['path'];
        $name = $value['name'];
        echo "<a href='$path' target='_blank'>$name</a>";
}
}
?>
</div>
<div style="clear:both"></div>
<div class="manage">
<span title="you can add to some websites here"><a href="manage.php" class="add">+ add </a></span>
<span title="you can delete the websites you desert here"><a href="manage.php" class="delete">- delete</a></span>
</div>
</div>	
</body>
</html>
