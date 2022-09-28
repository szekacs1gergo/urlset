<!DOCTYPE html>
<html>
<head>

<title>
Orszagok
</title>

<style>
#anyum{
background-color:purple;
}
</style>

</head>

<body>
<table border="30px" id="anyum">

<?php
$van=mysqli_connect("localhost", "root", "", "orszagok");
$table=mysqli_query($van,"
SELECT orszag, foldr_hely FROM orszagok WHERE foldr_hely LIKE('%Európa%') OR foldr_hely LIKE('%Európa') OR  foldr_hely LIKE('Európa%') ORDER BY orszag
");
while($sor=mysqli_fetch_assoc($table))
{
print "
<tr>

<td>$sor[orszag]</td>
</tr>

";
}
if($sor[orszag].exif_read_data)
{
	print"<a href=\"$table\">$sor[orszag]</a>";
}

mysqli_close($van);
?>

</table>
</body>
</html>
