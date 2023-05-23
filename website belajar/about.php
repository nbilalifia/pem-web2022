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
    <title>Belber - Discussion</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<section class="discussion" id="discussion">
    <nav class="navbar navbar-light justify-content-center
     fs-10 mb-3" style="background-color: white;">
     <a href="user_page.php"><img src=img/logo.png> </a>
  </nav>
    
    <div class="container">
        <div class="text-center mb-4">
            <h3>Tambahkan Komentar</h3>
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
                        <button type="submit" class="btn btn-success" style="background-color : black" name="submit">Simpan</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>

<section class="view" id="view">
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: white;">
    </nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>

        <table class="table table-hover text-center">
          <thead class="table-dark">
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Komentar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                include "koneksi.php";
                $sql = "SELECT * FRoM `crud`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['komentar'] ?></td>
                  <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                  </td>
                </tr>
            <?php
                }
            ?>
          </tbody>
        </table>
    </div>
   </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>