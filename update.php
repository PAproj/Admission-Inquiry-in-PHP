<html>
    <head> </head>
        <body>
            <form action="dbedit.php" method="post">
                <?php

                    if(isset($_REQUEST['id']))
                    {
                        $id=$_REQUEST['id'];
                        $id = base64_decode($id);
                        $id = explode('$',$id);
                        $id = bindec(hex2bin($id[0]))-1000;

                        //$id = $_GET['id'];
                        $Conn = new PDO("mysql:host=localhost;dbname=abcd","root","");
                        $query ="select * from inquiry where id=$id";
                        $stat = $Conn->prepare($query);
                        $stat->execute();
                        $result = $stat->fetchAll();
                        $r = $result[0];
                        $Conn = null;
                    }
                ?>
                <table border="1" align="center">
                <tr>
                    <th align="center">Employee Information</th>
                </tr>
                <tr>
                    <td>
                        <label>Name :</label>
                        <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo isset($r['name'])?$r['name']:''; ?>"  required>
                        <input type="hidden" name="id" value="<?php echo isset($r['id'])?$r['id']:''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Qualification :
                            <select name="qualification">
                                <option value="MSCIT" <?php if($r['qualification'] == "MSCIT") { echo "selected"; } ?>>MSCIT</option>
                                <option value="MCA" <?php if($r['qualification'] == "MCA") { echo "selected"; } ?>>MCA</option>
                                <option value="CSE" <?php if($r['qualification'] == "CSE") { echo "selected"; } ?>>CSE</option>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Salary :</label>
                        <input type="text" name="salary" placeholder="Enter Salary" value="<?php echo isset($r['salary'])?$r['salary']:''; ?>"  required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Upload Image :</label>
                        <input type="file" name="fileupload" accept=".jpg,.png,.jpeg"  value="<?php echo isset($r['fileupload'])?$r['fileupload']:''; ?>" required> 
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="btnsubmit" value="submit">
                    </td>
                </tr>
            </table>
            </form>
        </body>
   
</html>

<?php
    include "./inquirydisplay.php";
?>