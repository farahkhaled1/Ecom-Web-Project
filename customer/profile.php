<html>

<body>
    <?php

    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $connection = mysqli_connect("localhost", "root", "", "glowglam");
        //mysql_select_db("user") or die ("That database could not be found!");
        //$userquery = mysql_query("SELECT * FROM user WHERE name='$name'") or die ("The query could not be completed.");
        $query = "SELECT * FROM userr  WHERE username='$name'";
        $query_run = mysqli_query($connection, $query);



        while ($row = mysqli_fetch_assoc($query_run)) {

            /*
	$id = $_POST['id'];
    $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role=$_POST['role'];*/

            $id = $row['id'];
            $name = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
            $role = $row['role'];

            //$query = "SELECT * FROM user (id,name,email,password,role) VALUES ('$id','$name','$email','$password','$role') WHERE name='$name'";
            //$query_run = mysqli_query($connection, $query);	

            if (mysqli_num_rows($query_run) != 1) {
                die("That username could not be found!");
            }
    ?>
            <h2><?php echo $name; ?> <?php echo $email; ?>s profile<h2><br />
                    <table>
                        <tr>
                            <td>Username:</td>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><?php echo $password; ?></td>
                        </tr>
                        <tr>
                            <td>Role:</td>
                            <td><?php echo $role; ?></td>
                        </tr>


                    </table>
                    <td>
                        <form action="register_edit.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="edit_btn" class="btn btn-success"> EDIT </button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name=delete_id value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE </button>
                    </td>
            <?php
        }

        if ($name != $name) {
            die("there has been a fatal error please try again");
        }
    } else die("you need to specify a username");
            ?>
</body>

</html>