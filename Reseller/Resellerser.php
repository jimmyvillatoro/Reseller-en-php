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
<meta name="description: formulario de Buscar" content=""> 
<meta name="author: Jimmy Villatoro" content="">
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />

<script src="jquery-3.6.0.min.js"></script>
<script language=JavaScript>
$(document).ready(function(){
         $("#txtbusca").keyup(function(){
              var parametros="txtbusca="+$(this).val()
              $.ajax({
                    data:  parametros,
                  url:   "Resellerser2.php",
                  type:  "post",
                    beforeSend: function () { },
                    success:  function (response) {                 
                        $(".salida").html(response);
                  },
                  error:function(){
                       alert("funcion error")
                    }
               });
         })
})

</script>
 
 
 <?php  
$Business_Name = utf8_decode($_GET['Business_Name']); 
?> 
</head> 
<!-- body --> 
<body> 
<div> <h2>Reseller</h2> </div> 
 

<h2>busca por <strong class="cur">Nombre</strong></h2>
<form action="Resellerser.php" method="POST">
<div class="input-group mb-3">
          <input type="text" class="form-control" id="txtbusca" value="<?php echo  $Business_Name; ?>" aria-label="Search" aria-describedby="basic-addon2">
       <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2"></span>
        </div>
</div>
<div class="salida"></div>
</form>
 <p><a href="index.php?IdR='$IdR'; ?>">Regresar</a></p>  
 
</body> </html>