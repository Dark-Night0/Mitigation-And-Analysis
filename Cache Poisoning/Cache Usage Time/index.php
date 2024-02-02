
<?php

function performExpensiveOperation($content) {
    $vuln = file_get_contents($content);

    return $vuln;
}

$cacheFile = 'cache-1.php';
$content = 'vuln.php' ;
    // 
if (file_exists($cacheFile) && time() - filemtime($cacheFile) < 20) {

    $data = file_get_contents($cacheFile);
    
} else {
    
    
    $data = performExpensiveOperation($content);
    file_put_contents('cache-1.php' ,$data) ;
}

echo $data;


?>



