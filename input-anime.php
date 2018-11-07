    <div class='col-sm-4' style="margin:30px auto 0 auto;">
      <?php
        if(isset($_POST['btn-input-anime'])){
          $title = $_POST['title'];
          $year = $_POST['year'];
          $genre = $_POST['genre'];
          $desc = addslashes($_POST['description']);
          $foto = $_FILES['cover']['name'];
          $tmp = $_FILES['cover']['tmp_name'];
          $username = $_SESSION['user-session'];

          // Rename nama fotonya dengan menambahkan tanggal dan jam upload
          $fotobaru = date('dmYHis').$foto;
          // Set path folder tempat menyimpan fotonya
          $path = "images/".$fotobaru;

          // Proses upload
          if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Proses simpan ke Database
            $sql = "INSERT INTO tb_anime (title,year,genre,description,cover,username)
            VALUES('$title','$year','$genre','$desc','$fotobaru','$username')";

            if(mysqli_query($link,$sql)){
              //sukses menambah data
              header("location:?page=home-admin");
            }else{
              echo "<div class='alert alert-danger'><p class='text-center' style='margin-bottom:0px;'>Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.</p></div>";
              echo mysqli_error($link);
            }
          }else{
            echo "<div class='alert alert-danger'><p class='text-center' style='margin-bottom:0px;'>Maaf, Gambar gagal untuk diupload.</p></div>";
          }
        }
      ?>
      <form method="post" enctype="multipart/form-data">
        <div class='form-group'>
          <label>Title</label>
          <input type="text" name="title" class="form-control" placeholder="ex: Naruto" required>
        </div>
        <div class='form-group'>
          <label>Release Year</label>
          <input type="text" name="year" class="form-control" placeholder="ex: 1997" required>
        </div>
        <div class='form-group'>
          <label>Genre</label>
          <input type="text" name="genre" class="form-control" placeholder="Action, Comedy, School" required>
          <small class="form-text text-muted">Separate with a coma</small>
        </div>
        <div class='form-group'>
          <label>Description</label>
          <textarea class="form-control" name='description' style="height:272px;" required></textarea>
        </div>
        <div class="form-group">
          <label>Anime cover</label>
          <input type="file" name="cover" id="fileName" onchange="validateFileType()" accept=".jpg,.jpeg,.png" class="form-control-file" required>
        </div>
        <button type="submit" class='btn btn-secondary' style="float:left;" name='btn-input-anime'>Add Anime</button>
        <a href="?page=home-admin" style="float:right;margin-bottom:40px;" class="btn btn-dark">BACK</a>
      </form>
    </div>
