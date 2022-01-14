<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php

// session start
session_start();

// include DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "glowglam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn) {
    echo "connecteddddd";
}
$receiver = $_GET['to_id']; //$_GET['receiver'] ????
include "navbar.html";

$getReceiver = "SELECT * FROM userr WHERE id = '$receiver'";
$getReceiverResult = mysqli_query($conn, $getReceiver) or die(mysqli_error($conn));
$getReceiverRow = mysqli_fetch_array($getReceiverResult);
?>
<img src="../images/<?= $getReceiverRow['picture'] ?>" class="img-circle" width="40" />
<strong><?= $getReceiverRow['username'] ?></strong>
<table class="table table-striped">
    <?php
    $getMessage = "SELECT  messages.* ,userr.username FROM messages INNER JOIN userr on from_id=userr.id  WHERE from_id = '$receiver' AND to_id = " . $_SESSION['id'] . " OR from_id = " . $_SESSION['id'] . " AND to_id = '$receiver' ORDER BY createdAt asc";
    $getMessageResult = mysqli_query($conn, $getMessage) or die(mysqli_error($conn));
    if (mysqli_num_rows($getMessageResult) > 0) {
        while ($getMessageRow = mysqli_fetch_array($getMessageResult)) {    ?>
            <tr>
                <div style="margin: 10;">
                    <td>
                        <h4 style="color: #007bff;display:inline"><?= $getMessageRow['Name'] ?></h4>
                    </td>
                    <td>
                        <p class="text-center" style="display:inline"><?= $getMessageRow['message'] ?></p>
                    </td>
                </div>
            </tr>
    <?php }
    } else {
        echo "<tr><td><p>No messages yet! Say 'Hi'</p></td></tr>";
    }
    ?>
</table>
<form class="form-inline" action="" method="POST">
    <input type="hidden" name="from_id" value="<?= $_SESSION['id'] ?>" />
    <input type="hidden" name="to_id" value="<?= $receiver ?>" />
    <input type="text" name="message" class="form-control" placeholder="Type your message here" required />
    <input type="submit" value='send' name='submit' class="btn btn-default">
</form>
<?php
if (isset($_POST['submit'])) {
    $createdAt = date("Y-m-d h:i:sa");
    $sent_by = $_POST['from_id'];
    $receiver = $_POST['to_id'];
    $message = $_POST['message'];
    $sendMessage = "INSERT INTO messages(from_id,to_id,message,createdAt) VALUES('$sent_by','$receiver','$message','$createdAt')";
    mysqli_query($conn, $sendMessage) or die(mysqli_error($conn));
}
?>