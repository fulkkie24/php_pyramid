<?php
/*ฟลุ๊ค รหัสนศ. 6008111004*/
for($i=1;$i<=5;$i++)
{
	echo ($i);
	for($j=1;$j<=(10-$i);$j++)
	{
	echo ("*");
	}
	for($j=2;$j<=($i);$j++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo (6-$i);
	echo "<br>";
}

?>