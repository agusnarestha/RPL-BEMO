<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tabel User</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
</head>

<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Data Pembeli </h2>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<table class="table table-bordered" id="display">
				<thead class="text-center">
					<tr>
						<th>id_pembeli</th>
						<th>no_ktp</th>
						<th>username</th>
						<th>password</th>
						<th>email</th>
						<th>no_hp</th>
						<th>nama</th>
						<th>jenis_kelamin</th>
						<th>alamat</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pembeli as $row) : ?>
						<tr>
							<td><?= $row['id_pembeli']; ?></td>
							<td><?= $row['no_ktp']; ?></td>
							<td><?= $row['username']; ?></td>
							<td><?= $row['password']; ?></td>
							<td><?= $row['email']; ?></td>
							<td><?= $row['no_hp']; ?></td>
							<td><?= $row['nama']; ?></td>
							<td><?= $row['jenis_kelamin']; ?></td>
							<td><?= $row['alamat']; ?></td>
							<td><a type="button" class="btn btn-danger" href="<?php echo base_url('tampilUser/deleteUser/' . $row['no_ktp']); ?>">Hapus<a /></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#display').DataTable({
				fixedHeader: {
					header: true,
					footer: true
				}
			});
		});
	</script>
</body>

</html>