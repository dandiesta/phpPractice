<?php

ob_start();
$start = microtime();

phpinfo();

$end = microtime();
ob_end_clean();

echo "phpinfo() took " . ($end-$start) . " seconds to run.\n";
 
?>