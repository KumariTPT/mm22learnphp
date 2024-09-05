<?php

$num = 12; ///num on nimetus///

$num = "hello";

$num = "öö";

$num = null;

$a = 1;
$a++;
$a--;
$a+=2;
$a*=2;
$a/=2;
$a%=2;

$a = 'hello ' . 'world';
$a .='asdaskdj';
$array = array(1,2,3); ///vana viis///
$array = [1,2,3]; ///uus viis///

var_dump($array[1]);
$array =[
    'essa' => 1,
    'tessa' =>2,
    'kossa' =>3,
    5 => 4,
    'asdasd',
     10 => 1.2,
    true
];
var_dump($array['kossa']);

var_dump($array);
foreach($array as $key => $value){
    //echo $key . '=>' . $value . "\n";
    echo "$key=>$value\n";
}

$name = 'Kristofer';

$string = "hello $name\n";
var_dump($string);
$char = 'a';

for($i=0;$i<100;$i++){
    var_dump($char);
    $char++;
}



echo 'hello world'; ///pmst print///

var_dump($a);

var_dump($num); ///var_dump trykib valja///

?>