<?php 
function date_convert($value){
    return date('d/m/y - h:i:s', strtotime($value));
}
?>