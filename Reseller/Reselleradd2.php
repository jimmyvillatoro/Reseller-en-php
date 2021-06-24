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
<meta name="description: formulario de registro" content="">
<meta name="author: Jimmy Villatoro" content="">
<link rel="stylesheet" type="text/css" media="screen" href="style.css" /> 
 
</head>
<!-- body -->
<body>
        <div> <h2>Reseller</h2> </div> 
 
<h3>Registrarte</h3>
<form action="Reselleradd.php" method="POST"><input type='hidden' name=IdR value='<?php echo utf8_decode($_GET['IdR']); ?>'> 
 
<div><input type='text' name='IdR'  class='form-control' placeholder='IdR' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Name'  class='form-control' placeholder='Business_Name' class='form-input' required>
                </div>  
<div><input type='text' name='Nature_of_business_Industry'  class='form-control' placeholder='Nature_of_business_Industry' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Address'  class='form-control' placeholder='Business_Address' class='form-input' required>
                </div>  
<div><input type='text' name='Business_City'  class='form-control' placeholder='Business_City' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Country'  class='form-control' placeholder='Business_Country' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Registration_Number'  class='form-control' placeholder='Business_Registration_Number' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Contact_Number_01'  class='form-control' placeholder='Business_Contact_Number_01' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Contact_Number_02'  class='form-control' placeholder='Business_Contact_Number_02' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Email'  class='form-control' placeholder='Business_Email' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Website'  class='form-control' placeholder='Business_Website' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Manager_Full_Name'  class='form-control' placeholder='Business_Manager_Full_Name' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Manager_ID_card_number'  class='form-control' placeholder='Business_Manager_ID_card_number' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Manager_passport_number'  class='form-control' placeholder='Business_Manager_passport_number' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Manager_Contact_number_1'  class='form-control' placeholder='Business_Manager_Contact_number_1' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Manager_Contact_number_2'  class='form-control' placeholder='Business_Manager_Contact_number_2' class='form-input' required>
                </div>  
<div><input type='text' name='Business_Manager_Email_ID'  class='form-control' placeholder='Business_Manager_Email_ID' class='form-input' required>
                </div>  
<div><input type='text' name='Estado'  class='form-control' placeholder='Estado' class='form-input' required>
                </div>  
<div><input type='text' name='Tipo'  class='form-control' placeholder='Tipo' class='form-input' required>
                </div>  
<div><input type='text' name='Terminos'  class='form-control' placeholder='Terminos' class='form-input' required>
                </div>  
<div><input type='text' name='Politicas'  class='form-control' placeholder='Politicas' class='form-input' required>
                </div>  
<div><input type='text' name='IdU'  class='form-control' placeholder='IdU' class='form-input' required>
                </div>  
 
 
<div>
             <button type='submit' class='btn btn-success'>Registrate</button>
             </div>
             </form> 
<a href='index.php'>Regresar</a>
</body>
</html>