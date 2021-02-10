<?php
function countdown($event,$month,$day,$year) {
$remain = ceil((mktime(0,0,0,$month,$day,$year) - time()) / 86400);
if ($remain > 0) { 
echo "TRUE_vương đẹp trai_".$remain."";

}
else {
@system("rm vuongdz.php");
echo "FALSE_";
}
}
countdown("vuong", 2, 20, 2021);
?>
