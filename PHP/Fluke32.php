<?php
for($i=5;$i>=1;$i--)
{
	for($j=7;$j>=(6-$i);$j--)
	{
	echo (8-$j);
	}
	for($j=7;$j>=($i);$j--)
	{
	echo("*");
	}
	echo(8-$i);
	echo "<br>";
}
?>