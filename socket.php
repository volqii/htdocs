<?php 
$fp =fopen("/dev/ttyACM0", "w+");
if( !$fp) {
        echo "Error";die();
}


echo fread($fp, 10);

fclose($fp);
?>