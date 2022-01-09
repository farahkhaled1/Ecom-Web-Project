<?php 
// require_once("config.php");
// if(isset($_POST['email'])&& $_POST['email'] !='')
// {
//  require_once("contact.php");
//  $email = $conn->real_escape_string($_POST['email']);
// $link = $conn->real_escape_string($_POST['link']);
// $picture = $conn->real_escape_string($_POST['picture']);
// $message = $conn->real_escape_string($_POST['message']);
// $sql="INSERT INTO suggestion (email, link, picture, message) VALUES ('".$email."','".$link."', '".$picture."', '".$country."', '".$message."')";
// if(!$result = $conn->query($sql)){
// die('There was an error running the query [' . $conn->error . ']');
// }
// else
// {
// echo "Thank you! We will contact you soon";
// }
// }
// else
// {
// echo "Please fill Name and Email";
// }


include("config.php");
extract($_POST);
$sql = "INSERT INTO 'suggestion'('email', 'link', 'picture', 'country', 'suggestion') VALUES ('".$email."','".$link."',".$picture.",'".$country."','".$suggestion."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();

?>