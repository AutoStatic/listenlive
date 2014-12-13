<?php

$btnval=$_GET["button"];

function sendData($data) {
  $socket = fsockopen("192.168.1.4", 8080);
  fwrite($socket,$data);
  usleep(300000);
  fclose($socket);
}

function goHome() {
  $home_cmd = array("EXIT", "EXIT", "EXIT", "EXIT", "HOME");
  foreach($home_cmd as $cmd) {
    sendData("$cmd");
  }
}

switch($btnval) {
  case "":
    break;
  case "home":
    goHome();
    break;
  case "settings":
    goHome();
    $settings_cmd = array("DOWN", "DOWN", "DOWN", "RIGHT", "RIGHT", "RIGHT", "OK");
    foreach($settings_cmd as $cmd) {
      sendData("$cmd");
    }
    break;
  case "i_radio":
    goHome();
    $i_radio_cmd = array("OK", "OK");
    foreach($i_radio_cmd as $cmd) {
      sendData("$cmd");
    }
    break;
  case "music_library":
    goHome();
    $music_library_cmd = array("OK", "OK");
    foreach($music_library_cmd as $cmd) {
      sendData("$cmd");
    }
    break;
  case "fav1":
    goHome();
    $fav1_cmd = array("OK", "OK", "OK");
    foreach($fav1_cmd as $cmd) {
      sendData("$cmd");
      usleep(200000);
    }
    break;
  case "fav2":
    goHome();
    $fav2_cmd = array("OK", "OK", "DOWN", "OK");
    foreach($fav2_cmd as $cmd) {
      sendData("$cmd");
      usleep(200000);
    }
    break;
  case "fav3":
    goHome();
    $fav3_cmd = array("OK", "OK", "DOWN", "DOWN", "OK");
    foreach($fav3_cmd as $cmd) {
      sendData("$cmd");
      usleep(200000);
    }
    break;
  case "fav4":
    goHome();
    $fav4_cmd = array("OK", "OK", "DOWN", "DOWN", "DOWN", "OK");
    foreach($fav4_cmd as $cmd) {
      sendData("$cmd");
      usleep(200000);
    }
    break;
  case "fav5":
    goHome();
    $fav5_cmd = array("OK", "OK", "DOWN", "DOWN", "DOWN", "DOWN", "OK");
    foreach($fav5_cmd as $cmd) {
      sendData("$cmd");
      usleep(200000);
    }
    break;
  case "fav6":
    goHome();
    $fav6_cmd = array("OK", "OK", "DOWN", "DOWN", "DOWN", "DOWN", "DOWN", "OK");
    foreach($fav6_cmd as $cmd) {
      sendData("$cmd");
      usleep(200000);
    }
    break;
  default:
    sendData("$btnval");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Listenlive Web Remote Control</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form action="index.php" method="get">
<table id="remote">
  <tr>
    <td><button name="button" value="POWER">POWER</button></td>
    <td><button name="button" value="settings">SETTINGS</button></td>		
    <td><button name="button" value="home">HOME</button></td>
  </tr>
  <tr>
    <td><button name="button" value="i_radio">I-RADIO</button></td>
    <td><button name="button" value="MUTE">MUTE</button></td>		
    <td><button name="button" value="music_library">MUSIC<br>LIBRARY</button></td>
  </tr>
  <tr>
    <td><button name="button" value="PGUP">PAGE-</button></td>
    <td><button name="button" value="del">DEL</button></td>		
    <td><button name="button" value="PGDN">PAGE+</button></td>
  </tr>
  <tr>
    <td><button id="symbol" name="button" value="REWIND">&#9665;&#9665;</button></td>
    <td><button name="button" value="fav">FAV</button></td>		
    <td><button id="symbol" name="button" value="FORWARD">&#9655;&#9655;</button></td>
  </tr>
  <tr>
    <td><button name="button" value="MENU">MENU</button></td>
    <td><button id="symbol" name="button" value="UP">&#9651;</button></td>		
    <td><button name="button" value="EXIT">EXIT</button></td>
  </tr>
  <tr>
    <td><button id="symbol" name="button" value="LEFT">&#9665;</button></td>
    <td><button name="button" value="OK">ENTER</button></td>		
    <td><button id="symbol" name="button" value="RIGHT">&#9655;</button></td>
  </tr>
  <tr>
    <td><button id="symbol" name="button" value="play">&#9655;&#9647;&#9647;</button></td>
    <td><button id="symbol" name="button" value="DOWN">&#9661;</button></td>		
    <td><button id="symbol" name="button" value="STOP">&#9633;</button></td>
  </tr>
  <tr>
    <td><button name="button" value="VOLp">VOL+</button></td>
    <td><button id="symbol" name="button">&#8649;</button></td>		
    <td><button id="symbol" name="button" value="track_next">&#9655;&#9647;</button></td>
  </tr>
  <tr>
    <td></td>
    <td><button name="button" value="shuffle">SHUFFLE</button></td>		
    <td></td>
  </tr>
  <tr>
    <td><button name="button" value="VOLm">VOL-</button></td>
    <td><button id="symbol" name="button" value="REPEAT">&#8634;</button></td>		
    <td><button id="symbol" name="button" value="track_prev">&#9647;&#9665;</button></td>
  </tr>
  <tr>
    <td><button name="button" value="fav1">FAV1</button></td>
    <td><button name="button" value="fav2">FAV2</button></td>		
    <td><button name="button" value="fav3">FAV3</button></td>		
    <td></td>
  </tr>
  <tr>
    <td><button name="button" value="fav4">FAV4</button></td>
    <td><button name="button" value="fav5">FAV5</button></td>		
    <td><button name="button" value="fav6">FAV6</button></td>		
    <td></td>
  </tr>
</table>
</form>

</body>
</html>
