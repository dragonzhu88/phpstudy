<html>
    <head>
        <title>Student infomation system</title>
    </head>
    <body>
    <center>
            <?php include("menu.php");?>
            <h3>Add</h3>
            <form action="action.php?action=add" method="post">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><input type="text" name="age"></td>
                    </tr>
                    <tr>
                        <td>gender</td>
                        <td>
                            <input type="radio" name="gender" value="1">man
                            <input type="radio" name="gender" value="2">woman
                        </td>
                    </tr>
                    <tr>
                        <td>classid</td>
                        <td><input type="text" name="classid"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" value="add">
                            <input type="reset" value="reset">
                        </td>
                    </tr>
                </table>
            </form>
    </center>

    </body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-5-31
 * Time: 下午4:06
 */