<?php
for($i=1;$i<=5;$i++) {
	for($k=2;$k<=$i;$k++) {
		echo ("&nbsp;");
	}
	
	for($k=0;$k<=5-$i;$k++){
		echo ("*");
	}
	for($k=0;$k<=4-$i;$k++){
		echo ("*");
	}
	for($k=$i;$k>=1;$k--) {
		echo ($k);
	}
	echo "<br>";
}
?>