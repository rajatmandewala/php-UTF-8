<?php
include('connection.php');
	if(isset($_POST['editor'])){
       echo  $text=$_POST['editor'];      
        
       mysqli_set_charset($con,"utf8");
$len = strlen($text);
$str="";
    echo ord($text[$i])."<br>";
    if(ord($text[$i])==185){        
        //$insertQuery="INSERT INTO `cktable`(`cktext`) VALUES (CHAR(226, 130, 185))";        
        $insertQuery="INSERT INTO `cktable`(`cktext`) VALUES ('".$text."')";
    }


//echo chr($a), "\n";// Decimal value 

//echo $insertQuery="INSERT INTO `cktable`(`cktext`) VALUES ('".$text."')";



        $res1=mysqli_query($con,$insertQuery);
             //  $a=120;
      //echo chr($a), "\n";
}


?>



 <!DOCTYPE html>
<html>
<head>
	<title>CK EDITOR</title>
	<script src="ckeditor/ckeditor.js"></script>
<head>
<body>
<form action="#" method="post">
<textarea class="ckeditor" name="editor" value="₹">₹</textarea>
<input type="submit" value="submit">
</form>
</body>
</html> 