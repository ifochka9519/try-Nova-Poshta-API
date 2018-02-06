<?php

require_once __DIR__ . '/Catalog.php';


$cities = Catalog::getSettlements($_POST['area']);
$towns = [];
$i = 0;
foreach ($cities as $city){
    if($city['Area'] == $_POST['area']){
        $towns[$i] = $city;
        $i++;
    }
}
header("Content-Type:application/json");
echo json_encode($towns);
