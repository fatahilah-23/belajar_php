<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pendaftaran Online</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body bgcolor="#000">
    <div class="box-form">
	<div class="title-form">
		Formulir Pendaftaran Online
	</div>

	<div class="content-form">
		<form action="" method="post">
			Nama Lengkap <br>
			<input type="text" name="nama" /><br>
			Tempat Lahir <br>
			<input type="text"  name="tmp_lhr"/><br>
			Tanggal Lahir <br>
			<select  name="tgl"> 
				<option>Tgl</option>
				<?php 
				for ($tgl=1; $tgl <= 31 ; $tgl++) { ?>
					<option value="<?php echo $tgl ?>"> <?php echo $tgl ?></option>
				<?php } ?>
			</select>
			<select name="bln">
				<option>bln</option>
				<?php 
				$bln = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
				foreach ($bln as $no => $array) {?>
				   <option value="<?php echo $array ?>"><?php echo $array ?> </option>

				 <?php } ?>

			</select>
			<select name="thn">
				<option>Thn</option>
				<?php 
				for ($thn=1980; $thn <= 2021 ; $thn++) { ?>
					<option value="<?php echo $thn ?>"> <?php echo $thn ?></option>
				<?php } ?>
			</select><br>
			Telepon / hp <br>
			<input type="text"  name="telp"/><br>
			Alamat <br>
			<textarea name="alamat"></textarea><br>
			<input type="submit"  name="tombol" value="daftar" />
		</form>
		<?php 
		if(isset($_POST['tombol'])) 
			include 'koneksi.php';
		
		 ?>
	</div>

     </div>
</body>
</html>