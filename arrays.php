<?php
echo "hello world".'<br>';
$programminglangauge=['java','c++','python','oop'];
echo '<pre>';
print_r($programminglangauge);
echo '</pre>';
echo '<br>';
var_dump(isset($programminglangauge[2]));
//return true or false debendent on index of array
echo '<br>';
echo count($programminglangauge)."<br>";//numbers items of array.
echo '<br>';
array_push($programminglangauge,'html;','Css','js');
echo '<pre>';
print_r($programminglangauge);
echo '</pre>';
$Development=[
    'front_en'=>[
        'html'=>'HTML',
        'css'=>'CSS',
        'java script'=>'JAVASCRIPT'
    ],
    'BACKEND'=>[
        'php'=>'PHP',
        'java'=>'JAVA',
        'python'=>'PYTHON'
        ],
    'mobile developer'=>[
        'Native'=>'android','ios','desktop',
        'crrose plat form'=>'flutter'
    ]

];
echo '<pre>';
print_r($Development);
echo '</pre>';
echo '<pre>';
print_r($Development['front_en'][ 'html']);
echo '</pre>';
$charcter=['a','b','c','d',50=>'e','f','g','r'=>2,'o'=>null];
echo $charcter[51].'<br>';
unset($charcter[50],$charcter[1],$charcter[3],$charcter[2]);
print_r($charcter);//Array ( [0] => a [51] => f [52] => g )
echo '<br>';
var_dump(array_key_exists('o',$charcter));//because chek the index
echo '<br>';
var_dump(isset($charcter['o']));//because chek the value
echo '<br>';
$text='hello World';
echo strlen($text);
$programminglangauges_1=['php','laravel','python','java','html'];
echo '<br>';
foreach ($programminglangauges_1 as $key=>& $langauge_1)
{   $langauge_1='php';//replace end value
   echo $key.':'.$langauge_1.'<br>';}
echo '<pre>';
print_r($programminglangauges_1);
echo '</pre>';