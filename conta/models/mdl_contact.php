<?php
 
 class mdl{
 
public function get_data(){

    $pdo = new PDO('mysql:host=localhost;dbname=appel', 'root', '');

    $sql='SELECT * FROM app';
    $statement= $pdo->prepare($sql);
    $statement->execute();
    $app= $statement->fetchAll(PDO::FETCH_OBJ);

}

 /*----------------------------------------------------INSERT----------------------------------------------------*/

 public static function insert(){
 /*include("C:/xampp/htdocs/conta/views/add_contact.php");*/

 $pdo = new PDO('mysql:host=localhost;dbname=appel', 'root', '');
    $id = $_GET['id'];
 $sql='SELECT *FROM app WHERE id=:id';
 $statement= $pdo->prepare($sql);
 $statement->execute([':id'=>$id]);
 $app= $statement->fetchall();
 
 if (isset($_POST['nom'])  && isset($_POST['email']) && isset($_POST["objet"]) && isset($_POST['message'])){
 
     $nom=$_POST["nom"];
     $email=$_POST["email"];
     $objet=$_POST["objet"];
     $message=$_POST["message"];
 
     $sql="INSERT INTO app(nom,email,objet,message) VALUES (:nom,:email,:objet,:message)";
 
     $statement= $pdo->prepare($sql);
 if($statement->execute([':nom'=>$nom, ':email'=>$email,':objet'=>$objet,':message'=>$message]))
 {
        $message ='insertion reussie';
 
 }
 else{
   $message ='echec de l\insertion'; 
 } 
 
 }

 }

 /*----------------------------------------------------LIST-----------------------------------------------------------*/

public static function liste(){
 include('C:\xampp\htdocs\conta\utils\db.php');

$pdo = new PDO('mysql:host=localhost;dbname=appel', 'root', '');
$id = $_GET['id'];
$sql='SELECT *FROM app WHERE id=:id';
$statement= $pdo->prepare($sql);
$statement->execute([':id'=>$id]);
$app= $statement->fetchall();

if (isset($_POST['nom'])  && isset($_POST['email']) && isset($_POST["objet"]) && isset($_POST['message'])){

    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $objet=$_POST['objet'];
    $message=$_POST['message'];
                   
   $query=$pdo->prepare("SELECT * FROM app ORDER BY nom ASC");

   $query =execute([':nom'=>$nom, ':email'=>$email,':objet'=>$objet,':message'=>$message]);
     return $query->fetchAll();
}
}
/*---------------------------------------------------EDIT------------------------------------------------------------*/

    public static function edit(){
      $pdo = new PDO('mysql:host=localhost;dbname=appel', 'root', '');     
      $id = $_GET['id'];
      $sql='SELECT *FROM app WHERE id=:id';
      $statement= $pdo->prepare($sql);
      $statement->execute([':id'=>$id]);
      $app= $statement->fetchall();
      
      if (isset($_POST['nom'])  && isset($_POST['email']) && isset($_POST["objet"]) && isset($_POST['message'])){
      
          $nom=$_POST['nom'];
          $email=$_POST['email'];
          $objet=$_POST['objet'];
      
          $message=$_POST['message'];
      
          $sql='UPDATE app SET nom=:nom,email=:email, objet=:objet, message=:message WHERE id=:id';
          $statement= $pdo->prepare($sql);
      if($statement->execute([':nom'=> $nom, ':email'=>$email, ':objet'=>$objet,':message'=>$message, ':id'=>$id]))
      {
             $message ='insertion reussie';
      
      }
      
      }
     
    }
      /*---------------------------------------------DELETE--------------------------------------------*/                                              
public static function delete()
        {
            $bdd = new PDO('mysql:host=localhost;dbname=appel', 'root', '');
            
            $id = $_GET['id'];
           $sql='DELETE FROM app WHERE id=:id';
           $statement=$bdd->prepare($sql);
          if($statement->execute([':id'=>$id])){
           $message="suppression reussie";
   
          }
        }

      }
 ?>
 