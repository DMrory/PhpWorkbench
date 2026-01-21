<?php
// 1. Initial Logic: Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_students'])) {
    $num_students = (int)$_POST['num_students'];
    $students = [];

    // 2. Loop through each student to process marks [cite: 6, 31]
    for ($i = 0; $i < $num_students; $i++) {
        $name = $_POST['name'][$i];
        $math = (float)$_POST['math'][$i];
        $english = (float)$_POST['english'][$i];
        $science = (float)$_POST['science'][$i];

        // 3. Perform Calculations [cite: 9, 11, 12]
        $total = $math + $english + $science;
        $average = $total / 3;

        // 4. Determine Grade using If... Else [cite: 13, 14, 32]
        if ($average >= 80) {
            $grade = "A";
        } elseif ($average >= 70) {
            $grade = "B";
        } elseif ($average >= 60) {
            $grade = "C";
        } elseif ($average >= 50) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        // 5. Store in Array [cite: 29]
        $students[] = [
            'name' => $name,
            'math' => $math,
            'english' => $english,
            'science' => $science,
            'total' => $total,
            'average' => round($average, 2),
            'grade' => $grade
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Report</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <form method="GET">
        <label>Enter Number of Students:</label>
        <input type="number" name="count" required>
        <button type="submit">Set Students</button>
    </form>

    <?php if (isset($_GET['count'])): ?>
    <form method="POST">
        <input type="hidden" name="num_students" value="<?php echo $_GET['count']; ?>">
        <?php for ($i = 0; $i < $_GET['count']; $i++): ?>
            <h3>Student <?php echo $i+1; ?></h3>
            Name: <input type="text" name="name[]" required>
            Math: <input type="number" name="math[]" required>
            English: <input type="number" name="english[]" required>
            Science: <input type="number" name="science[]" required>
            <br>
        <?php endfor; ?>
        <br><button type="submit">Calculate Grades</button>
    </form>
    <?php endif; ?>

    <?php if (!empty($students)): ?>
    <h2>Result Table</h2>
    <table>
        <tr>
            <th>Name</th> <th>Math</th> <th>English</th> <th>Science</th> <th>Total</th> <th>Average</th> <th>Grade</th> </tr>
        <?php foreach ($students as $s): ?>
        <tr>
            <td><?php echo $s['name']; ?></td>
            <td><?php echo $s['math']; ?></td>
            <td><?php echo $s['english']; ?></td>
            <td><?php echo $s['science']; ?></td>
            <td><?php echo $s['total']; ?></td>
            <td><?php echo $s['average']; ?></td>
            <td><?php echo $s['grade']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

</body>
</html>