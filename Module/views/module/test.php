<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>

<body>
<?php

//appel modele et controller
include('../../models/mdl_module.php');
include('../../controllers/ctrl_modules.php');
//configuration bdd
$bdd = "projet_examen";
$user = "root";
$pwd = "";
$pdo = new PDO('mysql:host=localhost;dbname='.$bdd, $user, $pwd);
//load modules 
$mdl_module = new mdl_modules();
$ctrl_modules = new ctrl_modules();

$req_list  = $mdl_module->list();

$module_query = $pdo->query($req_list);

$list_modules = $module_query->fetchAll();

$list = $ctrl_modules->listAction($list_modules);

?>


<form action="add_modules.php" method="post">
    <div class= "form-group">
        <label for="">Code matière </label>
        <input type="text" name="code" id="" class = "form-control">
        <br><br>
    </div>
    

    <label for="">Nom </label>
    <input type="text" name="nom" id="">
    <br><br>

    <label for="">Volume horaire</label>
    <input type="text" name="heure" id="">
    <br><br>
    <label for="">Crédit</label>
    <input type="text" name="credit" id="">

    <br><br>

    <input type="submit" value="Créer un module" name="btn_submit">
</form>

<?php

if(isset($_POST['btn_submit'])) {
    //var_dump($_POST);die;
    //$sqlInsert = 'INSERT INTO mdl_modules (code_module, nom_module, volume_horaire, credit_module) VALUES ("'.$_POST['code'].'", "'.$_POST['nom'].'", "'.$_POST['heure'].'", "'.$_POST['credit'].'")' ;
    $sqlinsert =  $mdl_module->insert($_POST);
    //executer la requette insertion in bdd
    $pdo->query($sqlinsert);
   //mdl_module => list
    $req_list  = $mdl_module->list();
    $module_query = $pdo->query($req_list);

    $list_modules = $module_query->fetchAll();

    $list = $ctrl_modules->listAction($list_modules);
  // die($sqlInsert);
}

echo $list
?>

</body>
</html>