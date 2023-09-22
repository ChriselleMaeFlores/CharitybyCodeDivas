<?php 
session_start();

include "db_conn.php";

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />


    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
    <div class="sticky top-0 flex flex-row col-span-3 h-[1.3rem] bg-middleblue z-30 ">
          

        <div class="flex flex-row w-32 h-[1.3rem] items-center lg:absolute lg:inset-y-0 lg:left-[90px]
        sm:absolute sm:inset-y-0 sm:left-[60px]">
            <a class="flex flex-row items-center" href="tel:+63 926-091-7222">
                <svg class="fill-japaneseindigo w-2 h-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by 
                    @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) 
                    Copyright 2023 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 
                    311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 
                    11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                </svg>
                <span class="text-japaneseindigo font-[700] ms-1 text-[8px] underline underline-offset-1 hover:text-white">
                    +63 926 091 7222
                </span>
            </a>
        </div>

        <div class="flex flex-row w-32 h-[1.3rem] items-center md:absolute md:inset-y-0 md:left-[190px]
        sm:absolute sm:inset-y-0 sm:left-[155px]">
            <a class="flex flex-row items-center" href="mailto:agapeintermediary@gmail.com?body=Message%20body%20text%20">
                <svg class="fill-japaneseindigo w-2 h-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - 
                    https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, 
                    Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 
                    38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 
                    35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                <span class="text-japaneseindigo ms-1 text-[9px] font-[500] underline underline-offset-1 hover:text-white">
                    agapeintermediary@gmail.com
                </span>
            </a>
        </div>


        <div class="flex flex-row justify-center bg-japaneseindigo2 items-center md:w-36 md:h-[1.3rem] md:absolute md:inset-y-0 md:right-[100px] 
        sm:absolute sm:inset-y-0 sm:right-[50px]">
            <a href="https://www.facebook.com/profile.php?id=100089134691204" target="_blank">
                <svg class="fill-japaneseindigo w-3 h-3 mx-3 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com 
                    License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 
                    0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 
                    74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 
                    12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 
                    36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 
                    67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 
                    9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 
                    99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                </svg>
            </a>
            
            <a href="https://www.facebook.com/profile.php?id=100089134691204" target="_blank">
                <svg class="fill-japaneseindigo w-3 h-3 mx-3 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com 
                        License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 
                        256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 
                        4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                </svg>
            </a>
            
            <a href="https://www.facebook.com/profile.php?id=100089134691204" target="_blank"></a>
                <svg class="fill-japaneseindigo w-3 h-3 mx-3 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com 
                    License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 
                    4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 
                    25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 
                    18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.
                    781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.
                    599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 
                    24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                </svg>
            </a>
        </div>

        <div class="w-20 h-[1.3rem]">
        </div>
    </div>

    <div class="sticky top-[1.3rem] flex flex-row col-span-3 h-16 bg-white shadow-md z-30 flex-wrap">
        
        <div class=" flex-1 flex items-center lg:w-52 lg:h-16 sm:w-52 sm:h-16 sm:absolute md:absolute lg:absolute sm:inset-y-0 md:inset-y-0 lg:inset-y-0 sm:left-[57px] md:left-[37px] lg:left-[87px]">
            <img class="lg:w-24 lg:h-10 sm:w-24 sm:h-10" src="otherlogo_rb.png" alt="">
        </div>

        
        
        <div class="hidden md:block md:w-auto w-[48rem] h-16 absolute inset-y-0 right-[85px]" id="navbar-default">
            <ul class="md:flex md:flex-row md:w-[48rem] md:h-16 md:justify-center md:items-center sm:bg-white md:relative md:inset-x-0 md:top-0 
             sm:absolute sm:inset-x-[17%] sm:top-14 sm:w-full sm:divide-y-[1px] md:divide-y-0 sm:px-[120px] md:px-0">
                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3 md:border-l-[1px] border-japaneseindigo flex justify-center items-center sm:border-l-0">
                  <a class="font-medium text-pastelred md:text-[0.8rem] sm:text-[1rem] hover:text-pastelred hover:text-[0.85rem] hover:animate-pulse" href="index.php">Home</a>
                </li>
                <li  id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"  class="md:px-3 sm:px-0 md:py-0 sm:py-3 md:border-l-[1px] sm:border-l-0
                border-japaneseindigo flex justify-center items-center">
                    <a class="dropdown group-hover:block relative inline-block font-medium text-japaneseindigo md:text-[0.8rem] sm:text-[1rem] hover:text-pastelred hover:text-[0.85rem] hover:animate-pulse" href="about.php">About        
                    </a>
                </li>
                <div id="dropdownHover" class="z-10 hidden bg-white rounded-lg shadow w-[130px]">
                    <ul class="flex flex-col divide-y divide-japaneseindigo items-center py-2 text-xs text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="about.php#who" class="text-center w-[121px]  block text-japaneseindigo px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-japaneseindigo">Who We Are</a>
                        </li>
                        <li>
                            <a href="about.php#where" class="text-center w-[121px]  block text-japaneseindigo px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-japaneseindigo">Where We Work</a>
                        </li>
                        <li>
                            <a href="about.php#our" class="text-center w-[121px]  block text-japaneseindigo px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-japaneseindigo">Our Work</a>
                        </li>
                    </ul>
                </div>

                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3 md:border-l-[1px] border-japaneseindigo flex md:w-[7rem] sm:max-w-full justify-center items-center md:ml-0 
                 sm:border-l-0">
                  <a class="font-medium text-center md:text-[0.8rem] sm:text-[1rem] text-japaneseindigo hover:text-pastelred hover:text-[0.85rem]" href="#">Who We Help</a>
                </li>
                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3 md:border-l-[1px] border-japaneseindigo flex justify-center items-center sm:border-l-0">
                  <a class="font-medium text-japaneseindigo md:text-[0.8rem] sm:text-[1rem] hover:text-pastelred hover:text-[0.85rem]" href="events.php">Events</a>
                </li>
                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3 md:border-l-[1px] border-japaneseindigo flex justify-center items-center sm:border-l-0">
                    <a class="font-medium text-japaneseindigo md:text-[0.8rem] sm:text-[1rem] hover:text-pastelred hover:text-[0.85rem]" href="#">Stories</a>
                  </li>
                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3 md:border-l-[1px] border-japaneseindigo flex justify-center items-center sm:border-l-0">
                  <a class="font-medium text-japaneseindigo md:text-[0.8rem] sm:text-[1rem] hover:text-pastelred hover:text-[0.85rem]" href="ChatAppCodingNepal/users.php?">Chat</a>
                </li>

                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3 mx-1 h-[2.5rem] bg-pastelred border-3 hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] text-center rounded-lg
                flex justify-center items-center">
                    <a class="text-white md:text-[0.8rem] sm:text-[1rem] font-bold" href="#">Get Involved</a>
                </li>
                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3 me-1 bg-pastelred h-[2.5rem]  hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] border-japaneseindigo p-3 rounded-lg
                flex justify-center items-center sm:mt-2 md:mt-0">
                    <a class="text-white md:text-[0.8rem] sm:text-[1rem] font-bold" href="#">Raisefund</a>
                </li>
                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3 me-1 bg-pastelred h-[2.5rem]  hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] border-japaneseindigo p-3 rounded-lg
                 flex justify-center items-center sm:mt-2 md:mt-0">
                      <a class="text-white md:text-[0.8rem] sm:text-[1rem] font-bold" href="#">Donate</a>
                </li>
                <li class="md:px-3 sm:px-0 md:py-0 sm:py-3  border-japaneseindigo p-3 flex justify-center items-center">
                    <a class="font-medium text-japaneseindigo md:text-[0.8rem] sm:text-[1rem] hover:text-pastelred hover:text-[0.85rem]" href="account.php">Account</a>
                </li>
            </ul>
        </div>

          <button data-collapse-toggle="navbar-default" type="button" class="sm:inline-block items-center p-2 sm:ml-[550px] z-20 sm:absolute sm:top-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-middleblue" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6 fill-japaneseindigo" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
      
        

        <div class="w-24 h-16">
          
        </div>
        
    </div>

