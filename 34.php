<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $marks = [$_POST['subject1'], $_POST['subject2'], $_POST['subject3']];
    $total = array_sum($marks);
    $average = $total / count($marks);
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Subject 1: <input type="text" name="subject1"><br>
    Subject 2: <input type="text" name="subject2"><br>
    Subject 3: <input type="text" name="subject3"><br>
    <button type="submit">Generate Mark Sheet</button>
</form>

<?php if (isset($total)): ?>
    <h3>Mark Sheet</h3>
    <p>Name: <?php echo $name; ?></p>
    <p>Total: <?php echo $total; ?></p>
    <p>Average: <?php echo $average; ?></p>
<?php endif; ?>