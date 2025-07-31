<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Mark Calculator</title>
    <style>
        body {
            background: linear-gradient(180deg,rgb(15, 16, 16),rgb(21, 21, 93));
            
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color:lightblue;
            padding: 30px 40px;
            border-radius: 130px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="number"] {
            width: 50%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
            outline: none;
            font-size: 16px;
        }
        input[type="number"]:hover {
             background-color:lightgray;
             border-color:orange;
        }

        input[type="submit"] {
            background-color:rgb(146, 213, 79);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color:orange;
            box-shadow:10px solid black;
        
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            background-color: #f2f2f2;
            padding: 15px;
            border-radius: 300px;
        }

        strong {
            color:rgba(4, 96, 7, 0.96);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Enter Your Marks</h2>

    <form action="" method="post">
        <input type="number" name="subject1" placeholder="Subject 1" required><br>
        <input type="number" name="subject2" placeholder="Subject 2" required><br>
        <input type="number" name="subject3" placeholder="Subject 3" required><br>
        <input type="number" name="subject4" placeholder="Subject 4" required><br>
        <input type="number" name="subject5" placeholder="Subject 5" required><br>
        <input type="submit" value="calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s1 = $_POST['subject1'];
        $s2 = $_POST['subject2'];
        $s3 = $_POST['subject3'];
        $s4 = $_POST['subject4'];
        $s5 = $_POST['subject5'];

        $total = $s1 + $s2 + $s3 + $s4 + $s5;
        $maxmark = 500;
        $percentage = ($total / $maxmark) * 100;

     if ($percentage >= 90) {
     $grade = "A+";
   } 
    elseif ($percentage >= 80) {
        $grade = "A";
    }
     elseif ($percentage >= 70) {
        $grade = "B+";
    }
     elseif ($percentage >= 60) {
        $grade = "B";
    }
     elseif ($percentage >= 50) {
        $grade = "C";
    }
     else {
        $grade = "Fail";
    }

        echo "<div class='result'>";
        echo "<h3>Your Result:</h3>";
        echo "Total Marks: <strong>$total / $maxmark</strong><br>";
        echo "Percentage: <strong>" . round($percentage, 2) . "%</strong>";
         echo "<br>  Grade: <strong>$grade</strong>";
        echo "</div>";
        
    }


    ?>
</div>

</body>
</html>
