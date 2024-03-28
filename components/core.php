<?php
   session_start();
   mysqli_report(MYSQLI_REPORT_OFF);
   $mysqli = new mysqli('localhost', 'root','','ComunityJDM');
   $mysqli->set_charset('utf8mb4');
?>