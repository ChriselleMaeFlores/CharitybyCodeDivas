<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php 
			$head="";
		?>
		<h1><?php echo $head; ?></h1>
	</head>

	<style>

	

		*{
			box-sizing: border-box;
			

		}
		.whole
		{
			margin-top: -21px;
			background-color: #cccccc;
			margin-left: -9px;
			margin-right: -1%;
			margin-bottom: -47px;
			padding-top: 20px;
			padding-bottom: 20px;
			height: 696px;
			display: grid;
			grid-template-columns: 30% 40% 30%;
			grid-template-rows: 10px;
			grid-template-areas: 
				"lft cntr rght";


		}
		/************************************/

		.left
		{
			position: fixed;
			height: 676px;
			grid-area: lft;

		}
		.right
		{
			position: fixed;
			height: 676px;
			grid-area: rght;

		}
		.center
		{
			display: grid;
			background-color: #ffffff;
			height: 670px;
			grid-area: cntr;
			box-shadow: 0px 0px 5px 3px #969696;
			z-index: 1;
			grid-template-columns: 20% 25% 25% 30%;
			grid-template-rows: 20% 80%;
			grid-template-areas: 
				"tup tup tup tup"
				"blft blft blft brght"
		}


		/************************************/

		.tbar
		{
			display: grid;
			grid-area: tup;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-top: -20px;
			grid-template-columns: 18% 82%;
			grid-template-rows: 110% 110%;
			grid-template-areas: 
			"tb_l tb_r"
			
		}
		.lbar
		{
			grid-area: blft;
			background-color: #FFFFFF;
			
		}
		.rbar
		{
			grid-area: brght;
			background-color: #F0DEEC;

			
		}


		.tbar_r{
			grid-area: tb_r;
			background-color: #3A3E41;
			padding-left: 5px;
		}

		.tbar_l{
			grid-area: tb_l;
			background-color: #E9CCE2;
		}

    /************************************/
		.p1{
			font-size: 12px;
			font-family: sans-serif;
			color: #F0DEEC;
			margin-left: 20px;
			margin-top: -10px;
		}
		.ht1{
			font-family: Helvetica;
			font-size: 24px;
			color: #F0DEEC;
			margin-top: -88px;
			margin-left: 20px;
		}
		.pic{
			max-height: 90px;
			max-width: 160px;
			margin-left: -80px;
			margin-top: 25px;
			border-radius: 10%;
		}
	
	  /************************************/

	  .ht2{
	  	font-family: Helvetica;
	  	font-size: 18px;
		color: #F096EC;
		margin-left: 10px;
	  }
	  .ht3{
	  	font-family: Helvetica;
	  	font-size: 18px;
		color: #F096EC;
		margin-left: 10px;
		margin-top: 40px;
	  }
	  .ht4{
	  	font-family: Helvetica;
	  	font-size: 18px;
		color: #3A3E41;
		margin-left: 6px;
	  }
	  .ht5{
	  	font-family: Helvetica;
	  	font-size: 18px;
		color: #3A3E41;
		margin-left: 6px;
	  }



	  .p2{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 14px;
	  	font-weight: bolder;
	  	margin-left: 20px;
	  	margin-top: -130px;
	  	position: absolute;
	  }
	  .p3{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 14px;
	  	font-weight: bolder;
	  	margin-left: 20px;
	  	margin-top: -50px;
	  	position: absolute;
	  }
	  .p4{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 14px;
	  	font-weight: bolder;
	  	margin-left: 20px;
	  	margin-top: -10px;
	  }
	  .p5{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 14px;
	  	font-weight: bolder;
	  	margin-left: 20px;
	  	margin-top: 20px;
	  }
	  .p6{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 12px;
	  	margin-left: 30px;
	  	margin-top: -10px;
	  }
	  .p7{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 12px;
	  	margin-left: 30px;
	  	margin-top: -10px;
	  }
	  .p8{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 12px;
	  	margin-top: 70px;
	  	margin-left: 30px;
	  }
	  .p9{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 12px;
	  	margin-top: 25px;
	  	margin-left: 30px;
	  }
	  .p10{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 12px;
	  	margin-left: 30px;
	  	margin-top: -95px;
	  }
	  .p11{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 12px;
	  	margin-left: 30px;
	  	margin-top: 70px;
	  	margin-right: 10px;
	  }
	  .p13{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 11px;
	  	margin-left: 10px;
	  	margin-top: -10px;
	  	margin-right: 10px;
	  }
	  .p14{
	  	color:#3A3E41;
	  	font-family: Helvetica;
	  	font-size: 11px;
	  	margin-left: 10px;
	  	margin-top: 0px;
	  	margin-right: 10px;
	  }
	  




	</style>
	<body>

		<?php 
			$fullname="CHRISELLE MAE B. FLORES";
			$add="Blk 218 Lot 04 Lotus St., Pembo, Makati City";
			$moem="mobile: +63 926 091 7222 | email: chriselleflores.101301@gmail.com";
		?>
