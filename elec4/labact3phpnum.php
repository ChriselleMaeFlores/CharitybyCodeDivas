<!DOCTYPE html>
<html>
<head>
    <title>Temperature Conversion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="../output.css" rel="stylesheet">
   

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />


    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">

    <!-- Tailwind Elements styles -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />



      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&family=Sue+Ellen+Francisco&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Tailwind CSS config -->
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <!-- <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          fontFamily: {
            sans: ["Roboto", "sans-serif"],
            body: ["Roboto", "sans-serif"],
            mono: ["ui-monospace", "monospace"],
          },
        },
        corePlugins: {
          preflight: false,
        },
      };
    </script> -->
</head>
<body class=" rounded-lg bg-cover bg-no-repeat text-center"
  style="background-image: url('bgg.png'); height: auto;">


<div class="flex flex-row bg-none gap-5 p-10 w-full ">
    <div class="container w-6/12 rounded-2xl h-[32rem] overflow-auto">

            

<!-------------------- TASK 1 --------------------->                    
        <div class="shadow bg-white bg-opacity-60 rounded-lg px-5 pt-3 pb-5 ">


            <h1 class="block text-gray-700 font-bold mb-3 item text-center text-[20px]">Temperature Conversion</h1>

            <form class="max-w-md mx-auto " method="POST" name="temperature_conversion_form">
                <div class="flex flex-row gap-4 ">

                    <div class="flex flex-col">
                        <label class="block" for="temperature">Enter Temperature:</label>
                        <input class="h-[1.5rem] w-[13rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="text" name="temperature" id="temperature" required>
                    </div>
                    
                    <div class="flex flex-col">
                        <label class="block text-gray-700 mb-1" for="conversion_type">Select Conversion:</label>
                        <select name="conversion_type" id="conversion_type" class="h-[1.5rem] w-[14.2rem] text-[11px] px-2 border border-gray-300 rounded-md">
                            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
                            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                        </select>
                    </div>
                </div>


                <div class="flex flex-row gap-4 mt-5">
                    <input type="submit" name="temperature_conversion_submit" value="Convert" class="bg-teal-500 hover:bg-teal-700 text-white text-[14px] font-bold py-1 px-1 rounded w-[75%]">
                    <input type="button" value="Clear" onclick="clearForm('temperature_conversion_form')" class="bg-red-400 hover:bg-red-600 text-[14px] text-white font-bold py-1 px-1 rounded w-[25%]">
                </div>
            </form>

            

        </div>

        



    <!-------------------- TASK 2 --------------------->
        <div class="shadow bg-white bg-opacity-60  rounded-lg px-[5rem] pt-3 pb-5 mt-3">
            <h1 class="block text-gray-700 font-bold mb-3 item text-center text-[20px]">Bus Fare Calculator</h1>

            <form class="max-w-md mx-auto " method="POST" name="bus_fare_calculator_form">
                <div class="flex flex-row gap-4">

                    <div class="flex flex-col">
                        <label for="distance">Distance (in meters):</label>
                        <input class="h-[1.5rem] w-[13rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="number" name="distance" id="distance" required>
                    </div>
                    
                    <div class="flex flex-col">
                        <label for="payment">Payment (in PHP):</label>
                        <input class="h-[1.5rem] w-[13rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="number" name="payment" id="payment" required>
                    </div>

                </div>


                <div class="flex flex-row gap-4 mt-5">
                    <input class="bg-teal-500 hover:bg-teal-700 text-white text-[14px] font-bold py-1 px-1 rounded w-[75%]" type="submit" name="bus_fare_submit"  value="Calculate Fare">
                    <input class="bg-red-400 hover:bg-red-600 text-[14px] text-white font-bold py-1 px-1 rounded w-[25%]" type="reset" value="Clear" onclick="clearForm('bus_fare_calculator_form')"> <!-- Clear button for input fields -->

                </div>

         


            </form>

                
        </div>

       




        <div class="shadow bg-white bg-opacity-60  rounded-lg px-5 pt-3 pb-5 mt-3">

    <!-------------------- TASK 3 --------------------->
                <h1 class="block text-gray-700 font-bold mb-3 item text-center text-[20px]">Geometry and Quadratic Equation Calculator</h1>

                <h2 class="text-center text-blue-500 font-black text-[14px] mb-2 mt-4">* CALCULATE AREA OF A TRIANGLE *</h2>
                <form class="max-w-md mx-auto " method="POST">
                    <div class="flex flex-row gap-4 justify-center items-center">

                        <div class="flex flex-col">
                            <label for="base">Enter Base (in units):</label>
                            <input class="h-[1.5rem] w-[13rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="number" name="base" id="base" required>
                        </div>

                        <div class="flex flex-col">
                            <label for="height">Enter Height (in units):</label>
                            <input class="h-[1.5rem] w-[13rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="number" name="height" id="height" required>
                        </div>


                    </div>


                    <div class="flex flex-row gap-4 mt-5 mb-5">
                        <input class="bg-teal-500 hover:bg-teal-700 text-white text-[14px] font-bold py-1 px-1 rounded w-[75%]" type="submit" name="triangle_submit" value="Calculate Triangle Area">
                        <input class="bg-red-400 hover:bg-red-600 text-[14px] text-white font-bold py-1 px-1 rounded w-[25%]" type="reset" value="Clear"> <!-- Clear button for input fields -->
                    </div>


                </form>


















                <h2 class="text-center text-blue-500 font-black text-[14px] mt-11">* CALCLULATE AREA OF A SQUARE *</h2>
                <form class="max-w-md mx-auto " method="POST">
                    <div class="flex flex-row gap-4">

                        <div class="flex flex-col">
                            <label for="side">Enter Side Length (in units):</label>
                            <input class="h-[1.5rem] w-[29rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="number" name="side" id="side" required>
                        </div>
                    </div>

                    <div class="flex flex-row gap-4 mt-5 mb-5">
                            <input class="bg-teal-500 hover:bg-teal-700 text-white text-[14px] font-bold py-1 px-1 rounded w-[75%]" type="submit" name="square_submit" value="Calculate Square Area">
                            <input class="bg-red-400 hover:bg-red-600 text-[14px] text-white font-bold py-1 px-1 rounded w-[25%]" type="reset" value="Clear"> <!-- Clear button for input fields -->
                    </div>
                    
                </form>

           














                <h2 class="text-center text-blue-500 font-black text-[14px] mb-2 mt-9">* SOLVE QUADRATIC EQUATION *</h2>
                <form class="max-w-md mx-auto " method="POST">
                    <div class="flex flex-row gap-4">

                        <div class="flex flex-col">
                            <label for="a">Enter coefficient 'a':</label>
                            <input class="h-[1.5rem] w-[9rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="number" name="a" id="a" required>
                        </div>
                        <div class="flex flex-col">
                            <label for="b">Enter coefficient 'b':</label>
                            <input class="h-[1.5rem] w-[9rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="number" name="b" id="b" required>
                        </div>
                        <div class="flex flex-col">
                            <label for="c">Enter coefficient 'c':</label>
                            <input class="h-[1.5rem] w-[9rem] mt-1 text-[11px] px-2 border border-gray-300 rounded-md" type="number" name="c" id="c" required>
                        </div>
                    </div>

                    <div class="flex flex-row gap-4 mt-5 mb-2">
                        <input class="bg-teal-500 hover:bg-teal-700 text-white text-[14px] font-bold py-1 px-1 rounded w-[75%]" type="submit" name="quadratic_submit" value="Solve Quadratic Equation">
                        <input class="bg-red-400 hover:bg-red-600 text-[14px] text-white font-bold py-1 px-1 rounded w-[25%]" type="reset" value="Clear"> <!-- Clear button for input fields -->
                        
                    </div>
                </form>

 























        </div>

        </div> <!-- wag burahin -->

