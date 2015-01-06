<?php

class A {}
class B extends A {}

$obj = new B;

printf("Parent of \$obj: %s\n", get_parent_class($obj));
printf("Parent of B: %s\n", get_parent_class("B"));
printf("Parent of A: %s\n", get_parent_class("A"));
?>