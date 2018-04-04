<!-- AUTHOR:
  -BACK END :
              - CHRISTIAN SHEVA ALEXANDER
              - VITO RADITYA FAUZAN
  -FONR END : 
              -ALDIAN FEBRIYANTO
              -FARIZ AZHAR KHALIED
  
  -
  -
  SMK BAKTI IDHATA 
-->

<?php
session_start();
session_unset();
echo "<script>window.location.assign('../login/login.php')</script>";
session_destroy();
session_write_close();
?> 