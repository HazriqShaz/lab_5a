<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function multiplication($multiplier): array {
        $results = [];
        for($i = 0; $i <= 12; $i++) {
            $results[] = $multiplied = ($i) * $multiplier;
        }

        return $results;
    }
    ?>
    <?php
    $multiplier = 2;
    $results = [];
        $results = multiplication($multiplier);
    ?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
            for($i = 1; $i <=12; $i++) {
                echo "<tr>";
                    echo "<td>";
                        echo $i;
                    echo "</td>";
                    echo "<td>";
                        echo $multiplier;
                    echo "</td>";
                    echo "<td>";
                        echo $results[$i];
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

