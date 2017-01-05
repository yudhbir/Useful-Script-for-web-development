<?php
// echo(date("Y-m-d H-i-s"));
// die;
 $var='2ab';
 $var++;
echo $var;
echo "<br>";
echo $var+2;
echo "<br>";
$var++;
echo $var;
die;
//output:
/* 
1 5 9 
2 6 10 
3 7 11 
4 8 12 
 */
for($i=1;$i<=4;$i++)
{	
	$temp=4;
	$ch="";
	for($j=1;$j<=3;$j++)
	{
		
		if($j==1) 
		{
			echo $i."&nbsp;";
		}else
		{
			if($ch=="")
			{
				echo "".($i+4)."&nbsp;";
				$ch=$i+$temp;
			}
			else{
				$final=$ch+$temp;
				echo "".$final."&nbsp;";
				$ch=$final;
			}
		}
		
	}
	echo "<br>";
}

$val=1;
for($i=1;$i<=6;$i++)
{	
	for($j=1;$j<$i;$j++)
	{
		echo $val."&nbsp;&nbsp;";
		$val++;
	}
	echo "<br>";
}
echo "<br>";

for($i=8;$i>=1;$i--)
{	
	for($j=1;$j<=$i;$j++)
	{
		echo $j."&nbsp;&nbsp;";
		
	}
	echo "<br>";
}

$v = 1;
$m = 2;
$l = 3;


$x = ($l > $m);
var_dump($x > $v);

die;


//insert a new element in specific index into array without using the any inbuilt function.
// $arr=array('a','b','c','d');
// $final=[];
// for($i=0;$i<count($arr);$i++)
// {
	// if($i==2)
	// {
		// array_push($final,'f');
		// array_push($final,$arr[$i]);
	// }else{
		// array_push($final,$arr[$i]);
	// }
// }
$check= "hello5"+6;
echo $check;
// var_dump($check);
echo "<br>";
$array = array(array(141,151,161,array(142,152,1631)), 2, 3, array(101, 202, 303));
function DisplayArray($array)
{
	foreach ($array as $value)
	{
		if (is_array($value))
		{
			DisplayArray($value);
		} 
		else
		{
			echo $value. " ";
		}
	}
}
DisplayArray($array);
// echo "<pre>";print_r($final);echo "</pre>";

?>