<?php

  include("config.php");
  $id = $_GET["id"];
  $result = mysqli_query($connect, "DELETE FROM data_bayar WHERE id=$id");
  header("location:bayar.php");





?>