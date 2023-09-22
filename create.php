
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Output Example</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="output.css" rel="stylesheet">
    <title>Document</title>

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

<body>
  <div class="flex">
    
        <div class="flex-1 p-4 border border-gray-300">
            <h2 class="text-lg font-bold mb-2">Input</h2>
            <input type="text" id="textInput" placeholder="Enter your text" class="w-full px-3 py-2 border border-gray-300 rounded-md">
            <button id="previewButton" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Preview</button>
        </div>

        <div class="flex-1 p-4 border border-gray-300">
            <h2 class="text-lg font-bold mb-2">Output</h2>
            <p id="outputText"></p>
        </div>
  </div>

  <script>
    const textInput = document.getElementById('textInput');
    const outputText = document.getElementById('outputText');
    const previewButton = document.getElementById('previewButton');

    textInput.addEventListener('input', function() {
      outputText.textContent = textInput.value;
    });

    previewButton.addEventListener('click', function() {
      alert(textInput.value);
    });
  </script>



    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>




</body>

</html>