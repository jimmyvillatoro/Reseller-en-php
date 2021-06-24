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
<meta name="description: formulario de Seleccion" content=""> 
<meta name="author: Jimmy Villatoro" content="">
 
<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
<!-- end -->

<style>

body{
	margin:0;
	padding:0;
	background:#f1f1f1;
	font:70% Arial, Helvetica, sans-serif; 
	color:#555;
	line-height:150%;
	text-align:left;
}
a{
	text-decoration:none;
	color:#057fac;
}
a:hover{
	text-decoration:none;
	color:#999;
}
h1{
	font-size:140%;
	margin:0 20px;
	line-height:80px;	
}
h2{
	font-size:120%;
}
#container{
	margin:0 auto;
	width:2800px;
	background:#fff;
	padding-bottom:20px;
}
#content{margin:0 20px;}
p.sig{	
	margin:0 auto;
	width:2800px;
	padding:1em 0;
}
form{
	margin:1em 0;
	padding:.2em 20px;
	background:#eee;
}
</style>
 
 
</head> 
<!-- body --> 
<body> 
<div> 
<h2>Reseller</h2> 
</div> 
 
<div id='container'>
	<h1>Selección de Registros</h1>
	
	<div id='content'><table>
  <tr><th>IdR</th> 
<th>Business_Name</th> 
<th>Nature_of_business_Industry</th> 
<th>Business_Address</th> 
<th>Business_City</th> 
<th>Business_Country</th> 
<th>Business_Registration_Number</th> 
<th>Business_Contact_Number_01</th> 
<th>Business_Contact_Number_02</th> 
<th>Business_Email</th> 
<th>Business_Website</th> 
<th>Business_Manager_Full_Name</th> 
<th>Business_Manager_ID_card_number</th> 
<th>Business_Manager_passport_number</th> 
<th>Business_Manager_Contact_number_1</th> 
<th>Business_Manager_Contact_number_2</th> 
<th>Business_Manager_Email_ID</th> 
<th>Estado</th> 
<th>Tipo</th> 
<th>Terminos</th> 
<th>Politicas</th> 
<th>IdU</th> 

<?php
include 'db.php'; 
$Business_Name= utf8_decode($_GET['Business_Name']); 
$resultado=mysqli_query($db_connection, "SELECT * FROM Reseller " );
while ($row =mysqli_fetch_array($resultado)) 
{  
$IdR=$row['IdR'];
$Business_Name=$row['Business_Name'];
$Nature_of_business_Industry=$row['Nature_of_business_Industry'];
$Business_Address=$row['Business_Address'];
$Business_City=$row['Business_City'];
$Business_Country=$row['Business_Country'];
$Business_Registration_Number=$row['Business_Registration_Number'];
$Business_Contact_Number_01=$row['Business_Contact_Number_01'];
$Business_Contact_Number_02=$row['Business_Contact_Number_02'];
$Business_Email=$row['Business_Email'];
$Business_Website=$row['Business_Website'];
$Business_Manager_Full_Name=$row['Business_Manager_Full_Name'];
$Business_Manager_ID_card_number=$row['Business_Manager_ID_card_number'];
$Business_Manager_passport_number=$row['Business_Manager_passport_number'];
$Business_Manager_Contact_number_1=$row['Business_Manager_Contact_number_1'];
$Business_Manager_Contact_number_2=$row['Business_Manager_Contact_number_2'];
$Business_Manager_Email_ID=$row['Business_Manager_Email_ID'];
$Estado=$row['Estado'];
$Tipo=$row['Tipo'];
$Terminos=$row['Terminos'];
$Politicas=$row['Politicas'];
$IdU=$row['IdU'];
 ?>
</tr><tr><td><?php echo $IdR; ?></td> 
<td><?php echo $Business_Name; ?></td> 
<td><?php echo $Nature_of_business_Industry; ?></td> 
<td><?php echo $Business_Address; ?></td> 
<td><?php echo $Business_City; ?></td> 
<td><?php echo $Business_Country; ?></td> 
<td><?php echo $Business_Registration_Number; ?></td> 
<td><?php echo $Business_Contact_Number_01; ?></td> 
<td><?php echo $Business_Contact_Number_02; ?></td> 
<td><?php echo $Business_Email; ?></td> 
<td><?php echo $Business_Website; ?></td> 
<td><?php echo $Business_Manager_Full_Name; ?></td> 
<td><?php echo $Business_Manager_ID_card_number; ?></td> 
<td><?php echo $Business_Manager_passport_number; ?></td> 
<td><?php echo $Business_Manager_Contact_number_1; ?></td> 
<td><?php echo $Business_Manager_Contact_number_2; ?></td> 
<td><?php echo $Business_Manager_Email_ID; ?></td> 
<td><?php echo $Estado; ?></td> 
<td><?php echo $Tipo; ?></td> 
<td><?php echo $Terminos; ?></td> 
<td><?php echo $Politicas; ?></td> 
<td><?php echo $IdU; ?></td> 
 
 <?php } mysqli_free_result($resultado);
