<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MEMBERS INFORMATION</title>
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
		font-family: 'Oswald', sans-serif;
	}

	h3 {
		font-family: 'Yanone Kaffeesatz', sans-serif;
	}
	table,td{
		border: 1px solid black;
		width: 600px;
		background-color: lightblue;
		color: black;
		padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 5px;
		padding-right: 5px;
		margin-top: -25px;
	}



	    .Whole
		{
			margin-top: 0px;
			height: 650px;
			display: grid;
			grid-template-columns: 8% 84% 8%;
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
			margin-left: 10px;
			margin-right: 10px;
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
			padding-left: 90px;
			margin-top: 50px;
			grid-area: right;
			background-color: #000000;
			font-family: Helvetica;
		}
		.mem
		{
			padding-bottom: 30px;
		}

		.pic
		{
			height: 759px;
			width: 1442px;
			margin-left: -10px;
			margin-top: -10px;
		}

		.pic3
		{
			height: 577px;
		}

		.bck{
			background-color: lightblue;
			font-size: 20px;
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
				<center>
				<h2 class="mem"><b>MEMBERS INFORMATION:</b></h2>
				</center>
				<center>
				<table>	
				<tr>
					<td align="left"><b>COMPLETE NAME: </b></td>
					<td>
					<?php echo $_POST['lastname']; ?>, <?php echo $_POST['givenname']; ?> <?php  echo $_POST['middleinitial']; ?>
				     <br>
				     </td>
				</tr>    
				    
				<tr>
					<td align="left"><b>ADDRESS: </b></td>
					<td>
				    <?php
				           echo $_POST['address'];
				    ?>
				    <br>
				    </td>
				</tr>

				<tr>
					<td align="left"><b>CONTACT NUMBER:</b> </td>
					<td>
				    <?php
				           echo $_POST['contact'];
				    ?>
				    <br>
				    </td>
				</tr>

				<tr>
					<td align="left"><b>DATE OF BIRTH:</b> </td>
					<td>
				    <?php
				     	   echo $_POST['birth']; 
				    ?> 
				    <br>
				    </td>
				</tr> 

				<tr>  
					<td align="left"><b>GENDER:</b></td>
					<td>
				    <?php
				    		echo $_POST['gender'];
				    ?>
				    <br>
				    </td>	
				 </tr>

				 <tr>
				 	<td align="text"><b>OFFICE ADDRESS:</b></td>
				 	<td>
				    <?php
				            echo $_POST['officeaddress'];
				    ?>
				    <br>
				    </td>	
				</tr> 

				<tr>
					<td align="left"><b>PHONE NUMBER:</b></td>
					<td>
				    <?php
				            echo $_POST['pnumber'];
				    ?>
				    <br>
				    </td>	
				</tr>

				<tr>
					<td align="text"><b>EMPLOYMENT STATUS:</b></td>
					<td>
				    <?php
				    		echo $_POST['employmentstat'];
				    ?>
				    <br>
				    </td>	
				</tr>

				<tr>
					<td align="text"><b>MONTHLY SALARY:</b></td>
					<td>
				    <?php
				    		echo $_POST["mosal"];
				    ?>
				    <br>
				   	</td>
				</tr>

				<tr>
					<td align="left"><b>POSITION:</b></td>
					<td>
				    <?php
				            echo $_POST['position'];
				    ?>
				    <br>
				    </td>	
				</tr>

				<tr>
					<td align="left"><b>CO-BORROWER:</b></td>
					<td>
				    <?php
				            echo $_POST['coborrow'];
				    ?>
				    <br>
				    </td>	
				</tr>
				</center>
				</table>
				<br>

				<button class="bck" onclick="history.back()">Back to Form</button>
			</div>
		</div>

		<div class="Right">
			
		</div>

	</div>
</body>
</html>