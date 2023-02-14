<?php

    include('../../models/mdl_module.php');
    //configuration bdd
    $bdd = "projet_examen";
    $user = "root";
    $pwd = "";
    $pdo = new PDO('mysql:host=localhost;dbname='.$bdd, $user, $pwd);
    //load modules    
    $mdl_module = new mdl_modules();
    if($_GET['id']) {
        $req_del  = $mdl_module->delete($_GET['id']);
        $module_query = $pdo->query($req_del);
        header("location:http://localhost/projetexamen/views/modules/add_modules.php");
        exit();     
    }
    
