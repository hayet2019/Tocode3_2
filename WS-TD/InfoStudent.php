<?php
class InfoStudent {

//function to be exposed must be public
public function getInfoStudent($cin) {
$info = array("CIN:".$cin , "hayet", "dachraoui","14/11/1995", 
"Level: 5", "Result:reussi"); 
return $info;
}
}
?>