<?php

/*if(is_dir("files")){
   echo "Pasta arquivos já existe";
  
  
} else{
    mkdir("arquivos1");
    echo "Diretório criado com sucesso!";
}*/

$file = fopen("arquivos1/cadastro.txt","a+");
fwrite($file, "Jadeana Pereira <br>");
fclose($file);