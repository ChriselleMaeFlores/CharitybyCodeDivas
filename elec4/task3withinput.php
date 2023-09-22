<!DOCTYPE html>
<html>
<head>
    <title>Geometry and Quadratic Equation Calculator</title>
</head>
<body>
    <h1>Geometry and Quadratic Equation Calculator</h1>
    
    <h2>Calculate Area of a Triangle</h2>
    <form method="POST">
        <label for="base">Enter Base (in units):</label>
        <input type="number" name="base" id="base" required>
        
        <label for="height">Enter Height (in units):</label>
        <input type="number" name="height" id="height" required>
        
        <input type="submit" name="triangle_submit" value="Calculate Triangle Area">
        <input type="reset" value="Clear"> <!-- Clear button for input fields -->
    </form>

    <?php
    if (isset($_POST["triangle_submit"])) {
        $base = $_POST["base"];
        $height = $_POST["height"];
        $triangle_area = 0.5 * $base * $height;
        echo "Area of the Triangle: {$triangle_area} square units<br>";
    }
    ?>

    <h2>Calculate Area of a Square</h2>
    <form method="POST">
        <label for="side">Enter Side Length (in units):</label>
        <input type="number" name="side" id="side" required>
        
        <input type="submit" name="square_submit" value="Calculate Square Area">
        <input type="reset" value="Clear"> <!-- Clear button for input fields -->
    </form>

    <?php
    if (isset($_POST["square_submit"])) {
        $side = $_POST["side"];
        $square_area = $side * $side;
        echo "Area of the Square: {$square_area} square units<br>";
    }
    ?>

    <h2>Solve Quadratic Equation</h2>
    <form method="POST">
        <label for="a">Enter coefficient 'a':</label>
        <input type="number" name="a" id="a" required>
        
        <label for="b">Enter coefficient 'b':</label>
        <input type="number" name="b" id="b" required>
        
        <label for="c">Enter coefficient 'c':</label>
        <input type="number" name="c" id="c" required>
        
        <input type="submit" name="quadratic_submit" value="Solve Quadratic Equation">
        <input type="reset" value="Clear"> <!-- Clear button for input fields -->
    </form>

    <?php
    if (isset($_POST["quadratic_submit"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $discriminant = $b * $b - 4 * $a * $c;

        if ($discriminant > 0) {
            $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
            echo "Root 1: {$root1}<br>";
            echo "Root 2: {$root2}<br>";
        } elseif ($discriminant == 0) {
            $root1 = $root2 = -$b / (2 * $a);
            echo "Root 1 and Root 2 (double root): {$root1}<br>";
        } else {
            // The discriminant is negative, indicating complex roots
            $realPart = -$b / (2 * $a);
            $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
            echo "Root 1: {$realPart} + {$imaginaryPart}i<br>";
            echo "Root 2: {$realPart} - {$imaginaryPart}i<br>";
        }
    }
    ?>
</body>
</html>
