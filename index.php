<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .calculator { border: 2px solid #ccc; padding: 20px; width: 300px; }
        input, select, button { margin: 5px; padding: 5px; }
        .result { font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <h1>Grade Calculator</h1>
    
    <div class="calculator">
        <form method="POST">
            <input type="number" name="Quiz" placeholder="Quiz Score" required>
            <input type="number" name="Assigment" placeholder="Assignment Score" required>
            <input type="number" name="Exam" placeholder="Exam Score" required>
            <button type="submit">Calculate</button>
            
        </form>
        
        <?php
            if ($_POST) {
                $Quiz  = $_POST['Quiz'];
                $Assignment = $_POST['Assignment'];
                $Exam = $_POST['Exam'];

                $result = ($num1 * 0.30) + ( $num2 * 0.30) + ($num3 * 0.40);
                 if ($Average >= 90) {
                    $letterGrade = "A";
                } elseif ($Average >= 80) {
                    $letterGrade = "B";
                } elseif ($Average >= 70) {
                    $letterGrade = "C";
                } elseif ($Average >= 60) {
                    $letterGrade = "D";
                } else {
                    $letterGrade = "F";
                   
                }
                

                echo "<p class='result'>Final Grade: " . round($result, 2) . " (Letter Grade: $letter)</p>";
        ?>
    </div>
</body>
</html>