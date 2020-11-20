
<?php
$path = "./files/sdf";
foreach ($_REQUEST as $line) {
    $text .= $line."\n"; 
    
}
file_put_contents($path,$text);

?>