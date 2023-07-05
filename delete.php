<?php
    $id = $_GET['id'];
    $id = base64_decode($id);
    $id = explode('$',$id);
    $id = bindec(hex2bin($id[0]))-1000;
    
    $Conn = new PDO("mysql:host=localhost;dbname=abcd","root","");
    $query ="update inquiry set status=0 where id=$id";
    $stat = $Conn->prepare($query);
    $stat->execute();
    header("Location:./inquiry.php");
?>