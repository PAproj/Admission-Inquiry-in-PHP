<html>
    <head>
    </head>
    <body>
    <form action="insert.php" method="post">
        <table align="center" border="1" bgcolor="lightgrey">
            <tr>
                <th align="center">Registration Form</th>
            </tr>
                    <tr>
                        <td>
                        <label>Employee Name :</label>
                        <input type="text" placeholder="Enter Employee Name" name="ename"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password :</label>
                            <input type="text" placeholder="Enter Password" name="pwd">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>Gender :</label>
                        <input type="radio" name="gender" value="female" checked>Female
                        <input type="radio" name="gender" value="male">Male<br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>City :</label>
                        <input type="text" placeholder="Enter Employee City" name="city"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>Email :</label>
                        <input type="email" placeholder="Enter Your Email" name="email"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>Mobile no:</label>
                        <input type="text" placeholder="Enter Mobile No" name="mobileno"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Your Role:</label>
                            <select name="role">
                                <option value="Project Manager">Project Manager</option>
                                <option value="IT Analysts">IT Analysts</option>
                                <option value="Developers">Developers</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                     <td align="center">
                        <input type="submit" name="btnsubmit" value="Submit">
                     </td>
                     </tr>
                     <tr>
                    <td align="center">
                        <a href="login.php">Login</a>
                    </td>
                </tr>
            </table>   
    </form>

    </body>
</html>
<?php
    //include"./display.php";
?>