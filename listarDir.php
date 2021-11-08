
<?php

$files= dir("dados");

while($f = $files->read()){
    if(!is_dir($f)){
       echo $f."<br>";
       echo "<a href=$f".">".$f."</a><br>";
    }
}