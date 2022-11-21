<?php 
require_once "dbcon.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/display.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <div class="contaioner">
        <div class="scene">
            <div class="dock">
                <table class="sq-dis">
                    <thead>
                        <tr>
                            <th>Name: </th>
                            <th>Email: </th>
                            <th>Location: </th>
                            <th>Contact: </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM $table_name";
                    if ($dbcon->query($query)) {
                        $result = $dbcon->query($query);
                        while ($row = $result->fetch_assoc()) {
                            $f1 = $row["uname"];
                            $f2 = $row["uemail"];
                            $f3 = $row["ulocation"];
                            $f4 = $row["ucontact"];
                            echo "<tr>\n";
                            echo "<td>$f1</td>\n<td>$f2</td>\n<td>$f3</td>\n<td>$f4</td>\n";
                            echo "</tr>\n";
                            if(!$result->fetch_assoc()) {
                                break;
                            }
                        }
                        $result->free();
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>