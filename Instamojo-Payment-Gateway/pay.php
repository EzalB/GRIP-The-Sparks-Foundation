<?php
$name = $_POST["name"];
$amount = $_POST["amount"];
$phone = $_POST["phone"];
$email = $_POST["email"];

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('YOUR-PRIVATE-API-KEY', 'YOUR-PRIVATE-AUTH-TOKEN', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Donation",
        "amount" => $amount,
        "buyer_name" => $name,
        "send_email" => true,
        "send_sms" => true,
        "phone" => $phone,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://tsf-paymentgatewayintegration.000webhostapp.com//thankyou.php",
        "webhook" => "https://tsf-paymentgatewayintegration.000webhostapp.com//webhook.php"
    ));
    //print_r($response);

    $pay_ulr = $response['longurl'];

    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();
} catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
