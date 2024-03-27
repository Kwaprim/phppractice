<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Times Table</h2>
    <table>
        <thead>
            <tr>
                <th>Multiplier</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody id="timesTableBody">
        <?php

            $n = $_POST['number'];
            for ($i = 1; $i <= 15; $i++) {
                $result = $i * $n;
                echo "<tr><td>{$i} x {$n}</td><td>{$result}</td></tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
