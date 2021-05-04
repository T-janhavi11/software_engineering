<?php
session_start();

$user_type = $_SESSION['user_type'];
if($user_type == 'Artist'){
  include("account.php");

}
else if($user_type == 'Customer'){
  include("customer-account.php");

}
else if($user_type == 'Admin'){
  include("head_admin.php");

}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .welc{
            
            position:cover;
            top: 65px;
            width:95%;
            height: 100%;
        }

    </style>
</head>
<body>
    <img class="welc"src="pictures/welcome.png">
</body>
</html>