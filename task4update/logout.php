
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
 <?php 
 
 
 session_start();

 session_destroy();
 header("location:viewpage.php"); 
 ?>


</body>
</html>