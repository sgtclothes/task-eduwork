<?php 

    function dateFormat($value){
        return date('D / d F Y', strtotime($value));
    }

?>