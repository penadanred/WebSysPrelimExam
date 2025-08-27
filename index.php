<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; text-align: center; }
        .calculator { border: 2px solid #ccc; padding: 20px; width: 300px; margin: auto; }
        input, button { margin: 5px; padding: 5px; width: 90%; }
        .result { font-weight: bold; color: #333; margin-top: 15px;}
    </style>
</head>
<body>
    <h1>GradeCalculator</h1>
   
    <!-- dito ko  ininput ng mga number o scores  sa quiz, assignment, exam -->
    <div class="calculator">
        <form method="POST">
            <input type="number" name="Quiz" placeholder="Quiz Score" required>
            <input type="number" name="Assignment" placeholder="Assignment Score" required>
            <input type="number" name="Exam" placeholder="Exam Score" required>
            <button type="submit">Calculate</button>
        </form>
        
        <?php
if ($_POST) {
    // ito dito mapupunta yung mga ininput ko sa quiz,assignment,exam
    $Quiz  = $_POST['Quiz'];
    $Assignment = $_POST['Assignment'];
    $Exam = $_POST['Exam'];

    $result = ($Quiz * 0.30) + ($Assignment * 0.30) + ($Exam * 0.40);
    // dito mo makikita kung anong average or grades ang nakuha mo
    if ($result >= 90) {
        $letterGrade = "A";
    } elseif ($result >= 80) {
        $letterGrade = "B";
    } elseif ($result >= 70) {
        $letterGrade = "C";
    } elseif ($result >= 60) {
        $letterGrade = "D";
    } else {
        $letterGrade = "F";
    }
    // ito dito mo malalaman ang average mo at kung anong letter grade mo
    echo "<div class='result'>Final Grade: " . number_format($result, 1) . "<br>Letter Grade: $letterGrade</div>";
}
?>

    </div>
</body>
</html>