<?php
/**
 * Created by PhpStorm.
 * User: laravelka
 * Date: 1/3/18
 * Time: 3:43 PM
 */

class Catalog
{

    private $key = 'bbca4f8c83800f4c59d9c1109aa1764e';

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    public static function getTypesOfPayers()
    {
        $curl = curl_init();
        $catalog = new Catalog();
        $key = $catalog->getKey();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
            CURLOPT_RETURNTRANSFER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\".$key.\": \"\",\r\n\"modelName\": \"Common\",\r\n\"calledMethod\": \"getTypesOfPayers\",\r\n\"methodProperties\": {}\r\n}",
            CURLOPT_HTTPHEADER => array("content-type: application/json",),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $data = json_decode($response,true);
            return $data['data'];
        }
    }

    public static function getPaymentForms()
    {
        $curl = curl_init();
        $catalog = new Catalog();
        $key = $catalog->getKey();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
            CURLOPT_RETURNTRANSFER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\".$key.\": \"\",\r\n\"modelName\": \"Common\",\r\n\"calledMethod\": \"getPaymentForms\",\r\n\"methodProperties\": {}\r\n}",
            CURLOPT_HTTPHEADER => array("content-type: application/json",),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $data = json_decode($response,true);
            return $data['data'];
        }
    }

    public static function getCargoTypes()
    {
        $curl = curl_init();
        $catalog = new Catalog();
        $key = $catalog->getKey();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
            CURLOPT_RETURNTRANSFER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\".$key.\": \"\",\r\n\"modelName\": \"Common\",\r\n\"calledMethod\": \"getCargoTypes\",\r\n\"methodProperties\": {}\r\n}",
            CURLOPT_HTTPHEADER => array("content-type: application/json",),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $data = json_decode($response,true);
            return $data['data'];
        }
    }

    public static function getServiceTypes()
    {
        $curl = curl_init();
        $catalog = new Catalog();
        $key = $catalog->getKey();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
            CURLOPT_RETURNTRANSFER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\".$key.\": \"\",\r\n\"modelName\": \"Common\",\r\n\"calledMethod\": \"getServiceTypes\",\r\n\"methodProperties\": {}\r\n}",
            CURLOPT_HTTPHEADER => array("content-type: application/json",),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $data = json_decode($response,true);
            return $data['data'];
        }
    }

    public static function getAreas()
    {
        $curl = curl_init();
        $catalog = new Catalog();
        $key = $catalog->getKey();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
            CURLOPT_RETURNTRANSFER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\".$key.\": \"\",\r\n\"modelName\": \"Address\",\r\n\"calledMethod\": \"getAreas\",\r\n\"methodProperties\": {}\r\n}",
            CURLOPT_HTTPHEADER => array("content-type: application/json",),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $data = json_decode($response,true);
            return $data['data'];
        }
    }

   /* public static function getSettlements($area)
    {
        $curl = curl_init();
        $catalog = new Catalog();
        $area = 'dcaadb64-4b33-11e4-ab6d-005056801329';
        $key = $catalog->getKey();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
            CURLOPT_RETURNTRANSFER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\".$key.\": \"\",\r\n\"modelName\": \"AddressGeneral\",\r\n\"calledMethod\": \"getSettlements\",\r\n\"methodProperties\": {\"AreaRef\": \".$area.\",}\r\n}",
            CURLOPT_HTTPHEADER => array("content-type: application/json",),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $data = json_decode($response,true);
            var_dump($data);
            return $data['data'];
        }
    }*/

    public static function getSettlements($area)
    {
        $curl = curl_init();
        $catalog = new Catalog();
        $key = $catalog->getKey();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
            CURLOPT_RETURNTRANSFER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\".$key.\": \"\",\r\n\"modelName\": \"Address\",\r\n\"calledMethod\": \"getCities\",\r\n\"methodProperties\": {\"AreaRef\": \".$area.\"}\r\n}",
            CURLOPT_HTTPHEADER => array("content-type: application/json",),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $data = json_decode($response,true);
            return $data['data'];
        }
    }

    public static function getWarehouse($settlement)
    {
        $curl = curl_init();
        $catalog = new Catalog();
        $key = $catalog->getKey();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
            CURLOPT_RETURNTRANSFER => True,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\".$key.\": \"\",\r\n\"modelName\": \"AddressGeneral\",\r\n\"calledMethod\": \"getWarehouses\",\r\n\"methodProperties\": {\"SettlementRef\": \".$settlement.\"}\r\n}",
            CURLOPT_HTTPHEADER => array("content-type: application/json",),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $data = json_decode($response,true);
            var_dump($response);
            return $data['data'];
        }
    }
}