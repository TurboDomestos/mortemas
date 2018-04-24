<?php
         /////////
        //  //
       /////////
      //  //
     /////////
    //  //
   //////////
  //  //
 /////////     | система написана ---> SYNTAX <--- |



include "header.php";

echo "<h1> SYNTAX  </h1>";

echo "<pre>";

//принял конфиг
$config = (file_get_contents('cm1db/configurations.php'));
/////////////////////////////////////////////////////////////////
print_r($config);
echo '</pre>';


?>