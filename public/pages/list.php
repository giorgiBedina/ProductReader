<!DOCTYPE html>
<html>
<head>
		<title>product list</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../assets/css/list.css">
		<script src="../assets/js/list.js"></script>
</head>
<body>
	<form action="../../View/viewpage/delete.php" method="post">
		<div class="mass">
			<h1>Product list</h1>
			<a href="add.php">Product add</a>
			<div id="massDelete">
				<input id="massCheck" type="button" onclick='selectAll()' value="check boxes"/>
				<input id="massUnCheck" style="display:none" type="button" onclick='UnSelectAll()' value="uncheck boxes"/>
				<input id="apply" type="submit" name="delete" value="delete"/>
			</div>
		</div>
		<hr/>
		<div class="content">
		<?php
		include_once '../../View/viewpage/readList.php';
		$con = Dbh::getLink();
		$sql = "SELECT * FROM product;";
		$result = $con->query($sql);
		while($row = $result->fetch()) {
			$id = $row['id'];
			$type = $row['type'];
			readList::readData($id,$type);
		}
		 ?>
		</div>
</form>
</body>
</html>
