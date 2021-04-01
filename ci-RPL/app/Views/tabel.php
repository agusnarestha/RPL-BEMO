<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menampilkan Data Multi Join Tabel</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> 
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
			<table class="table table-bordered">
		        <tr>
		            <th>id_pembeli</th>
		            <th>no_ktp</th>
		            <th>Kelas</th>
		            <th>username</th>
		        </tr>
		        	<?php foreach($pembeli as $row):?>
		        <tr>
		        	<td><?=$row['id_pembeli'];?></td>
		            <td><?=$row['no_ktp'];?></td>
		            <td><?=$row['username'];?></td>
		            <td><?=$row['password'];?></td>
		        </tr>
		        <?php endforeach;?>
		    </table>
		</div>
	</div>
</body>
</html>