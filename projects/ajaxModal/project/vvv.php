<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<?php
    $fruits = array ("apple", "orange", array ("pear", "mango"),
    "banana");
    echo (count($fruits,1));
    echo '<br>';
    ?>

<?php
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue", "h" => "orange");
$a3 = array("i" => "orange");
$a4 = array_merge($a2, $a3);
//$result = array_diff($a1, $a4);
//print_r($result);
print_r($a4);
?>