<?php
/���� ���ʹ�. 6008111004/
for($i=1;$i<=5;$i++){
            echo ("*");
            for($j=1;$j<$i;$j++){
               echo ("&nbsp;");
            }
            for($j=$i;$j<=5*2-$i;$j++){
                echo ($i);
          
            }
            for($j=$i;$j>1;$j--){
              echo ("&nbsp;&nbsp;");
              
            }
            echo ("*");
           echo "<br>";
        }
    
    
?>