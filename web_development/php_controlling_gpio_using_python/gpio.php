<html>
<head> 
<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
</head>
         <body>
         TUBE LIGHT CONTROL:
         <form method="post" action="gpio.php">
                 <input type="submit" value="ON" name="on2">
                 <input type="submit" value="OFF" name="off2">
         </form>
<p>--------------------------------------------------------------</p>
         FAN CONTROL:

 	 <form method="post" action="gpio.php">
                 <input type="submit" value="ON" name="on3">
                 <input type="submit" value="OFF" name="off3">
         </form>
<p>--------------------------------------------------------------</p>
         BULB LIGHT CONTROL:
         <form method="post" action="gpio.php">
                 <input type="submit" value="ON" name="on4">
                 <input type="submit" value="OFF" name="off4">
         </form>
<p>--------------------------------------------------------------</p>
         MOTION CONTROL:
         <form method="post" action="gpio.php">
                 <input type="submit" value="ON" name="on5">
                 <input type="submit" value="OFF" name="off5">
                 <input type="submit" value="RESTART" name="restart5">
                 <input type="submit" value="SHIFT" name="shift5">
                 <input type="submit" value="DELETE" name="del5">
                 <input type="submit" value="DRIVE" name="drive5">
         </form>
<p>--------------------------------------------------------------</p>
         PI CONTROL:

         <form method="post" action="gpio.php">
                 <input type="submit" value="POWEROFF" name="poweroff">
                 
         </form>
<p>--------------------------------------------------------------</p>


         <?php
			

         if(isset($_POST['on2'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/6.py");
                 echo "Lights On";}
         else if(isset($_POST['off2'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/6a.py");
                 echo "Lights Off";}


         if(isset($_POST['on3'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/7.py");
                 echo "Fan On";}
         else if(isset($_POST['off3'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/7a.py");
                 echo "Fan Off";}


         if(isset($_POST['on4'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/8.py");
                 echo "Lights On";}
         else if(isset($_POST['off4'])){
                 $gpio_on = shell_exec("sudo python /home/pi/Desktop/raspberry_pi/relay/8a.py");
                 echo "Lights Off";}

         if(isset($_POST['on5'])){
                 $gpio_on = shell_exec("sudo motion on");
                 echo "Motion is on";}
         else if(isset($_POST['off5'])){
                 $gpio_on = shell_exec("sudo service motion stop");
                 echo "Motion is off";}
         else if(isset($_POST['restart5'])){
                 $gpio_on = shell_exec("sudo service motion restart");
                 echo "Motion is restarting";}
         else if(isset($_POST['shift5'])){
                 $gpio_on = shell_exec("sudo bash /home/pi/Desktop/raspberry_pi/simple_ssh_scripting/motion_backup.sh");
                 echo "Motion has shifted";}
         else if(isset($_POST['del5'])){
                 $gpio_on = shell_exec("sudo rm -rf /var/lib/motion/");
                 echo "Motion is Deleted";}
         else if(isset($_POST['drive5'])){
                 $gpio_on = shell_exec("sudo bash /home/pi/Desktop/Dropbox-Uploader/dropbox_uploader.sh -s upload /var/lib/motion/ /");
                 echo "Motion has Shifted to drive";}


         if(isset($_POST['poweroff'])){
                 $gpio_on = shell_exec("sudo poweroff");
                 echo "Shutting Down";}
		?>
         </body>
</html>

