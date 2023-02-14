<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <a href="add_contact.php" target="" blank="">DATATABLE</a>
  <a href="liste_contact.php" target="" blank="">All Data</a>

<?php
 include('C:/xampp/htdocs/fin/conta/controller/ctrl_contact.php');

 $ed=new controller();
 $edit=$ed::edit();
   $pdo = new PDO('mysql:host=localhost;dbname=appel', 'root', '');

?>

<h1>Mis a jour du contact</h1>
<form action="" method="post">

<div class="form_group">
    <label for="">Nom</label>
<input type="text" name="nom" placeholder="nom" class="form_control"></input> <br><br><br>
</div>
<div class="form_group">
<label for="">email</label>
<input type="email" name="email"  placeholder="email" class="form_control mb2"></input><br><br>
</div>
<div class="form_group">
<label for="">objet</label>
<input type="file" name="objet" placeholder= "objet" class="form_control mb2"></input><br><br><br>
</div>
<div class="form_group">
<label for="">message</label>
<textarea name="message" placeholder="message" class ="form_control"></textarea><br><br>
</div>
<div class="row">
<input type="submit"  class="btn btn success" name="btn send" value="envoyer" ></input>
</div>
</form> 
</fieldset>




 








    






