<?php
//the validation starts when one input is isset/born
if (isset($_GET['numOne'])) {
    //error handling: if any input form is empty, throw error
    if ($_GET['numOne'] == '' || $_GET['numTwo'] == '') {
        header("Location: calculator.php?error=Error! input is empty");
        //only calculate if both numbers are numeric and are submitted
    } else if (is_numeric($_GET['numOne']) && is_numeric($_GET['numTwo'])) {
        compute();
        //if not numeric, throw error
    } else {
        header("Location: calculator.php?error=Error! input is not a number");
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
