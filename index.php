<?php
   include("config.php");
    if(isset($_POST["Submit"]))
    {
    	//post all value
    	extract($_POST);
    	$query = "INSERT INTO `users` (`id`,`no_induk`,`no_hp`, `nama`, `alamat`, `kelas`) VALUES (NULL, '".$no_induk."', '".$no_hp."', '".$nama."','".$alamat."','".$kelas."');";

    	mysqli_query($connect,$query);
    	header("location:fetch.php");
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
    <h3>Input Data Siswa</h3>
    <h4><b style="color: red;">Fill this Form</b></h4><hr>
			<div class="col-sm-6"> 
	  <a href="fetch.php?=data-list" class="btn btn-info">List Siswa</a><br>
	<form action="" method="post" name="form1">
		<div class="form-group">
				<label>No Induk</label>
				<input type="text" name="no_induk" class="form-control" placeholder="Enter your No induk...">
			
		</div>
			   <div class="form-group">
				<label>No Hp</label>
				<input type="text" name="no_hp" class="form-control" placeholder="Enter your No HP..">
			</div>
			 <div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" placeholder="Enter Your Nama....">
			  </div>
			  <div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" placeholder="Enter your Address..">
			
		</div>
		<div class="form-group">
				<label>Kelas</label>
				<input type="radio" name="kelas" value="10">10
                <input type="radio" name="kelas" value="11">11
                <input type="radio" name="kelas" value="12">12
			
		</div>
				<div class="form-group">
				<input type="submit" name="Submit" value="Add" class="btn btn-primary btn-block">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

