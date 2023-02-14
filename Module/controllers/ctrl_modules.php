<?php

class ctrl_modules {

    public function listAction($arrayModules)
    {
        $td = '
        
        <h1>Liste module</h1>
        
        <table class="table">';
        $td .= "
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Volume horaire</th>
                    <th>Crédit</th>
                    <th>Action</th>
                </tr>
            </thead>
        ";
        foreach($arrayModules as $valeur) {
            $td .= '<tr>';
            $td .= '<td>'.$valeur['code_module'].'</td>';
            $td .= '<td>'.$valeur['nom_module'].'</td>';
            $td .= '<td>'.$valeur['volume_horaire'].'</td>';
            $td .= '<td>'.$valeur['credit_module'].'</td>';
            $td .= '<td>            
            <a href="delete_modules.php?id='.$valeur['id'].'&name='.$valeur['nom_module'].'" class="btn btn-danger btn-delete">Delete</a>
            <a href="edit_modules.php?id='.$valeur['id'].'" class="btn btn-warning btn-edit">Edit</a></td>';
            $td .= '</tr>';
        }
        $td .= '</table>';
        return $td;    
    }

    
}