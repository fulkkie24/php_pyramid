<?php
for($i=1;$i<=5;$i++)
{
	echo ($i);
	echo ("*");
	echo ($i+2);
	for($j=7;$j>=(6-$i);$j--)
	{
	echo ("*");
	}
	echo "<br>";
}
?>