<!-- ================================================================================================================================================ -->

    <div class="flex flex-row col-span-3 md:h-[27rem] sm:h-[20rem] bg-[#f1eeec] z-10">
        <div
          id="carouselExampleControls"
          class="relative flex-1 "
          data-te-carousel-init
          data-te-carousel-slide>
          <!--Carousel items-->
          <div
            class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <!--First item-->
            <div
              class="relative float-left -mr-[100%] w-full transition-transform duration-[0ms] ease-in-out motion-reduce:transition-none"
              data-te-carousel-item
              data-te-carousel-active>
              <img
                src="pic1.png"
                class="block w-full md:h-[27rem] sm:h-[22rem]"
                alt="Wild Landscape" />
            </div>
            <!--Second item-->
            <div
              class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[0ms] ease-in-out motion-reduce:transition-none"
              data-te-carousel-item>
              <img
                src="pic4.png"
                class="block w-full md:h-[27rem] sm:h-[22rem]"
                alt="Camera" />
            </div>
            <!--Third item-->
            <div
              class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[0ms] ease-in-out motion-reduce:transition-none"
              data-te-carousel-item>
              <img
                src="pic5.png"
                class="block w-full md:h-[27rem] sm:h-[22rem]"
                alt="Exotic Fruits" />

            </div>
            <div
              class="absolute md:top-[2rem] sm:top-[4rem] py-5 text-white md:block md:ms-40 sm:ms-[5rem]">
              <h5 class="font-Sue font-extrabold text-middleblue tracking-normal md:text-[22px] sm:text-[18px]">Help for a cause...</h5>
              <p class="mt-2 font-Mincho md:text-[25px] sm:text-[17px] w-[600px]">“Those who are happiest are those who do the most for others” </p>
              <div class="flex flex-row mt-4">
                    <div class="p-[0.05px] w-3 h-3 rounded-full bg-white mt-[6.2px]">
                        
                    </div>
                    <hr class="md:w-96 sm:w-[255px] h-[3px] bg-white mt-3">
                    <div class="text-center md:w-36 sm:w-28 md:text-[10px] sm:text-[8px] py-1 rounded-full bg-none border-[3px] border-white">
                        BREAK THE POVERTY
                    </div>
              </div>

                <ul class="flex flex-row md:w-[48rem] sm:w-[32rem] h-16 justify-center items-center md:mx-[-16rem] sm:mx-[-8rem]">
                    <li class="mx-1 px-3 md:h-[2.5rem] sm:h-[2rem] bg-pastelred border-3 hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] text-center rounded-lg
                    flex justify-center items-center">
                        <a class="text-white text-[0.8rem] font-bold" href="#">Get Involved</a>
                    </li>
                    <li class="me-1 bg-pastelred px-3 md:h-[2.5rem] sm:h-[2rem]  hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] border-japaneseindigo p-3 rounded-lg
                    flex justify-center items-center">
                        <a class="text-white text-[0.8rem] font-bold" href="#">Raisefund</a>
                    </li>
                    <li class="me-1 bg-pastelred px-3 md:h-[2.5rem] sm:h-[2rem] hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] border-japaneseindigo p-3 rounded-lg
                    flex justify-center items-center">
                            <a class="text-white text-[0.8rem] font-bold" href="#">Donate</a>
                    </li>
                </ul>
                

            </div>
          </div>
          
        
          <!--Carousel controls - prev item-->
          <button
            class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleControls"
            data-te-slide="prev">
            <span class="inline-block h-8 w-8">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
            </span>
            <span
              class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
              >Previous</span
            >
          </button>
          <!--Carousel controls - next item-->
          <button
            class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleControls"
            data-te-slide="next">
            <span class="inline-block h-8 w-8">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </span>
            <span
              class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
              >Next</span
            >
          </button>
        </div>
        
    </div>
    <!-- Justify-Center patayo-->
    <!-- Items-Center pahiga-->
   
