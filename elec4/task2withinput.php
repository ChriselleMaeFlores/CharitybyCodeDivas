<!DOCTYPE html>
<html>
<head>
    <title>Bus Fare Calculator</title>
</head>
<body>
    <h1>Bus Fare Calculator</h1>
    
    <form method="POST">
        <label for="distance">Distance (in meters):</label>
        <input type="number" name="distance" id="distance" required>
        
        <label for="payment">Payment (in PHP):</label>
        <input type="number" name="payment" id="payment" required>
        
        <input type="submit" value="Calculate Fare">
        <input type="reset" value="Clear"> <!-- Clear button for input fields -->
    </form>
<div class="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distance_meters = $_POST["distance"];
        $payment = $_POST["payment"];
        
        // Convert the distance from meters to kilometers
        $distance_km = $distance_meters / 1000;
        
        // Calculate the cost of travel
        $base_rate = 10;  // PHP 10 for the first 1 km
        $additional_rate = 2;  // PHP 2 for every succeeding 2 km
        $additional_distance = max(0, $distance_km - 1);  // Exclude the first 1 km
        $additional_cost = ceil($additional_distance / 2) * $additional_rate;
        $total_cost = $base_rate + $additional_cost;
        
        // Calculate the change for the commuter
        $change = $payment - $total_cost;
        
        // Display the results
        echo "Total Distance Traveled: {$distance_km} km<br>";
        echo "Cost of Travel: PHP {$total_cost}<br>";
        echo "Change: PHP {$change}<br>";
    }
    ?>
    </div>
    <button type="button" onclick="clearResult()">Clear Output</button>

    <script>
        function clearResults() {
            document.getElementById("distance_km").value = "";
            document.getElementById("total_cost").value = "";
            document.getElementById("change").value = "";
          //  document.body.removeChild(document.querySelector("input[type='button']"));
        }
    </script>

<script>
        function clearResult() {
            // Clear the content of the .result div
            document.querySelector('.result').innerHTML = '';
        }
    </script>
</body>
</html>
