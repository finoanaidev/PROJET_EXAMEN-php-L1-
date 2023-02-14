                                         
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
  
<div class="card_body">
<table class="table table border" border=2px solid >   
   <tr>
    <th>id</th>
    <th>nom</th>
    <th>e_mail</th>
    <th>objet</th>
    <th>message</th>
    <th>action</th>
</tr>
<?php
     $pdo = new PDO('mysql:host=localhost;dbname=appel', 'root', '');
$sql='SELECT * FROM app';
            $statement= $pdo->prepare($sql);
            $statement->execute();
            $app= $statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php
foreach ($app as $apps): ?>
<tr>
  <td> <?= $apps->id; ?> </td>
  <td> <?= $apps->nom; ?> </td>
  <td> <?= $apps->email; ?> </td>
  <td> <?= $apps->objet; ?> </td>
  <td> <?= $apps->message; ?> </td>

<td><a href="edit_contact.php?id=<?= $apps->id;?>" class ="btn btn-warning" type="submit">Edit</a>
 <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_contact.php?id=<?= $apps->id;?>" class ="btn btn-danger" type="submit">Delete</a>
</td>
</tr>
?>
<?php  endforeach;?> 