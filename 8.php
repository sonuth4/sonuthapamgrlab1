<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>
    <h2>Total Number of Animal Legs</h2>
    <form method="POST" action="">
        Number of Chickens: <input type="number" name="chickens" required><br><br>
        Number of Cows: <input type="number" name="cows" required><br><br>
        Number of Pigs: <input type="number" name="pigs" required><br><br>
        <input type="submit" value="Calculate Legs">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chickens = $_POST['chickens'];
        $cows = $_POST['cows'];
        $pigs = $_POST['pigs'];

        function calculateLegs($chickens, $cows, $pigs)
        {
            return ($chickens * 2) + ($cows * 4) + ($pigs * 4);
        }

        $totalLegs = calculateLegs($chickens, $cows, $pigs);

        echo "<h3>Total Number of Legs: $totalLegs</h3>";
    }
    ?>
</body>

</html>