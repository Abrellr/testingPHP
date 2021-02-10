<?php

if (isset($_GET['numOne'])) {
    if ($_GET['numOne'] == '' || $_GET['numTwo'] == '') {
        header("Location: calculator.php?error=Error! input is empty");
    } else if (is_numeric($_GET['numOne']) && is_numeric($_GET['numTwo'])) {
        $submited = true;
        compute();
    } else {
        header("Location: calculator.php?error=Error! input is not a number");;
    }
}

function compute()
{
    $a = ($_GET['numOne']);
    $b = ($_GET['numTwo']);
    $mathOp = ($_GET['operator']);
    switch ($mathOp) {
        case "add";
            $res = $a + $b;
            echo $res;
            break;
        case "substract";
            $res = $a - $b;
            echo $res;
            break;
        case "divide";
            $res = $a / $b;
            echo $res;
            break;
        case "multiply";
            $res = $a * $b;
            echo  $res;
            break;
    }
    header("Location: calculator.php?result=$res");
}
