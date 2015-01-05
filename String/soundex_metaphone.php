<?php

$known = "Fred";
$query = "Phred";

if (soundex($known) == soundex($query))
{
	print "Soundex: {$known} sounds like {$query} \n";
}
else
{
	print "Soundex: {$known} doesn't sound like {$query} \n";
}

if (metaphone($known) == metaphone($query))
{
	print "Metaphone: {$known} sounds like {$query} \n";
}
else
{
	print "Metaphone: {$known} doesn't sound like {$query} \n";
}
?>
