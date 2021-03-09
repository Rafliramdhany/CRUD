<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $no_induk=$_POST['no_induk'];
    $no_hp=$_POST['no_hp'];
    $nama=$_POST['nama'];    
	$alamat=$_POST['alamat'];
	$kelas=$_POST['kelas'];
    
    
        $result = mysqli_query($connect, "UPDATE users SET no_induk='$no_induk',no_hp='$no_hp',nama='$nama',alamat='$alamat',kelas='$kelas' WHERE id='". $_GET['id']."'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: fetch.php");
    
}
?>
<?php
//error_reporting(0);
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM users WHERE id=$id");
 
while($row = mysqli_fetch_array($result))
{
    $no_induk = $row['no_induk'];
	$no_hp = $row['no_hp'];
	$nama = $row['nama'];
    $alamat = $row['alamat'];
    $kelas = $row['kelas'];
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
    <h3>Update Here</h3>
    <h4><b style="color: red;">Change this form</b></h4><hr>
			<div class="col-sm-6"> 
	
	<form action="" method="post">
		<div class="form-group">
				
				<input type="hidden" name="id" class="form-control" value="<?php echo $id;?>">
			
		</div>
		<div class="form-group">
				<label>Nomor Induk</label>
				<input type="text" name="no_induk" class="form-control" value="<?php echo $no_induk;?>">
			
		</div>
			   <div class="form-group">
				<label>Nomor HP</label>
				<input type="text" name="no_hp" class="form-control" value=" <?php echo $no_hp; ?>">
			</div>
			 <div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $nama;?>">
			  </div>
			  <div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $alamat;?>">
			  </div>
			  <div class="form-group">
				<label>Kelas</label>
				<input type="radio" name="kelas" value="10">10
                <input type="radio" name="kelas" value="11">11
                <input type="radio" name="kelas" value="12">12
			  </div>
				<div class="form-group">
				<input type="submit" value="Update" class="btn btn-primary btn-block" name="update">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

