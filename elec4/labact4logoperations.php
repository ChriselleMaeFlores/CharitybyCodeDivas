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

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-md max-w-md">
        <h1 class="text-2xl mb-4">PHP Program</h1>
        <form method="POST">
            <div class="mb-4">
                <label class="block text-gray-700">Select Problem:</label>
                <select name="problem" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                    <option value="1">Problem 1: Odd or Even</option>
                    <option value="2">Problem 2: Zodiac Sign</option>
                    <option value="3">Problem 3: LED Status</option>
                    <option value="4">Problem 4: Student Status</option>
                    <option value="5">Problem 5: Compare Student Grades</option>
                </select>
            </div>

            <!-- Input fields for various problems -->
            <!-- Add more input fields as needed for each problem -->
            <div id="problem1" class="mb-4" style="display: none;">
                <label class="block text-gray-700">Enter a number:</label>
                <input type="text" name="number" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
            </div>
            <div id="problem2" class="mb-4" style="display: none;">
                <label class="block text-gray-700">Enter birth month:</label>
                <input type="text" name="month" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter birth day:</label>
                <input type="text" name="day" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
            </div>
            <div id="problem3" class="mb-4" style="display: none;">
                <label class="block text-gray-700">Enter SW1 voltage (5V if pressed):</label>
                <input type="text" name="sw1" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter SW2 voltage (5V if pressed):</label>
                <input type="text" name="sw2" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
            </div>
            <div id="problem4" class="mb-4" style="display: none;">
                <label class="block text-gray-700">Enter Prelim Grade:</label>
                <input type="text" name="prelim" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter Midterm Grade:</label>
                <input type="text" name="midterm" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter Final Grade:</label>
                <input type="text" name="final" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter Passing Rate:</label>
                <input type="text" name="passingRate" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
            </div>
            <div id="problem5" class="mb-4" style="display: none;">
                <label class="block text-gray-700">Enter Prelim Grade for Student A:</label>
                <input type="text" name="prelimA" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter Midterm Grade for Student A:</label>
                <input type="text" name="midtermA" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter Final Grade for Student A:</label>
                <input type="text" name="finalA" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter Prelim Grade for Student B:</label>
                <input type="text" name="prelimB" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter Midterm Grade for Student B:</label>
                <input type="text" name="midtermB" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
                <label class="block text-gray-700">Enter Final Grade for Student B:</label>
                <input type="text" name="finalB" class="bg-white border border-gray-300 rounded px-4 py-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
        </form>
    </div>


    <script>
    document.getElementById('php-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Retrieve the selected problem
        const selectedProblem = document.querySelector('select[name="problem"]').value;

        // You can add your logic to handle each problem here
        // For testing purposes, let's display an alert message with the selected problem
        alert('Selected Problem: ' + selectedProblem);

        // You can send data to a PHP script for processing using fetch() or other methods.
    });
</script>

    

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>
</html>