<!----------------------------------------------------------->
		<div class="whole">
			<!----------------------------------------------->

			<div class="left">
				

			</div>
			<!----------------------------------------------->
			<div class="center">
				<div class="tbar">
					
					<div class="tbar_l">
						
					</div>

					<div class="tbar_r">
						<img class="pic" src="chris.jpg">

						<h3 class="ht1">
							<?php echo $fullname; ?>
						</h3>
						<p class="p1">
							<?php echo $add; ?>
							<br>
							<?php echo $moem; ?>
						</p>
					</div>

				</div>

				<div class="lbar">
						<h3 class="ht2">
							<?php echo("PROJECTS & VOLUNTEER WORK") ?>
						</h3>

						<p class="p9">
							<?php echo("- September 2021 to September 2021") ?>
						</p>

						<p class="p8">
							<?php echo("- August 2019 to March 2020") ?>
						</p>
						<p class="p2">
							<?php echo("DOLE TUPAD PROGRAM") ?>
						</p>

						<p class="p3">
							<?php echo("Research Study / Undergraduate Thesis") ?>
						</p>
						<p class="p10">
							<?php echo("- Kalinga Partylist") ?>
						</p>
						<p class="p11">
							<?php echo("- The Antibacterial Effects of Leaf Extract of Psidium Guajava on Escherichia Coli and Staphylococcus Aureus: Basis for the Development of Natural Antibacterial Dishwashing Liquid.") ?>
						</p>


						<h3 class="ht3">
							<?php echo("EDUCATIONAL BACKGROUND") ?>
						</h3>

						<p class="p4">
							<?php echo("University of Makati") ?>
						</p >
						<p class="p7">
							<?php echo nl2br("- June 2018 - March 2020\r\n- Makati, Metro Manila, Philippines \r\n-  Science, Technology, Engineering, and Mathematics") ?>
						</p>

						<p class="p5">
							<?php echo("University of Makati") ?>
						</p>

						<p class="p6">
							<?php echo nl2br("- August 2020 - March 2022\r\n- Makati, Metro Manila, Philippines \r\n-  Bachelor of Science in Information Technology") ?>
						</p>
						
						
					
				</div>

				<div class="rbar">

						<h3 class="ht4">
							<?php echo nl2br("ABOUT") ?>
						</h3>
						<p class="p13">
							<?php echo nl2br("I am ambitious and hardworking individual, with skills and experience in programming languages. Furthermore, I am adept at handling multiple tasks on a daily basis competently and at working well under pressure. And lastly, I believe that in order to deliver the best results; the key is communication and building strong relationships with other people.") ?>
						</p>
						<h3 class="ht5">
							<?php echo nl2br("SKILLS AND ABILITIES") ?>
						</h3>
						<p class="p14">
							<?php echo nl2br("&#8226; Satisfactory oral and written communication skills. \r\n&#8226; Ability to create letters, memos, reports, and email contents. \r\n&#8226; Proficient in basic computer applications, as well as the internet. \r\n&#8226; Abiliy to empathize during difficult situations. \r\n&#8226; Ability to work on a team. \r\n&#8226; Programming Skills (Java, Html, Css, Php, Mysql, Python)") ?>
						</p>
						


				</div>


			</div>
			<!----------------------------------------------->
			<div class="right">



			</div>
			<!----------------------------------------------->
		</div>
<!----------------------------------------------------------->
		<br/>
		<br/>



	</body>
</html>

