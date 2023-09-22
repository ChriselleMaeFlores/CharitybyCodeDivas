<!DOCTYPE html>
<html>
<head>
    <title>LAB ACT 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /*background-color: #6cdcc8;
            margin: 0;
            padding: 0;*/
            display: flex; /* Use flexbox for layout */
            justify-content: center; /* Center the form horizontally */
            align-items: center; /* Center the form vertically */
            height: 100vh; /* Full viewport height */
            background-image: url('bg (2).png');
            background-size: 100% 100%;
            background-position: 0% 0%;
            background-repeat: no-repeat;
           
        }

        .container {
            max-width: 1240px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            margin-top: 0px;
        }

        .left {
            width: 430px; /* Fixed width for the left section */
            padding: 20px;
            padding-right: 40px;
            margin-top: 5px;
            margin-right: 10px;
        }

        .right {
            width: 430px; /* Fixed width for the right section */
            padding: 20px;
            background-color: #38445c;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            width: 100%;
            padding: 10px 0px 10px 0px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            width: 100%;
            padding: 10px 0px 10px 0px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 15px;
        }

        input[type="submit"]:hover, .clear:hover {
            background-color: #0056b3;
        }

        .instructions {
            padding: 0px 10px 0px 10px;
            background-color: #f5f5f5;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            text-align: justify;
            font-size: 12px;
        }
        .output{
            color: white;
        }

        .result {
            margin-top: 0px;
            height: 200px;
            padding: 0px 10px 0px 10px;
            background-color: #f5f5f5;
            border-radius: 4px;
            border: 1px solid #ccc;
            text-align: justify;
            overflow-y: auto;
        }
        p{
            font-size: 12px;
            
        }
        .back{
			color: #0056b3;
			text-decoration: none;
			background: none;
			border-bottom: solid 2px #0056b3 ;
			padding: 0px 2px 0px 2px;
			font-size: 12px;
			margin-top: 5px;
			margin-left: 140px;
            
		}
		.back:hover {
			font-size: 13px;
		}
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="" class="left">
            <label for="fullName">Enter your full name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="A">Enter your course A:</label>
            <input type="text" id="A" name="A" required>

            <label for="B">Enter your course B:</label>
            <input type="text" id="B" name="B" required>
            
            <label for="C">Enter the first string:</label>
            <input type="text" id="C" name="C" required>

            <label for="D">Enter the second string:</label>
            <input type="text" id="D" name="D" required>

            <label for="W">Enter the first number:</label>
            <input type="number" id="W" name="W" required>

            <label for="Z">Enter the second number:</label>
            <input type="number" id="Z" name="Z" required>

            <input type="submit" value="Submit">
            <a class="back" href="11splash.php">Back to HomePage</a>
        </form>

        <div class="right">
            
            <div class="instructions">
                <h2>Instructions:</h2>
                <p><b>1. </b>Count the total string length of your full name</p>
                <p><b>2. </b>Display the capital letter of the first word</p>
                <p><b>3. </b>Convert the string “$C” to lowercase and string “$D” to uppercase</p>
                <p><b>4. </b>Display the string “$A”, “$B”, “$C”, “$D”</p>
                <p><b>5. </b>Count the total string length of “$A”, “$B”, “$C”, “$D”</p>
                <p><b>6. </b>Display the string “$W”, “$Z”</p>
            </div>
            
            
              <div class="output"><h4 style="margin: 0px 0px 10px 0px">Output:</h4></div>
              <div class="result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve user input
                    $fullName = trim($_POST["fullName"]);
                    $A = trim($_POST["A"]);
                    $B = trim($_POST["B"]);
                    $C = trim($_POST["C"]);
                    $D = trim($_POST["D"]);
                    $W = trim($_POST["W"]);
                    $Z = trim($_POST["Z"]);

                    // Check if any of the form fields is empty
                    if (!empty($fullName) && !empty($A) && !empty($B) && !empty($C) && !empty($D) && !empty($W) && !empty($Z)) {
                        // Count the total string length of your full name
                        $totalLength = strlen($fullName);

                        // Display the capital letter of the first word
                        $firstLetter = strtoupper(substr($fullName, 0, 1));

                        // Convert the string "$C" to lowercase and string "$D" to uppercase
                        $C = strtolower($C);
                        $D = strtoupper($D);

                        // Count the total string length of "$A", "$B", "$C", "$D"
                        $totalLength2 = strlen($A) + strlen($B) + strlen($C) + strlen($D);

                       // Extract the first word from $A and $B and capitalize the first letter
                        $firstWordA = ucfirst(trim(strtok($A, " ")));
                        $firstWordB = ucfirst(trim(strtok($B, " ")));

                        // Concatenate the capitalized first words with the rest of the strings
                        $A = $firstWordA . substr($A, strlen($firstWordA));
                        $B = $firstWordB . substr($B, strlen($firstWordB));

                        
                        // Display the results
                        echo "<p> The Length of your Name is $totalLength </p>";
                        echo "<p> Course: $A $B </p>";
                        echo "<p> $C $D </p>";
                        echo "<p> $fullName is taking up $A $B </p>";
                        echo "<p> Total Number of String Length is $totalLength2 </p>";

                        // Compare $W and $Z and display the result
                        if ($W < $Z) {
                            echo "<p> $W is less than $Z</p><br>";
                        } elseif ($W > $Z) {
                            echo "<p> $W is greater than $Z</p><br>";
                        } else {
                            echo "<p> $W is equal to $Z</p><br>";
                        }
                    } else {
                        echo "Please fill out all the form fields.";
                    }
                }
                ?>
            </div>
            <button class="clear" type="button" onclick="clearResult()">Clear Output</button>
        </div>
    </div>

    <script>
        function clearResult() {
            // Clear the content of the .result div
            document.querySelector('.result').innerHTML = '';
        }
    </script>
</body>
</html>