<!-- ================================================================================================================================================ -->


    <div id="who" class="flex flex-col items-center col-span-3 md:h-[100rem] sm:h-[110rem] bg-white-300">
        <div class="flex flex-row md:mx-[185px] bg-slate-300">

            <div data-aos="flip-up" class="md:mt-[-106px] sm:mt-[-50px] bg-middleblue md:w-3/12 sm:w-36 md:h-[180px] sm:h-[170px] sm:left-[1.5rem] flex flex-col items-center py-6 md:px-2 sm:px-2 text-center z-20">
                    <h1 class="font-Mincho mt-[-0.8rem] text-japaneseindigo font-[800] md:text-[24px] sm:text-[15px]">
                        Be a Contributor
                    </h1>
                    <h1 class="font-Wsans text-japaneseindigo md:text-[15px] sm:text-[12px] md:mt-5 sm:mt-2">
                        No one has ever become poor from giving.
                    </h1>
                    <a class="hover:bg-pastelred hover:px-[15px] hover:text-white mt-[1rem] px-4 py-2 rounded-2xl hover:bg- bg-white text-japaneseindigo text-[0.8rem] font-bold" href="#">Signup</a>
                    
            </div>

            <div data-aos="flip-up" class="bg-pastelred md:mt-[-106px] sm:mt-[-50px] md:w-3/12 sm:w-36 md:h-[180px] sm:h-[170px]  sm:left-[10.5rem] flex flex-col items-center py-6 md:px-2 sm:px-2 text-center z-20">
                <h1 class="font-Mincho mt-[-0.8rem] text-white font-[800] text-[24px] md:text-[24px] sm:text-[15px]">
                    Be a Recipient
                </h1>
                <h1 class="font-Wsans text-white mt-5 md:text-[15px] sm:text-[12px] md:mt-5 sm:mt-2 ">
                    Take this opportunity to   receive help.
                </h1>
                <a class="hover:bg-japaneseindigo hover:px-[15px] hover:text-white mt-[1rem] px-4 py-2 rounded-2xl hover:bg- bg-white text-japaneseindigo text-[0.8rem] font-bold" href="#">Signup</a>
            </div>
            
            <div data-aos="flip-up" class="md:mt-[-106px] sm:mt-[-50px] md:w-3/12 sm:w-36 md:h-[180px] sm:h-[170px]  sm:left-[19.5rem] bg-japaneseindigo flex flex-col items-center py-6 px-2 text-center z-20">
                <h1 class="font-Mincho mt-[-0.8rem] text-white font-[800] md:text-[24px] sm:text-[15px]">
                    Be a Volunteer
                </h1>
                <h1 class="font-Wsans text-white md:text-[15px] sm:text-[12px] md:mt-5 sm:mt-2">
                    Your gift today can help thousand of lives.
                </h1>
                <a class="hover:bg-middleblue hover:px-[15px] hover:text-japaneseindigo mt-[1rem] px-4 py-2 rounded-2xl hover:bg- bg-white text-japaneseindigo text-[0.8rem] font-bold" href="#">Signup</a>
            </div>

            <div data-aos="flip-up" class=" md:mt-[-106px] sm:mt-[-50px] bg-pastelred md:w-3/12 sm:w-40 md:h-[180px] sm:h-[170px]  sm:left-[28.5rem] z-20">
                <img class="md:w-full sm:w-40 md:h-[180px] sm:h-[170px]"  src="flood.gif" alt="">
                <div class="md:-mt-[180px] sm:-mt-[170px] opacity-[0.25] bg-pastelred md:w-full sm:w-40 md:h-[180px] sm:h-[170px]">
                </div>
                <div class="flex md:w-full sm:w-40 md:h-[180px] sm:h-[170px] justify-center items-center fill-white md:-mt-[180px] sm:-mt-[170px]">
                    <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg class="w-10 h-10" height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M405.2,232.9L126.8,67.2c-3.4-2-6.9-3.2-10.9-3.2c-10.9,0-19.8,9-19.8,20H96v344h0.1c0,11,8.9,20,19.8,20  c4.1,0,7.5-1.4,11.2-3.4l278.1-165.5c6.6-5.5,10.8-13.8,10.8-23.1C416,246.7,411.8,238.5,405.2,232.9z"/></svg>
                </div>
              
            </div>
        </div>

        
