<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRATION FORM</title>
</head>
<style>

body {
    background-image: url('bg (2).png');
    background-size: 100% 110%;
    background-position: 0% 0%;
    background-repeat: no-repeat;
    margin: 0; /* To remove default body margin */
    padding: 0; /* To remove default body padding */
    height: 100vh;
}

		
		h1 {
			font-family: 'Kanit', sans-serif;
			font-size: 50px;
		}

		h2 {
			font-family: Arial;
			margin-top: -20px;
			margin-left: 150px;
		}

		h3 {
			font-family: 'Kanit', sans-serif;
		}

	    .Whole
		{
			margin-top: 0px;
			height: 650px;
			display: grid;
			grid-template-columns: 10% 80% 10%;
			grid-template-rows: 0px;
			grid-template-areas: 
				"lft cntr rght"

		}
		/************************************/

		.Left
		{
			height: 630px;
			grid-area: lft;

		}
		.Right
		{
			height: 630px;
			grid-area: rght;
		}
		.Center
		{
			color: #ffffff;
			margin-top: 39px;
			margin-left: 30px;
			margin-right: 29px;
			background-color: #32425c;
			height: 577px;
			grid-area: cntr;
			display: grid;
			grid-template-columns: 30% 70%;
			grid-template-rows: 0px;
			grid-template-areas: 
				"left right"
		}

		.CL
		{
			grid-area: left;

		}

		.CR
		{
			padding-left: 130px;
			margin-top: 50px;
			grid-area: right;
			background-color: #000000;
			font-family: Helvetica;
		}

		.pic
		{
			position: absolute;
			width: 500px;
			margin-left: -10px;
			margin-top: -10px;
		}
		.pic3
		{
			height: 577px;
		}

		.CName 
		{
			margin-top: 35px;
			margin-bottom: -20px;

		}

		.add, .dob, .gen, .monsal, .cobow
		{
			margin-top: -5px;
			margin-bottom: -20px;
		}


		.mal
		{
			margin-top: -20px;
			padding-left: 40px;
		}
		.femal
		{
			margin-top: -35px;
			padding-left: 120px;
		}

		.nts {
			margin-top: -35px;
			padding-left: 210px;
		}
		
		.ofadd
		{
			margin-top: 15px;
		}
		.phnum
		{
			margin-top: -30px;
			margin-left: 275px;
		}
		.offnum
		{
			margin-top: -15px;
		}
		.no
		{
			margin-left: 26px;
			width: 242px;
		}
		.emps
		{
			margin-left: 26px;
			width: 250px;
		}

		.posi
		{
			margin-top: -15px;
		}
		.pos
		{
			margin-top: -5px;
		}
		
		.empstat
		{
			margin-top: -30px;
			margin-left: 275px;
		}
		.CName,
		 .add, .cont1, .dob, .gen, .ofadd, .phnum, .pos, .empstat, .monsal, .cobow, .mal, .femal, .nts
		{
			font-size: 12px;
		}
		.sub
		{
			margin-left: 275px;
			width: 150px;
		}
		.cl
		{
			margin-left: 10px;
			width: 100px;
		}
		.mosall
		{
			width: 528px;
		}
		.cob
		{
			width: 520px;
		}
		.ofii, .posii, .adr
		{
			width: 240px;
		}
		
		.cont1
		{
			margin-top: -60px;
			margin-left: 275px;
			margin-bottom: -20px;
		}
		.cont2
		{
			margin-left: 275px;
			width: 245px;
		}

		.pic{
			height: 759px;
			width: 1442px;
		}
	
		
		.sub{
			position: absolute;
			background-color: lightblue;
			padding: 1px 0px 1px 0px;
			font-size: 12px;
			margin-top: 10px;
			margin-left: 378px;
		}
		.cl{
			position: absolute;
			background-color: lightblue;
			padding: 1px 0px 1px 0px;
			font-size: 12px;
			margin-top: 10px;
			margin-left: 270px;
		}


		.MI {
			width: 170px;
		}

		.YY {
			width: 520px;
		}

		.Lab1 {
			color: white;
			margin-left: 180px;
			font-size: 12px;
			margin-top: -14px;
			margin-bottom: -16px;
		}
		.back{
			position: absolute;
			color: aqua;
			text-decoration: none;
			background: none;
			border-bottom: solid 2px aqua ;
			padding: 0px 2px 0px 2px;
			font-size: 12px;
			margin-top: 10px;
			margin-left: 1px;
		}
		.back:hover {
			font-size: 13px;
		}.cl:hover , .sub:hover {
			font-size: 13px;
		}


