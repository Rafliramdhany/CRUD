<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $tgl_bayar=$_POST['tgl_bayar'];
    $bulan_bayar=$_POST['bulan_bayar'];    
	$jumlah_bayar=$_POST['jumlah_bayar'];
	$no_induk=$_POST['no_induk'];
    
    
        $result = mysqli_query($connect, "UPDATE data_bayar SET id='$id',tgl_bayar='$tgl_bayar',bulan_bayar='$bulan_bayar',jumlah_bayar='$jumlah_bayar',no_induk='$no_induk' WHERE id='".$_GET['id']."'");
        
        //redirectig to the display page. In our case, it is bayar.php
        header("Location: bayar.php");
    
}
?>
<?php
//error_reporting(0);
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM data_bayar WHERE id=$id");
 
while($row = mysqli_fetch_array($result))
{
    $id=$row['id'];
    $tgl_bayar=$row['tgl_bayar'];
    $bulan_bayar=$row['bulan_bayar'];    
	$jumlah_bayar=$row['jumlah_bayar'];
	$no_induk=$row['no_induk'];
}
?>
<html>
<head>
	<title>Data Change</title>
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
                <label>Tanggal Bayar</label>
				<input type="date" id="birthday" name="tgl_bayar">
			
		</div>
			<div class="form-group">
				<label>Bulan Bayar </label>
				<input type="text" name="bulan_bayar" class="form-control" value=" <?php echo $bulan_bayar; ?>">
			</div>
			 <div class="form-group">
				<label>Jumlah Bayar</label>
				<input type="text" name="jumlah_bayar" class="form-control" value="<?php echo $jumlah_bayar;?>">
			  </div>
			  <div class="form-group">
				<label>Nomor Induk</label>
				<input type="text" name="no_induk" class="form-control" value="<?php echo $no_induk;?>">
			  </div>
			  
				<div class="form-group">
				<input type="submit" value="Update" class="btn btn-primary btn-block" name="update">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

