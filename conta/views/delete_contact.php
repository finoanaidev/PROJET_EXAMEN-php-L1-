
<a href="liste_contact.php" target="" blank="">All Data</a>
<a href="add_contact.php" target="" blank="">DATATABLE</a>

<?php

include('C:/xampp/htdocs/fin/conta/controller/ctrl_contact.php');
//configuration bdd
$d=new mdl();
$delete=$d::delete();
$pdo = new PDO('mysql:host=localhost;dbname=appel', 'root', '');
?>

