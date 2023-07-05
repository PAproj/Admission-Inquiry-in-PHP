<html>
    <head>
    </head>
    <body>
        <form action="logincheck.php" method="post">
            <table border="1" align="center" bgcolor="Lightblue">
                <tr>
                    <th align="center">Login Form</th>
                </tr>
                <tr>
                    <td>
                        <label>User Name :</label>
                        <input type="text" placeholder="Enter Your Employee Name" name="ename" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password :</label>
                        <input type="text" placeholder="Enter Password" name="pwd" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Captcha :<?php $val = rand(1000,9999); echo"<br>".$val ?>
                        <input type="hidden" name="capval" value="<?php echo $val ?>">
                        <input type="text" name="txtcap" placeholder="Enter Captcha" required>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="registration.php">Registration</a>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>