<?php
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_f541e256a41b66d33518203fee0', 'test_290c6e1842b425dd1f1b36ebf7d', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        "sms" => $phone,
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
