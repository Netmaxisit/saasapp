<?php
// Basic PHP Sample Code

// 1. Variables
$name = "John Doe";
$age = 25;

// 2. Output data
echo "Hello, my name is $name and I am $age years old.<br>";

// 3. Simple Conditional Statement
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are not an adult.<br>";
}

// 4. Function
function greet($person) {
    return "Hello, " . $person . "!<br>";
}

echo greet("Alice");
echo greet("Bob");

// 5. Arrays
$fruits = array("Apple", "Banana", "Cherry");

// 6. Loop through array
echo "Fruits list:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// 7. Associative Array (key-value pair)
$person = array("name" => "John", "age" => 25, "city" => "New York");
echo "Name: " . $person["name"] . ", Age: " . $person["age"] . ", City: " . $person["city"] . "<br>";

// 8. Looping with For loop
for ($i = 0; $i < 5; $i++) {
    echo "Number: " . $i . "<br>";
}

// 9. While Loop
$counter = 0;
while ($counter < 3) {
    echo "Counter: $counter<br>";
    $counter++;
}

?>
