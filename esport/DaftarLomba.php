<?php
	if (ISSET($_POST['submit'])) {
			$game = $_POST['game'];
			$team = $_POST['team'];
			include 'config.php';

			 $query = "SELECT * FROM game WHERE nama = '$game'";
			 $sql = mysqli_query($connect, $query);
			 $datagame = mysqli_fetch_array($sql);

			 $minimalanggota = $datagame['minimal_anggota'];
			 $idgame = $datagame['id_game'];
			
			 $query1 = "SELECT * FROM team WHERE nama = '$team'";
			 $sql1 = mysqli_query($connect, $query1);
			 $datateam = mysqli_fetch_array($sql1);

			 $idteam = $datateam['id_team'];

			 $query2 = "SELECT * FROM anggota WHERE id_team = '$idteam'";
			 $sql2 = mysqli_query($connect, $query2);
			 $dataanggota = mysqli_fetch_array($sql2);

			 $jumlah_anggota = mysqli_num_rows($sql2);

			 if($jumlah_anggota >= $minimalanggota){

				$result = mysqli_query($connect, "INSERT INTO pendaftaran VALUES('','$idteam','$idgame')");
				if ($result){
				?>
				<script>
					alert("Berhasil!");
				</script>
				<?php
				}
			 } else { ?>
			 	<script>
					alert("Jumlah Anggota Kureng!");
				</script>
				<?php
			 }
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Tournament Game</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="
	margin: 0px;
	padding: 0px;
	max-width: 100%;
	font-family: sans-serif;	
">
	<main>
		<section style="
			width: 100%;
			max-width: 100%;
			height: 100vh;
			display: flex;
			background-image: url(style/img/backGame.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			justify-content: center;
		">
			<!-- Section Form -->
			<div style="
				flex: 1;
			">
				<div style="
					width: 90%;
					height: 70vh;
					margin-left: 5%;
					margin-top: 25%;
					border-radius: 20px;
				">
					<form action="DaftarLomba.php" method="post" style="
						padding: 10px;
						list-style: none;
						color: white;
					">
						<h2 style="text-align: center;">Pendaftaran Tournament</h2>
						<li style="
							padding-left: 30%;
						">
							<label>Pilih Game</label><br>
							<select name="game" style="
									outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							">
								<optgroup label="Games">
									<option value="Valorant">Valorant</option>
									<option value="Mobile Legens">Mobile Legends</option>
									<option value="PUBG">PUBG Mobile</option>
									<option value="CS Global Offensive">CS Global Offensive</option>
									<option value="Slither.io">Slither.io</option>
								</optgroup>
							</select>
						</li>
						<li style="
							padding-left: 30%;
						">
							<label>Nama Team</label><br>
							<input type="text" name="team" style="
								outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							">
						</li>
						 <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="
							width: 30%;
							margin-top: 15px;
							border-radius: 10px;
							margin-left: 30%;
						">
					</form>
				</div>
			</div>
			<!-- Section gambar -->
			<div style="
				flex: 1;
			">
				<div style="
					width: 90%;
					height: 80vh;
					margin-left: 5%;
					margin-top: 9%;
					
					background-position: center;
					background-size: cover;
					border-radius: 20px;
					border: 3px solid rgba(0,0,0,0.1);
				">
					<div class="container">
					  <div class="row" style="
						height: 80vh !important;
					">
					    <div class="col" style="
					    	background-image: url(style/img/ML.jpeg);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    	margin-right: 5px;
					    ">col</div>
					    <div class="col" style="
					    	background-image: url(style/img/valo.jpeg);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    ">col</div>
					    <div class="w-100" style="
					    	background-image: url(style/img/Slither.jpeg);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    	margin-top: 5px;
					    	margin-bottom: 5px;
					    "></div>
					    <div class="col" style="
					    	background-image: url(style/img/Csgo.jpeg);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    	margin-right: 5px;
					    ">col</div>
					    <div class="col" style="
					    	background-image: url(style/img/Pubg.jpeg);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    ">col</div>
					  </div>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
</html>