<!-- ================================================================================================================================================ -->

      <div class="flex md:flex-row sm:flex-col items-center justify-center gap-16 md:mx-[90px] sm:mx-[25px] mt-40">

            <div class="flex flex-col md:w-7/12 sm:w-full" data-aos="fade-right">
                <span class="font-Sue text-[24px] text-pastelred tracking-widest font-extrabold">
                    Welcome!
                </span>
                <span class="font-Mincho text-[20px] mt-3 text-japaneseindigo font-bold">
                    Little Context About Us
                </span>
                <span class="font-Wsans md:text-[15px] sm:text-[12px] text-justify mt-6 text-japaneseindigo">
                  Agape is a charity web app that serves as a comprehensive resource for various types of charitable causes, ranging from relieving poverty and education to protecting the environment, animal welfare, human rights, and community development. The primary objective of Agape is to provide assistance and support to those in need, including individuals affected by disasters, impoverished communities, and students requiring financial aid for their tuition fees. 
                </span>
            </div>

            <div class="flex flex-col md:w-5/12 sm:w-full" data-aos="fade-left">
                <div class="flex flex-col bg-slate-300 p-5">

                    <div class="flex flex-row">
                        <div class="flex flex-row">

                            <div class="rounded-full bg-middleblue w-5 h-5">
                              <svg class="w-5 h-5" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><path d="M10 18c-.5 0-1-.2-1.4-.6l-4-4c-.8-.8-.8-2 0-2.8.8-.8 2.1-.8 2.8 0l2.6 2.6 6.6-6.6c.8-.8 2-.8 2.8 0 .8.8.8 2 0 2.8l-8 8c-.4.4-.9.6-1.4.6z" fill="#2e4049" class="fill-000000"></path></svg>
                            </div>

                            <span>
                              Donate Food
                            </span>

                        </div>
                        <div class="flex flex-row end-[110px] absolute">

                            <div class="rounded-full bg-middleblue w-5 h-5">
                              <svg class="w-5 h-5" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><path d="M10 18c-.5 0-1-.2-1.4-.6l-4-4c-.8-.8-.8-2 0-2.8.8-.8 2.1-.8 2.8 0l2.6 2.6 6.6-6.6c.8-.8 2-.8 2.8 0 .8.8.8 2 0 2.8l-8 8c-.4.4-.9.6-1.4.6z" fill="#2e4049" class="fill-000000"></path></svg>
                            </div>

                            <span>
                              Donate Money
                            </span>

                        </div>
                    </div>

                    <div class="flex flex-row mt-2">
                      <div class="flex flex-row">
                          <div class="rounded-full bg-middleblue w-5 h-5">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><path d="M10 18c-.5 0-1-.2-1.4-.6l-4-4c-.8-.8-.8-2 0-2.8.8-.8 2.1-.8 2.8 0l2.6 2.6 6.6-6.6c.8-.8 2-.8 2.8 0 .8.8.8 2 0 2.8l-8 8c-.4.4-.9.6-1.4.6z" fill="#2e4049" class="fill-000000"></path></svg>
                          </div>
                          <span>
                            Donate Clothes
                          </span>
                      </div>
                      <div class="flex flex-row end-[110px] absolute">

                          <div class="rounded-full bg-middleblue w-5 h-5">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><path d="M10 18c-.5 0-1-.2-1.4-.6l-4-4c-.8-.8-.8-2 0-2.8.8-.8 2.1-.8 2.8 0l2.6 2.6 6.6-6.6c.8-.8 2-.8 2.8 0 .8.8.8 2 0 2.8l-8 8c-.4.4-.9.6-1.4.6z" fill="#2e4049" class="fill-000000"></path></svg>
                          </div>

                          <span>
                            Donate Groceries
                          </span>

                      </div>
                  </div>
                  <span class="mt-6 font-Wsans font-semibold">
                    Total Money Collected
                  </span>

                  <div class="w-full bg-slate-600 rounded-full mt-1">
                    <div class="animate-[move_10s_ease-in-out_infinite] bg-pastelred text-[10px] font-bold text-japaneseindigo text-center p-0.5 leading-none rounded-full" style="width: 67%"> 67%</div>
                  </div>

                  <div class="flex flex-row -mt-4 ">
                      <span class="mt-5 text-[12px] font-Wsans font-semibold">
                        Collection: P10,000
                      </span>
                      <span class="mt-5 text-[12px] font-Wsans font-semibold end-[110px] absolute">
                        Goal For this Month: P15,000 
                      </span>
                  </div>

                  <a href="https://www.sandbox.paypal.com/signin" class="text-center rounded-2xl font-bold bg-white text-japaneseindigo mt-6 w-36 text-[14px] py-1 shadow-xl hover:bg-middleblue border-b-2 border-japaneseindigo">
                      DONATE NOW
                  </a>

                </div>
            </div>


      </div>

