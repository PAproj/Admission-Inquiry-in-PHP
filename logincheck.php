<?php
    if(isset($_POST['submit']))
    {
        $capvalue = $_POST['capval'];
        $usercapvalue = $_POST['txtcap'];
        if($capvalue != $usercapvalue)
        {
            exit("Captcha Not Matched");
        }
        $ename = $_POST['ename'];
        $pwd = $_POST['pwd'];
        $pwd = md5($pwd);
        $Conn = mysqli_connect("localhost","root","","abcd");
        $query ="select * from mscit where ename='$ename' and pwd='$pwd'";
        $result = mysqli_query($Conn,$query);
        $count = mysqli_num_rows($result);
        mysqli_close($Conn);
        if($count > 0)
        {
            session_start();
            $row = mysqli_fetch_array($result);
            $_SESSION['userid'] = $row['id'];
            header("Location:./inquiry.php");
        }
        else
        {
            include "login.php";
            echo "<h3 align='center' style='color:red'> Username And Password is incorrect</h3>";
        }
    }
    else
    {
        header("Location:./login.php");
    }
?>