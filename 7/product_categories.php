<?php 

	$sql = "SELECT * FROM product_categories";
	$res = $conn->query($sql);
	$no  = 1;
?>


<div class="collapse text-center mt-5" id="ProductsCategories">
	<div class="card text-white bg-danger mb-3">
		<div class="card-header">Kategori Produk</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($rows = $res->fetch_object()) : ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $rows->name ?></td>
					</tr>
					<?php $no++; endwhile ?>
				</tbody>
			</table>
		</div>
	</div>
</div>