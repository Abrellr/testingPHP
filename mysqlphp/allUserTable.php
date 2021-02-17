<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        <?php
        include('database/connection.php');

        //get all users
        $result = mysqli_query($link, "select * from users");

        //loop through all datas with while cos it's a nesting array. Basically mysqli_fetch assoc is looped with while
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[email]</td>
    <tr>";
        }
        ?>
    </table>
</body>

</html>