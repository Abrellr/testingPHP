<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to your homepage</h1>
    <h1>Hello <?= $_GET['name'] ?? NULL ?></h1>
    <a href="register.php"><button>Log Out</button></a>
</body>

</html>