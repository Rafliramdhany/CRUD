<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<h3 align="center">List Data Bayar</h3>
		<a href="tambah.php?=add-record" class="btn btn-info">Add More Bayaran</a><br><br>
		<div class="row">
             <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>id Bayar</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Bayar</th>
                <th>Jumlah Bayar</th>
                <th>Nomor Induk</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
        	<?php
        	      include("config.php");
                  $query ="SELECT * FROM data_bayar";
                  $sql = mysqli_query($connect,$query);
                  while($row = mysqli_fetch_array($sql))
                  {

        	?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["id_bayar"];?></td>
                <td><?php echo $row["tgl_bayar"];?></td>
                <td><?php echo $row["bulan_bayar"];?></td>
                <td><?php echo $row["jumlah_bayar"];?></td>
                <td><?php echo $row["no_induk"];?></td>
                <td><a href="editbayar.php?id=<?php echo $row['id']; ?>" class="btn btn-info">EDIT</a></td>
              <td>  <a href="delete2.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
                 
            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>

		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>