mysqli_close($db_connection); 
?> 
</tr></table>	</div>
</div></br></br><div id='container'>
	<h1>Selección de Registros para actualizar</h1>
	
	<div id='content'><table>
  <tr><th>Actualizar</th><th>IdR</th> 
<th>Business_Name</th> 
<th>Nature_of_business_Industry</th> 
<th>Business_Address</th> 
<th>Business_City</th> 
<th>Business_Country</th> 
<th>Business_Registration_Number</th> 
<th>Business_Contact_Number_01</th> 
<th>Business_Contact_Number_02</th> 
<th>Business_Email</th> 
<th>Business_Website</th> 
<th>Business_Manager_Full_Name</th> 
<th>Business_Manager_ID_card_number</th> 
<th>Business_Manager_passport_number</th> 
<th>Business_Manager_Contact_number_1</th> 
<th>Business_Manager_Contact_number_2</th> 
<th>Business_Manager_Email_ID</th> 
<th>Estado</th> 
<th>Tipo</th> 
<th>Terminos</th> 
<th>Politicas</th> 
<th>IdU</th> 

<?php
include 'db.php'; 
$Business_Name= utf8_decode($_GET['Business_Name']); 
$resultado=mysqli_query($db_connection, "SELECT * FROM Reseller " );
while ($row =mysqli_fetch_array($resultado)) 
{  
$IdR=$row['IdR'];
$Business_Name=$row['Business_Name'];
$Nature_of_business_Industry=$row['Nature_of_business_Industry'];
$Business_Address=$row['Business_Address'];
$Business_City=$row['Business_City'];
$Business_Country=$row['Business_Country'];
$Business_Registration_Number=$row['Business_Registration_Number'];
$Business_Contact_Number_01=$row['Business_Contact_Number_01'];
$Business_Contact_Number_02=$row['Business_Contact_Number_02'];
$Business_Email=$row['Business_Email'];
$Business_Website=$row['Business_Website'];
$Business_Manager_Full_Name=$row['Business_Manager_Full_Name'];
$Business_Manager_ID_card_number=$row['Business_Manager_ID_card_number'];
$Business_Manager_passport_number=$row['Business_Manager_passport_number'];
$Business_Manager_Contact_number_1=$row['Business_Manager_Contact_number_1'];
$Business_Manager_Contact_number_2=$row['Business_Manager_Contact_number_2'];
$Business_Manager_Email_ID=$row['Business_Manager_Email_ID'];
$Estado=$row['Estado'];
$Tipo=$row['Tipo'];
$Terminos=$row['Terminos'];
$Politicas=$row['Politicas'];
$IdU=$row['IdU'];
 ?>
</tr><tr><td><a href=Resellerupd2.php?IdR=<?php echo $IdR; ?>><?php echo $IdR; ?> actualizar</a></td><td><?php echo $IdR; ?></td> 
<td><?php echo $Business_Name; ?></td> 
<td><?php echo $Nature_of_business_Industry; ?></td> 
<td><?php echo $Business_Address; ?></td> 
<td><?php echo $Business_City; ?></td> 
<td><?php echo $Business_Country; ?></td> 
<td><?php echo $Business_Registration_Number; ?></td> 
<td><?php echo $Business_Contact_Number_01; ?></td> 
<td><?php echo $Business_Contact_Number_02; ?></td> 
<td><?php echo $Business_Email; ?></td> 
<td><?php echo $Business_Website; ?></td> 
<td><?php echo $Business_Manager_Full_Name; ?></td> 
<td><?php echo $Business_Manager_ID_card_number; ?></td> 
<td><?php echo $Business_Manager_passport_number; ?></td> 
<td><?php echo $Business_Manager_Contact_number_1; ?></td> 
<td><?php echo $Business_Manager_Contact_number_2; ?></td> 
<td><?php echo $Business_Manager_Email_ID; ?></td> 
<td><?php echo $Estado; ?></td> 
<td><?php echo $Tipo; ?></td> 
<td><?php echo $Terminos; ?></td> 
<td><?php echo $Politicas; ?></td> 
<td><?php echo $IdU; ?></td> 
 
 <?php } mysqli_free_result($resultado);
