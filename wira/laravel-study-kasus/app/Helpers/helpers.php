<?php
    function convert_date($value)
    {
        return date('d-F-Y', strtotime($value));
    }

    function convert_diff($value)
    {
        return date('d-m-Y', strtotime($value));
    }

?>