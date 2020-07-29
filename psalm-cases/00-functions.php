<?php

require_once __DIR__ . '/../vendor/autoload.php';

/** @psalm-trace $t1 */
$t1 = tuple(null);

/** @psalm-trace $t2 */
$t2 = tuple(new DateTime, ['a' => 1]);
echo $t2->at0()->getTimestamp() . PHP_EOL;
echo $t2->at1()['a'] . PHP_EOL;

/** @psalm-trace $t3 */
$t3 = tuple(new DateTime, ['a' => 1], 22);
echo $t3->at0()->getTimestamp() . PHP_EOL;
echo $t3->at1()['a'] . PHP_EOL;
echo $t3->at2() + 21;

/** @psalm-trace $t5 */
$t5 = tuple(new DateTime, ['a' => 1], 33, false, null, fopen(__FILE__, 'r'));