<!-- ================================================================================================================================================ -->

      <div class="flex flex-col bg-[#FFFAE8] w-full md:mt-28 sm:mt-[50px] md:h-[67rem] sm:h-[75rem] md:px-[90px] sm:px-[30px]" data-aos="fade-down">
          <span class="font-Sue text-[24px] text-pastelred tracking-widest font-extrabold mt-12">
              Who We Help?
          </span>

          <div class="flex flex-row">
            <span class="font-Mincho text-[20px] mt-3 text-japaneseindigo font-bold">
              We extend our hand to all in need, Supporting lives, both human and nature's creed.
            </span>
            <a href="https://www.sandbox.paypal.com/signin" class="flex items-center justify-center absolute end-24 top-[1126px] text-center rounded-2xl font-bold bg-pastelred text-white mt-6 md:w-36 sm:w-28 md:text-[14px] sm:text-[11px] border-b-2 border-slate-300 h-9 py-1 shadow-xl hover:bg-japaneseindigo ">
              See More..
            </a>
          </div>

          <span class="font-Wsans md:text-[15px] sm:text-[12px] text-justify mt-6 text-japaneseindigo" >
            We are dedicated to helping all living beings who are in need. This includes providing shelter and support for homeless people, showing care and kindness to stray animals, and helping those affected by disasters. We also offer assistance and comfort to people who are sick or have disabilities, making sure they feel supported and included. Additionally, we take responsibility for protecting the environment by using sustainable practices and raising awareness about its importance. Lastly, we understand the value of education and provide financial support to students who need it, helping them overcome obstacles and reach their full potential. Our goal is to make the world a more compassionate and fair place by helping those who require assistance.
            
          </span>
          
          <div class="flex flex-row md:gap-14 sm:gap-4 mt-10 md:mx-20 sm:mx-3">
              
              <div class="flex flex-col justify-center w-4/12 h-[19rem] bg-white shadow-lg hover:w-[39%]" data-aos="slide-left" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                  <img class="w-full h-[12rem] mt-[0px]" src="homeless.png" alt="">
               
                <div class="flex flex-col h-[7rem] justify-center items-center">
                  <span class="font-Wsans md:text-[12px] sm:text-[10px] mt-[20px] text-japaneseindigo font-bold text-center">
                    "Pathways to Shelter: Extending a Helping Hand to Homeless Individuals in Need"
                  </span>
                  <a href="https://www.sandbox.paypal.com/signin" class="flex items-center mb-3 justify-center text-center rounded-2xl font-bold bg-japaneseindigo text-white mt-5 w-36 md:text-[14px] sm:text-[10px] border-b-2 border-slate-300 h-9 py-1 shadow-xl hover:text-japaneseindigo hover:bg-pastelred ">
                    Read More..
                  </a>
                </div>
                 
              </div>

             
              <div class="flex flex-col justify-center w-4/12 h-[19rem] bg-white shadow-lg hover:w-[39%]" data-aos="slide-left" data-aos-delay="300" data-aos-duration="2000" data-aos-easing="ease-in-out">
                <img class="w-full h-[12rem] mt-[0px]" src="disaster.jpg" alt="">
             
                <div class="flex flex-col h-[7rem] justify-center items-center">
                  <span class="font-Wsans md:text-[12px] sm:text-[10px] mt-[20px] text-japaneseindigo font-bold text-center">
                    "Rebuilding Lives: Assisting Individuals Affected by Disasters and Providing Relief"
                  </span>
                  <a href="https://www.sandbox.paypal.com/signin" class="flex items-center mb-3 justify-center text-center rounded-2xl font-bold bg-japaneseindigo text-white mt-5 w-36 md:text-[14px] sm:text-[10px] border-b-2 border-slate-300 h-9 py-1 shadow-xl hover:text-japaneseindigo hover:bg-pastelred ">
                    Read More..
                  </a>
                </div>
                
              </div>

              <div class="flex flex-col justify-center w-4/12 h-[19rem] bg-white shadow-lg hover:w-[39%]" data-aos="fade-in" data-aos-delay="1000" data-aos-duration="2000" data-aos-easing="ease-in-out">
                <img class="w-full h-[12rem] mt-[0px]" src="pwdill.png" alt="">
             
                <div class="flex flex-col h-[7rem] justify-center items-center">
                  <span class="font-Wsans md:text-[12px] sm:text-[10px] mt-[20px] text-japaneseindigo font-bold text-center">
                    "Supporting Health and Hope: Empowering PWD and Individuals Battling Illnesses"
                  </span>
                  <a href="https://www.sandbox.paypal.com/signin" class="flex items-center mb-3 justify-center text-center rounded-2xl font-bold bg-japaneseindigo text-white mt-5 w-36 md:text-[14px] sm:text-[10px] border-b-2 border-slate-300 h-9 py-1 shadow-xl hover:text-japaneseindigo hover:bg-pastelred ">
                    Read More..
                  </a>
                </div>
                
              </div>
               
            </div>

            
          <div class="flex flex-row md:gap-14 sm:gap-4 mt-10 md:mx-20 sm:mx-3">
              
            <div class="flex flex-col justify-center w-4/12 h-[19rem] bg-white shadow-lg hover:w-[39%]" data-aos="fade-in" data-aos-delay="1000" data-aos-duration="2000" data-aos-easing="ease-in-out">
                <img class="w-full h-[12rem] mt-[0px]" src="plant.png" alt="">
             
              <div class="flex flex-col h-[7rem] justify-center items-center">
                <span class="font-Wsans md:text-[12px] sm:text-[10px] mt-[20px] text-japaneseindigo font-bold text-center">
                  "Preserving Our Planet: Taking Action for a Sustainable Environment"
                </span>
                <a href="https://www.sandbox.paypal.com/signin" class="flex items-center mb-3 justify-center text-center rounded-2xl font-bold bg-japaneseindigo text-white mt-5 w-36  md:text-[14px] sm:text-[10px] border-b-2 border-slate-300 h-9 py-1 shadow-xl hover:text-japaneseindigo hover:bg-pastelred ">
                  Read More..
                </a>
              </div>
               
            </div>

           
            <div class="flex flex-col justify-center w-4/12 h-[19rem] bg-white shadow-lg hover:w-[39%]" data-aos="slide-right" data-aos-delay="1000"  data-aos-duration="2000"  data-aos-easing="ease-in-out">
              <img class="w-full h-[12rem] mt-[0px]" src="dogcat.png" alt="">
           
              <div class="flex flex-col h-[7rem] justify-center items-center">
                <span class="font-Wsans md:text-[12px] sm:text-[10px] mt-[20px] text-japaneseindigo font-bold text-center">
                  "Compassionate Care: Rescuing and Rehabilitating Stray Animals"
                </span>
                <a href="https://www.sandbox.paypal.com/signin" class="flex items-center mb-3 justify-center text-center rounded-2xl font-bold bg-japaneseindigo text-white mt-5 w-36  md:text-[14px] sm:text-[10px]  border-b-2 border-slate-300 md:h-9 sm:h-6 py-1 shadow-xl hover:text-japaneseindigo hover:bg-pastelred ">
                  Read More..
                </a>
              </div>
              
            </div>

            <div class="flex flex-col justify-center w-4/12 h-[19rem] bg-white shadow-lg hover:w-[39%]" data-aos="slide-right" data-aos-delay="300"  data-aos-duration="2000"  data-aos-easing="ease-in-out">
              <img class="w-full h-[12rem] mt-[0px]" src="student.png" alt="">
           
              <div class="flex flex-col h-[7rem] justify-center items-center">
                <span class="font-Wsans md:text-[12px] sm:text-[10px]  mt-[20px] text-japaneseindigo font-bold text-center">
                  "Empowering Students: Providing Financial Support for Educational Success"
                </span>
                <a href="https://www.sandbox.paypal.com/signin" class="flex items-center mb-3 justify-center text-center rounded-2xl font-bold bg-japaneseindigo text-white mt-5 w-36 md:text-[14px] sm:text-[10px] border-b-2 border-slate-300 h-9 py-1 shadow-xl hover:text-japaneseindigo hover:bg-pastelred ">
                  Read More..
                </a>
              </div>
              
            </div>
             
          </div>

            
              
            
          </div>
          

      </div>
  


    </div>
    

