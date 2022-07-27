
<?php

//check_login.php
$host = "premium167.web-hosting.com";
$username="cruiwbab_best_online_class_helper";
$password="y7oIKsIG)Vg@";
$db = "cruiwbab_best_online_class_helps";

if(isset($_POST["email"]))
{
//  $connect = new PDO("mysql:host=localhost;dbname=u782400943_TakeMyClass", "u782400943_TakeMy_User", "Qwerty123");
   $connect = new PDO("mysql:host=$host;dbname=$db", "$username", "$password");

 session_start();

 $query = "SELECT * FROM tbl_login WHERE username = '".$_POST['email']."'";

 $statement = $connect->prepare($query);

 $statement->execute();

 $total_row = $statement->rowCount();

 $output = 'Session Create Successfully';

 if($total_row > 0)
 {
  $result = $statement->fetchAll();

  foreach($result as $row)
  {
   if(password_verify($_POST["password"], $row["password"]))
   {
    $_SESSION["name"] = $row["firstname"];
   }
   else
   {
    $output = '<label>Wrong Password</label>';
   }
  }
 }
 else
 {
  $output = '<label>Wrong Email Address</label>';
 }

 echo $output;
}

?>