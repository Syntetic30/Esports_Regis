<?php
/*$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'tutorial3'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM sales';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}*/
?>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Menampilkan Data MySQL Ke Dalam Tabel HTML</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
			background-image: url(style/img/backGame.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
			margin-bottom: 15px;
			color: white;
		}

		table td {
			transition: all .5s;
		}
		a{
			text-decoration: none;
			color: white;
			font-weight: 800;
		}
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Daftar Team Esport</h1>
	<table class="data-table">
<!-- 		<caption class="title">Daftar Team Esport</caption> -->
		<thead>
			<tr>
				<th>NO</th>
				<th>Daftar Nama Team</th>
				<th>Nama Ketua Tim</th>
				<th>Game</th>
				
			</tr>
		</thead>
		<tbody>
			<td>1</td>
			<td>Team BlackDevil</td>
			<td>Syahrul</td>
			<td>Mobile Legend</td>

		<?php
		$no 	= 1;
		$total 	= 0;
		/*$bulan	= array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		while ($row = mysqli_fetch_array($query))
		{
			$tgl 	= explode('-', $row['tanggal']);
			$harga  = $row['harga'] == 0 ? '' : number_format($row['harga'], 0, ',', '.');
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['nama'].'</td>
					<td>'.$row['item'].'</td>
					<td>'.$tgl[2] . ' ' . $bulan[(int)$tgl[1]] . ' ' . $tgl[0] . '</td>
					<td>'.$harga.'</td>
				</tr>';
			$total += $row['harga'];
			$no++;*/
		/*}*/?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="3">TOTAL Team</th>
				<th>1 <?/*=number_format($total, 0, ',', '.')*/?>Team</th>

			</tr>

		</tfoot>
	</table>
						<button type="button" class="btn btn-primary" name="submitt" style="
							width: 40%;
							margin-top: 15px;
							border-radius: 10px;
							margin-left: 30%;
						">
							<a href="index.php">Back To Home </a>
						</button>
</body>
</html>