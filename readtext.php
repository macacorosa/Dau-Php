
<?php

$file=file("dados/dados.txt");



$size= count($file);


for($i=0;$i<$size;$i++){
    echo $file[$i]."<br>";
}