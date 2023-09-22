

<!DOCTYPE html>
<html>
<head>
    <title>Back Office - Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
</head>
<body>

    <div class="flex flex-row bg-gray-300 gap-5 p-10 w-full shadow">
            <div class="container bg-white p-8 w-6/12 rounded-2xl">

                    <?php if(isset($_GET['error'])){ ?>
                        <div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-100  dark:border-green-800" role="alert">
                        <?php echo $_GET['error']; ?>
                        </div>
                    <?php } ?>

                    <h1 class="text-2xl text-center mb-6">Back Office - Create Post</h1>
                    <form class="max-w-md mx-auto" action="submit_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="title" class="block text-gray-700 font-bold mb-1">Event Title:</label>
                            <input type="text" name="title" id="title" class="h-[25px] text-[12px] w-full px-3 py-2 border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-2">
                            <label for="date" class="block text-gray-700 font-bold mb-1">Date:</label>
                            <input type="date" name="date" id="date" class="h-[25px] text-[12px] w-full px-3 py-2 border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-2">
                            <label for="time" class="block text-gray-700 font-bold mb-1">Time:</label>
                            <input type="time" name="time" id="time" class="h-[25px] text-[12px] w-full px-3 py-2 border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-2">
                            <label for="location" class="block text-gray-700 font-bold mb-2  ">Location:</label>
                            <div class="flex relative">
                                <input type="text" id="location" name="location" onclick="openGoogleMaps()" placeholder="Location" class="h-[25px] text-[12px] z-0 w-full px-3 py-2 border border-gray-300 rounded-md" required>
                                <i class="fas fa-map-marker-alt input-icon absolute inset-x-[93.5%] top-[30.9%]"></i>
                            </div>
                        
                        </div>
                        <div class="mb-2">
                            <label for="content" class="block text-gray-700 font-bold mb-1 ">Description:</label>
                            <textarea name="content" id="content" rows="2" class="w-full px-3 py-2 text-[12px] border border-gray-300 rounded-md" required></textarea>
                        </div>
                        <div class="mb-4 ">
                            <label for="image" class="text-gray-700 font-bold mb-1">Select an image:</label>
                            <input class="bg-white border-2 w-[28rem] border-emerald-500 " type="file" id="image" name="image" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">Create Post</button>
                        </div>
                        
                    </form>
            </div>


            <div class="w-6/12 bg-slate-100 shadow rounded-xl p-8">
                    <h1 class="text-2xl mb-6 text-center">Preview</h1>
                    <div class="bg-white rounded-lg shadow-xl w-[full] mx-20 mt-20 h-[24rem] ">
                        <div class="overflow-hidden w-full h-[15rem] mb-2 bg-slate-300 text-center justify-center items-center flex rounded-tl-lg rounded-tr-lg" >
                            <img class="w-full h-full" src="imgph (4).png" id="oimage" alt=""> 
                        </div>

                        <h2 class="text-xl font-bold mb-5 text-center" id="otitle">  </h2>
                        <p class="px-4 text-[15px] text-justify mb-7 truncate" id="ocontent"> </p>
                        <div class="flex flex-row w-full px-4 relative">
                                <div class="flex flex-row gap-1 w-7/12">
                                        <div class="text-[12px] font-bold mb-5" id="odate">
                                            
                                        </div>
                                        <div class="text-[12px] font-bold" id="otime"> 
                                            
                                        </div>
                                </div>   
                                <div id="olocation" class="px-4 text-[12px] font-bold absolute right-0 w-5/12 truncate">  </div>
                        </div>



                    </div>
            </div>
    </div>

            

    <script>
        function openGoogleMaps() {
            var locationInput = document.getElementById('location');
            var locationValue = locationInput.value;

            if (locationValue.trim() !== '') {
                var googleMapsUrl = 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(locationValue);
                window.open(googleMapsUrl, '_blank');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
        // Updated JavaScript code goes here
                const title = document.getElementById('title');
                const otitle = document.getElementById('otitle');

                const date = document.getElementById('date');
                const odate = document.getElementById('odate');

                const time = document.getElementById('time');
                const otime = document.getElementById('otime');

                const locationInput = document.getElementById('location');
                const olocation = document.getElementById('olocation');

                const content = document.getElementById('content');
                const ocontent = document.getElementById('ocontent');

                const image = document.getElementById('image');
                const oimage = document.getElementById('oimage');

                title.addEventListener('input', function() {
                otitle.textContent = title.value;
                });

                /*date.addEventListener('input', function() {
                    const selectedDate = new Date(date.value);
                    selectedDate.setFullYear(); // Set the date to June 08, 2023
                    const formattedDate = selectedDate.toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                    });
                    odate.textContent = formattedDate + " |"; // Add the "|" separator
                });*/



                date.addEventListener('input', function() {
                    const selectedDate = new Date(date.value);
                    const year = selectedDate.getFullYear();
                    const month = selectedDate.toLocaleString('en-US', { month: 'long' });
                    const day = selectedDate.getDate();
                    const formattedDate = `${month} ${day.toString().padStart(2, '0')}, ${year}`; // Format as Month DD, YYYY
                    odate.textContent = formattedDate + " |"; // Add the "|" separator
                });


                /*time.addEventListener('input', function() {
                    const selectedTime = time.value;
                    const formattedTime = selectedTime.replace(/:/, ' : ');
                    otime.textContent = formattedTime;
                });*/

                time.addEventListener('input', function() {
                    const selectedTime = time.value;
                    const splitTime = selectedTime.split(':');
                    let hours = parseInt(splitTime[0]);
                    const minutes = splitTime[1];
                    let meridiem = 'AM';

                    if (hours >= 12) {
                        meridiem = 'PM';
                        if (hours > 12) {
                            hours -= 12;
                        }
                    }

                    const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes} ${meridiem}`; // Format as HH:MM AM/PM
                    otime.textContent = formattedTime;
                });




                /*time.addEventListener('input', function() {
                    const selectedTime = time.value;
                    const formattedTime = selectedTime.replace(/:/g, ' : '); // Replace all occurrences of ":" with " : "
                    otime.textContent = formattedTime;
                });*/

                locationInput.addEventListener('input', function() {
                olocation.textContent = locationInput.value;
                });

                content.addEventListener('input', function() {
                ocontent.textContent = content.value;
                });

                image.addEventListener('change', function() {
                if (image.files && image.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                    oimage.setAttribute('src', e.target.result);
                    };

                    reader.readAsDataURL(image.files[0]);
                } else {
                    oimage.setAttribute('src', ''); // Set an empty source to hide the image
                }
                });

            
        });


    </script>


    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


</body>
</html>
