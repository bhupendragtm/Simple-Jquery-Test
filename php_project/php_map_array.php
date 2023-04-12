<?php
$fruits = $fruits1 = array(
	"Kiwi" =>500,
	"Apple" =>250,
	"Banana" =>100);
	
$fruits["Orange"] = 100;
$fruits1=var_dump(array_filter($fruits, function($v, $k){
    return $v >= 200;
}, ARRAY_FILTER_USE_BOTH)
);

foreach($fruits1 as $x=>$x_value)
{
echo "Key=". $x . ", Value=" .$x_value;
}
?>
