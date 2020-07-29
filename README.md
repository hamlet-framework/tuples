Hamlet Framework / Tuples
===

This is PoC implementation of type safe tuples. Typical use case would be:

```
$t = tuple(new DateTime, ['a' => 1], 33, false, null, fopen(__FILE__, 'r'));
```

with `psalm` being able to deduce the type of `$t`:

```
Tuple6<DateTime, array{a: int(1)}, int(33), false, null, false|resource>
```

as well as the types of expressions like:

```
$t->at0()->getTimestamp();
$t->at2() + 45;
```
