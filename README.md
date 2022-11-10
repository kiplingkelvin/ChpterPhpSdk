# Chpter API PHP Integration

## Installation
Install via composer
```cmd
composer require kiplingkelvin/chpter-php-sdk
```

## Usage
### Mpesa Payment with STK Push 
```php
use KiplingKelvin\ChpterPhpSdk\Chpter;

    $customer = array( 
            "payment_method"=> "MPesa",
            "full_name"=> "John Doe",
            "location"=> "Nairobi",
            "phone_number"=> "254706347307",
            "email"=> "johndoe@mail.com"  );

    $products =  array( 
            "product_id"=> "08",
            "product_name"=> "HoodEez",
            "quantity"=> "1",
            "unit_price"=> "1" );

    $amount = array( 
            "delivery_fee"=> "0",
            "discount_fee"=> "0",
            "total"=> "1",
            "currency"=> "kes");

    $callback_details = array( 
            "transaction_reference"=>  "123456789123",
            "callback_url"=>  "https://be35-41-80-113-202.ngrok.io/chpter_mpesa_payment_callback_url" );

Chpter::mpesaPayment($customer, $products, $amount, $callback_details);
```

### Card Payment
```php
use KiplingKelvin\ChpterPhpSdk\Chpter;

    $customer = array( 
            "payment_method"=> "Card",
            "full_name"=> "John Doe",
            "location"=> "Nairobi",
            "phone_number"=> "254706347307",
            "email"=> "johndoe@mail.com"  );

    $products =  array( 
            "product_id"=> "08",
            "product_name"=> "HoodEez",
            "quantity"=> "1",
            "unit_price"=> "1" );

    $amount = array( 
            "delivery_fee"=> "0",
            "discount_fee"=> "0",
            "total"=> "1",
            "currency"=> "kes");
    $card_details = array( 
            "card_number"=> "4545454545454545",
            "expiry_month"=> "08",
            "expiry_year"=> "2024",
            "cvc"=> "123");

    $callback_details = array( 
            "transaction_reference"=>  "123456789123",
            "callback_url"=>  "https://be35-41-80-113-202.ngrok.io/chpter_mpesa_payment_callback_url" );

Chpter::cardPayment($customer, $products, $amount, $card_details, $callback_details);
```
