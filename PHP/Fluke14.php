<?php

/���� ���ʹ�. 6008111004/

for($i=1;$i<=5;$i++) {
	for($k=2;$k<=0+$i;$k++) {
		echo ("&nbsp;");
	}
	
	for($k=$i;$k<=$i;$k++) {
		echo($i);
	}
	
	echo($i+1);

	for($k=1;$k<=5-$i;$k++){
		echo ("&nbsp;&nbsp;");
	}
	
	for($k=$i;$k<=$i;$k++) {
		echo($i+1);
	}
	
	echo($i);
	
	echo "<br/>";
}


?>