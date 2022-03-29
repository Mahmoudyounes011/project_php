<?php
$x=5;
$y=5;
var_dump($x**$y);//means:the power(**)
echo"<br>";
$x1=+'9';
var_dump($x1);//(int) 9
echo "<br>";
echo $x**=4;
echo "<br>";
var_dump(  $x==$y);
echo "<br>";
var_dump($x==$y);
echo "<br>";
$Q=false;
$R=$Q ?? 'hello';
var_dump($R);
echo "<br>";
// bitwise operators:(&,|,^,~,<<,>>)
$t=6;//in binary number => 110
//                          &
$p=3;//in binary number => 011
//                         010
var_dump($t&$p);
echo "<br>";
$t1=6;
$t2=3;
var_dump($t1^$t2);
echo "<br>";
$t3=6;
$t4=3;
var_dump($t3 | $t4);
echo "<br>";
$t5=6;
$t6=3;
//110
//<<
//110000
var_dump($t5<<$t6);
/*
(n/a)	clone new	clone and new
right	**	arithmetic
(n/a)	+ - ++ -- ~ (int) (float) (string) (array) (object) (bool) @	arithmetic (unary + and -), increment/decrement, bitwise, type casting and error control
left	instanceof	type
(n/a)	!	logical
left	* / %	arithmetic
left	+ - .	arithmetic (binary + and -), array and string (. prior to PHP 8.0.0)
left	<< >>	bitwise
left	.	string (as of PHP 8.0.0)
non-associative	< <= > >=	comparison
non-associative	== != === !== <> <=>	comparison
left	&	bitwise and references
left	^	bitwise
left	|	bitwise
left	&&	logical
left	||	logical
right	??	null coalescing
non-associative	? :	ternary (left-associative prior to PHP 8.0.0)
right	= += -= *= **= /= .= %= &= |= ^= <<= >>= ??=	assignment
(n/a)	yield from	yield from
(n/a)	yield	yield
(n/a)	print	print
left	and	logical
left	xor	logical
left	or	logical
 * */