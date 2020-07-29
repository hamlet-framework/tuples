<?php

use Hamlet\Tuples\Tuple;
use Hamlet\Tuples\Tuple1;
use Hamlet\Tuples\Tuple2;
use Hamlet\Tuples\Tuple3;
use Hamlet\Tuples\Tuple4;
use Hamlet\Tuples\Tuple5;
use Hamlet\Tuples\Tuple6;
use Hamlet\Tuples\Tuple7;
use Hamlet\Tuples\Tuple8;
use Hamlet\Tuples\Tuple9;

/**
 * @template T0
 * @template T1
 * @template T2
 * @template T3
 * @template T4
 * @template T5
 * @template T6
 * @template T7
 * @template T8
 *
 * @psalm-param T0 $a
 * @psalm-param T1 $b
 * @psalm-param T2 $c
 * @psalm-param T3 $d
 * @psalm-param T4 $e
 * @psalm-param T5 $f
 * @psalm-param T6 $g
 * @psalm-param T7 $h
 * @psalm-param T8 $i
 * @psalm-return (func_num_args() is 1 ? Tuple1<T0> : (func_num_args() is 2 ? Tuple2<T0,T1> : (func_num_args() is 3 ? Tuple3<T0,T1,T2> : (func_num_args() is 4 ? Tuple4<T0,T1,T2,T3> : (func_num_args() is 5 ? Tuple5<T0,T1,T2,T3,T4> : (func_num_args() is 6 ? Tuple6<T0,T1,T2,T3,T4,T5> : (func_num_args() is 7 ? Tuple7<T0,T1,T2,T3,T4,T5,T6> : (func_num_args() is 8 ? Tuple8<T0,T1,T2,T3,T4,T5,T6,T7> : (func_num_args() is 9 ? Tuple9<T0,T1,T2,T3,T4,T5,T6,T7,T8> : Tuple )))))))))
 *
 * @param mixed $a
 * @param mixed $b
 * @param mixed $c
 * @param mixed $d
 * @param mixed $e
 * @param mixed $f
 * @param mixed $g
 * @param mixed $h
 * @param mixed $i
 * @return Tuple
 */
function tuple($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null): Tuple
{
    switch (func_num_args()) {
        case 1:
            return new Tuple1($a);
        case 2:
            return new Tuple2($a, $b);
        case 3:
            return new Tuple3($a, $b, $c);
        case 4:
            return new Tuple4($a, $b, $c, $d);
        case 5:
            return new Tuple5($a, $b, $c, $d, $e);
        case 6:
            return new Tuple6($a, $b, $c, $d, $e, $f);
        case 7:
            return new Tuple7($a, $b, $c, $d, $e, $f, $g);
        case 8:
            return new Tuple8($a, $b, $c, $d, $e, $f, $g, $h);
        case 9:
            return new Tuple9($a, $b, $c, $d, $e, $f, $g, $h, $i);
        default:
            throw new RuntimeException('Unsupported number of elements: ' . func_num_args());
    }
}
