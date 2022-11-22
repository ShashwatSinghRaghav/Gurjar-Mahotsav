<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','freepass');

// get the post records
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];


// database insert SQL code

$sql = "INSERT INTO `user` (`fname`,`lname`, `email`, `phone`) VALUES ('$fname','$lname', '$email', '$phone')";

// insert in database 
$rs = mysqli_query($con, $sql);

$idselect = "SELECT id from `user` WHERE `fname` = '$fname' and `lname` = '$lname' and `email` = '$email'";

$result = mysqli_query($con, $idselect);

$temp = 0;

while ($row = $result->fetch_assoc()) {
     $temp = "ID  : GM2022-".$row['id'];
}
// database update SQL code
header('content-type: image/jpeg');
$font="CALIBRIB.TTF";
$image = imagecreatefromjpeg("entrypass.jpg");
$color = imagecolorallocate($image, 255,255,255);

$gate="GATE  : 4A";
$gate_row="ROW  : 02";

$file="FreePass.jpg"; 

imagettftext($image,30,0,1020,200,$color,$font,$gate);
imagettftext($image,30,0,1020,250,$color,$font,$gate_row);
imagettftext($image,20,0,1015,350,$color,$font,$temp);

// This will tell the browser to download it
header('Content-Disposition: attachment; filename='.$file); 
imagejpeg($image);
imagedestroy($image);

exit;

?>