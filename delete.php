<?php

  include("config.php");
  $id = $_GET["id"];
  $result = mysqli_query($connect, "DELETE FROM users WHERE id=$id");
  header("location:fetch.php");





?>