<!DOCTYPE html>
<html>
<head>
	<title>product add</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/add.css">
	<script src="../assets/js/add.js"></script>
</head>
<body>
	<form action="../../View/addpage/add.php" method="post">
		<div class="save">
			<h1>Product add</h1>
			<a href="list.php">Product list</a>
			<button type="submit" name="save">Save</button>
		</div>
		<hr/>
		<div class = "all">
				<p>SKU</p>
				<input type="text" name="sku" placeholder="Enter SKU code :">
				<br>
				<p>Name</p>
				<input type="text" name="name" placeholder="Enter product name :">
				<br>
				<p>Price</p>
				<input type="text" name="price" placeholder="Enter product price :">
				<br>
				<p>Select Type</p>

				<select id="selectBox" name="select">
					<option value="disc" name="disc">Disc</option>
					<option value="furniture" name="furniture">Furniture</option>
					<option value="book" name="book">Book</option>
				</select>

				<button id="select" type="button"  name="selectButton" onclick="displayForm()">Select</button>
		</div>

		<div id="size">
				<p>Size</p>
				<input type="text" name="discSize" placeholder="Enter disc size :">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>

		<div  id="dimentions" >
				<p>Height</p>
				<input type="text" name="height" placeholder="Enter furniture height :">
				<br>
				<p>widtht</p>
				<input type="text" name="width" placeholder="Enter furniture width :">
				<br>
				<p>Lenght</p>
				<input type="text" name="lenght" placeholder="Enter furniture lenght :">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>

		<div id="weight">
				<p>Weight</p>
				<input type="text" name="bookWeight" placeholder="Enter book weight :">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>

		<div id="none" style="display: block">
			<p>Choose Type</p>
		</div>
	</form>
</body>
</html>
