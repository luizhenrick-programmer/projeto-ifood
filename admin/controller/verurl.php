<?php
class VerUrl{
    function trocarUrl ($url){
        if(empty($url)){
            $url = "./index.php";
        } else {
            $url = "./pages/$url.php";
        }
        include_once($url);
    }
}

?>