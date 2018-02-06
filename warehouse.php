<?php

require_once __DIR__ . '/Catalog.php';


/*$warehouses = Catalog::getWarehouse($_POST['settlement']);*/
var_dump(Catalog::getWarehouse($_POST['settlement']));
/*header("Content-Type:application/json");
echo json_encode($warehouses);*/