<?php


$conn = mysqli_connect('localhost','root','','cms');

if(!$conn){

echo 'connected is failed';


}


if($conn){

    echo 'connected is successfully';


    }


?>