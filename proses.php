<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = 0;
    if ($operator == "+") {
        $result = $num1 + $num2;
    } else if ($operator == "-") {
        $result = $num1 - $num2;
    } else if ($operator == "*") {
        $result = $num1 * $num2;
    } else if ($operator == "/") {
        $result = $num1 / $num2;
    }
