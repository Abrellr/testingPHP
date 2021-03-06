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
        <!--separating the function in another file-->
        <form method="GET" action="calc_process.php">
            <p>NUMBER 1</p>
            <input type="text" name="numOne" value="<?= $_GET['result'] ?? "" ?>">
            </input>
            <p>NUMBER 2</p>
            <input type="text" name="numTwo">
            </input>
            <br />
            <div class="form-group" style="width: 100px">
                <label for="sel1">Operator:</label>
                <select name="operator" class="form-control" id="sel1">
                    <option value="add">+</option>
                    <option value="substract">-</option>
                    <option value="divide">:</option>
                    <option value="multiply">x</option>
                </select>
        </form>
        <!-- Using ternary operation *from PHP 7 upwards* to render result and error -->
        <p>RESULT:
            <?php
            echo $_GET['result'] ?? NULL;
            ?>
        </p>
        <?php echo $_GET['error'] ?? NULL;
        ?>
        <button type="submit" class="btn btn-primary">COUNT</button>
    </div>
    <!-- reset function is set as <a> and not button. !-->
    <a type="reset" href="calculator.php" class="btn btn-primary">RESET</a>

    <!-- Bootstrap script !-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>