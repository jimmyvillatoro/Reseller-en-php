<?php 
include 'db.php'; 
$IdR= $_REQUEST['IdR'];
$Business_Name= $_REQUEST['Business_Name'];
$Nature_of_business_Industry= $_REQUEST['Nature_of_business_Industry'];
$Business_Address= $_REQUEST['Business_Address'];
$Business_City= $_REQUEST['Business_City'];
$Business_Country= $_REQUEST['Business_Country'];
$Business_Registration_Number= $_REQUEST['Business_Registration_Number'];
$Business_Contact_Number_01= $_REQUEST['Business_Contact_Number_01'];
$Business_Contact_Number_02= $_REQUEST['Business_Contact_Number_02'];
$Business_Email= $_REQUEST['Business_Email'];
$Business_Website= $_REQUEST['Business_Website'];
$Business_Manager_Full_Name= $_REQUEST['Business_Manager_Full_Name'];
$Business_Manager_ID_card_number= $_REQUEST['Business_Manager_ID_card_number'];
$Business_Manager_passport_number= $_REQUEST['Business_Manager_passport_number'];
$Business_Manager_Contact_number_1= $_REQUEST['Business_Manager_Contact_number_1'];
$Business_Manager_Contact_number_2= $_REQUEST['Business_Manager_Contact_number_2'];
$Business_Manager_Email_ID= $_REQUEST['Business_Manager_Email_ID'];
$Estado= $_REQUEST['Estado'];
$Tipo= $_REQUEST['Tipo'];
$Terminos= $_REQUEST['Terminos'];
$Politicas= $_REQUEST['Politicas'];
$IdU= $_REQUEST['IdU'];

 
 date_default_timezone_set("America/Mexico_City"); $script_tz = date_default_timezone_get(); $date = date("Y-m-d"); $time = date("H:i:s", time()); $dt= $date." ". $time; 
 
$resultado=mysqli_query($db_connection, "SELECT * FROM Reseller WHERE IdR = '".$IdR."'" ); 
if (mysqli_num_rows($resultado)>0) {
 
$update_value ="UPDATE Reseller SET IdR= '".$IdR."', Business_Name= '".$Business_Name."', Nature_of_business_Industry= '".$Nature_of_business_Industry."', Business_Address= '".$Business_Address."', Business_City= '".$Business_City."', Business_Country= '".$Business_Country."', Business_Registration_Number= '".$Business_Registration_Number."', Business_Contact_Number_01= '".$Business_Contact_Number_01."', Business_Contact_Number_02= '".$Business_Contact_Number_02."', Business_Email= '".$Business_Email."', Business_Website= '".$Business_Website."', Business_Manager_Full_Name= '".$Business_Manager_Full_Name."', Business_Manager_ID_card_number= '".$Business_Manager_ID_card_number."', Business_Manager_passport_number= '".$Business_Manager_passport_number."', Business_Manager_Contact_number_1= '".$Business_Manager_Contact_number_1."', Business_Manager_Contact_number_2= '".$Business_Manager_Contact_number_2."', Business_Manager_Email_ID= '".$Business_Manager_Email_ID."', Estado= '".$Estado."', Tipo= '".$Tipo."', Terminos= '".$Terminos."', Politicas= '".$Politicas."', IdU= '".$IdU."'   WHERE   IdR = '".$IdR."'" ; 
$retry_value = mysqli_query($db_connection,$update_value );
 header("Location: index.php?IdR='".$IdR."'"); 
mysqli_free_result($retry_value);
} else {  
 
header("Location: index.php?IdR='".$IdR."'");  
}
mysqli_free_result($resultado);
mysqli_close($db_connection);
?>