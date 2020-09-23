<?php
if(isset($_GET))
{
    
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $mensaje ="
    <html> 
        <head> 
           <title>Correo VIA WEB</title> 
        </head> 
        <body>
        <p> ".$_GET['message'].
        " 
        </p> 
        </body> 
    </html> 
    " ;
    
    $headers .= "From: Miguel Angel Alvarez <pvalentinuzzi14@gmail.com>\r\n"; 
    
    
   mail("pvalentinuzzi14@gmail.com","Consulta VIA WEB",$mensaje,$headers);   
    header("location:index.php");
    
   
}

?>