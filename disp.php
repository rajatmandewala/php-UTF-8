<?php
include('connection.php');
$query="SELECT `ckid`, `cktext` FROM `cktable` WHERE ckid=12";
mysqli_set_charset($con,"utf8");
//$queryResource = mysql_query($query, $con) or die(mysql_error());
$result = mysqli_query($con, $query)or die(mysql_error());
// while ($row = mysql_fetch_assoc($queryResource)) {
//     $content = $row['cktext'];
//   }
  while($row = mysqli_fetch_array($result)){
    $content = $row['cktext'];
  }
  echo ord($content)."<br>";
  echo $content;
?>
 <!DOCTYPE html>
<html>
<head>
	<title>CK EDITOR</title>
	<script src="ckeditor/ckeditor.js"></script>
<head>
<body>
<form action="#" method="post">
<textarea class="ckeditor" name="editor" value="₹"><?php echo $content; ?></textarea>
<input type="submit" value="submit">
</form>
</body>
</html> 