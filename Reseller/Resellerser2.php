<?php 
include 'db.php'; 
$html=""; 
$busca= $_REQUEST["txtbusca"]; 
$html.="<h2><strong class='cur'>Resultados</h2>"; 
 
$resultado=mysqli_query($db_connection, "SELECT * FROM Reseller WHERE Business_Name LIKE '".$busca."'" ); 
 
if (mysqli_num_rows($resultado)>0) {
while ($row =mysqli_fetch_array($resultado)) {  
$IdR=$row['IdR'];
$html.= '<p><a href=destino.php?IdR='.$IdR.'>'.$IdR.'</a></p></b>'; 
$Business_Name=$row['Business_Name'];
$html.= '<p><a href=destino.php?Business_Name='.$Business_Name.'>'.$Business_Name.'</a></p></b>'; 
$Nature_of_business_Industry=$row['Nature_of_business_Industry'];
$html.= '<p><a href=destino.php?Nature_of_business_Industry='.$Nature_of_business_Industry.'>'.$Nature_of_business_Industry.'</a></p></b>'; 
$Business_Address=$row['Business_Address'];
$html.= '<p><a href=destino.php?Business_Address='.$Business_Address.'>'.$Business_Address.'</a></p></b>'; 
$Business_City=$row['Business_City'];
$html.= '<p><a href=destino.php?Business_City='.$Business_City.'>'.$Business_City.'</a></p></b>'; 
$Business_Country=$row['Business_Country'];
$html.= '<p><a href=destino.php?Business_Country='.$Business_Country.'>'.$Business_Country.'</a></p></b>'; 
$Business_Registration_Number=$row['Business_Registration_Number'];
$html.= '<p><a href=destino.php?Business_Registration_Number='.$Business_Registration_Number.'>'.$Business_Registration_Number.'</a></p></b>'; 
$Business_Contact_Number_01=$row['Business_Contact_Number_01'];
$html.= '<p><a href=destino.php?Business_Contact_Number_01='.$Business_Contact_Number_01.'>'.$Business_Contact_Number_01.'</a></p></b>'; 
$Business_Contact_Number_02=$row['Business_Contact_Number_02'];
$html.= '<p><a href=destino.php?Business_Contact_Number_02='.$Business_Contact_Number_02.'>'.$Business_Contact_Number_02.'</a></p></b>'; 
$Business_Email=$row['Business_Email'];
$html.= '<p><a href=destino.php?Business_Email='.$Business_Email.'>'.$Business_Email.'</a></p></b>'; 
$Business_Website=$row['Business_Website'];
$html.= '<p><a href=destino.php?Business_Website='.$Business_Website.'>'.$Business_Website.'</a></p></b>'; 
$Business_Manager_Full_Name=$row['Business_Manager_Full_Name'];
$html.= '<p><a href=destino.php?Business_Manager_Full_Name='.$Business_Manager_Full_Name.'>'.$Business_Manager_Full_Name.'</a></p></b>'; 
$Business_Manager_ID_card_number=$row['Business_Manager_ID_card_number'];
$html.= '<p><a href=destino.php?Business_Manager_ID_card_number='.$Business_Manager_ID_card_number.'>'.$Business_Manager_ID_card_number.'</a></p></b>'; 
$Business_Manager_passport_number=$row['Business_Manager_passport_number'];
$html.= '<p><a href=destino.php?Business_Manager_passport_number='.$Business_Manager_passport_number.'>'.$Business_Manager_passport_number.'</a></p></b>'; 
$Business_Manager_Contact_number_1=$row['Business_Manager_Contact_number_1'];
$html.= '<p><a href=destino.php?Business_Manager_Contact_number_1='.$Business_Manager_Contact_number_1.'>'.$Business_Manager_Contact_number_1.'</a></p></b>'; 
$Business_Manager_Contact_number_2=$row['Business_Manager_Contact_number_2'];
$html.= '<p><a href=destino.php?Business_Manager_Contact_number_2='.$Business_Manager_Contact_number_2.'>'.$Business_Manager_Contact_number_2.'</a></p></b>'; 
$Business_Manager_Email_ID=$row['Business_Manager_Email_ID'];
$html.= '<p><a href=destino.php?Business_Manager_Email_ID='.$Business_Manager_Email_ID.'>'.$Business_Manager_Email_ID.'</a></p></b>'; 
$Estado=$row['Estado'];
$html.= '<p><a href=destino.php?Estado='.$Estado.'>'.$Estado.'</a></p></b>'; 
$Tipo=$row['Tipo'];
$html.= '<p><a href=destino.php?Tipo='.$Tipo.'>'.$Tipo.'</a></p></b>'; 
$Terminos=$row['Terminos'];
$html.= '<p><a href=destino.php?Terminos='.$Terminos.'>'.$Terminos.'</a></p></b>'; 
$Politicas=$row['Politicas'];
$html.= '<p><a href=destino.php?Politicas='.$Politicas.'>'.$Politicas.'</a></p></b>'; 
$IdU=$row['IdU'];
$html.= '<p><a href=destino.php?IdU='.$IdU.'>'.$IdU.'</a></p></b>'; 
 } 
$html.="</b>"; 
echo $html;
 } 
else
echo 
"Is not found";
mysqli_free_result($resultado);
mysqli_close($db_connection);
?>