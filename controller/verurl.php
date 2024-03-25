<?php
class VerUrl{
    function trocarUrl ($url){
        if(empty($url)){
            $url = "./pages/home.php";
        } else {
            $url = "./pages/$url.php";
        }
        include_once($url);
    }
}

?>