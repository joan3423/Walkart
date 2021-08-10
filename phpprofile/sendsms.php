<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
include("../global/conexion.php");


if (isset($_POST['editphone'])){
    
        $id = $_COOKIE['id'];
        $phone = trim($_POST['editphone']);
        $phonelenght= strlen($phone);
        if ($phonelenght == 0){
            return print(1);
        } 
        $number=rand(1000,9000);
        $account_sid = 'AC5f85d02d8aa4ea79a4eb2dccf642bf26';
        $auth_token = '01605dbeb96177e342bedaeed00438ac';
        $twilio_number = "+13233109792";
        
        $client = new Client($account_sid, $auth_token);
        $client->messages->create(

            $phone,
            
            array(
                'from' => $twilio_number,
                'body' => 'your registration number is:'.$number
            )
            
        );
        return print($number);
                
}
 