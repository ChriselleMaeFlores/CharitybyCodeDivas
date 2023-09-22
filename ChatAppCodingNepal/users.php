<?php 
  session_start();
  include_once "db.php";

/*  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }*/

if (!isset($_SESSION['unique_id'])){
    $emm = "Login/Register first to access this section";
    header("Location: notlogin.php?error=$emm");


    //header('location: ../unauthorizedAccessNoAccount.php');
}

/*if((isset($_SESSION["role"])) && ($_SESSION["role"] == 'client') && ($_SESSION["verification"] != 'verified') ) {
    echo "<script> alert('Get Verified first to access this section')</script>";
    //header("Location: ../unauthorizedAccessNotVerified.php");
    exit();
}

if((isset($_SESSION["role"])) && ($_SESSION["role"] == 'landlord') && ($_SESSION["verification"] != 'verified') ) {
    //header("Location: ../unauthorizedAccessNotVerified.php");
    exit();
}

/*if((isset($_SESSION["role"])) && ($_SESSION["role"] == 'landlord')) {
    header("Location: ../unauthorizedAccessClientOnly.html");
    exit();
}*/


/*$id =  $_SESSION["id"];
$sql_u = "SELECT * FROM users WHERE id ='$id'";
$res_u = mysqli_query($conn, $sql_u);*/


?>

<?php include_once "header.php"; ?>

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
              <img class="w-24 h-10" src="../otherlogo_rb.png" alt="">
          </div>
          
          <div class="w-[50rem] h-16 absolute inset-y-0 right-[85px]">
              <ul class="flex flex-row w-[50rem] h-16 justify-center items-center ">
                  <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                    <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem] hover:animate-pulse" href="../home.php">Home</a>
                  </li>
                  <li  id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"  class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                      <a class="dropdown group-hover:block relative inline-block font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem] hover:animate-pulse" href="../about.php">About        
                      </a>
                  </li>
                  <div id="dropdownHover" class="z-10 hidden bg-white rounded-lg shadow w-[130px]">
                      <ul class="flex flex-col divide-y divide-japaneseindigo items-center py-2 text-xs text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                          <li>
                              <a href="../about.php#who" class="text-center w-[121px]  block text-japaneseindigo px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-japaneseindigo">Who We Are</a>
                          </li>
                          <li>
                              <a href="../about.php#where" class="text-center w-[121px]  block text-japaneseindigo px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-japaneseindigo">Where We Work</a>
                          </li>
                          <li>
                              <a href="../about.php#our" class="text-center w-[121px]  block text-japaneseindigo px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-japaneseindigo">Our Work</a>
                          </li>
                      </ul>
                  </div>
  
                  <li class="px-2 border-l-[1px] border-japaneseindigo flex w-[7rem] justify-center items-center">
                    <a class="font-medium text-center text-[0.8rem] text-japaneseindigo hover:text-pastelred hover:text-[0.85rem]" href="#">Who We Help</a>
                  </li>
                  <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                    <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="#">Events</a>
                  </li>
                  <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                      <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="#">Stories</a>
                    </li>
                  <li class="px-3 border-l-[1px] border-japaneseindigo flex justify-center items-center">
                    <a class="font-medium text-japaneseindigo text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="users.php?unique_id=<?php echo $_SESSION['unique_id']?>">Chat</a>
                  </li>
  
                  <li class="mx-1 px-3 h-[2.5rem] bg-pastelred border-3 hover:bg-japaneseindigo hover:px-[15px] hover:h-[2.7rem] text-center rounded-lg
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
                      <a class="font-medium text-pastelred text-[0.8rem] hover:text-pastelred hover:text-[0.85rem]" href="../account.php">Account</a>
                  </li>
              </ul>
          </div>
  
          <div class="w-24 h-16">
            
          </div>
          
      </div>















  <div class="flex my-5 justify-center items-center h-[20rem] max-h-[40rem]">
        <div class="wrapper">
          <section class="users">
            <header>
              <div class="content">
                <?php 


      /**********  MAKE SURE YOUR DATABASE IS BACK TO 0 or ID is 1 , kasi magkaka ERROR talaga yan  *********/

                  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id={$_SESSION['unique_id']}");
                  if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                  }

          

                ?>



                <img src="../profileImages/<?php echo $row['pp']; ?> ">
                
                <div class="details">
                  <span><?php echo ucfirst($row['username'])?></span>
                  <span><?php echo $row['unique_id']?></span>
                  <p style="color: limegreen;"><?php echo $row['statuses']; ?></p>
                </div>
              </div>

                  <a href="javascript:history.go(-1)" class="logout">Back</a>

              
            </header>
            <div class="search">
              <span class="text">Select an user to start chat</span>
              <input type="text" placeholder="Enter name to search...">
              <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
        
            </div>
          </section>
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






  <script src="javascript/users.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    
</body>
</html>
