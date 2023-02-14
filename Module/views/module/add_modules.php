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
        $pdo = new PDO('mysql:host=localhost;dbname=', 'root', '');
        //load modules 
        $mdl_module = new mdl_modules();
        $ctrl_modules = new ctrl_modules();

        $req_list  = $mdl_module->list();

        $module_query = $pdo->query($req_list);

        $list_modules = $module_query->fetchAll();

        $list = $ctrl_modules->listAction($list_modules);

    ?>

    <div class="container">
        <form action="add_modules.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <h1>Ajout module</h1>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-6">                 
                    
                    <div class= "form-group">
                        <label for="">Code matière </label>
                        <input type="text" name="code" id="" class="form-control"  minlength="3" maxlength="3" placeholder="3 caractères Min ..." required>
                        <br><br>
                    </div>
                    <div class= "form-group">
                        <label for="">Nom </label>
                        <input type="text" name="nom" id="" class="form-control"  placeholder="Saisir ici le nom de la matière" maxlength="45" required>
                        <br><br>
                    </div>                
                                  
                </div>
                <div class="col-md-6">
                    <div class= "form-group">
                        <label for="">Volume horaire</label>
                        <input type="number" name="heure" id=""  class="form-control" placeholder="Saisir ici le volume horaire" required>
                        <br><br>
                    </div>
                    <div class= "form-group">
                        <label for="">Crédit</label>
                        <input type="text" name="credit" id="" class="form-control" placeholder="Saisir ici le crédit" required>            
                        <br><br>
                    </div>
                </div>
            
            </div>
            <div class="row">
                <div class="col-lg-1">               
                    <input type="submit" value="Ajouter" name="btn_submit" class="btn btn-primary btn-modules">             
                </div>
                <div class="col-lg-2">               
                    <input type="reset" value="Annuler" name="btn_reset" class="btn btn-success btn-reset">             
                </div>
            </div>
                
        </form>
        <?php

            if(isset($_POST['btn_submit'])) {
                $sqlinsert =  $mdl_module->insert($_POST);
                //executer la requette insertion in bdd
                $pdo->query($sqlinsert);
            
                $req_list  = $mdl_module->list();
                $module_query = $pdo->query($req_list);
                $list_modules = $module_query->fetchAll();
                $list = $ctrl_modules->listAction($list_modules);
            }

            echo $list
        ?>
    </div>

    

</body>
</html>