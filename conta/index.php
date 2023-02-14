<?php
header("location:http://localhost/fin/conta/views/add_contact.php");

include("utils/db.php");

include("controller/ctrl_contact.php");

$ed=new controller();
$edit=$ed::edit();


?>
