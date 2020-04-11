<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Electricity bill</title>
	<style type="text/css">
	body
	{
		background-color: #0D0D0D;
	}

		.container
		{

			color: white;
			width: 30%;
			height: 50%;
			margin-left: 120px;
			padding-top: 10%;
		}
		h1
		{
			padding-top: 2%;
			letter-spacing: 2px;
			text-align: center;
			color: white;
			text-transform: uppercase;
		}
		span
		{
			color: #F25749;

		}
		h4
		{	
			font-size: 22px;
			margin-left: 375px;
			color: #D7D7D9;
			letter-spacing: 6px;
		}
		.box
		{
			width: 550px;
			height: 400px;
			background-color: transparent;
			float: right;
			margin-right: 100px;
		}
		.b1
		{
			margin-top: 40px;
			height: 80px;
			width: 450px;
			background-image: linear-gradient(to bottom right,#B540E1, #797FF2);
		}
		.b2
		{
			margin-top: 40px;
			height:80px;
			width: 450px;
			background-image: linear-gradient(to bottom right, #F00B51, #7366FF);
		}
		.b3
		{
			margin-top: 40px;
			height: 80px;
			width: 450px;
			background-image: linear-gradient(to bottom right, #F57336, #FFB733);
		}
		p
		{
			padding-top: 10px;
			padding-left: 30px;
			color: white;

			font-size: 30px;
		}
	</style>
</head>
<body>
	<h1>Welcome to <a href="https://fontmeme.com/fonts/bebas-neue-font/"><img src="https://fontmeme.com/permalink/200410/a39e7a33b529c10794004036d57f862b.png" alt="bebas-neue-font" border="0"></a></h1>
	<h4>The website for printing electricity bill</h4>
	<div class="box">
			<div class="b1">
				<p><b>Rs 9</b>&nbsp&nbsp&nbsp FOR FIRST&nbsp&nbsp&nbsp<b>50 UNITS</b></p>
			</div>

			<div class="b2">
				<p><b>Rs 12</b>&nbsp&nbsp&nbsp FOR NEXT&nbsp&nbsp&nbsp<b>50 UNITS</b></p>
			</div>

			<div class="b3">
				<p><b>Rs 15</b>&nbsp&nbsp&nbsp FOR NEXT&nbsp&nbsp&nbsp<b>50 UNITS</b></p>
			</div>
	</div>
	<div class="container">
		
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Unit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="unit" aria-describedby="emailHelp" placeholder="Enter Your Unit">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>

<div>
	<?php 

	if(isset($_POST['submit']))
	{
		$bill=0;
		$unit=$_POST['unit'];
		if ($unit>0)
		{
			if ($unit<=50)
			{
				$bill=$unit*9;
			}
			elseif ($unit>50 AND $unit<=100)
			{
				$unit=$unit-50;
				$bill=(50*9)+($unit*12);
			}
			else
			{
				$unit=$unit-100;
				$bill=(50*9)+(50*12)+($unit*15);
			}
		}
		echo "Total Unit: ".$unit."<br>";
		echo "Total Payable Ammount: ".$bill;
	}
 ?>
</div>
</div>
</body>
</html>