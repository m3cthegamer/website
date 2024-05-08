<?php

$check = mail('coldwarkeko31@hotmail.com','Testing email','this is a testing','From:bceobjecttracking@gmail.com');

if($check)
 {
    echo 'email sent succesful';
 }
else
 {
    echo 'email not succesful';
 }

?>