<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysql_real_escape_string($_POST['userName']);
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $rollnum=$_POST['rollnum'];
  $college=$_POST['college'];
  $year=$_POST['year'];
  $event=$_POST['event'];
  $coupon=$_POST['coupon'];

  mysql_connect("localhost", "root","") or die(mysql_error()); 
  mysql_select_db("payment") or die("Cannot connect to database"); 
  
    mysql_query("INSERT INTO paymentdetails (username) VALUES ('$username')"); 
    Print '<script>alert("Successfully Registered!");</script>'; 
    Print '<script>window.location.assign("payment.html");</script>';
  
}
?>