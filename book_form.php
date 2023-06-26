<?php

$connection=mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
    $address=$_POST['address'];
    $location=$_POST['location'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];
    $people=$_POST['people'];
    $email=$_POST['email'];

    $query=" INSERT into book_form values('$address','$location','$arrivals','$leaving','$people','$email')";

    mysqli_query($connection,$query);

    header('location:bookingpage.php');   
}
else{
    echo"Something went wrong";
}
?>