<!----------------------------  OUTPUT  ----------------------------------------------->
            <div class=" w-6/12 rounded-xl p-8  shadow bg-white bg-opacity-60 ">
                    <h1 class="text-[3rem] mb-1 text-center font-bold ">Output</h1>
                    <div class="bg-white rounded-lg w-[full] max-w-auto mx-10 mt-5 h-[14rem] text-center py-24 px-5  max-py-auto bg-opacity-80  ">

                        <div class="result ">
                            <?php
                            if ( isset($_POST["temperature_conversion_submit"])) {
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

                            else if (isset($_POST["bus_fare_submit"])) {
                                // Check if the "distance" and "payment" keys exist in the $_POST array
                                if (isset($_POST["distance"]) && isset($_POST["payment"])) {
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
                                } else {
                                    // Handle the case where "distance" or "payment" is not submitted
                                    echo "Please fill in both 'Distance' and 'Payment' fields.";
                                }
                            }

                            else if (isset($_POST["triangle_submit"])) {
                                $base = $_POST["base"];
                                $height = $_POST["height"];
                                $triangle_area = 0.5 * $base * $height;
                                echo "Area of the Triangle: {$triangle_area} square units<br>";
                            }


                            else if (isset($_POST["square_submit"])) {
                                $side = $_POST["side"];
                                $square_area = $side * $side;
                                echo "Area of the Square: {$square_area} square units<br>";
                            }
                            else if (isset($_POST["quadratic_submit"])) {
                        
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
                        </div>


                        <script>
                            function clearForm() {
                                document.getElementById("temperature").value = "";
                                document.getElementById("conversion_type").selectedIndex = 0;
                            }
                        </script>

                        
                        <script>
                            function clearResultall() {
                                document.getElementById("celsius").value = "";
                                document.getElementById("fahrenheit").value = "";
                                document.getElementById("distance_km").value = "";
                                document.getElementById("total_cost").value = "";
                                document.getElementById("change").value = "";
                                document.getElementById("celsius").value = "";
                                document.getElementById("fahrenheit").value = "";
                                document.getElementById("side").value = "";
                                document.getElementById("square_area").value = "";
                                document.getElementById("root1").value = "";
                                document.getElementById("root2 ").value = "";
                            //  document.body.removeChild(document.querySelector("input[type='button']"));
                            }
                        </script>
                        
                        <script>
                            function clearResultall() {
                                // Clear the content of the .result div
                                document.querySelector('.result').innerHTML = '';
                            }
                        </script>













                                    </div>

                                    <h2 class="text-xl font-bold mb-5 text-center" id="otitle">  </h2>
                                    
                                    <div class="flex flex-row w-full px-4 relative">
                                            <div class="flex flex-row gap-1 w-7/12">
                                                    <div class="text-[12px] font-bold mb-5" id="odate">
                                                        
                                                    </div>
                                                    <div class="text-[12px] font-bold" id="otime"> 
                                                        
                                                    </div>
                                            </div>   
                                       
                                    </div>
                                    <div class="flex flex-row items-center justify-center ">
                                        <div class="w-[10%] ">

                                        </div>
                                        <div class="w-[80%] flex flex-col">
                                            <button class="flex items-center justify-center  bg-sky-600 hover:bg-sky-800 text-[14px] text-white font-bold py-1 px-1 rounded w-[100%%] mt-[0.5rem]" type="button" onclick="clearResultall()">Clear Output</button>
                                            <a class="back text-cyan-900 underline hover:text-cyan-600 text-[14px] mt-2 hover:text-[16px]" href="11splash.php">Back to HomePage</a>
                                        </div>
                                        
                                        <div class="w-[10%]">

                                        </div>
                                    </div>
                                   

                                </div>

                                
           

</div>

















    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>
</html>
