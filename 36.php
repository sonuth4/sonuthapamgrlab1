<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $income = $_POST['income'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $tax = 0;

    // Married Tax Calculation
    if ($status == "married") {
        if ($income <= 450000) {
            $tax = 0.01 * $income;
        } elseif ($income <= 550000) {
            $tax = 0.01 * 450000 + 0.10 * ($income - 450000);
        } elseif ($income <= 750000) {
            $tax = 0.01 * 450000 + 0.10 * 100000 + 0.20 * ($income - 550000);
        } elseif ($income <= 1300000) {
            $tax = 0.01 * 450000 + 0.10 * 100000 + 0.20 * 200000 + 0.30 * ($income - 750000);
        } else {
            $tax = 0.01 * 450000 + 0.10 * 100000 + 0.20 * 200000 + 0.30 * 550000 + 0.35 * ($income - 1300000);
        }
    }

    // Unmarried Tax Calculation
    elseif ($status == "unmarried") {
        if ($income <= 400000) {
            $tax = 0.01 * $income;
        } elseif ($income <= 500000) {
            $tax = 0.01 * 400000 + 0.10 * ($income - 400000);
        } elseif ($income <= 750000) {
            $tax = 0.01 * 400000 + 0.10 * 100000 + 0.20 * ($income - 500000);
        } elseif ($income <= 1300000) {
            $tax = 0.01 * 400000 + 0.10 * 100000 + 0.20 * 250000 + 0.30 * ($income - 750000);
        } else {
            $tax = 0.01 * 400000 + 0.10 * 100000 + 0.20 * 250000 + 0.30 * 550000 + 0.35 * ($income - 1300000);
        }
    }

    // Apply Female Tax Discount
    if ($gender == "female") {
        $tax -= $tax * 0.10;
    }

    // Display Tax
    echo "<h3>Your Tax Calculation</h3>";
    echo "Total Tax: " . number_format($tax, 2);
}
?>

<h2>Tax Calculation Form</h2>
<form method="POST">
    Annual Income: <input type="number" name="income" required><br>
    Marital Status: 
    <select name="status">
        <option value="married">Married</option>
        <option value="unmarried">Unmarried</option>
    </select><br>
    Gender: 
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>
    <button type="submit">Calculate Tax</button>
</form>