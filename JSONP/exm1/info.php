
<?php

//  After Connect From DATABASE And Store Or Dump Data From User In Your Variable
// IN This Case I Store Data In Array 

$userData = array(
  'username' => "Mohammed Khalid",
  'email' => 'night0x@example.com',
  'priv' => 'Guest' ,
  'pass' => md5("123123123")

);

// Store Or Convert Data To JSON
$jsonData = json_encode($userData);

$callback = $_GET['callback'];

header('Content-Type: application/json');

echo $callback . "($jsonData)";

?>


 

