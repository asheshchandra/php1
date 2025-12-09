<?php
// $number = 12;
// // $number = $number + 13;
// // $number += 13;
// $number2 = $number - 20;
// $number = (13-5)*6;
// $number = (24-4) / (7-2);
// echo $number;

// $n = 8;
// $m = $n++;
// $m = ++$n;
// echo $m, "\n", $n;


// *Decimal and Hexadecimal
// $n = 12;
// $o = 017;
// $h = 0x3b;
// printf("The Number is %d and %d and %d", $n, $o, $h);
// printf("The binary equivalent of %d is %b \n", 12, 12);
// printf("The hexadecimal equivalent of %d is %x \n", 1212, 1212);
// printf("The octal equivalent of %d is %o \n", 27, 27);

// printf("The octal equivalent of %d is %o \n", 65536, 65536);

// printf("octal %o = %d", 0200000, 0200000);

// *Swapping

$fname = "Harry";
$lname = "Potter";
$middlename = "Nothing";

printf('His name is %3$s %2$s %1$s', $fname, $middlename, $lname); //*argument
echo"\n";

printf('The binary equivalent of %1$d is %1$b', 12);
echo "\n";

$n = 50.525;
printf("%.2f", $n);
echo "\n";

$m = 123;
$n = 27;

printf("%03d \n", $m);
printf("%03d \n", $n);
echo "\n";

$m = 123.3254;
$n = 27.254;

printf("%07.2f \n", $m);
printf("%07.2f \n", $n);
echo "\n";

$fname = "Harry";
$lname = "Potter";

$output = sprintf("His name is %s %s", $fname, $lname);

echo $output;
echo "\n";
echo strtoupper($output);