<?php
/���� ���ʹ�. 6008111004/
for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=(8-$i);$j++)
	{
	echo ("*");
	}
	echo ($i);
	for($j=1;$j<=($i);$j++)
	{
	echo ("*");
	}
	echo (8-$i);
	echo "<br>";
}

?>
