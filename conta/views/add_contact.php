<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class='row'>
  <div class="card col-10 offset-1">
    <div class= "card-header">
        <span class="offset-5">

   <?php   

         //appel modele et controller

        include('C:/xampp/htdocs/fin/conta/controller/ctrl_contact.php');
        //configuration bdd
            $i=new controller();
        $insert=$i::insert();
        $pdo = new PDO('mysql:host=localhost;dbname=appel', 'root', '');

?>
<h2 class="btn btn-form">CONTACTEZ-NOUS</h2>
<div class="form group">
<a href="liste_contact.php" target="" blank="">DATATABLE</a>
<div class="card_body">
<form action="" method="post">
<div class="form_group">
    <label for="">Nom</label>
<input type="text" name="nom" placeholder="nom" class="form_control"></input> <br><br><br>
</div>
<div class="form_group">
<label for="">email</label>
<input type="email" name="email"  placeholder="email" class="form_control mb2"></input><br><br><br>
</div>
<div class="form_group">
<label for="">objet</label>
<input  value="<? =$app->objet;?>" type="File" name="objet" class="form_control mb2">

</div>
<div class="form_group">
<label for="">message</label>
<textarea name="message" placeholder="message" class ="form_control"></textarea><br><br>
</div>
<div class="row">
<input type="submit"  class="btn btn success" name="btn send" value="envoyer" ></input>
</div>
</form> 



                                            <!--     DATATABLE -->


                                         
 