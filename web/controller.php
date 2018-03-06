<?php
include_once 'config.php';

if (isset($_POST['hiddenPassword'])) {
    if ($_POST['hiddenPassword'] === $apikey) {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'position') {
                if (isset($_POST['hvalue'])) {
                    
                    $hvalue = $_POST['hvalue'];
                    
                    $value = 256 - $hvalue;
                    $command = "sudo i2cset -y 1 0x33 0x00 0 " . $value . " 0x00 0x00 0x00 0x00 0x00 i";
                    shell_exec($command);
                }
                if (isset($_POST['vvalue'])) {
                    
                    $vvalue = $_POST['vvalue'];
                    
                    $value = 256 - $vvalue;
                    $command = "sudo i2cset -y 1 0x33 0x00 1 " . $value . " 0x00 0x00 0x00 0x00 0x00 i";
                    shell_exec($command);
                }
            } else if ($_POST['action'] === 'sweep') {
                if (isset($_POST['sweepAxis'])) {
                    $axis = 0;
                    if ($_POST['sweepAxis'] === 'vertical')
                        $axis = 1;
                    
                    // minvalue=128&maxvalue=128&action=sweep&speedvalue=128&sweepAxis=vertical
                    
                    $speed = $_POST['speedvalue'];
                    $minvalue = 256 - $_POST['minvalue'];
                    $maxvalue = 256 - $_POST['maxvalue'];
                    
                    if ($minvalue > $maxvalue) {
                        $tmp = $minvalue;
                        $minvalue = $maxvalue;
                        $maxvalue = $tmp;
                    }
                    
                    $command = "sudo i2cset -y 1 0x33 1 " . $axis . " ";
                    $command .= intval($speed % 256) . " " . intval($speed / 256) . " ";
                    $command .= $maxvalue . " 0 " . $minvalue . " 0 i";
                    shell_exec($command);
                }
            } else {
                echo "Bad action!";
            }
        } else {
            echo "No action!";
        }
    } else {
        echo "Bad key!";
    }
} else {
    echo "Unauthorized access!";
}

?>