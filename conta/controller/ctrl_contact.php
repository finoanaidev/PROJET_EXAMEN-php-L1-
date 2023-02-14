<?php

   include('C:/xampp/htdocs/fin/conta/models/mdl_contact.php');
class controller{
 
public static function index(){

   $mo=new  mdl();
    $data=$mo::get_data();
}
public static function insert(){ 

      $i=new mdl();
      $insert=$i::insert();
      
  
   
}

public static function delete(){

   $d=new mdl();
   $delete=$d::delete();

 }

public static function liste(){
       $l=new mdl();
       $liste=$l::liste();
  

}

   
 public static function edit(){
 /*  include("views/edit.php");*/

$ed=new mdl();
$edit=$ed::edit();

}

}
?>


<?php  if(!empty($message)):?>
   <div class="alert-succes">
  <?= $message;?>

<?php endif ;?>



