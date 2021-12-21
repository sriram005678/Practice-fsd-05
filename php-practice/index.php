<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 



// example-1

# First Example
// print <<<END
// This uses the "here document" syntax to output
// multiple lines with $variable interpolation. Note
// that the here document terminator must appear on a
// line with just a semicolon no extra whitespace!
// END;
# Second Example
// print "This spans
// multiple lines. The newlines will be
// output as well";

// example-2

// $capital = 67;
// print "Variable capital is $capital <br>"; 
// print "Variable capital-2 is $capital";

// example-3

// echo "<h2>PHP is Fun!</h2>";
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "string ", "was ", "made ", "with multiple parameters.";

//example-4

// $greetings = "hello sri";

// echo "$greetings";

//example-5

// if (3 == 2 + 1)
//  print("Good - I haven't totally lost my mind.");
//  print("lost my mind.<br>");

// if (3 == 2 + 1)
// {
//  print("Good - I haven't totally");
//  print("lost my mind.<br>");
// }


//example-6-integer

// $int_var = 12345;
// $another_int = -12345 + 12345;

// echo "$int_var <br>";
// echo "$another_int"


//example-7-doubles

// $many = 1.5;
// $many_2 = 1.5;
// $total = $many + $many_2;
// echo("$many + $many_2 = $total");


// $many = 2.2888800;
// $many_2 = 2.2111200;
// $few = $many + $many_2;
// print("$many + $many_2 = $few<br>");

//example-8-boolean

// if (TRUE)
//  print("This will always print<br>");
// else
//  print("This will never print<br>");

//example-9

// $variable = "name";
// $literally = 'My $variable will not print!\\n';
// print($literally);

// $variable = "name";
// $literally = "My $variable will not print!\\n";
// print($literally);

// $x = "Hello world!";
// $y = 'Hello world!';
// $z = 'this is $x ';

// echo $x;
// echo "<br>";
// echo $z;

//example-10

// $channel =<<<_XML_
// <channel>
// <title>What's For Dinner<title>
// <link>http://menu.example.com/<link>
// <description>Choose what to eat tonight.</description>
// </channel>
// _XML_;
// echo <<<END
// This uses the "here document" syntax to output
// multiple lines with variable interpolation. Note
// that the here document terminator must appear on a
// line with just a semicolon. no extra whitespace!
// <br />
// END;
// print $channel;

// Example-12 local variable

// $x = 4;
// function assignx () {

// $x = 0;
// print "\$x inside function is $x.
// ";
// }
// assignx();
// print "\$x outside of function is $x.
// ";

//example-13-php-function-parameter

// function multiply ($value) {
//     $value = $value * 10;
//     return $value;
//    }
//    $retval = multiply (10);
//    Print "Return value is $retval\n";

// example-14-global variable
// $somevar = 15;
// function addit() {
// GLOBAL $somevar;
// $somevar++;
// print "Somevar is $somevar";
// }
// addit();

// example-15 static-variables

// function keep_track() {
//     STATIC $count = 0;
//     $count++;
//     print $count;
//     print "";
 
//    }
//    keep_track();
//    keep_track();
//    keep_track();
   
// example-16-php constant

// define("MINSIZE", 50);
// echo MINSIZE; 
// echo constant("MINSIZE");       // same thing as the previous line





// Valid constant names

// define("ONE", "first thing");
// define("TWO2", "second thing");
// define("THREE_3", "third thing");

// // Invalid constant names

// define("2TWO", "second thing");
// define("__THREE__", "third value");

// echo ONE;
// echo constant("TWO");
// print THREE_3;

// define('ONE', 'first thing' ,false);
// echo one;



// $a = 42;
//  $b = 20;
 
//  $c = $a + $b;
//  echo "Addition Operation Result: $c <br/>";
//  $c = $a - $b;
//  echo "Subtraction Operation Result: $c <br/>";
//  $c = $a * $b;
//  echo "Multiplication Operation Result: $c <br/>";
//  $c = $a / $b;
//  echo "Division Operation Result: $c <br/>";
//  $c = $a % $b;
//  echo "Modulus Operation Result: $c <br/>";
//  $c = $a++;
//  echo "Increment Operation Result: $c <br/>";
//  $c = $a--;
//  echo "Decrement Operation Result: $c <br/>";



