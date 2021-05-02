<?php
try{
$mysqli = new mysqli("localhost","root","test","myDB");
}
catch(Exception $e){
    echo $e->getMessage();
    echo "Error!!!";
}

?>