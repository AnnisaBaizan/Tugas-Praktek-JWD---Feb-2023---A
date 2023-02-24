<?php  
//conn$conn ke database
include 'connect.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
$beasiswa = $_POST['beasiswa'];
$statuss = 0;

$tmp_file = $_FILES['berkas']['tmp_name'];
$ukuran_file = $_FILES['berkas']['size'];
$tipe_file = $_FILES['berkas']['type'];
$berkas = $_FILES['berkas']['name'];
$path = "assets/".$berkas;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
  if($ukuran_file <= 2000000){ 
    if(move_uploaded_file($tmp_file, $path)){ 
      $sql = mysqli_query($conn, "INSERT INTO pendaftaran(nama,email,no_hp,semester,ipk,beasiswa,berkas,statuss) VALUES ('".$nama."','".$email."','".$no_hp."','".$semester."','".$ipk."','".$beasiswa."','".$berkas."','".$statuss."')");
        if($sql){ 
          header("location: table.php");
        }else{
            echo "<script> alert ('Maaf, berkas gagal untuk diupload.')</script>";
            header("refresh:0;fpendaftaran.php");
        }
      }else{
        echo "<script> alert ('Maaf, Ukuran berkas yang diupload tidak boleh lebih dari 2MB')</script>";
        header("refresh:0;fpendaftaran.php");
      }
    }
}
  ?>