<!-- ================================================================================================================================================ -->

    <div class="flex flex-row col-span-3 h-[15.5rem] md:mt-0 sm:mt-0 bg-japaneseindigo items-center justify-center">
      
    
      
        <div class="flex w-5/12 flex-col md:ms-[85px] sm:ms-[25px]"> 
             
                <img class="w-24 h-10" src="logo_white.png" alt="">
                <h1 class="text-white md:text-[12px] sm:text-[8px] leading-normal mt-[21px] ms-1 md:me-20 sm:me-4 text-justify font-medium">
                    In Christianity, agape is "the highest form of love, charity" and "the love of God for man and of man for God". This is in contrast to philia, brotherly love, or philautia, self-love, as it embraces a deep and profound sacrificial love that transcends and persists regardless of circumstance.
                </h1>


                <div class="flex flex-row mt-[21px] gap-4">
                    <div class="px-[0px] py-[10px] rounded-full bg-[#3f4f57]">
                        <a href="https://www.facebook.com/profile.php?id=100089134691204" target="_blank">
                            <svg class="fill-white w-3 h-3 mx-3 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com 
                                License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 
                                0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 
                                74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 
                                12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 
                                36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 
                                67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 
                                9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 
                                99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="px-[0px] py-[10px] rounded-full bg-[#3f4f57]">
                        <a href="https://www.facebook.com/profile.php?id=100089134691204" target="_blank">
                            <svg class="fill-white w-3 h-3 mx-3 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com 
                                    License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 
                                    256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 
                                    4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="px-[0px] py-[10px] rounded-full bg-[#3f4f57]">
                        <a href="https://www.facebook.com/profile.php?id=100089134691204" target="_blank"></a>
                            <svg class="fill-white w-3 h-3 mx-3 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com 
                                License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 
                                4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 
                                25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 
                                18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.
                                781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.
                                599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 
                                24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                            </svg>
                        </a>
                    </div>
                </div>

              

            
        </div>

         <div class="flex md:w-7/12 sm:w-[500px] h-48 flex-row bg-[#3f4f57] right-3 md:me-[85px] sm:me-[20px]  py-10 px-6 md:gap-[58px] sm:gap-[15px] justify-center">
            <div class=" flex-col text-white text-[10px] gap-[5px] ">
                <h1 class="md:text-[14px] sm:text-[11px] font-bold">
                    Who We Help
                </h1>
                <div href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal mt-1">
                    > PWD
                </div>
                <div href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                    > People with Illnesses
                </div>
                <div href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal"> 
                    > Students
                </div>
                <div href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">  
                    > Affected By Conflicts 
                     & Disasters
                </div>
                <div href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                    > Animals/Pets
                </div>
                <div href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                    > Environments
                </div>
                
            </div>
            <div class="flex flex-col text-white text-[10px]  gap-[5px] font-medium"> 
                    <h1 class="md:text-[14px] sm:text-[11px] font-bold"> 
                        Events
                    </h1>
                    <a href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Past Events
                    </a>
                    <a href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Current Events
                    </a>
                    <a href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Upcoming Events
                    </a>
                  
                    
            </div>
            <div class="flex flex-col text-white text-[10px]  gap-[5px] font-medium"> 
                    <h1 class="md:text-[14px] sm:text-[11px] font-bold">
                        Stories
                    </h1>
                    <a href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Features
                    </a>
                    <a href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Articles
                    </a>
                    <a href="" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Blog
                    </a>
                    
            </div>
            <div class="flex flex-col text-white text-[10px]  gap-[5px] font-medium"> 
                    <h1 class="md:text-[14px] sm:text-[11px] font-bold">
                        About
                    </h1>
                    <a href="about.php#who" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Who We Are

                    </a>
                    <a href="about.php#where" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Where We Work
                        
                    </a>
                    <a href="about.php#our" class="md:text-[10px] sm:text-[8px] hover:underline font-normal">
                        > Our Work
                        
                    </a>
                   
            </div>
        </div>
    </div>
    <div class="col-span-3 h-[0.05rem] bg-white-300">
        
    </div>
    <div class="flex col-span-3 md:h-[1.5rem] sm:h-[1rem] bg-japaneseindigo justify-center items-center">
        <h1 class="text-white md:text-[10px] sm:text-[8px] mt-[0rem]">
            Copyright© Agape Charity 2023. All Rights Reserved.
        </h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
</body>
</html>

