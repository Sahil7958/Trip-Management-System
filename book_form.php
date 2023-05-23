<?php

$connection=mysql_connect('localhost','root','root','book_db');

if(isset($_POST['send'])){
    $sddress=$_POST['address'];
    $location=$_POST['location'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];
    $people=$_POST['people'];
    $email=$_POST['email'];

    $request=" insert into book_form() values()";

    mysql_query($connection,$request);

    header('location:bookingpage.php');   
}
else{
    echo"Something went wrong";
}
?>