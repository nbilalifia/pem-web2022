<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO `crud`(`id`, `nama`, `komentar`) VALUES (NULL, '$nama','$komentar')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    } else {
        echo "Failed: ". mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP CRUD</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: white;">
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Komentar</h3>
            <p class="text-muted">Sukses</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Komentar</label>
                        <input type="text" class="form-control" name="komentar" placeholder="Masukan komentar">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" style="background-color: black" name="submit">Simpan</button>
                        <a href="index.php" class="btn btn-danger">Cencel</a>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>