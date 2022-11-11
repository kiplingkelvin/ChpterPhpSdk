<?php

namespace KiplingKelvin\ChpterPhpSdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

class Chpter 
{

    public static function mpesaPayment($customer, $products, $amount, $callback_details)
    {
        $baseUrl = "https://chpter.co/";
        $endpoint = "api/payment/payment-initiate-callback/";
        $client  = new Client();

        $token = getenv("CHPTER_TOKEN");
        $domain = getenv("CLIENT_DOMAIN");


        $requestBody = array( 
            "customer_details"=> $customer,
            "products"=> $products,
            "amount"=> $amount,
            "callback_details"=> $callback_details,
        );

        try {
            $response = $client->post($baseUrl . $endpoint, [
                "headers" => [
                    "Authorization" => "Token {$token}",
                    "domain"  => $domain,
                ],
                "json"    => $requestBody,
            ]);

            return json_decode((string) $response->getBody(), true);
        } catch (BadResponseException $exception) {
            return json_decode((string) $exception->getResponse()->getBody()->getContents(), true);
        }

    }

    public static function cardPayment($customer, $products, $amount, $card_details, $callback_details)
    {
        $baseUrl = "https://chpter.co/";
        $endpoint = "api/payment/payment-initiate-callback/";
        $client  = new Client();

        $token = getenv("CHPTER_TOKEN");
        $domain = getenv("CLIENT_DOMAIN");

        $requestBody = array( 
            "customer_details"=> $customer,
            "products"=> $products,
            "amount"=> $amount,
            "card_details"=> $card_details,
            "callback_details"=> $callback_details,
        );

        try {
            $response = $client->post($baseUrl . $endpoint, [
                "headers" => [
                    "Authorization" => "Token {$token}",
                    "domain"  => $domain,
                ],
                "json"    => $requestBody,
            ]);

            return json_decode((string) $response->getBody(), true);
        } catch (BadResponseException $exception) {
            return json_decode((string) $exception->getResponse()->getBody()->getContents(), true);
        }
    }

}
