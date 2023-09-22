<?php 
session_start();

include "db_conn.php";
include 'php/User.php';
$user = getUserById($_SESSION['id'], $conn);

if (!isset($_SESSION['id'])){
    echo "<script> alert('Log in to access this section')</script>";
    header('location: login.php');
}

//if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

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

    <!-- Tailwind Elements styles -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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

    <div class="sticky top-[1.3rem] flex flex-row col-span-3 h-16 bg-white shadow-md z-30 flex-wrap">
        
        <div class=" flex-1 flex ml-3 items-center w-52 h-16 absolute inset-y-0 left-[77px]">
            <img class="w-24 h-10" src="otherlogo_rb.png" alt="">
        </div>
        
        <div class="w-[48rem] h-16 absolute inset-y-0 right-[85px]">
            <ul class="flex flex-row w-[48rem] h-16 justify-center items-center ">
                <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                  <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem] hover:animate-pulse" href="index.php">Home</a>
                </li>
                <li  id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"  class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                    <a class="dropdown group-hover:block relative inline-block font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem] hover:animate-pulse" href="about.php">About        
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
                    <a class="font-medium text-pastelred text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="account.php">Account</a>
                </li>
            </ul>
        </div>

        <div class="w-24 h-16">
          
        </div>
        
    </div>



















   <div class="flex flex-row px-[90px] h-[450px] bg-slate-100 gap-10 justify-center items-center ">
    
        <div class="flex flex-col w-3/12 h-[400px] bg-white shadow border-2 border-y-red-300 ">
            <div class="flex flex-col justify-center items-center mt-5">
                <div class="w-[150px] h-[150px] bg-slate-300 rounded-full img-fluid">
                
                        <img src="profileImages/<?=$user['pp']?>" class="img-fluid rounded-full w-full h-full">
                </div>
                <h3 class="display-4 mt-3 text-[18px] font-normal"><?=ucfirst($user['username'])?></h3>
                <h3 class="display-4 mt-1 text-[10px] font-bold font-Wsans"><?=strtoupper($user['loginas'])?></h3>
                
                <div class="flex flex-col w-full mt-[30px] px-10">
                    <a href="edit.php" class="w-full h-4/12 border-b-[1px] border-japaneseindigo  text-center py-[10px] text-med font-extrabold flex justify-center items-center hover:font-extrabold hover:text-med">
                        Edit Profile 
                    </a>
                    <a class="w-full h-4/12 text-center py-[10px] border-b-[1px] border-japaneseindigo text-[13px] flex justify-center items-center hover:font-extrabold hover:text-med">
                        Add a Payment Method
                    </a>
                    <a class="w-full h-4/12 text-center py-[10px] text-[13px] flex justify-center items-center hover:font-extrabold hover:text-med">
                        See Total Donations
                    </a>
                </div>
                
            </div>
            
        </div>

        <div class="flex flex-col w-9/12 h-[400px] bg-white shadow border-2 border-y-red-300 items-center">
            
            <div class="flex flex-col w-[90%] justify-center items-center mt-4">
                
                
                    
                        <?php if ($user) { ?>

                            
                                        
                            <form class="w-full p-3" 
                                action="php/edit.php" 
                                method="post"
                                enctype="multipart/form-data">

                                
                                <!-- error -->
                                <?php if(isset($_GET['error'])){ ?>
                                <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']; ?>
                                </div>
                                <?php } ?>
                                
                                <!-- success -->
                                <?php if(isset($_GET['success'])){ ?>
                                <div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-100  dark:border-green-800" role="alert">
                                <?php echo $_GET['success']; ?>
                                </div>
                                <?php } ?>
                            <div class="mb-7">
                                <label class="form-label">Email</label>
                                <input type="text" 
                                    class="form-control w-[628px] h-10"
                                    name="fname"
                                    value="<?php echo ($user['fname'])?>">
                            </div>

                            <div class="mb-5">
                                <label class="form-label">Username</label>
                                <input type="text" 
                                    class="form-control w-[595px] h-10"
                                    name="uname"
                                    value="<?php echo $user['username']?>">
                            </div>

                            <div class="flex flex-row">
                                    <h1 class="mt-[22px] w-2/12">
                                            Change Photo 
                                    </h1>
                               
                                <div class="flex flex-col mt-3 bg-slate-200 h-[38px] w-10/12 rounded-full">
                                        <input type="file" class="form-control" name="pp">
                                </div>
                            </div>
                           

                        
                            <div class="flex flex-row mt-[100px] gap-[440px]">
                                <div class="absolute inset-x-[36%] w-[80px] top-[460px] rounded-lg text-japaneseindigo px-4 py-1 shadow-lg font-medium text-[14px] border-10 bg-middleblue hover:bg-[#2c8a86] hover:text-white" >
                                    <button type="submit">Update</button>

                                </div>

                                
                                    <a href="logout.php" class="absolute inset-x-[81%] w-[78px] top-[460px] rounded-lg text-white px-4 py-1 shadow-lg font-medium text-[14px] bg-pastelred hover:bg-[#d65151] hover:text-white">
                                        Logout
                                    </a>
                               
                            </div>
                           

                            </form>
                        </div>
                        <?php }else{ 
                            header("Location: account.php");
                            exit;

                        } ?>
                      
                
                
            </div>
        
            
        </div>
   </div>
     

      


      


    
   <div class="flex flex-row col-span-3 h-[15.5rem] bg-japaneseindigo items-center justify-center">
      
    
      
      <div class="flex w-5/12 flex-col ms-[85px]"> 
          <div>
              <img class="w-24 h-10" src="logo_white.png" alt="">
              <h1 class="text-white text-[12px] leading-normal mt-[21px] ms-1 me-20 text-justify font-medium">
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

          
      </div>

       <div class="flex w-7/12 h-48 flex-row bg-[#3f4f57] right-3 me-[85px] py-10 px-6 gap-[58px] justify-center">
          <div class=" flex-col text-white text-[10px] gap-[5px] ">
              <h1 class="text-[14px] font-bold">
                  Who We Help
              </h1>
              <div href="" class="hover:underline font-normal mt-1 hover:text-white">
                  > PWD
              </div>
              <div href="" class="hover:underline font-normal hover:text-white">
                  > People with Illnesses
              </div>
              <div href="" class="hover:underline font-normal hover:text-white"> 
                  > Students
              </div>
              <div href="" class="hover:underline font-normal hover:text-white">  
                  > Affected By Conflicts 
                   & Disasters
              </div>
              <div href="" class="hover:underline font-normal hover:text-white">
                  > Animals/Pets
              </div>
              <div href="" class="hover:underline font-normal hover:text-white">
                  > Environments
              </div>
              
          </div>
          <div class="flex flex-col text-white text-[10px]  gap-[5px] font-medium"> 
                  <h1 class="text-[14px] font-bold"> 
                      Events
                  </h1>
                  <a href="" class="hover:underline font-normal hover:text-white">
                      > Past Events
                  </a>
                  <a href="" class="hover:underline font-normal hover:text-white">
                      > Current Events
                  </a>
                  <a href="" class="hover:underline font-normal hover:text-white">
                      > Upcoming Events
                  </a>
                
                  
          </div>
          <div class="flex flex-col text-white text-[10px]  gap-[5px] font-medium"> 
                  <h1 class="text-[14px] font-bold">
                      Stories
                  </h1>
                  <a href="" class="hover:underline font-normal hover:text-white">
                      > Features
                  </a>
                  <a href="" class="hover:underline font-normal hover:text-white">
                      > Articles
                  </a>
                  <a href="" class="hover:underline font-normal hover:text-white">
                      > Blog
                  </a>
                  
          </div>
          <div class="flex flex-col text-white text-[10px]  gap-[5px] font-medium"> 
                  <h1 class="text-[14px] font-bold">
                      About
                  </h1>
                  <a href="about.php#who" class="hover:underline font-normal hover:text-white">
                      > Who We Are

                  </a>
                  <a href="about.php#where" class="hover:underline font-normal hover:text-white">
                      > Where We Work
                      
                  </a>
                  <a href="about.php#our" class="hover:underline font-normal hover:text-white">
                      > Our Work
                      
                  </a>
                 
          </div>
      </div>
  </div>
  <div class="col-span-3 h-[0.05rem] bg-white-300">
      
  </div>
  <div class="flex col-span-3 h-[1.5rem] bg-japaneseindigo justify-center items-center">
      <h1 class="text-white text-[10px] mt-[0rem]">
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

