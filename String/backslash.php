<?php

$string = <<< EOF
"It's never going to work." she cried,
as she hit the backslash (\) key.
EOF;
$string = addslashes($string);
echo $string;
echo stripslashes($string);

?>
