<?php

$name = 'Fred';
$single = 'Hello, $name. This is a sample of single-quoted string literal\n'; //single-quoted
$double = "Hello, $name. This is a sample of double-quoted string literal\n"; //double-quoted

$here = <<< EndOfQuote
Hello,
$name.
This
is
a
sample
of
here
document\n
EndOfQuote;
echo $double;
echo $single;
echo $here;
?>
