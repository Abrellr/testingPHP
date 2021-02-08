<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Calculator PHP</title>
</head>

<body>
    <div class="container fluid">
        <form method="GET" action="calculator.php">
            <p>ANGKA 1</p>
            <input type="text" name="numOne">
            </input>
            <p>ANGKA 2</p>
            <input type="text" name="numTwo">
            </input>
            <br />
            <div class="form-group">
                <label for="sel1">Operasi:</label>
                <select name="operator" class="form-control" id="sel1">
                    <option name="operator" value="add">+</option>
                    <option name="operator" value="substract">-</option>
                    <option name="operator" value="divide">:</option>
                    <option name="operator" value="multipy">x</option>
                </select>
        </form>
        <p>HASIL:
            <?php
            if (isset($_GET['submit']) && ($_GET['numOne'] != '') || ($_GET['numTwo'] != '')) {
            }
            if (is_numeric($_GET['numOne']) && is_numeric($_GET['numTwo'])) {
                compute();
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
            }
            ?>
        </p>
        <button type="submit" class="btn btn-primary">HITUNG</button>
        <button href="calculator.php" class="btn btn-primary">RESET</button>

    </div>
    <!-- Bootstrap script !-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>