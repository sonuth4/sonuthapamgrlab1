<!DOCTYPE html>
<html>
<head>
    <title>Football Team Points Calculator</title>
</head>
<body>
    <h1>Calculate Football Team Points</h1>
    <!-- Input Form -->
    <form method="POST" action="">
        <label for="wins">Number of Wins:</label>
        <input type="number" id="wins" name="wins" min="0" required><br><br>

        <label for="draws">Number of Draws:</label>
        <input type="number" id="draws" name="draws" min="0" required><br><br>

        <label for="losses">Number of Losses:</label>
        <input type="number" id="losses" name="losses" min="0" required><br><br>

        <input type="submit" name="calculate" value="Calculate Points">
    </form>

    <?php
    
    if (isset($_POST['calculate'])) {
        $wins = (int)$_POST['wins'];
        $draws = (int)$_POST['draws'];
        $losses = (int)$_POST['losses'];

        function calculatePoints($wins, $draws, $losses) {
            return ($wins * 3) + ($draws * 1) + ($losses * 0);
        }

        $totalPoints = calculatePoints($wins, $draws, $losses);

        echo "<h2>Total Points: $totalPoints</h2>";
    }
    ?>
</body>
</html>