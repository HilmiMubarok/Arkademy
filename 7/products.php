<?php 

	$sql = "SELECT * FROM products";
	$res = $conn->query($sql);
	$no  = 1;
?>


<div class="collapse text-center mt-5" id="Products">
	<div class="card text-white bg-info mb-3">
		<div class="card-header">Products</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Category</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($rows = $res->fetch_object()) : ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $rows->name ?></td>
						<td><?= $rows->category_id ?></td>
					</tr>
					<?php $no++; endwhile ?>
				</tbody>
			</table>
		</div>
	</div>
</div>