// in w3schools examples
// global variables

// $x = 5; // global scope
 
// function myTest() {
//   // using x inside this function will generate an error
// //   echo "<p>Variable x inside function is: $x</p>";
// } 
// myTest();

// echo "<p>Variable x outside function is: $x</p>";

// local variables


// function myTest() {
//     $x = 5; // local scope
//     echo "<p>Variable x inside function is: $x</p>";
//   }
//   myTest();
  
//   // using x outside the function will generate an error
//   echo "<p>Variable x outside function is: $x</p>";



// my examples about local variables clarity

// function mysri(){
//     $sri = 10;
//     echo "sri favourite number is  $sri";
// }
// mysri();

// function mysri2(){
//     $sri = 12;
//     echo "sri favourite number is  $sri";
// }
// mysri2();



// global can be accessed within in a function examples..

// $x = 5;
// $y = 10;

// function myTest() {
//   global $x, $y;
//   $y = $x + $y;
// } 

// myTest();  // run function
// echo $y; // output the new value for variable $y


// static variables

// function myTest() {
//     static $x = 0;
//     echo $x;
//     $x++;
//   }
  
//   myTest();
//   echo "<br>";
//   myTest();
//   echo "<br>";
//   myTest();

//   function myTest2() {
//     $x = 0;
//     echo $x;
//     $x++;
//   }
  
//   myTest2();
//   echo "<br>";
//   myTest2();
//   echo "<br>";
//   myTest2();

// strings

// echo strlen("hello world"); //str length
// echo "<br>";
// echo str_word_count("hello world"); //str count
// echo "<br>";
// echo strrev("Hello world!"); //str reverse
// echo "<br>";
// echo strpos("Hello world!","Hello"); //str position bur starts with 0
// echo "<br>";
// echo str_replace("world", "sri", "hello world"); //str replace a word.

// numbers

// check integer
// $x = 5985;
// var_dump(is_int($x));

// echo "<br>";

// // Check again... 
// $x = 59.85;
// var_dump(is_int($x));

// //check float
// $x = 59.85;
// var_dump(is_float($x));

// php nan
// $x = acos(8);
// var_dump($x);

// php numeric check

// $num = 123;
// var_dump(is_numeric($num));

// $num = "123";
// var_dump(is_numeric($num));

// $num = "sri";
// var_dump(is_numeric($num));

// php conversion
// float to int

// $num = 1.234;
// $conversion = (int)$num;
// echo $conversion;

// $num = 1.20;
// $conversion = (float)$num;
// echo $conversion;


//PHP MATH - php pi and min max 

// echo pi(); // get pi value
// echo "<br>";
// echo min(10,20,-2); // minimum
// echo "<br>";
// echo max(10,20,-2); // maximum
// echo "<br>";
// echo abs(-1); // get positive value
// echo "<br>";
// echo sqrt(81); //square root
// echo "<br>";
// echo round(2.5); //round value
// echo "<br>";
// echo round(2.3);
// echo "<br>";
// echo rand(10,30); // random number generate


// php -constants and also using as a global.

// define("name", ["sriram", "sri", "rak"]);
// echo name[1];

// function myName(){
//     echo name[2];
// }
// myName();


// if else statement in php

// $t = date("d");
// echo $t;
// $t = 10;

// if ($t < 10){
//     echo "have a good";
// }

// elseif ($t > 10){
//     echo "have a bad";
// }

// else{
//     echo "have a equal";
// }



// switch case

// $color = "black";

// switch ($color){
//     case "red":
//         echo "this is red color";
//         break;
//     case "blue":
//         echo "this is blue color";
//         break;
//     case "green":
//         echo "this is green color";
//         break;
//     default:
//         echo "this is unknown";
// }


// while condition

// $num = 1;

// while($num <= 5){
//     echo "this is $num <br>";
//     $num++;
// }


// $num = 1;

// while($num <= 5){
//     echo "this is $num <br>";
//     $num+=2;
// }


// $num = 1;

// while($num <= 5){
//     ++$num;
//     echo "this is $num <br>";
   
