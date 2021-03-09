<?php
   include("config.php");
    if(isset($_POST["Submit"]))
    {
    	//post all value
    	$query = "INSERT INTO data_bayar (id_bayar,tgl_bayar,bulan_bayar,jumlah_bayar,no_induk) VALUES ('".$_POST['id_bayar']."', '".$_POST['tgl_bayar']."', '".$_POST['bulan_bayar']."', '".$_POST['jumlah_bayar']."', '".$_POST['no_induk']."');";

    	mysqli_query($connect,$query);
    	header("location:bayar.php");
    }


?>


<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<div class="row">
    <h3>Input Data Pembayaran</h3>
    <h4><b style="color: red;">Fill this Form</b></h4><hr>
			<div class="col-sm-6"> 
	  <a href="bayar.php?=data-list" class="btn btn-info">List Bayar</a><br>
	<form action="" method="post" name="form1">
			   <div class="form-group">
				<label>Tanggal Bayar</label>
				<input type="hidden" name="id_bayar" value="<?= substr(str_shuffle("0123456789"), 0, 7); ?>">
				<input type="date" id="birthday" name="tgl_bayar">
			</div>
			 <div class="form-group">
				<label>Bulan Bayar</label>
				<input type="text" name="bulan_bayar" class="form-control" placeholder="Enter Your Nama....">
			  </div>
			  <div class="form-group">
				<label>Jumlah Bayar</label>
				<input type="text" name="jumlah_bayar" class="form-control" placeholder="Enter your Address..">
			
		</div>
		<div class="form-group">
				<label>Nomor Induk</label>
				<input type="text" name="no_induk" class="form-control" placeholder="Enter your NOMOR INDOEK..">
			
		</div>
				<div class="form-group">
				<input type="submit" name="Submit" value="Tambah" class="btn btn-primary btn-block">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

