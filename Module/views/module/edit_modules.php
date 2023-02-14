<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/module.css" rel="stylesheet" type="text/css" />
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
        //$ctrl_modules = new ctrl_modules();
        $code = $nom = $credit = $heure = $id ="";
        //tester si GET
        if(isset($_GET['id'])) {
            $req_select  = $mdl_module->select($_GET['id']);

            $module_query = $pdo->query($req_select);
    
            $module = $module_query->fetchAll();
            $id =  $module[0]['id'];
            $code = $module[0]['code_module'];
            $nom = $module[0]['nom_module'];
            $credit = $module[0]['credit_module'];
            $heure = $module[0]['volume_horaire'];
        }
       
        //var_dump($module);die;

       // $list = $ctrl_modules->listAction($list_modules);

    ?>

    <div class="container">
        <form action="edit_modules.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <h1>Modifier module</h1>
                </div>
            </div>
            <div class="row">
                <input type="hidden" value="<?php echo $id;?>" name="id">
            </div>
            <div class="row">
                
                <div class="col-md-6">    
                    
                    <div class= "form-group">
                        <label for="">Code matière </label>
                        <input type="text" name="code" id="" class="form-control" value="<?php echo $code?>" minlength="3" maxlength="3" placeholder="3 caractères Min ..." required>
                        
                    </div>
                    <div class= "form-group">
                        <label for="">Nom </label>
                        <input type="text" name="nom" id="" class="form-control" value="<?php echo  $nom;?>" placeholder="Saisir ici le nom de la matière" maxlength="45" required>
                        <br><br>
                    </div>                
                                  
                </div>
                <div class="col-md-6">
                    <div class= "form-group">
                        <label for="">Volume horaire</label>
                        <input type="number" name="heure" id=""  class="form-control" value="<?php echo $heure;?>" placeholder="Saisir ici le volume horaire" required>
                        
                    </div>
                    <div class= "form-group">
                        <label for="">Crédit</label>
                        <input type="text" name="credit" id="" class="form-control" value="<?php echo  $credit;?>" placeholder="Saisir ici le crédit" required>            
                        <br><br>
                    </div>
                </div>
            
            </div>
            <div class="row">
                <div class="col-lg-1">               
                    <input type="submit" value="Modifier" name="btn_submit_edit" class="btn btn-primary btn-modules">             
                </div>
                <div class="col-lg-2">               
                    <input type="submit" value="Annuler" name="btn_reset" class="btn btn-success btn-reset">             
                </div>
            </div>
                
        </form>
    </div>

    <?php

        if(isset($_POST['btn_submit_edit'])) {
            $sqlUpdate =  $mdl_module->update($_POST);
            $pdo->query($sqlUpdate);
            header("location:http://localhost/projetexamen/views/modules/add_modules.php");
            exit();
            /*
            $req_list  = $mdl_module->list();
            $module_query = $pdo->query($req_list);
            $list_modules = $module_query->fetchAll();
            $list = $ctrl_modules->listAction($list_modules);*/
        }

        if(isset($_POST['btn_reset'])) {
            
            header("location:http://localhost/projetexamen/views/modules/add_modules.php");
            exit();
        }

?>  

</body>
</html>