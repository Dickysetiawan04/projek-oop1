<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford edit Registrasi Warga</title>
</head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
<?php
include('mylib/myDb.php');
$Db=new myDb();
$idwarga=$_GET['id'];
$data=$Db->get_by_id($idwarga);
//print_r($data);
//echo "blalala";
?>
    <div class="container">
   
    <div class="row">
        <div class="col-md-8">
        <h2>Form edit Registrasi Warga</h2>
        <hr>
        <form action="index.php" method="post">
        <table class="table table-striped table-bordered">
            <tr style="display:none;">
                <td>No ID</td>
                <td><input type="text" name="id_warga" class="form-control" value="<?php echo $data['id']; ?>"></td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td><input type="text" name="no_ktp" class ="form-control" value="<?php echo $data['no_ktp']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td><input type="text" name="alamat_lengkap" class="form-control" value="<?php echo $data['alamat_lengkap']; ?>"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="text" name="no_hp" class="form-control" value="<?php echo $data['no_hp']; ?>"></td>
            </tr>
            <tr>
                <td><a href="index.php" class="btn btn-primary">Kembali</a></td>
                <td><button class="btn btn-success" type="submit" name="ubah">ubah</button></td>
            </tr>
        </table>
        </form>
        </div>
    </div>
    </div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>