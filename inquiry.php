<html>
    <head>
    </head>
    <body>
        <form action="inquiryinsert.php" method="post" enctype="multipart/form-data">
            <table border="1" align="center" bgcolor="lightgray">
                <tr>
                    <th align="center">Employee Information</th>
                </tr>
                <tr>
                    <td>
                        <label>Name :</label>
                        <input type="text" name="name" placeholder="Enter Your Name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Qualification :
                            <select name="qualification">
                                <option value="MSCIT">MSCIT</option>
                                <option value="MCA">MCA</option>
                                <option value="CSE">CSE</option>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Salary :</label>
                        <input type="text" name="salary" placeholder="Enter Salary" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Upload Image :</label>
                        <input type="file" name="fileupload" accept=".jpg,.png,.jpeg" required> 
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="btnsubmit" value="submit">
                    </td>
                </tr>
                <tr>
                    <td >
                        <a href="logout.php">Logout</a>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
    include"./inquirydisplay.php";
?>