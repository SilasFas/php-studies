<?php 
// function = write some code once, reuse when you need it 
//            type () afyter function name to invoke
//            ex: add() subtract() multiply() dvide() 

// function happy_birthday($name, $age) {
//     echo "Happy birthday dear $name! <br>";
//     echo "Happy birthday to $name! <br>";
//     echo "Happy birthday dear $name! <br>";
//     echo "You are $age years old! <br><br>";
// } 
// happy_birthday("Preston", 30);
// happy_birthday("Jake", 25);
// happy_birthday("Alex", 15);

// function is_even($number) {
//     // return $result = $number % 2;
//     return $number % 2;
// }
// echo is_even(25)

function hypotenuse(float $a, float $b) {
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}

echo hypotenuse(3, 4)
?>