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

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Tailwind Elements styles -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />



      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">

    <!--Tailwind CSS config -->
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
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
    </script> 
</head>

<body>
    <div class="sticky top-0 flex flex-row col-span-3 h-[1.3rem] bg-middleblue z-20 ">
          

        <div class="flex flex-row w-32 h-[1.3rem] items-center absolute inset-y-0 left-[90px]">
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

        <div class="flex flex-row w-32 h-[1.3rem] items-center absolute inset-y-0 left-[190px]">
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


        <div class="flex flex-row justify-center bg-japaneseindigo2 items-center w-36 h-[1.3rem] absolute inset-y-0 right-[90px] ">
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

    <div class="sticky top-[1.3rem] flex flex-row col-span-3 h-16 bg-white shadow-md z-20 flex-wrap">
        
        <div class=" flex-1 flex ml-3 items-center w-52 h-16 absolute inset-y-0 left-[77px]">
            <img class="w-24 h-10" src="otherlogo_rb.png" alt="">
        </div>
        
        <div class="w-[48rem] h-16 absolute inset-y-0 right-[85px]">
            <ul class="flex flex-row w-[48rem] h-16 justify-center items-center ">
                <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                  <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem] hover:animate-pulse" href="index.php">Home</a>
                </li>
                <li  id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"  class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                    <a class="dropdown group-hover:block relative inline-block font-medium text-pastelred text-[0.8rem] hover:text-pastelred hover:text-[0.85rem] hover:animate-pulse" href="about.php">About        
                    </a>
                </li>
                <div id="dropdownHover" class="justify-center px-10 z-10 hidden bg-white rounded-lg shadow w-[130px] dark:bg-gray-700">
                    <ul class="flex flex-col divide-y divide-japaneseindigo items-center py-2 text-xs text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="#who" class="text-center w-[121px] text-japaneseindigo block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Who We Are</a>
                        </li>
                        <li>
                            <a href="#where" class="text-center w-[121px] text-japaneseindigo block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Where We Work</a>
                        </li>
                        <li>
                            <a href="#our" class="text-center w-[121px] text-japaneseindigo block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Work</a>
                        </li>
                    </ul>
                </div>

                <li class="px-3 border-l-[1px] border-japaneseindigo flex w-[7rem] justify-center items-center">
                  <a class="font-medium text-center text-[0.8rem] text-japaneseindigo hover:text-pastelred hover:text-[0.85rem]" href="#">Who We Help</a>
                </li>
                <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                  <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="events.php">Events</a>
                </li>
                <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                    <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="#">Stories</a>
                  </li>
                <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                  <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="ChatAppCodingNepal/users.php">Chat</a>
                </li>

                <li class="mx-1 px-3 h-[2.5rem] bg-pastelred border-3 hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] text-center rounded-lg
                flex justify-center items-center">
                    <a class="text-white text-[0.8rem] font-bold" href="#">Get Involved</a>
                </li>
                <li class="me-1 bg-pastelred px-3 h-[2.5rem]  hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] border-japaneseindigo p-3 rounded-lg
                flex justify-center items-center">
                    <a class="text-white text-[0.8rem] font-bold" href="#">Raisefund</a>
                </li>
                <li class="me-1 bg-pastelred px-3 h-[2.5rem]  hover:bg-japaneseindigo hover:px-[18px] hover:h-[2.7rem] border-japaneseindigo p-3 rounded-lg
                 flex justify-center items-center">
                      <a class="text-white text-[0.8rem] font-bold" href="#">Donate</a>
                </li>
                <li class="px-3 border-japaneseindigo p-3 flex justify-center items-center">
                    <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="account.php">Account</a>
                </li>
            </ul>
        </div>

        <div class="w-24 h-16">
          
        </div>
        
    </div>

    <div class="flex flex-row col-span-3 h-[27rem] bg-[#f1eeec] z-10">
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
                class="block w-full h-[27rem]"
                alt="Wild Landscape" />
            </div>
            <!--Second item-->
            <div
              class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[0ms] ease-in-out motion-reduce:transition-none"
              data-te-carousel-item>
              <img
                src="pic2.png"
                class="block w-full h-[27rem]"
                alt="Camera" />
            </div>
            <!--Third item-->
            <div
              class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[0ms] ease-in-out motion-reduce:transition-none"
              data-te-carousel-item>
              <img
                src="pic3.png"
                class="block w-full h-[27rem]"
                alt="Exotic Fruits" />

            </div>
            <div
              class="absolute inset-x-[30%] top-[8rem] py-5 text-center text-white md:block">
              <h5 class="text-[3rem] font-Sue font-extrabold text-pastelred tracking-widest">ABOUT US</h5>
              <p class="text-[15px]">Uniting hearts, empowering lives. With a selfless love at our core, we strive to uplift communities, protect the vulnerable, and inspire lasting change. </p>
              <a class="mt-8 absolute inset-x-[45%] top-[8.5rem] animate-bounce" href="#who">
                <svg fill="none" class="w-[2rem] h-[2rem]" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M10 8h4v2l-6 6-6-6V8h4V0h4v8Z" fill="#59c9c4" class="fill-030708"></path></svg>
              </a>
            
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


    <div id="who" class="flex flex-col items-center col-span-3 h-[30rem] bg-white-300">
       <h1 class="font-Sue text-pastelred font-extrabold text-[1.7rem] mt-8" data-aos="zoom-in" data-aos-delay="0" data-aos-duration="0" data-aos-easing="ease-in-out">
        Who We Are
       </h1>
       <h1 class="text-[1.5rem] mt-8 text-japaneseindigo font-bold" data-aos="fade-in" data-aos-delay="0" data-aos-duration="0" data-aos-easing="ease-in-out">
        Meet the Team
       </h1>   
       <div class="flex flex-row items-center justify-center gap-7 w-full mt-2">
            <div class="flex flex-col w-[20%] h-[18rem] hover:w-[21%] hover:h-[19rem] duration-300 border border-middleblue bg-white drop-shadow-[0px_0px_5px_rgba(0,0,0,0.3)]" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="2000" data-aos-easing="ease-in-out">
                <img src="drea.png" class="w-full h-[11rem]" alt="">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-[0.95rem] mt-[0.2rem] text-japaneseindigo">
                        Andrea T. Abuan
                    </h1>
                    <h1 class="text-[0.65rem] mt-[0.5rem] text-[#2FA39E]">
                        TEAM MEMBER
                    </h1>
                    <hr class="w-[40%] bg-[#2FA39E] h-[0.25rem] rounded-full mt-[0.05rem]">
                    <p class="text-[0.6rem] mt-[0.6rem] text-center text-slate-500 px-2"> 
                        Responsible for developing and designing of the system. 
                    </p>
                </div>
            </div>

          <div class="flex flex-col w-[23%] h-[18rem] hover:w-[21%] hover:h-[19rem] duration-300 border border-middleblue bg-white drop-shadow-[0px_0px_5px_rgba(0,0,0,0.3)]" data-aos="zoom-in-up" data-aos-delay="0" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <img src="chris.png" class="w-full h-[11rem]" alt="">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-[0.95rem] mt-[0.2rem] text-japaneseindigo">
                  Chriselle Mae B. Flores
                </h1>
                <h1 class="text-[0.65rem] mt-[0.5rem] text-[#2FA39E]">
                  PROJECT MANAGER
                </h1>
                <hr class="w-[40%] bg-[#2FA39E] h-[0.25rem] rounded-full mt-[0.05rem]">
                <p class="text-[0.6rem] mt-[0.6rem] text-center text-slate-500 px-2 mb-5"> 
                Responsible for leading and monitoring the team members. Also responsible for developing and designing of the system.
                </p>
            </div>
          </div>

          <div class="flex flex-col w-[20%] h-[18rem] hover:w-[21%] hover:h-[19rem] duration-300 border border-middleblue bg-white drop-shadow-[0px_0px_5px_rgba(0,0,0,0.3)]" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="2000" data-aos-easing="ease-in-out">
              <img src="abi.png" class="w-full h-[11rem]" alt="">
              <div class="flex flex-col justify-center items-center ">
                  <h1 class="text-[0.95rem] mt-[0.2rem] text-japaneseindigo">
                    Abigail B. Bongala
                  </h1>
                  <h1 class="text-[0.65rem] mt-[0.5rem] text-[#2FA39E]">
                    TEAM MEMBER
                  </h1>
                  <hr class="w-[40%] bg-[#2FA39E] h-[0.25rem] rounded-full mt-[0.05rem]">
                  <p class="text-[0.6rem] mt-[0.6rem] text-center text-slate-500 px-2"> 
                  Responsible for completing the paperworks.
                  </p>
              </div>
          </div>
       </div>  
       <span class="text-[0.8rem] mt-5 mx-32 text-justify text-japaneseindigo" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000" data-aos-easing="ease-in-out">
        The name "Agape" was chosen by the team due to its profound meaning in the context of love. Among the eight different types of love, "Agape Love" represents selfless love. In a biblical sense, agape refers to the selfless love exhibited by Jesus Christ, which people are encouraged to emulate. The word "Agape" is often translated as "charity" in the King James Version, underscoring the concept of selfless and giving love. Agape embodies the idea of treating others as you would want to be treated and actively doing good for others.

       </span>
       
    </div>
    <div id="where" class="flex flex-col items-center col-span-3 pt-20 mt-20 h-[80rem] bg-gradient-to-t from-middleblue" data-aos="zoom-in" data-aos-delay="0" data-aos-duration="0" data-aos-easing="ease-in-out">
        <h1 class="font-Sue text-pastelred font-extrabold text-[1.7rem]">
          Where We Work
        </h1>
        <div class="flex flex-row justify-center w-full px-44 items-center mt-16" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
          <div class="flex flex-col w-24">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="philippines"><path fill="#f0f0f0" d="M0 85.337h512v341.326H0z"></path><path fill="#0052b4" d="M512 85.337V256H256L0 85.337z"></path><path fill="#d80027" d="M512 256v170.663H0L256 256z"></path><path fill="#ffda44" d="m161.908 256-27.288-12.835 14.532-26.428-29.632 5.668-3.755-29.933-20.64 22.015-20.639-22.015-3.755 29.933-29.631-5.669 14.531 26.428L28.343 256l27.288 12.835L41.1 295.263l29.633-5.668 3.753 29.933 20.639-22.015 20.64 22.015 3.755-29.933 29.631 5.669-14.532-26.427zM21.789 117.607l9.081 12.696 14.879-4.714-9.268 12.56 9.081 12.694-14.809-4.932-9.268 12.559.117-15.608-14.809-4.934 14.88-4.712zM21.789 353.53l9.081 12.696 14.879-4.714-9.268 12.56 9.081 12.695-14.809-4.933-9.268 12.558.117-15.607-14.809-4.934 14.88-4.712zM210.395 235.569l-9.081 12.695-14.879-4.713 9.268 12.559-9.081 12.696 14.809-4.933 9.268 12.558-.117-15.607 14.809-4.934-14.88-4.713z"></path></svg>
            
          </div>
          <span class="text-japaneseindigo text-2xl ms-2">
            ----------------
          </span>
          <div class="flex flex-col w-14 fill-japaneseindigo">
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g id="Navigator"><path d="M456.59,74.3682A86.939,86.939,0,0,0,324.3689,186.3735L381.202,265.936a17.1,17.1,0,0,0,27.832,0l56.833-79.5625A86.6665,86.6665,0,0,0,456.59,74.3682ZM395.118,164.3445a28.5,28.5,0,1,1,28.5-28.5A28.5014,28.5014,0,0,1,395.118,164.3445Z"/><path d="M395.118,314.9019A17.0965,17.0965,0,0,0,378.02,332v36.46a60.4419,60.4419,0,1,1-120.8838,0V213.38a94.6382,94.6382,0,1,0-189.2763,0V294a17.0982,17.0982,0,0,0,34.1963,0V213.38a60.4419,60.4419,0,1,1,120.8837,0V368.46a94.6382,94.6382,0,0,0,189.2764,0V332A17.0965,17.0965,0,0,0,395.118,314.9019Z"/><path d="M84.9578,352.9019A55.0981,55.0981,0,1,0,140.056,408,55.1578,55.1578,0,0,0,84.9578,352.9019Z"/></g></svg>
          </div>
          <span class="text-japaneseindigo text-2xl">
            ----------------
          </span>
          <div class="flex flex-col w-24">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="global-location"><g data-name="flat"><path fill="#42a5f5" d="M55 39a22.987 22.987 0 1 1-23-23 23.017 23.017 0 0 1 23 23Z"></path><path fill="#1e88e5" d="M51 42a22.923 22.923 0 0 1-7.31 16.8A22.99 22.99 0 0 1 9 39c0-.51.02-1.01.05-1.5a22.95 22.95 0 0 1 7.26-15.3A22.99 22.99 0 0 1 51 42Z"></path><path fill="#bbdefb" d="M12.937 13a1 1 0 0 1-.897-.555 10.02 10.02 0 0 1 0-8.89 1 1 0 1 1 1.791.89 8.022 8.022 0 0 0 0 7.111 1 1 0 0 1-.894 1.445Z"></path><path fill="#1976d2" d="M21.68 25.73 9.05 37.5a22.955 22.955 0 0 1 .42-3.12l10.85-10.11a.998.998 0 1 1 1.36 1.46Z"></path><path fill="#388e3c" d="M33.23 17.28c-1.15 4.05-.67 10.87-.38 14.95.08 1.22.15 2.19.15 2.77 0 3.5-7.29 15-12 15a3.366 3.366 0 0 1-3.08-1.38c-.89-1.45-.13-3.38.12-3.93.52-2.71 1.18-9.77-1.64-11.89a9.19 9.19 0 0 1-1.17-1.06 17.143 17.143 0 0 1-1.31-1.5c-.5-.63-1.01-1.35-1.54-2.15a.987.987 0 0 1-.01-1.07A22.836 22.836 0 0 1 32 16h.18a1.103 1.103 0 0 1 .84.41.994.994 0 0 1 .21.87Z"></path><path fill="#43a047" d="M33.23 17.28a16.887 16.887 0 0 0-.45 2.23A22.154 22.154 0 0 0 28 19a22.85 22.85 0 0 0-11.74 3.23A22.763 22.763 0 0 1 32 16h.18a1.103 1.103 0 0 1 .84.41.994.994 0 0 1 .21.87Z"></path><path fill="#bbdefb" d="M29.064 13a1 1 0 0 1-.895-1.444 8.022 8.022 0 0 0 0-7.112 1 1 0 1 1 1.791-.89 10.02 10.02 0 0 1 0 8.89 1 1 0 0 1-.896.556Z"></path><path fill="#2e7d32" d="m21.68 25.73-6.45 6.01a17.143 17.143 0 0 1-1.31-1.5l6.4-5.97a.998.998 0 1 1 1.36 1.46Z"></path><path fill="#b0bec5" d="M21 26a1 1 0 0 1-1-1V13a1 1 0 0 1 2 0v12a1 1 0 0 1-1 1Z"></path><path fill="#388e3c" d="M45.455 20.351a.997.997 0 0 0-.927-.13c-5.2 1.886-5.869 4.817-5.514 6.944 1.025 6.154.891 12.788.091 14.388-.605 1.21-1.618 3.236-.57 5.162.96 1.763 3.365 2.836 7.355 3.279a6.322 6.322 0 0 1 3.772 1.852 1.003 1.003 0 0 0 .694.279 1.06 1.06 0 0 0 .11-.006 1.001 1.001 0 0 0 .723-.443 22.99 22.99 0 0 0-5.734-31.325Z"></path><path fill="#43a047" d="M55 39a22.933 22.933 0 0 1-3.81 12.68 1.007 1.007 0 0 1-.72.44h-.11a1.008 1.008 0 0 1-.7-.27 7.995 7.995 0 0 0-.63-.55A22.764 22.764 0 0 0 51 42a23.017 23.017 0 0 0-10.57-19.34 10.64 10.64 0 0 1 4.1-2.44 1.028 1.028 0 0 1 .93.13A23.09 23.09 0 0 1 55 39Z"></path><path fill="#ef5350" d="M27 8a5.977 5.977 0 0 1-2.88 5.12A5.91 5.91 0 0 1 21 14a6.005 6.005 0 0 1-6-6 5.91 5.91 0 0 1 .88-3.12A5.997 5.997 0 0 1 27 8Z"></path><path fill="#d32f2f" d="M25 10a5.91 5.91 0 0 1-.88 3.12A5.91 5.91 0 0 1 21 14a6.005 6.005 0 0 1-6-6 5.91 5.91 0 0 1 .88-3.12A5.91 5.91 0 0 1 19 4a6.005 6.005 0 0 1 6 6Z"></path><path fill="#388e3c" d="M41.804 58.046a32.784 32.784 0 0 0-7.562-3.016c-3.506-.877-7.523.183-11.942 3.149a1 1 0 0 0 .141 1.74 23.005 23.005 0 0 0 19.313-.087 1 1 0 0 0 .05-1.785Z"></path><path fill="#fafafa" d="M22.999 56.737a1 1 0 0 1-.474-.12 19.952 19.952 0 0 1-6.314-5.34 1 1 0 0 1 1.578-1.228 17.953 17.953 0 0 0 5.686 4.808 1 1 0 0 1-.476 1.88zM45.856 27a.997.997 0 0 1-.729-.316 17.984 17.984 0 0 0-8.39-5.055 1 1 0 0 1 .525-1.93 19.984 19.984 0 0 1 9.324 5.617 1 1 0 0 1-.73 1.684zm2.882 4a1 1 0 0 1-.88-.525q-.329-.606-.7-1.185a1 1 0 1 1 1.684-1.08q.411.64.775 1.315A1 1 0 0 1 48.738 31z"></path></g></svg>
            <div class="w-3 h-3 rounded-full bg-pastelred animate-ping relative right-[-1.55rem] top-[-91px]">

            </div>
          </div>
        </div>
        <div class="flex flex-row w-full px-[8rem] gap-6 mt-10">
          <div class="flex flex-col items-center" data-aos="fade-right" data-aos-delay="300" data-aos-duration="2000" data-aos-easing="ease-in-out">
            <h1 class="text-xl text-japaneseindigo font-bold">
              Originally from PHILIPPINES
            </h1>
            <span class="text-[0.8rem] mt-2 mx-32 text-justify w-full text-japaneseindigo">
              Agape Charity's journey began in the Philippines, a country with its share of socio-economic challenges and marginalized communities. Fueled by a deep sense of compassion, Agape recognized the urgent need to address issues such as poverty, lack of education, environmental degradation, and more. Through dedicated efforts and a network of passionate volunteers, Agape Charity started making a tangible impact in the lives of individuals and communities across the Philippines. From providing essential resources and support to vulnerable populations to implementing sustainable development projects, Agape worked tirelessly to uplift those in need and promote a brighter future.
             </span>
          </div>
          <div class="flex flex-col items-center" data-aos="fade-left" data-aos-delay="300" data-aos-duration="2000" data-aos-easing="ease-in-out">
            <h1 class="text-xl text-japaneseindigo font-bold">
              We aim Globally!
            </h1>
            <span class="text-[0.8rem] mt-2 mx-32 text-justify w-full text-japaneseindigo">
              While Agape's roots lie in the Philippines, its vision extends far beyond national borders. Understanding that poverty, injustice, and suffering exist on a global scale, Agape Charity envisions a world where every person has access to the necessary resources, opportunities, and love they deserve. With this global perspective, Agape is actively expanding its reach, forging partnerships, and planning initiatives in different countries and regions. By leveraging the power of its collective efforts, Agape aims to tackle pressing challenges across continents, promoting social justice, empowering communities, and fostering a culture of compassion and selfless love worldwide.
             </span>
          </div>
        </div>

        <div id="our" class="flex flex-col items-center col-span-3 pt-20 mt-20 h-[60rem] bg-gradient-to-t from-middleblue">
          <h1 class="font-Sue text-pastelred font-extrabold text-[1.7rem] " data-aos="zoom-in" data-aos-delay="0" data-aos-duration="0" data-aos-easing="ease-in-out">
            Our Work
          </h1>
          <div class="flex flex-row justify-center w-full px-36 items-center gap-[0.2rem] mt-16" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">
              <p class="font-semibold animate-bounce text-[11px]">We help</p>
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">

              <div class="animate-[wiggle_1s_ease-in-out_infinite]">
                <svg  width="48" height="48" fill="#2E4049" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><g id="Solid"><path d="M41.27167,8.7398C26.828-5.6919,2.02156,4.595,2.00445,24.9983,1.74764,37.35348,12.64883,48.25353,25.00881,47.99551,45.42,47.963,55.67623,23.22469,41.27167,8.7398ZM11.056,15.2891,34.72046,38.94666A16.99691,16.99691,0,0,1,11.056,15.2891Zm27.90521,19.418L15.29681,11.04955A16.99691,16.99691,0,0,1,38.96124,34.70711ZM37.811,23.59823a1.01231,1.01231,0,0,1-1.40022.2l-2.40047-1.7998V26.9279L22.04806,14.96913l2.36049-1.76978a.99042.99042,0,0,1,1.20017,0L37.611,22.19841A1.00258,1.00258,0,0,1,37.811,23.59823ZM15.39687,22.45839l-1.79038,1.33983a1,1,0,1,1-1.20017-1.59981l1.56029-1.16986ZM29.93955,36.99685H17.00715A1.003,1.003,0,0,1,16.007,35.997V23.06832Z"/></g></svg>
              </div>
              
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">
              <p class="animate-bounce font-semibold text-[11px]">Homeless</p>
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">

              <div class="animate-[wiggle_1s_ease-in-out_infinite]">
               <svg height="48" viewBox="0 0 48 48" fill="#2E4049" width="48" xmlns="http://www.w3.org/2000/svg"><circle cx="9" cy="19" r="5"/><circle cx="18" cy="11" r="5"/><circle cx="30" cy="11" r="5"/><circle cx="39" cy="19" r="5"/><path d="M34.68 29.72c-1.75-2.03-3.21-3.78-4.96-5.81-.93-1.08-2.1-2.17-3.49-2.64-.21-.07-.43-.13-.66-.17-.51-.1-1.05-.1-1.57-.1s-1.06 0-1.57.1c-.22.04-.44.1-.66.17-1.39.47-2.56 1.56-3.49 2.64-1.75 2.03-3.21 3.78-4.96 5.81-2.62 2.61-5.83 5.52-5.25 9.59.58 2.03 2.04 4.07 4.67 4.65 1.46.29 6.12-.87 11.08-.87.06 0 .12.01.18.01s.12-.01.18-.01c4.96 0 9.62 1.16 11.08.87 2.62-.58 4.08-2.61 4.67-4.65.58-4.07-2.62-6.98-5.25-9.59z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
              </div>
             
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">
              <p class="font-semibold animate-bounce  text-[11px]">Stray Animals</p>
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">

              <div class="animate-[wiggle_1s_ease-in-out_infinite]">
              <svg width="48" height="48" fill="#2E4049" id="OBJECT" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title/><path d="M15.94,9.67h6.67A7.68,7.68,0,0,0,30.27,2a1,1,0,0,0-1-1H25.94a7.67,7.67,0,0,0-6.67,3.89A7.65,7.65,0,0,0,12.61,1H9.27a1,1,0,0,0-1,1A7.68,7.68,0,0,0,15.94,9.67Z"/><path d="M30.86,24A2.48,2.48,0,0,0,28,22.45l-4,.82a5.72,5.72,0,0,0,0-.58,3,3,0,0,0-3.1-2.92h0a8.08,8.08,0,0,1-3.76-.8l-1.89-.83A2.56,2.56,0,0,0,13.64,18a.66.66,0,0,0-.2.06l-1.24.56a6,6,0,0,1,.28,3.11L11.3,28.07c0,.15-.08.29-.12.44l5.35,2.06a6.09,6.09,0,0,0,2.26.43,6.17,6.17,0,0,0,2.31-.45l8.29-3.36A2.57,2.57,0,0,0,30.86,24Z"/><path d="M8,17.29l-5.82-.88A1,1,0,0,0,1,17.4v12a1,1,0,0,0,1,1H6.4a3.08,3.08,0,0,0,2.93-2.69l1.18-6.35a3.76,3.76,0,0,0-.61-2.84A2.88,2.88,0,0,0,8,17.29Z"/><path d="M28,21.64A5,5,0,0,0,24,18.26a5,5,0,0,0-3.69-3.14V11.67h-2v3.45a5.06,5.06,0,0,0-2.94,1.81,2.88,2.88,0,0,1,.9.21l1.89.83a8.36,8.36,0,0,0,3.41.81h.35A3,3,0,0,1,25,21.69a5.72,5.72,0,0,1,0,.58Z"/></svg>
              </div>
              
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">
              <p class="font-semibold animate-bounce text-[11px]">Environment</p>
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">

              <div class="animate-[wiggle_1s_ease-in-out_infinite]">
               <!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 48 48" height="48px" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_3"><g><circle cx="16.099" cy="4.352"  fill="#2E4049" r="4.35"/><path d="M14.959,33.062c-1.994,0-3.657-1.354-4.171-3.186l-0.016,0.002l-0.006-0.076    c-0.064-0.248-0.105-0.504-0.129-0.766l-0.008,0.006l-0.593-8.117l0,0l-0.257-3.123l-0.5-5.132H8.793H6.444h-2.47H3.663    c-0.004,0-0.006-0.002-0.01-0.002c-0.004,0-0.006,0.002-0.01,0.002H3.558H2.289v0.37v2.339v0.014h1.269h0.085    c0.003,0,0.006,0.002,0.01,0.002c0.003,0,0.006-0.002,0.01-0.002H4.29h1.978l0.63,6.893c-2.088,2.697-3.339,6.073-3.339,9.747    c0,8.814,7.146,15.963,15.961,15.963c5.697,0,10.676-3,13.5-7.488l-4.457-7.447H14.959z"  fill="#2E4049"/><path d="M43.849,34.564c-0.422,0-0.791,0.166-1.102,0.402l-2.358,1.48l-6.541-10.922l-0.047,0.029    c-0.529-0.908-1.505-1.523-2.634-1.523c-0.094,0-0.183,0.019-0.273,0.027v-0.027h-9.435L20.705,13.77v-0.001l-0.04-0.535    l-0.027,0.003c-0.22-1.304-0.812-1.986-0.812-1.986s-0.008,0.006-0.009,0.007c-0.785-1.093-2.05-1.812-3.5-1.812    c-2.402,0-4.35,1.948-4.35,4.35c0,0.078,0.02,0.149,0.022,0.225l-0.013,0.001l0.37,4.49l0.581,7.959l0.008-0.002    c0.025,0.254,0.065,0.504,0.128,0.746l0.006,0.078l0.016-0.004c0.514,1.834,2.177,3.186,4.171,3.186h13.603l5.163,8.723    l-0.007,0.002l1.37,2.172l0.476,0.799l0.018-0.01l0.118,0.188l5.545-3.488c0.746-0.471,1.537-1.102,1.67-1.207    c0.302-0.324,0.499-0.74,0.499-1.219C45.711,35.402,44.878,34.564,43.849,34.564z" fill="#2E4049"/></g></g></svg>
              </div>
              
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">
              <p class="font-semibold animate-bounce text-[11px]">Disabled</p>
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">

              <div class="animate-[wiggle_1s_ease-in-out_infinite]">
                <svg width="48" height="48" id="Icons" fill="#2E4049" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="M18.571,43.877a18.208,18.208,0,0,1-2.448-2.448,20.209,20.209,0,0,1-3.376,4.278,1,1,0,0,1-1.181.143c-1.171-.666-2.289-.782-2.779-.293-.666.666-.2,2.624,1.412,4.248s3.575,2.074,4.244,1.408c.49-.49.372-1.608-.293-2.778a1,1,0,0,1,.143-1.181A20.22,20.22,0,0,1,18.571,43.877Z"/><ellipse cx="27" cy="36" rx="3" ry="2"/><ellipse cx="36" cy="29" rx="3" ry="2"/><ellipse cx="25" cy="24" rx="3" ry="2"/><path d="M4,34c.684,0,1.406-.894,1.756-2.174a1,1,0,0,1,.935-.736c.159,0,.319-.007.481-.007a20.643,20.643,0,0,1,6.437,1.08h0A14.109,14.109,0,0,1,17.6,34.2,1,1,0,0,1,17,36a.989.989,0,0,1-.6-.2,10.642,10.642,0,0,0-1.649-1A16.057,16.057,0,0,0,25.2,45.251a10.508,10.508,0,0,0-1-1.648A1,1,0,1,1,25.8,42.4a14.091,14.091,0,0,1,2.039,3.993v0A20.477,20.477,0,0,1,28.91,53.31a1,1,0,0,1-.737.935C26.894,54.6,26,55.316,26,56c0,.944,1.71,2,4,2s4-1.056,4-2c0-.684-.894-1.405-2.174-1.755a1,1,0,0,1-.736-.935,20.457,20.457,0,0,1,1.073-6.92h0v0h0A14.114,14.114,0,0,1,34.2,42.4,1,1,0,1,1,35.8,43.6a10.473,10.473,0,0,0-1,1.649A16.064,16.064,0,0,0,45.252,34.8a10.473,10.473,0,0,0-1.649,1A1,1,0,0,1,42.4,34.2a14.114,14.114,0,0,1,3.989-2.037h0a20.646,20.646,0,0,1,6.92-1.073,1,1,0,0,1,.935.736C54.6,33.106,55.316,34,56,34c.944,0,2-1.711,2-4s-1.056-4-2-4c-.684,0-1.405.894-1.755,2.173a1,1,0,0,1-.935.737,20.49,20.49,0,0,1-6.917-1.072h0A14.091,14.091,0,0,1,42.4,25.8,1,1,0,1,1,43.6,24.2a10.508,10.508,0,0,0,1.648,1A16.057,16.057,0,0,0,34.8,14.749a10.642,10.642,0,0,0,1,1.649,1,1,0,1,1-1.6,1.2,14.109,14.109,0,0,1-2.039-3.992h0A20.444,20.444,0,0,1,31.09,6.69a1,1,0,0,1,.736-.935C33.106,5.405,34,4.684,34,4c0-.944-1.711-2-4-2s-4,1.056-4,2c0,.684.894,1.406,2.173,1.755a1,1,0,0,1,.737.935,20.486,20.486,0,0,1-1.072,6.919h0A14.084,14.084,0,0,1,25.8,17.6a1,1,0,1,1-1.6-1.2,10.565,10.565,0,0,0,1-1.649A16.061,16.061,0,0,0,14.749,25.2a10.565,10.565,0,0,0,1.649-1,1,1,0,0,1,1.2,1.6,14.084,14.084,0,0,1-3.992,2.039h0A20.444,20.444,0,0,1,6.691,28.91a1,1,0,0,1-.936-.736C5.406,26.894,4.684,26,4,26c-.944,0-2,1.71-2,4S3.056,34,4,34Zm32-9c2.757,0,5,1.794,5,4s-2.243,4-5,4-5-1.794-5-4S33.243,25,36,25ZM32,36c0,2.206-2.243,4-5,4s-5-1.794-5-4,2.243-4,5-4S32,33.794,32,36ZM25,20c2.757,0,5,1.794,5,4s-2.243,4-5,4-5-1.794-5-4S22.243,20,25,20Z"/><path d="M41.429,16.123a18.208,18.208,0,0,1,2.448,2.448,20.22,20.22,0,0,1,3.377-4.278,1,1,0,0,1,1.181-.143c1.17.665,2.288.783,2.778.292.666-.665.2-2.623-1.412-4.246s-3.577-2.075-4.244-1.409c-.491.491-.372,1.608.293,2.779a1,1,0,0,1-.143,1.181A20.209,20.209,0,0,1,41.429,16.123Z"/><path d="M11.566,14.15a1,1,0,0,1,1.181.143,20.177,20.177,0,0,1,3.376,4.278,18.267,18.267,0,0,1,2.448-2.448,20.177,20.177,0,0,1-4.278-3.376,1,1,0,0,1-.143-1.181c.665-1.171.783-2.289.293-2.779-.665-.663-2.623-.2-4.247,1.412s-2.075,3.578-1.409,4.244C9.278,14.933,10.4,14.815,11.566,14.15Z"/><path d="M45.557,51.213c.667.666,2.623.2,4.248-1.412s2.074-3.578,1.408-4.244c-.491-.49-1.608-.372-2.778.293a1,1,0,0,1-1.182-.143,20.273,20.273,0,0,1-3.376-4.278,18.15,18.15,0,0,1-2.448,2.448,20.273,20.273,0,0,1,4.278,3.376,1,1,0,0,1,.143,1.182C45.185,49.605,45.066,50.723,45.557,51.213Z"/></svg>
              </div>
            
              
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">
              <p class="font-semibold animate-bounce text-[11px]">Illnesses</p>
              <hr class="w-7 h-[0.2rem] bg-japaneseindigo">
          </div>
          <div class="flex flex-row w-full px-[8rem] gap-6 mt-10">
            <div class="flex flex-col items-center" data-aos="fade-right" data-aos-delay="300" data-aos-duration="2000" data-aos-easing="ease-in-out">
              <h1 class="text-xl text-japaneseindigo font-bold">
                Mission
              </h1>
              <span class="text-[0.8rem] mt-2 mx-32 text-justify w-full text-japaneseindigo">
                Agape Charity's mission is to transform lives and communities through selfless love and compassionate action. We strive to alleviate poverty, promote education, protect the environment, champion human rights, and foster community development. Guided by our unwavering commitment to serving those in need, we empower individuals, create sustainable change, and inspire a global movement of compassion.
               </span>
            </div>
            <div class="flex flex-col items-center" data-aos="fade-left" data-aos-delay="300" data-aos-duration="2000" data-aos-easing="ease-in-out">
              <h1 class="text-xl text-japaneseindigo font-bold">
                Vision
              </h1>
              <span class="text-[0.8rem] mt-2 mx-32 text-justify w-full text-japaneseindigo">
                Our vision is a world where every person, regardless of their circumstances, has access to basic needs, opportunities for growth, and a sense of dignity. We envision communities united in solidarity, where love and empathy prevail, and where the most vulnerable are supported and uplifted. Through our unwavering dedication, we aim to be a catalyst for positive change, shaping a future where social justice, equality, and compassion reign supreme. Together, we can build a world filled with hope, where everyone has the chance to thrive and live a life of purpose.
               </span>
            </div>
            
          </div>
      </div>
  


    </div>
    


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

