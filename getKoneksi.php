<?php

include "koneksi.php"

$hasil=$connect->query("SELECT * FROM datasensor");

$results=array();

while($row=$hasil->fetch_assoc()){
    $results[]=$row;
}
echo json_encode($results);
}?>