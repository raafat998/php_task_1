
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
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h1 class="mb-4">To Upper Case</h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="userInput">Enter a String</label>
                            <input type="text" class="form-control" id="userInput" name="userInput" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['userInput'])) {
                        
                        $userInput = $_POST['userInput'];
                        
                        if (!empty($userInput) ||!empty($userInputLwoer)) {
                            echo " string to uppercase is  :" . htmlspecialchars( strtoupper($userInput));
                            echo"<br>";
                    
                    
                        } else {
                            echo "string is empty";
                            echo"<br>";
                    
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
                    <h1 class="mb-4">To Lower Case</h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="userInputLwoer">Enter a String</label>
                            <input type="text" class="form-control" id="userInputLwoer" name="userInputLwoer" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['userInputLwoer'])) {
                        $userInputLwoer = $_POST['userInputLwoer'];
                        if (!empty($userInputLwoer)) {
                            echo " string to uppercase is  :" . htmlspecialchars( strtolower($userInputLwoer));
                            echo"<br>";
                    
                    
                        } else {
                            echo "string is empty";
                            echo"<br>";
                    
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
                    <h1 class="mb-4"> Date formate</h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="date">Enter a String</label>
                            <input type="text" class="form-control" id="date" name="date" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['date'])) {
                        $date = $_POST['date'];
                        if (!empty( $date)) {
                        $timeFormat=substr($date,0,2).":".substr($date,4,2).":".substr($date,4,6);
                        echo " formatted time  =  " . htmlspecialchars( $timeFormat);
                        echo"<br>";
                    } else {
                        echo "string is empty";
                        echo"<br>";
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
                    <h1 class="mb-4"> find a word from sentence </h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="word">Enter a String</label>
                            <input type="text" class="form-control" id="word" name="word" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['word'])) {

                        $sentence="I am a full stack developer at orange academy";
                        $word = $_POST['word'];
                        if (stripos($sentence,$word)!== false) {
                    
                            echo " Word Found" ;
                            
                            echo"<br>";
                        } else {
                            echo "Word not Found";
                            echo"<br>";
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
                    <h1 class="mb-4"> find a file name from url </h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="url">Enter a String</label>
                            <input type="text" class="form-control" id="url" name="url" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" &&isset($_POST['url'])) {
                        $url = $_POST['url'];
                        $fileName=basename($url);
                        if (!empty($url)) {
                    
                            echo " File Name : ".$fileName ;
                            
                            echo"<br>";
                        } else {
                            echo "File not Found";
                            echo"<br>";
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
                    <h1 class="mb-4"> find a user name & last three characters </h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="userName">Enter a Email</label>
                            <input type="text" class="form-control" id="userName" name="userName" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['userName'])) {
                        $email = $_POST['userName'];
                        $userName=strstr($email,'@' ,true);
                        $last3chars=substr($email,-3);
                        if (!empty($email)) {
                    
                            echo " user Name : ". $userName ;       
                            echo"<br>";
                            echo " last three characters : ". $last3chars ;  
                            echo"<br>";
                        } else {
                            echo "File not Found";
                            echo"<br>";
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
                    <h1 class="mb-4"> replace a word from sentence </h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="text">Enter a String</label>
                            <input type="text" class="form-control" id="text" name="text-oo" required>
                        </div>

                        <div class="form-group">
                            <label for="word">Enter a word</label>
                            <input type="text" class="form-control" id="word" name="word-oo" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST" &&isset($_POST['text-oo'])&&isset($_POST['word-oo'])) {
                        $text = $_POST['text-oo'];
                        $word=$_POST['word-oo'];
                        if (!empty($text)) {

                        $words = explode(' ', $text, 2);
                        $words[0] = $word;
                        $newSentence = implode(' ', $words);

                        echo "Result: " . $newSentence . "\n";
                        }}

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
                    <h1 class="mb-4"> first difference between the two strings </h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="str1">Enter a first String</label>
                            <input type="text" class="form-control" id="str1" name="str1" required>
                        </div>

                        <div class="form-group">
                            <label for="str2">Enter a second sring</label>
                            <input type="text" class="form-control" id="str2" name="str2" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['str1'])&&isset($_POST['str2'])) {
                        $str1 = $_POST['str1'];
                        $str2 = $_POST['str2'];
                    
                        function ffdbs($str1, $str2){
                            $length = min(strlen($str1), strlen($str2));
                            if (!empty($str1) && !empty($str2)) {
                                $differences = "";
                                $foundDifference = false;
                                
                                for ($i = 0; $i < $length; $i++) {
                                    if ($str1[$i] != $str2[$i]) {
                                        $differences .= "The first difference between the two strings at position $i: \"{$str1[$i]}\" vs \"{$str2[$i]}\"<br>";
                                        $foundDifference = true;
                                    }
                                }
                    
                                if (!$foundDifference) {
                                    return "No difference between the two strings";
                                } else {
                                    return $differences;
                                }
                            } else {
                                return "One of the strings is empty";
                            }
                        }
                    
                        echo ffdbs($str1, $str2);
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
                    <h1 class="mb-4"> put a sting in array </h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="userInput">Enter a String</label>
                            <input type="text" class="form-control" id="userInput" name="userInput" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['userInput'])) {
                            $string = $_POST['userInput'];
                            $array = explode(" ", $string);
                            echo "<pre>";
                            var_dump($array);
                            echo "</pre>";
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
                    <h1 class="mb-4"> print the next letter </h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="letter">Enter a String</label>
                            <input type="text" class="form-control" id="letter" name="letter" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['letter'])) {
                        $char = $_POST["letter"];
                        if (ctype_alpha($char)/*بتشيك على الي ادخلناه اذا كان حرف او لا */ && strlen($char) == 1) {
                            function getNextLetter($char) {
                                $nextChar = chr((ord($char) + 1 - (ctype_upper($char) ? 65 : 97)) % 26 + (ctype_upper($char) ? 65 : 97));
                                return $nextChar;
                            }

                            $nextChar = getNextLetter($char);
                            echo "<p>The next letter after '$char' is '$nextChar'.</p>";
                        } else {
                            echo "<p>Please enter a valid single alphabetic character.</p>";
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
                    <h1 class="mb-4"> insert a word between two words</h1>
                    <form method="post">
        Original String: <input type="text" class="form-control" name="originalString"><br>
        Insert String: <input type="text" class="form-control" name="insertString"><br>
        Position String: <input type="text" class="form-control" name="positionString"><br>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['originalString'])&&isset($_POST['insertString'])&&isset($_POST['positionString']) ) {
        $originalString = $_POST['originalString'];
        $insertString = $_POST['insertString'];
        $positionString = $_POST['positionString'];

        $position = strpos($originalString, $positionString);

        if ($position !== false) {
            $newString = substr_replace($originalString, "$insertString ", $position, 0);
            echo "New String: " . $newString;
        } else {
            echo "The specified string was not found in the original string.";
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
                    <h1 class="mb-4"> remove all zero </h1>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="str1">Enter a String</label>
                            <input type="text" class="form-control" id="str1" name="str1" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" &&isset($_POST['str1'])) {
                    $str1 = $_POST['str1'];
                    $str1_no_zeros = str_replace('0', '', $str1);
                    echo 'The new number after removing 0: ' . $str1_no_zeros;
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
                <h1 class="mb-4">Text Manipulation Form</h1>
                <form method="post">
                    Original String: <input type="text" class="form-control" name="originalString-s"><br>
                    String to Delete: <input type="text" class="form-control" name="deleteString-s"><br>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['originalString-s'])&&isset($_POST['deleteString-s'])) {
                    $originalString = $_POST['originalString-s'];
                    $deleteString = $_POST['deleteString-s'];

                    $position = strpos($originalString, $deleteString);

                    if ($position !== false) {
                        $newString = substr_replace($originalString, '', $position, strlen($deleteString));
                        echo "New String: " . $newString;
                    } else {
                        echo "The specified string was not found in the original string.";
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
                <h1 class="mb-4">delte - from string</h1>
                <form method="post">
                    Original String: <input type="text" class="form-control" name="originalString-ss"><br>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['originalString-ss'])) {
                    $originalString = $_POST['originalString-ss'];
                    $cleaned_String = rtrim($originalString,'-');
                    
                        echo "New String: " . $cleaned_String;
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
                <h1 class="mb-4">Delete Symbols from String</h1>
                <form method="post">
                    Original String: <input type="text" class="form-control" name="originalString-sss"><br>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['originalString-sss'])) {
                    $originalString = $_POST['originalString-sss'];
                    // حذف جميع الرموز والحفاظ على الأرقام فقط
                    $cleaned_string = preg_replace('/\D/', '', $originalString);
                    echo "New String: " . $cleaned_string;
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
                <h1 class="mb-4">Delete Symbols from String</h1>
                <form method="post">
                    Original String: <input type="text" class="form-control" name="originalString-sssr"><br>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['originalString-sssr'])) {
                    $sample_output= $_POST['originalString-sssr'];
                    $words = explode(' ', $sample_output);
                    $first_five_words = array_slice($words, 0, 5);
                    echo implode(' ', $first_five_words);
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
                <h1 class="mb-4">Delete , from String</h1>
                <form method="post">
                    Original String: <input type="text" class="form-control" name="strupdate"><br>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>

                <?php
                 if ($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST['strupdate'])) {
                    $str1 = $_POST['strupdate'];
                    $str1_update = str_replace(',', '', $str1);
                    echo 'The new number after removing (,) = ' . $str1_update;
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
        <?php
                for ($i = 97; $i <= 122; $i++) {
                    $char = chr($i);
                    if ($char == 'z') {
                        echo $char;
                    } else {
                        echo $char . " ";
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

