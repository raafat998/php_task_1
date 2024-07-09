
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    /* Global styles */
/* Global styles */
body {
    background-color: #f2f2f2;
    padding: 50px;
    font-family: Arial, sans-serif;
    background-color: rgba(0,0,0,0.8);

}

.container {
    margin-top: 20px;
}

.form-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
}

.btn-primary {
    width: 100%;
}

/* Custom grid styles */
.custom-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.custom-grid .form-container {
    width: 48%; /* Adjust as needed */
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .custom-grid .form-container {
        width: 100%; /* Full width on smaller screens */
    }
}

    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h1 class="mb-4">Check Leap Year</h1>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="yearInput">Enter a Year</label>
                            <input type="number" class="form-control" id="yearInput" name="yearInput" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
                        $year = $_POST['yearInput'];
                        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                            echo "This year is a leap year";
                        } else {
                            echo "This year is not a leap year";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check Season by Temperature</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="tempInput">Enter Temperature</label>
                        <input type="number" class="form-control" id="tempInput" name="tempInput" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tempInput'])) {
                    $temp = $_POST['tempInput'];
                    if ($temp < 20) {
                        echo "It is wintertime!";
                    } else {
                        echo "It is summertime!";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Calculate Sum or Triple Sum</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="firstInteger">Enter First Integer</label>
                        <input type="number" class="form-control" id="firstInteger" name="firstInteger" required>
                    </div>
                    <div class="form-group">
                        <label for="secondInteger">Enter Second Integer</label>
                        <input type="number" class="form-control" id="secondInteger" name="secondInteger" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstInteger']) && isset($_POST['secondInteger'])) {
                    $first = $_POST['firstInteger'];
                    $second = $_POST['secondInteger'];
                    $sum = $first + $second;
                    if ($first == $second) {
                        echo "The triple of their sum is: " . ($sum * 3);
                    } else {
                        echo "The sum is: " . $sum;
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check Sum Equals 30</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="firstInteger-s">Enter First Integer</label>
                        <input type="number" class="form-control" id="firstInteger-s" name="firstInteger-s" required>
                    </div>
                    <div class="form-group">
                        <label for="secondInteger-s">Enter Second Integer</label>
                        <input type="number" class="form-control" id="secondInteger-s" name="secondInteger-s" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstInteger-s']) && isset($_POST['secondInteger-s'])) {
                    $first = $_POST['firstInteger-s'];
                    $second = $_POST['secondInteger-s'];
                    $sum = $first + $second;
                    if ($sum == 30) {
                        echo " true Their sum is: " . $sum;
                    } else {
                        echo "false";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>

    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check Multiple of 3</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="numberInputQ5">Enter a Number</label>
                        <input type="number" class="form-control" id="numberInputQ5" name="numberInputQ5" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numberInputQ5'])) {
                    $number = $_POST['numberInputQ5'];
                    if ($number % 3 == 0) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>

    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check Number in Range [20-50]</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="numberInputQ6">Enter a Number</label>
                        <input type="number" class="form-control" id="numberInputQ6" name="numberInputQ6" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numberInputQ6'])) {
                    $number = $_POST['numberInputQ6'];
                    if ($number >= 20 && $number <= 50) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>

    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Find Largest Number</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="firstNumber">Enter First Number</label>
                        <input type="number" class="form-control" id="firstNumber" name="firstNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="secondNumber">Enter Second Number</label>
                        <input type="number" class="form-control" id="secondNumber" name="secondNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="thirdNumber">Enter Third Number</label>
                        <input type="number" class="form-control" id="thirdNumber" name="thirdNumber" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstNumber']) && isset($_POST['secondNumber']) && isset($_POST['thirdNumber'])) {
                    $first = $_POST['firstNumber'];
                    $second = $_POST['secondNumber'];
                    $third = $_POST['thirdNumber'];
                    $max = max($first, $second, $third);
                    echo "The largest number is: " . $max;
                }
                ?>
            </div>
        </div>
    </div>
    </div>


    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Calculate Electricity Bill</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="unitsInput">Enter Units Consumed</label>
                        <input type="number" class="form-control" id="unitsInput" name="unitsInput" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['unitsInput'])) {
                    $units = $_POST['unitsInput'];
                    $bill = 0;
                    if ($units <= 50) {
                        $bill = $units * 2.50;
                    } elseif ($units <= 150) {
                        $bill = (50 * 2.50) + (($units - 50) * 5.00);
                    } elseif ($units <= 250) {
                        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
                    } else {
                        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
                    }
                    echo "Your electricity bill is: " . $bill . " JOD";
                }
                ?>
            </div>
        </div>
    </div>
    </div>

    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Simple Calculator</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="firstNumber">Enter First Number</label>
                        <input type="number" class="form-control" id="firstNumberQ9" name="firstNumberQ9" required>
                    </div>
                    <div class="form-group">
                        <label for="secondNumber">Enter Second Number</label>
                        <input type="number" class="form-control" id="secondNumberQ9" name="secondNumberQ9" required>
                    </div>
                    <div class="form-group">
                        <label for="operation">Choose Operation</label>
                        <select class="form-control" id="operation" name="operation" required>
                            <option value="add">Addition</option>
                            <option value="subtract">Subtraction</option>
                            <option value="multiply">Multiplication</option>
                            <option value="divide">Division</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstNumberQ9']) && isset($_POST['secondNumberQ9']) && isset($_POST['operation'])) {
                    $first = $_POST['firstNumberQ9'];
                    $second = $_POST['secondNumberQ9'];
                    $operation = $_POST['operation'];
                    $result = 0;
                    switch ($operation) {
                        case 'add':
                            $result = $first + $second;
                            break;
                        case 'subtract':
                            $result = $first - $second;
                            break;
                        case 'multiply':
                            $result = $first * $second;
                            break;
                        case 'divide':
                            if ($second != 0) {
                                $result = $first / $second;
                            } else {
                                echo "Division by zero is not allowed.";
                                exit;
                            }
                            break;
                    }
                    echo "The result is: " . $result;
                }
                ?>
            </div>
        </div>
    </div>
