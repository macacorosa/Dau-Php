
<?php

$nome=$_POST["nome"];
$idade=$_POST["idade"];
$dados="Nome: $nome\r\n<br>Idade:$idade\r\n";


if(is_dir("dados")){
    $file = fopen("dados/dados.txt","a+");

   fwrite($file,$dados);
   fwrite($file,"<br>");

   readfile("dados/dados.txt");
   
 } else{
     mkdir("dados");
     $file = fopen("dados/dados.txt","a+");

     fwrite($file,$dados);
     readfile("dados/dados.txt");
 }


