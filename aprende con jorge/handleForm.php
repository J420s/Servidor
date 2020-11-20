<?php
   
    function showData(){
        $_REQUEST['aficion'];
        if(isset($_REQUEST['nombre'])){
            $list = "<ul class='list-group'>";
            $list .= "<li class='list-group-item'>Nombre: ".$_REQUEST['nombre']."</li>";
            $list .= "<li class='list-group-item'>Apellidos: ".$_REQUEST['apellidos']."</li>";
            $list .= "<li class='list-group-item'>Telefono: ".$_REQUEST['telefono']."</li>";
            $list .= "<li class='list-group-item'>DNI: ".$_REQUEST['dni']."</li>";
            $list .= "<li class='list-group-item'>Aficion: ".$_REQUEST['aficion']."</li>";
            $list .= "</ul>";
            
           return $list;
        }
    }

    function saveData(){
        $path = "./files/sdf";
        foreach ($_REQUEST as $line) {
            $text .= $line."\n"; 
        }
        file_put_contents($path,$text);;
    }
?>