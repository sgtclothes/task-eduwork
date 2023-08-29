<?php
    function convert_date($value)
    {
        return date('d-F-Y', strtotime($value));
    }

?>