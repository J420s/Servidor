<?php
    
    function build($n){
        $lista = [];
        for($i=0; $i<$n; $i++){
            $lista[$i] =  str_repeat(" ",$n-$i-1).str_repeat("*",1+$i*2);
        }
        return $lista;
    }
    
    echo"<pre>";
    echo implode("<br>",build(9));
    echo "</pre>";
?>
