<?php

    require_once '../../php/db/mysql.php';  

    function itemdetails(){
        global $mysqli;
        $query = "SELECT * FROM productdetails";

        $result = mysqli_query($mysqli, $query);

        return $result;
    }
?>