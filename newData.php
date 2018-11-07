<?php
	require_once 'Controller.php';
	$controller = new controller();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<title>Add Data</title>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12" style="margin: 10px 0 0 0">
				<nav class="navbar navbar-expand-lg navbar-light bg-primary">
				  <a class="navbar-brand" href="#"style="color: yellow">6701174009</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				     <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link" href="" style="color: pink">Dashboard</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="newData.php"style="color: pink">Tambah Data</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="profile.php"style="color: pink">Data Profil</a>
				      </li>
				
				      <li class="nav-item">
				        <a class="nav-link" href="controller.php?logout=true" style="color:pink">LOGOUT</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</div>
		</div>
	</div>	

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12" style="margin: 10px 0 0 0">
				<div class="card">
					<div class="card-body">
						
						<center><h2 style="color: red">DATA PROFIL MAHASISWA</h2></center>
						<table>
							<form action="" method="post">
								<tr>
									<td>NIM</td>
									<td> : </td>
									<td><input type="text" name="nim" class="form-control"></td>
								</tr>
								<tr>
									<td>Nama Depan</td>
									<td> : </td>
									<td><input type="text" name="namadepan" class="form-control"></td>
								</tr>
								<tr>
									<td>Nama Belakang</td>
									<td> : </td>
									<td><input type="text" name="namabelakang" class="form-control"></td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td> : </td>
									<td><input type="text" name="email" class="form-control"></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td> : </td>
									<td><input type="text" name="kelas" class="form-control"></td>
								</tr>
								<tr>
									<td>Hobby</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
										<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
										<input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>

									</td>
								</tr>
								<tr>
									<td>Genre Film</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="genre[]" value="Horror">Horror<br>
										<input type="checkbox" name="genre[]" value="Anime">Anime<br>
										<input type="checkbox" name="genre[]" value="Action">Action<br>
										<input type="checkbox" name="genre[]" value="Drama">Drama<br>

									</td>
								</tr>
								<tr>
									<td>Tempat Wisata</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="wisata[]" value="Bali">Bali<br>
										<input type="checkbox" name="wisata[]" value="Bali">Tanjung Selor<br>
										<input type="checkbox" name="wisata[]" value="Bali">Jakarta<br>
										<input type="checkbox" name="wisata[]" value="Lombok">Lombok<br>
					
									</td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td> : </td>
									<td><input type="date" name="ttl" class="form-control"></td>
								</tr>
								<tr>
									<td><input type="submit" name="inputdata" value="Simpan" class="btn btn-success" style="color: red"></td>
								</tr>
							</form>
						</table>
						<?php $controller->newData(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>	