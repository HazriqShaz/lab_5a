<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21,
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20,
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22,
        ]
    ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
            foreach($students as $student) {
                echo "<tr>";
                    echo "<td>";
                        echo $student['name'];
                    echo "</td>";
                    echo "<td>";
                        echo $student['program'];
                    echo "</td>";
                    echo "<td>";
                        echo $student['age'];
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>



