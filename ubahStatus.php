<?php 
  include('connect.php');
  
  $id     = $_GET['id'];
  $statuss = $_GET['statuss'];

  $hasil = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id = $id");
  $row    = mysqli_fetch_array($hasil);

  if($statuss==0){
    $ubah = "UPDATE pendaftaran SET statuss = '1' WHERE id = '$id'";
    if($conn->query($ubah)){
      echo "<script> alert ('Berhasil diVerifikasi')</script>";
      echo "<script> window.location = 'table.php'</script>";
      // header("refresh:0;location:table.php");
    }
  }
  ?>
