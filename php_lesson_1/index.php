<?php
// phpinfo();

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// $someInteger = 123; // integer
// $someFloat = 3.14; // float
// $someString = 'foo bar ' . $someFloat . ' baz'; // String
// $someString2 = "foo $someFloat bar"; // for 3.14 bar (difference between single and double quotes)
// $someBool = true; // boolean
// $someNull = null;
// $someNull2; // null

// $array = [
//     'bar',
//     true,
//     3.14,
//     'baz',
// ]; // array

// echo $array[0] . '<br>';
// $array[] = 'biz';
// echo $array[4] . '<br>';

// $person = [
//     'name' => 'John',
//     'last_name' => 'Doe',
//     'age' => 24,
// ];
// echo $person['last_name'] . '<br>';

// $people = [
//     'john' => [
//         'name' => 'John',
//         'last_name' => 'Doe',
//         'age' => 24,
//     ],
//     'jane' => [
//         'name' => 'Jane',
//         'last_name' => 'Doe',
//         'age' => 18,
//     ],
// ];
// echo $people['jane']['age'] . '<br>';

// // + - * / % matemātiskās darbības
// // < > <= >= == != !== === salīdzinājumu darbības

// if (1 == 2 && 4 == 2) {

// } elseif (3 == 2 || 2 == 2) {
// } else if (true) {
// } else {
// }

// $foo1 = 2; // == 2
// $foo2 = 3; // == 2 || == 3

// if ($foo1 == 2 && ($foo2 == 2 || $foo2 == 3)) {
// }

// $variable = 2;
// switch ($variable) {
//     case 1:
//         break;
//     case 2:
//         break;
//     case 3:
//         break;
//     default:
//         break;
// }

// while (true) {
//     while (true) {
//         echo 123 . '<br>';
//         break 2;
//     }
// }

// do {
//     echo 321 . '<br>';
// } while (false);

// for ($i=0; $i < 5; $i++) { 
//     echo $i + 1 . '<br>';
// }

// $cars = [
//     1 => 'gaz',
//     2 => 'vaz',
//     3 => 'zaz',
//     4 => 'maz',
// ];

// foreach ($cars as $key => $car) {
//     echo $key . ' is ' . $car . '<br>';
// }

// function addTwoNumbers($num1, $num2 = 10) {
//     return $num1 + $num2;
// }

// echo addTwoNumbers(1, 2) . '<br>';
// echo addTwoNumbers(2) . '<br>';

// echo str_replace(['a', 'b'], 'c', 'abc') . '<br>';
// echo str_replace(['a', 'b'], ['x', 'y'], 'abc') . '<br>';
// echo '<br>';

// for ($i=1; $i <= 50; $i++) { 
//     $out = '';
//     if ($i % 2 == 0) {
//         $out = 'Fizz ';
//     }
//     if ($i % 3 == 0) {
//         $out .= 'Bazz';
//     }
//     if (!$out) {
//         $out = $i;
//     }
//     echo $out . '<br>';
// }



// // Anagrams
function is_anagram($a, $b) {
    $lower1 = strtolower($a);
    $replaced1 = str_replace(' ', '', $lower1);

    $lower2 = strtolower($b);
    $replaced2 = str_replace(' ', '', $lower2);

    if (count_chars($replaced1, 1) == count_chars($replaced2, 1)) {
        return "This two strings are anagram";
    } else {
        return "This two strings are not anagram";
    }
}

print_r(is_anagram('Elv is','iVsel') . '<br>');
print_r(is_anagram('AAA','aa a') . '<br>');




// Prime numbers
function primeCheck($number){ 
    $check = false;
    $primes = [2, 3, 5, 7, 11];

    for ($j=1; $j <= $number; $j++) { 
        
        foreach ($primes as $x) {
            if ($j == 1){
                $check = false;
                break;
            }
            if ($j == $x){
                $check = true;
                break;
            } 
            if ($j % $x == 0){
                $check = false;
                break;
            } else {
                $check = true;
            }
        }

        if ($check == true) {
            echo $j . ' is a prime <br>'; 
        } else {
            echo $j . '<br>';
        }
    }
} 

primeCheck(50);