<?php
$connection = new mysqli("localhost","root","","test_dbb");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}