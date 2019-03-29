<? php

$total=array(1,2,3,4);
$total[2]=7;
$total_s="";
for($i=0;$i<count($total);$i++){
	$total_s.=$total[$i].'|';
}
echo $total_s;
}

?>