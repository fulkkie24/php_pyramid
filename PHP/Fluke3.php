<?php
for($i=1;$i<=4;$i++) {
	for($k=$i;$k<=$i;$k++) {
		echo($k);
	}
	for($k=$i;$k<=$i;$k++) {
		echo($k+4);
	}
	
	for($k=0;$k<=3+$i;$k++) {
		echo("*");	
	}
	
	echo "<br/>";
}
?>
