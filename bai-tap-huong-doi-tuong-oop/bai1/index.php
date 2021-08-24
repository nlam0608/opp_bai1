<?php
include_once ("Stopwatch.php");

$timer = new Stopwatch();

 echo $timer->start();
 echo $timer->stop();
 echo $timer->getElapsedTime();
