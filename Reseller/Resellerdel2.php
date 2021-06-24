<!DOCTYPE html> 
<html lang="en"> 
<head> 
<!-- basic --> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<!-- mobile metas --> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="viewport" content="initial-scale=1, maximum-scale=1"> 
 
<title>Reseller</title> 
<meta name="keywords" content=""> 
<meta name="description: formulario de borrado" content=""> 
<meta name="author: Jimmy Villatoro" content="">
<link rel="stylesheet" type="text/css" media="screen" href="style.css" /> 
 
 <?php  
$IdR = utf8_decode($_GET['IdR']); 
?> 
 
 
</head> <!-- body --> <body> <div> <h2>Reseller</h2> </div> 
 
<h3>Borrar</h3>
<form action="Resellerdel.php" method="POST"> 
 
<div><input type='text' name='Idx' class='form-control' placeholder='Id a Borrar' class='form-input' value='<?php echo  $IdR; ?>' required></div>  
<div> <button type='submit' class='btn btn-success'>Borrar</button> </div> 
</form> 
 
<a href='index.php'>Regresar</a></body>
</html>