</style>
<body>
	<div class="Whole">


		<div class="Left">
			
		</div>

		<div class="Center">
			<div class="CL">
				<img class="pic3" src="left.png">
			</div>

			<div class="CR">
				
				<h2><b>REGISTRATION FORM</b></h2>
				<h4 class="Lab1"><b>Laboratory Activity Number #1</b></h4>
				<?php
					if (isset($_POST['submit'])) {
						$lname=$_POST["lastname"];
						$gname=$_POST["givenname"];
						$mname=$_POST["middleinitial"];
						$address=$_POST["address"];
						$contact=$_POST["contact"];
						$birth=$_POST["birth"];
						$gender=$_POST["gender"];
						$officeaddress=$_POST["officeaddress"];
						$pnumber=$_POST["pnumber"];
						$position=$_POST["position"];
						$employmentstat=$_POST["employmentstat"];
						$mosal=$_POST["mosal"];
						$coborrow=$_POST["coborrow"];
					}
				?>

				<form action="11info.php" method="POST">

					<h4 class="CName" align="left">Complete Name:</h4>
					<h5 class="cna">
						<input class="LN" type="text" name="lastname" placeholder="Last Name" required>
						<input class="GN" type="text" name="givenname" placeholder="Given Name" required>
						<input class="MI" type="text" name="middleinitial" placeholder="Middle Initial" required></td>
					</h5>

					<h4 class="add" align="left">Address: </h4>

					<h5 class="ad">
				  		<input class="adr" type="text" name="address" required>
				  	</h5>

				  	<h4 class="cont1" align="left">Contact Number: </h4>

				  	<h5 class="ad">
				  		<input class="cont2" type="text" maxlength="13" name="contact" placeholder="0000-000-0000" required>
				  	</h5>
				 
					<h4 class="dob" align="left">Date of Birth:</h4>

					<h5 class="date">
				 		<input class="YY" type="date" name="birth" required>
					</h5>
						
				 	
				 	<h4 class="gen" align="left">Gender: </h4>

				 	<h5 class="gend">
						<h4 class="mal">Male<input type="radio" name="gender" value="Male" required></h4>
						<h4 class="femal">Female<input type="radio" name="gender" value="Female" required></h4>
						<h4 class="nts">Prefer not to say<input type="radio" name="gender" value="Prefer not to say" required></h4>
					</h5>

					<h4 class="ofadd" align="left">Office Address:</h4>
					<h4 class="phnum" align="left">Phone Number:</h4>

					<h5 class="offnum">
						<input class="ofii" type="text" name="officeaddress" required>
						<input class="no" type="text"  name="pnumber" maxlength="13" placeholder="0000-000-0000" required>
					</h5>
				 	
				 	<h4 class="pos" align="left">Position:</h4>
					<h4 class="empstat">Employment Status:</h4>

					<h5 class="posi">
						<input class="posii" type="text" name="position" required>
						<select class="emps" name ="employmentstat" id="employmentstat">
							<option value="Permanent">Permanent</option>
							<option value="Casual">Casual</option>
						</select>
					</h5>
					
					<h4 class="monsal">Monthly Salary:</h4>

					<h5 class="monsal2">
						<select class="mosall" name ="mosal" id="mosal">
							<option value="Below Php 10,000">Bellow Php 10,000</option>
							<option value="Php 10,000 - Php 20,000">Php 10,000 - Php 20,000</option>
							<option value="Above Php 20,000">Above Php 20,000</option>
						</select>
					</h5>
					
				

					<h4 class="cobow">Co-Borrower:</h4>

					<h5>
						<input class="cob" type="text" name="coborrow" required>
					</h5>

					<b><input class="sub" type="submit" value="SUBMIT FORM"></b>
					<b><input class="cl" type="reset" value="Clear"></b>
					
					<a class="back" href="11splash.php">Back to HomePage</a>
				</form>
			</div>

		</div>


		<div class="Right">
			
		</div>

	</div>
</body>
</html>