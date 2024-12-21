<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $principal = $_POST['principal'];
    $rate = $_POST['rate'];
    $time = $_POST['time'];
    $interest = ($principal * $rate * $time) / 100;
}
?>

<form method="POST">
    Principal: <input type="number" name="principal"><br>
    Rate (%): <input type="number" name="rate"><br>
    Time (years): <input type="number" name="time"><br>
    <button type="submit">Calculate Interest</button>
</form>

<?php if (isset($interest)): ?>
    <p>Simple Interest: <?php echo $interest; ?></p>
<?php endif; ?>