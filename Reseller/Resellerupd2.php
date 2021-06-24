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
<meta name="description: formulario de actualizacion" content=""> 
<meta name="author: Jimmy Villatoro" content="">
<link rel="stylesheet" type="text/css" media="screen" href="style.css" /> 
<?php
include 'db.php'; 
$IdR = utf8_decode($_GET['IdR']); 
$resultado=mysqli_query($db_connection, "SELECT * FROM Reseller WHERE IdR = '".$IdR."'" ); 
while ($row =mysqli_fetch_array($resultado)) {  
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
 } 
 mysqli_free_result($resultado);
mysqli_close($db_connection); 
?> 
 
 
</head> 
<!-- body --> 
<body> 
<div> <h2>Reseller</h2> </div> 
 
<h3>Actualiza</h3>
<form action="Resellerupd.php" method="POST"><input type='hidden' name='IdR' value='<?php echo utf8_decode($_GET['IdR']);?> '>
<div><input type='text' name='IdR'  class='form-control' placeholder='IdR' class='form-input' value='<?php echo $IdR; ?>' required>  </div> 
<div><input type='text' name='Business_Name'  class='form-control' placeholder='Business_Name' class='form-input' value='<?php echo $Business_Name; ?>' required>  </div> 
<div><input type='text' name='Nature_of_business_Industry'  class='form-control' placeholder='Nature_of_business_Industry' class='form-input' value='<?php echo $Nature_of_business_Industry; ?>' required>  </div> 
<div><input type='text' name='Business_Address'  class='form-control' placeholder='Business_Address' class='form-input' value='<?php echo $Business_Address; ?>' required>  </div> 
<div><input type='text' name='Business_City'  class='form-control' placeholder='Business_City' class='form-input' value='<?php echo $Business_City; ?>' required>  </div> 
<div><input type='text' name='Business_Country'  class='form-control' placeholder='Business_Country' class='form-input' value='<?php echo $Business_Country; ?>' required>  </div> 
<div><input type='text' name='Business_Registration_Number'  class='form-control' placeholder='Business_Registration_Number' class='form-input' value='<?php echo $Business_Registration_Number; ?>' required>  </div> 
<div><input type='text' name='Business_Contact_Number_01'  class='form-control' placeholder='Business_Contact_Number_01' class='form-input' value='<?php echo $Business_Contact_Number_01; ?>' required>  </div> 
<div><input type='text' name='Business_Contact_Number_02'  class='form-control' placeholder='Business_Contact_Number_02' class='form-input' value='<?php echo $Business_Contact_Number_02; ?>' required>  </div> 
<div><input type='text' name='Business_Email'  class='form-control' placeholder='Business_Email' class='form-input' value='<?php echo $Business_Email; ?>' required>  </div> 
<div><input type='text' name='Business_Website'  class='form-control' placeholder='Business_Website' class='form-input' value='<?php echo $Business_Website; ?>' required>  </div> 
<div><input type='text' name='Business_Manager_Full_Name'  class='form-control' placeholder='Business_Manager_Full_Name' class='form-input' value='<?php echo $Business_Manager_Full_Name; ?>' required>  </div> 
<div><input type='text' name='Business_Manager_ID_card_number'  class='form-control' placeholder='Business_Manager_ID_card_number' class='form-input' value='<?php echo $Business_Manager_ID_card_number; ?>' required>  </div> 
<div><input type='text' name='Business_Manager_passport_number'  class='form-control' placeholder='Business_Manager_passport_number' class='form-input' value='<?php echo $Business_Manager_passport_number; ?>' required>  </div> 
<div><input type='text' name='Business_Manager_Contact_number_1'  class='form-control' placeholder='Business_Manager_Contact_number_1' class='form-input' value='<?php echo $Business_Manager_Contact_number_1; ?>' required>  </div> 
<div><input type='text' name='Business_Manager_Contact_number_2'  class='form-control' placeholder='Business_Manager_Contact_number_2' class='form-input' value='<?php echo $Business_Manager_Contact_number_2; ?>' required>  </div> 
<div><input type='text' name='Business_Manager_Email_ID'  class='form-control' placeholder='Business_Manager_Email_ID' class='form-input' value='<?php echo $Business_Manager_Email_ID; ?>' required>  </div> 
<div><input type='text' name='Estado'  class='form-control' placeholder='Estado' class='form-input' value='<?php echo $Estado; ?>' required>  </div> 
<div><input type='text' name='Tipo'  class='form-control' placeholder='Tipo' class='form-input' value='<?php echo $Tipo; ?>' required>  </div> 
<div><input type='text' name='Terminos'  class='form-control' placeholder='Terminos' class='form-input' value='<?php echo $Terminos; ?>' required>  </div> 
<div><input type='text' name='Politicas'  class='form-control' placeholder='Politicas' class='form-input' value='<?php echo $Politicas; ?>' required>  </div> 
<div><input type='text' name='IdU'  class='form-control' placeholder='IdU' class='form-input' value='<?php echo $IdU; ?>' required>  </div> 

<div> <button type='submit' class='btn btn-success'>actualiza</button> </div> </form> 
 
<a href='index.php'>Regresar</a></body>
</html>