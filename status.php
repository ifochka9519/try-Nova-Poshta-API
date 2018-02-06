<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
    CURLOPT_RETURNTRANSFER => True,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r\n\"bbca4f8c83800f4c59d9c1109aa1764e\": \"\",\r\n\"modelName\": \"TrackingDocument\",\r\n\"calledMethod\": \"getStatusDocuments\",\r\n\"methodProperties\": {\"Documents\": [
            {
                \"DocumentNumber\": \"".$_POST['number']."\",
                \"Phone\":\"\"
            }]}\r\n}",
    CURLOPT_HTTPHEADER => array("content-type: application/json",),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $data = json_decode($response,true);
    //var_dump( $data['data'][0]);
    print_r('Статус : '.$data['data'][0]["Status"]); echo '<br>';
    print_r('Номер накладної : '.$data['data'][0]["Number"]); echo '<br>';
    print_r('Вартість : '.$data['data'][0]["DocumentCost"]); echo '<br>';
    print_r('Дата доставки : '.$data['data'][0]["ScheduledDeliveryDate"]); echo '<br>';
    print_r('Місто з якого було відправлено : '.$data['data'][0]["CitySender"]); echo '<br>';
    print_r('Місто куди доставляється : '.$data['data'][0]["CityRecipient"]); echo '<br>';
    print_r('Склад куди доставляється : '.$data['data'][0]["WarehouseRecipient"]);
}
