<?php
/���� ���ʹ�. 6008111004/
for($i=1;$i<=4;$i++)
{
	for($j=1;$j<=(4-$i);$j++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($i);
	for($j=2;$j<=$i;$j++)
	{
	echo ("**");
	}
	echo ($i);
	echo "<br>";
}
for($i=3;$i>=1;$i--)
{
	for($j=1;$j<=(4-$i);$j++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo($i);
	for($j=2;$j<=$i;$j++)
	{
	echo ("**");
	}
	echo ($i);
	echo "<br>";
}
?>