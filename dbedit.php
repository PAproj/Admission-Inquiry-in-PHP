<?php
    $id = $_POST['id'];
    $name =$_POST['name'];
    $qualification =$_POST['qualification'];
    $salary = $_POST['salary'];
    // $email = $_POST['email'];
    // $mobileno = $_POST['mobileno']; 
    // $role = $_POST['role'];

    $Conn = new PDO("mysql:host=localhost;dbname=abcd","root","");
    $query ="update inquiry set name='$name',qualification='$qualification',salary='$salary',time=NULL where id=$id";
    //echo "data inserted";
    $stat = $Conn->prepare($query);
    $stat->execute();
    header("Location:./inquiry.php");
?>