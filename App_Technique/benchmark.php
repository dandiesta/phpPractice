<?php

require_once 'profiling.php';

$timer = new Benchmark_Timer;

$timer->start();
sleep(1);
$timer->setMarker('Marker 1');
sleep(2);
$timer->stop();

$profiling = $timer->getProfiling();

foreach ($profiling as $time) {
	echo $time['name'] . ': ' . $time['diff'] . "<br>\n";
}

echo 'Total: ' . $time['total'] . "<br>\n";
print_r(Benchmark_Timer);

?>