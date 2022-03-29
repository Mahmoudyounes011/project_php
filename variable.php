   <?php
   $_123 = "def";
    $x = 5;
   $y = $x;
    $x = 23;
   echo $y,"<br>"; //print 5

    $x2 = 99;
    $y2 = &$x2; // attention
   $x2 = 6;
   echo $y2,"<br>"; // print 6

   //we can't print a variable in single quotes against double quotes
   //like: echo 'hello $x2'; the output will be hello $x2
   //but here:
   echo "hello $x2","<br>"; // hello 6
   echo "hello {$x2}","<br>"; // hello 6 but more readable
   print "hello".$x2; // or single quote
   echo "<br>";

   define("x3", 100);
   // constant value and we can't use $ to print it
   echo x3."<br>";
   echo defined("x3");
   // print 1 if the constant value exists and don't print anything if it doesn't exist
   // const in compile time
   // define in run time
   // ==> so we can't use const in loop and if condition (control structure)

   $paid ="PAID";
   define("STATUS_".$paid,"STATUS_PAID2");
   echo "<br>".STATUS_PAID;

   echo "<br>".PHP_VERSION; //predefined constant
   echo "<br>".__LINE__."<br>"; // magic constant

  $foo = 'bar';
   $$foo = 'oop';
   $bar = 'c++';
   echo $$foo."<br>"; // c++
   echo "${$foo}"; // c++ and don't write $$foo in single or double quotes

echo gettype($foo),"<br>";
   echo gettype($x2),"<br>";
   echo gettype($y2),"<br>";
var_dump($foo)  ;
   var_dump($x2) ;
   var_dump($y2) ;// we can print data type and value.
   $x=[11,-33,55,5.6,true,'A',false,"mahmoud","younes"];

   print_r($x) ;
   //we can't print the elements of array by acho
function sum($x,$y){
    return $x+$y;}

    echo "<br>";
$xx=  (int)1236.56;//1236
var_dump($xx);//int 1236

   $xx=  false;
   var_dump(is_bool($xx));//bool(true)
   echo "<br>";
   if($xx)
   {echo 'is boolean';}
   else
   { echo 'is not boolean';}//if the variable true =>is boolean
   $hexa=0X2Ab;//683
   echo "<br>";
   echo $hexa,"<br>";
   $ii=(int)  null;//(int)0
$u=13.5e4;
echo $u;//13.5000
   echo "<br>";
   $u=13.5e-3;
   echo $u,'<br>';//0.0135
   $h =floor((0.1+0.7)*10);//7:just this number
   echo $h."<br>";
   $D=ceil((0.1+0.7)*10);//8
   echo $D."<br>";
   $D1=ceil((0.1+0.2)*10);//4
   echo $D1."<br>";
   echo log(-1)."<br>";//NAN
   echo PHP_FLOAT_MAX*2 .'<br>';//TNF
$t=<<<TExt
hello world
line1_$u
line2_$hexa
line3_$D
TExt;
var_dump($t);
echo nl2br($t)."<br>";
$i1=null;
var_dump((array)$i1);//array(0){}
   var_dump((int )$i1);//int(0)
   var_dump((string)$i1);//string(0)

