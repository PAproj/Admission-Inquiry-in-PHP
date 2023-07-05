<?php

    if(isset($_POST['btnsubmit']))
    {
        $extension = strtolower(pathinfo($_FILES['fileupload']['name'],PATHINFO_EXTENSION));
        $fileupload = time() . ".". $extension;
        $filepath = "./upload/" . $fileupload;
        if($extension == "jpg" || $extension == "png" || $extension == "jpeg")
        {
            
            if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$filepath))
                //header("Location:./inquiry .php");   
                echo "<h1> File uploaded...</h1>";         
            else
            {
                echo "<h1> Error in file uploaded...</h1>";
            }
        }
        else
        {
            echo "<h1> only jpg file is allowed...!!! </h1>";
        }
        session_start();
        $userid = $_SESSION['userid'];
        //echo $userid;
        $name = $_POST['name'];
        $qualification = $_POST['qualification'];
        $salary = $_POST['salary'];
        $ip = $_SERVER['REMOTE_ADDR'];

        //database connection
        $Conn = new PDO("mysql:host=localhost;dbname=abcd","root","");
        $query ="insert into inquiry values(NULL,'$name','$qualification','$salary','$ip',NULL,1,'$fileupload',$userid)";
        $stat = $Conn->prepare($query);
        $stat->execute();
        $Conn = null;
        header("Location:./inquiry.php");
        
    }
    else
    {
        header("Location:./login.php");
    } 
?>