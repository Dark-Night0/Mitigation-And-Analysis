<?php

// JSON payload to be encrypted
$payload = '{"userId": "12345", "isAdmin": true}';

// Secret key used for encryption/decryption
$secretKey = "SECRETKEY";

// Initializing the cipher
$iv = openssl_random_pseudo_bytes(16);
$encrypted = openssl_encrypt($payload, 'AES-256-CBC', $secretKey, OPENSSL_RAW_DATA, $iv);

// Converting to JSON format
$jsonEncrypted = json_encode(base64_encode($encrypted));

// Decoding the JSON format
$encryptedData = json_decode($jsonEncrypted, true);

// Attacker-controlled padding
$encryptedData[count($encryptedData) - 1] = "padding";

// Decrypting the data
$decrypted = openssl_decrypt(base64_decode(json_encode($encryptedData)), 'AES-256-CBC', $secretKey, OPENSSL_RAW_DATA, $iv);

// Displaying the decrypted payload
echo $decrypted;
?>
