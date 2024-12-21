<?php

$students = [
    ['SN' => 1, 'name' => 'Rajesh', 'roll' => 25, 'web_tech' => 56, 'dbms' => 89, 'economics' => 57, 'dsa' => 64, 'account' => 98],
    ['SN' => 2, 'name' => 'Hari', 'roll' => 5, 'web_tech' => 56, 'dbms' => 89, 'economics' => 57, 'dsa' => 64, 'account' => 98],
    ['SN' => 3, 'name' => 'Shyam', 'roll' => 6, 'web_tech' => 54, 'dbms' => 79, 'economics' => 57, 'dsa' => 69, 'account' => 98],
    ['SN' => 4, 'name' => 'Rita', 'roll' => 10, 'web_tech' => 16, 'dbms' => 89, 'economics' => 56, 'dsa' => 64, 'account' => 98],
    ['SN' => 5, 'name' => 'Gita', 'roll' => 4, 'web_tech' => 56, 'dbms' => 89, 'economics' => 57, 'dsa' => 69, 'account' => 98],
    ['SN' => 6, 'name' => 'Sita', 'roll' => 24, 'web_tech' => 56, 'dbms' => 99, 'economics' => 57, 'dsa' => 24, 'account' => 98],
    ['SN' => 7, 'name' => 'Sita', 'roll' => 24, 'web_tech' => 56, 'dbms' => 99, 'economics' => 57, 'dsa' => 24, 'account' => 98],
    ['SN' => 8, 'name' => 'Sita', 'roll' => 24, 'web_tech' => 56, 'dbms' => 99, 'economics' => 57, 'dsa' => 24, 'account' => 98]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mark Sheet</title>
    <style>
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
        .pass {
            background-color: lightgreen;
        }
        .fail {
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Student Mark Sheet</h2>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Web Tech II</th>
                <th>DBMS</th>
                <th>Economics</th>
                <th>DSA</th>
                <th>Account</th>
                <th>Total</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <?php
                    
                    $total = $student['web_tech'] + $student['dbms'] + $student['economics'] + $student['dsa'] + $student['account'];
                    $result = ($student['web_tech'] >= 35 && $student['dbms'] >= 35 && $student['economics'] >= 35 && $student['dsa'] >= 35 && $student['account'] >= 35) ? 'pass' : 'fail';
                    $rowClass = ($result == 'pass') ? 'pass' : 'fail';
                ?>
                <tr class="<?php echo $rowClass; ?>">
                    <td><?php echo $student['SN']; ?></td>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo $student['roll']; ?></td>
                    <td><?php echo $student['web_tech']; ?></td>
                    <td><?php echo $student['dbms']; ?></td>
                    <td><?php echo $student['economics']; ?></td>
                    <td><?php echo $student['dsa']; ?></td>
                    <td><?php echo $student['account']; ?></td>
                    <td><?php echo $total; ?></td>
                    <td><?php echo $result; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>