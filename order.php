<?php

require_once __DIR__ . '/Catalog.php';


$payers = Catalog::getTypesOfPayers();
$forms = Catalog::getPaymentForms();
$cargoes = Catalog::getCargoTypes();
$services = Catalog::getServiceTypes();
$areas = Catalog::getAreas();
$settlements = ArrayAccess::class;

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="#" method="post">
    <p>платник
        <select name="payer">
            <?php foreach ($payers as $payer) { ?>
                <option value="<?php echo $payer['Ref'] ?>"><?php echo $payer['Description'] ?></option>
            <?php } ?>
        </select></p>

    <p>форма оплати

        <select name="form">
            <?php foreach ($forms as $form) { ?>
                <option value="<?php echo $form['Ref'] ?>"><?php echo $form['Description'] ?></option>
            <?php } ?>
        </select></p>

    <p>тип грузу

        <select name="cargo">
            <?php foreach ($cargoes as $cargo) { ?>
                <option value="<?php echo $cargo['Ref'] ?>"><?php echo $cargo['Description'] ?></option>
            <?php } ?>
        </select></p>

    <p>доставка

        <select name="service">
            <?php foreach ($services as $service) { ?>
                <option value="<?php echo $service['Ref'] ?>"><?php echo $service['Description'] ?></option>
            <?php } ?>
        </select></p>

    <p>область

        <select name="area" id="area">
            <?php foreach ($areas as $area) { ?>
                <option value="<?php echo $area['Ref'] ?>" class="area"><?php echo $area['Description'] ?></option>
            <?php } ?>
        </select></p>

    <p id="city" hidden>населений пункт

        <select   name="settlement" id="settlement">

        </select></p>

    <p id="warehouse" hidden>відділення

        <select  name="s_warehouse" id="s_warehouse">

        </select></p>

    <button>Save</button>
</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="main.js"></script>
</html>