</div>

    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check Voting Eligibility</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="unitsInput">Enter Age</label>
                        <input type="number" class="form-control" id="ageInput" name="ageInput" required>                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ageInput'])) {
                    $age = $_POST['ageInput'];
                    if ($age >= 18) {
                        echo "Eligible to vote";
                    } else {
                        echo "Not eligible to vote";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Check Number Sign</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="numberInputQ11">Enter a Number</label>
                        <input type="number" class="form-control" id="numberInputQ11" name="numberInputQ11" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numberInputQ11'])) {
                    $number = $_POST['numberInputQ11'];
                    if ($number > 0) {
                        echo "Positive";
                    } elseif ($number < 0) {
                        echo "Negative";
                    } else {
                        echo "Zero";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>

    <!-- --------------------------------------------------------------------------- -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="mb-4">Calculate Student Grade</h1>
                <form action="index-2.php" method="post">
                    <div class="form-group">
                        <label for="scoresInput">Enter Scores (comma-separated)</label>
                        <input type="text" class="form-control" id="scoresInput" name="scoresInput" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['scoresInput'])) {
                    $scores = explode(",", $_POST['scoresInput']);
                    $sum = 0;
                    foreach ($scores as $score) {
                        $sum += trim($score);
                    }
                    $average = $sum / count($scores);
                    if ($average >= 90) {
                        echo "A";
                    } elseif ($average >= 80) {
                        echo "B";
                    } elseif ($average >= 70) {
                        echo "C";
                    } elseif ($average >= 60) {
                        echo "D";
                    } else {
                        echo "F";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

   
    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php
# -------------------------------------------------------------------------------------------------------------------------------------------

#-------------------------------------------------------------------------------------------------------------------------------------------------

#-------------------------------------------------------------------------------------------------------------------------------------------------

#-------------------------------------------------------------------------------------------------------------------------------------------------

#-------------------------------------------------------------------------------------------------------------------------------------------------

#-------------------------------------------------------------------------------------------------------------------------------------------------

#-------------------------------------------------------------------------------------------------------------------------------------------------

#-------------------------------------------------------------------------------------------------------------------------------------------------


