<?php
for($i=1;$i<=3;$i++) {
	for($k=1;$k<=3-$i;$k++) {
		
		echo ("&nbsp;");
	}
		echo ("*");
	for($k=2;$k<=$i;$k++){
		echo ($k);
	}
	for($k=$i;$k<=$i;$k++) {
		
		echo ($k);
	}
	for($k=$i;$k>=2;$k--){
		echo ($k);
	}
		echo ("*");
	for($k=1;$k<=3-$i;$k++) {
		
		echo ("&nbsp;");
	}
		echo "<br>";
}
for($i=2;$i>=1;$i--) {
	for($k=1;$k<=3-$i;$k++) {
		echo ("&nbsp;");
	}
	
		echo ("*");
	for($k=1;$k<=$i;$k++){
		echo ($i);
	}
	
	for($k=2;$k<=$i;$k++){
		echo ($k);
	}
		echo ("*");
	for($k=1;$k<=3-$i;$k++) {
		echo ("&nbsp;");
	}
	echo "<br>";
}
?>