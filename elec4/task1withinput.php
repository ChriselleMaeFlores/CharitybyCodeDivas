<!DOCTYPE html>
<html>
<head>
    <title>Temperature Conversion</title>
</head>
<body>
    <h1>Temperature Conversion</h1>
    
    <form method="POST">
        <label for="temperature">Enter Temperature:</label>
        <input type="text" name="temperature" id="temperature" required>
        
        <label for="conversion_type">Select Conversion:</label>
        <select name="conversion_type" id="conversion_type">
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
        </select>
        
        <input type="submit" value="Convert">
        <input type="button" value="Clear" onclick="clearForm()">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion_type = $_POST["conversion_type"];
        
        if ($conversion_type === "fahrenheit_to_celsius") {
            $celsius = ($temperature - 32) * 5/9;
            echo "{$temperature} degree Fahrenheit is {$celsius} degrees Celsius.";
        } elseif ($conversion_type === "celsius_to_fahrenheit") {
            $fahrenheit = ($temperature * 9/5) + 32;
            echo "{$temperature} degree Celsius is {$fahrenheit} degrees Fahrenheit.";
        }
    }
    ?>
    
    <script>
        function clearForm() {
            document.getElementById("temperature").value = "";
            document.getElementById("conversion_type").selectedIndex = 0;
        }
    </script>
</body>
</html>
