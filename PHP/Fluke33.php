<?php
/���� ���ʹ�. 6008111004/
                     for($i=1;$i<=4;$i++){
                for($j=$i;$j<=4+1;$j++){
                    echo ("&nbsp;&nbsp;");
                }
                for($j=1;$j<=$i*2-1;$j++){
                    echo ("*");
                }
                echo "<br>";
            }
            for($i=1;$i<4;$i++){
                for($j=1;$j<=$i+2;$j++){
                    echo ("&nbsp;&nbsp;");
                }
                for($j=$i;$j<=(4-1)*2-$i;$j++){
                   echo ("*");
                }
              echo "<br>";
            }
?>