mysqli_close($db_connection); 
?> 
</tr></table>	</div>
</div></br></br> 
 
<div id='container'>
	<h1>Selección de Registros para borrar</h1>
	
	<div id='content'><table>
  <tr><th>Borrar</th><th>IdR</th> 
<th>Business_Name</th> 
<th>Nature_of_business_Industry</th> 
<th>Business_Address</th> 
<th>Business_City</th> 
<th>Business_Country</th> 
<th>Business_Registration_Number</th> 
<th>Business_Contact_Number_01</th> 
<th>Business_Contact_Number_02</th> 
<th>Business_Email</th> 
<th>Business_Website</th> 
<th>Business_Manager_Full_Name</th> 
<th>Business_Manager_ID_card_number</th> 
<th>Business_Manager_passport_number</th> 
<th>Business_Manager_Contact_number_1</th> 
<th>Business_Manager_Contact_number_2</th> 
<th>Business_Manager_Email_ID</th> 
<th>Estado</th> 
<th>Tipo</th> 
<th>Terminos</th> 
<th>Politicas</th> 
<th>IdU</th> 

<?php
include 'db.php'; 
$Business_Name= utf8_decode($_GET['Business_Name']); 
$resultado=mysqli_query($db_connection, "SELECT * FROM Reseller " );
while ($row =mysqli_fetch_array($resultado)) 
{  
$IdR=$row['IdR'];
$Business_Name=$row['Business_Name'];
$Nature_of_business_Industry=$row['Nature_of_business_Industry'];
$Business_Address=$row['Business_Address'];
$Business_City=$row['Business_City'];
$Business_Country=$row['Business_Country'];
$Business_Registration_Number=$row['Business_Registration_Number'];
$Business_Contact_Number_01=$row['Business_Contact_Number_01'];
$Business_Contact_Number_02=$row['Business_Contact_Number_02'];
$Business_Email=$row['Business_Email'];
$Business_Website=$row['Business_Website'];
$Business_Manager_Full_Name=$row['Business_Manager_Full_Name'];
$Business_Manager_ID_card_number=$row['Business_Manager_ID_card_number'];
$Business_Manager_passport_number=$row['Business_Manager_passport_number'];
$Business_Manager_Contact_number_1=$row['Business_Manager_Contact_number_1'];
$Business_Manager_Contact_number_2=$row['Business_Manager_Contact_number_2'];
$Business_Manager_Email_ID=$row['Business_Manager_Email_ID'];
$Estado=$row['Estado'];
$Tipo=$row['Tipo'];
$Terminos=$row['Terminos'];
$Politicas=$row['Politicas'];
$IdU=$row['IdU'];
 ?>
</tr><tr><td><a href=Resellerdel2.php?IdR=<?php echo $IdR; ?>><?php echo $IdR; ?> borrar</a></td><td><?php echo $IdR; ?></td> 
<td><?php echo $Business_Name; ?></td> 
<td><?php echo $Nature_of_business_Industry; ?></td> 
<td><?php echo $Business_Address; ?></td> 
<td><?php echo $Business_City; ?></td> 
<td><?php echo $Business_Country; ?></td> 
<td><?php echo $Business_Registration_Number; ?></td> 
<td><?php echo $Business_Contact_Number_01; ?></td> 
<td><?php echo $Business_Contact_Number_02; ?></td> 
<td><?php echo $Business_Email; ?></td> 
<td><?php echo $Business_Website; ?></td> 
<td><?php echo $Business_Manager_Full_Name; ?></td> 
<td><?php echo $Business_Manager_ID_card_number; ?></td> 
<td><?php echo $Business_Manager_passport_number; ?></td> 
<td><?php echo $Business_Manager_Contact_number_1; ?></td> 
<td><?php echo $Business_Manager_Contact_number_2; ?></td> 
<td><?php echo $Business_Manager_Email_ID; ?></td> 
<td><?php echo $Estado; ?></td> 
<td><?php echo $Tipo; ?></td> 
<td><?php echo $Terminos; ?></td> 
<td><?php echo $Politicas; ?></td> 
<td><?php echo $IdU; ?></td> 
 
 <?php } mysqli_free_result($resultado);
mysqli_close($db_connection); 
?> 
</tr></table>	</div>
</div></br></br><a href='index.php'>Regresar</a></body> </html>