// }

// do while
// $num = 6;

// do{
//     echo $num;
//     $num++;
// }while($num <= 5);

// for loop

// for($x=0; $x <= 10; $x++)
// echo $x;

// foreach

// $cars = array("audi", "BMW");

// foreach ($cars as $value){
//     echo $value;
// }

// $cars = array("audi"=>"1998", "BMW"=>"2000");

// foreach ($cars as $car=> $less){
//     echo "$car = $less";
// }



// break and continue
// for($x=0; $x <= 10; $x++){
//     if($x==7){
//         break;
//     }
//     echo $x;
// }

// for($x=0; $x <= 10; $x++){
//     if($x==7){
//         continue;
//     }
//     echo $x;
// }

// $x=0;
// while($x<10){
//     if($x==7){
//         $x++;
//         continue;
      
//     }
//     echo $x;
//     $x++;
// }


// $x = 0;

// while($x < 10) {
//   if ($x == 4) {
//     break;
//   }
//   echo "The number is: $x <br>";
//   $x++;
// }

// function argyment passing type

// function familyNmae($members, $age){
//     echo "this is $members and his age is $age<br>";

// }

// familyNmae("sri", 23);
// familyNmae("ram", 22);
// familyNmae("sriram", 21);

// function addNumber($a, $b){
//     echo $a+$b;
// }
// addNumber(10, 5);

// function addNumber($a, $b){
//      return $a+$b;
// }
// echo addNumber(10, 5);

// function addNumber(int $a, int $b){
//     return $a+$b;
// }
// echo addNumber(10, "5 number");

// function default_argu(int $x = 50){
//     echo "$x <br>";
// }
// default_argu(123);
// default_argu();
// default_argu(12);


// function sum(int $x, int $y) {
//     $z = $x + $y;
//     return $z;
//   }
  
//   echo "5 + 10 = " . sum(5, 10) . "<br>";
//   echo "7 + 13 = " . sum(7, 13) . "<br>";
//   echo "2 + 4 = " . sum(2, 4);


// function addNumbers(float $a, float $b) : int {
//   return (int)($a + $b);
// }
// echo addNumbers(1.2, 5.2);

// passing reference
// function addNumbers(&$variable){
//     $variable *= 5;
// }
// $num = 10;
// addNumbers($num);
// echo $num;

// arrays tricks [found total values in array and print]
// ondexed array

// $guns = array("pistol", "riffle", "glock", "ak-47");
// $totalGuns = count($guns);
// print_r($guns); ----new keyword
// var_dump($guns);-----new keyword

// for($x=0; $x<$totalGuns; $x++){
//     echo $guns[$x];
// }

// associate array

// $cars = array("volvo"=>"122","bmw"=>"123","aw"=>"126");
// echo "this is " . $cars['volvo'] . "my favourite";

// $cars = array("volvo"=>"122","bmw"=>"123","aw"=>"126");
// foreach($cars as $x => $value){
//     echo "car=" . $x . "num="  . $value ;
// }

// multimedia array

// $chocolates = array(
//     array("fivestar", "10", "5"),
//     array("munch", "8", "4"),
//     array("kitkat", "8", "5")
// );

// echo $chocolates[0][0].": sold :".$chocolates[0][1]. ": remain :".$chocolates[0][2]. "<br>";
// echo $chocolates[1][0].": sold :".$chocolates[1][1]. ": remain :".$chocolates[1][2]. "<br>";
// echo $chocolates[2][0].": sold :".$chocolates[2][1]. ": remain :".$chocolates[2][2]. "<br>";

// multimedia array2
// $chocolates = array(
//     array("fivestar", 10, 5),
//     array("munch", 8, 4),
//     array("kitkat", 8, 5),
//     array("kitkat", 8, 5)
// );

// for ($row = 0; $row < 4; $row++) {
//     echo "<p><b>row number $row<p><b>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//       echo "<li>".$chocolates[$row][$col]."<li>";
//     }
// echo "</ul>";
// }

// $GLOBALS 
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];



// default concadenation

// $name = "sri";
// $name2 = "ram";

// echo "$name $name2"


?> 


