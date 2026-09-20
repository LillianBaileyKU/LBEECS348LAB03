<html>
<head>
    <title>PHP Multiplication Page</title>

    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <h1>PHP Multiplication Table</h1>

    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="number" min="1" required>

        <input type="submit" value="Create Table">
    </form>
    <br>

    <?php

    if (isset($_POST["number"])) {
        $number = $_POST["number"];

        echo "<table>";

        echo "<tr>";
        echo "<th>Row / Column</th>";

        for ($column = 1; $column <= $number; $column++) {
            echo "<th>$column</th>";
        }

        echo "</tr>";

        for ($row = 1; $row <= $number; $row++) {

            echo "<tr>";

            echo "<th>$row</th>";

            for ($column = 1; $column <= $number; $column++) {

                $result = $row * $column;

                echo "<td>$result</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    }

    ?>

    <br>

    <a href="index.html">Back to index</a>
</body>

</html>
        