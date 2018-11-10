<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Soal Nomor 6</title>
</head>
<body>
	
	<table border="1" cellspacing="10" cellpadding="10" width="50%" align="center">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Jumlah Product</th>
		</tr>
		<?php

			$conn = new mysqli("localhost", "root", "", "db_product");

			$sql  = "SELECT * FROM product_categories";

			$res = $conn->query($sql);

			while ($rows = $res->fetch_object()) : ?>
		<tr align="center">
			<td><?= $rows->id ?></td>
			<td><?= $rows->name ?></td>
			<td>
				<?php
					$countProduct = "SELECT COUNT(name) AS jumlah_product FROM products WHERE category_id = $rows->id";
					$resCount     = $conn->query($countProduct);
					$rowsCount = $resCount->fetch_object();
					echo $rowsCount->jumlah_product;
				?>
			</td>
		</tr>
		<?php endwhile ?>
	</table>

</body>
</html>