<html>
<head> 
<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
</head>
         <body>
         LED Control 1:

         <form method="post" action="gpio.php">
                 <input type="submit" value="ON1" name="on1">
                 <input type="submit" value="OFF1" name="off1">
    	 </form>	
<p>--------------------------------------------------------------</p>
         LED Control 2:
         <form method="post" action="gpio.php">
                 <input type="submit" value="ON2" name="on2">
                 <input type="submit" value="OFF2" name="off2">
         </form>
<p>--------------------------------------------------------------</p>
         LED Control 3:

 	 <form method="post" action="gpio.php">
                 <input type="submit" value="ON3" name="on3">
                 <input type="submit" value="OFF3" name="off3">
         </form>
<p>--------------------------------------------------------------</p>
         LED Control 4:
         <form method="post" action="gpio.php">
                 <input type="submit" value="ON4" name="on4">
                 <input type="submit" value="OFF4" name="off4">
         </form>
<p>--------------------------------------------------------------</p>


         <?php

         if(isset($_POST['on1'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/5.py");
                 echo "LED is on";}  		
       	 else if(isset($_POST['off1'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/5a.py");
                 echo "LED is off";}
			

         if(isset($_POST['on2'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/6.py");
                 echo "LED is on";}
         else if(isset($_POST['off2'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/6a.py");
                 echo "LED is off";}


         if(isset($_POST['on3'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/7.py");
                 echo "LED is on";}
         else if(isset($_POST['off3'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/7a.py");
                 echo "LED is off";}



         if(isset($_POST['on4'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/8.py");
                 echo "LED is on";}
         else if(isset($_POST['off4'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/8a.py");
                 echo "LED is off";}

		?>
         </body>
</html>

