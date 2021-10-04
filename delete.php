<?php

require("json_util.php");


if(count($_GET)){
    $rayman = fileFetcher();

    for($i = 0; $i < $rayman; $i++){
        if($rayman[$i]->{'key'} = $_GET['id']){
            $preman = array_slice($rayman, 0, $i);
            $newman = array_splice($rayman, $i + 1);
            $rayman = array_merge($preman, $newman);
            saveMan($rayman);
            break;
        }

    }

}

?>


