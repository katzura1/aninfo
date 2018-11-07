    <div class='col-sm-4' style="margin:30px auto 0 auto;">
      <?php
        if(!isset($_GET['id'])){
          header("location:?page=home-admin");
        }else{
          $id = $_GET['id'];
          $sql = "SELECT * FROM tb_anime WHERE id='$id'";
          $result = mysqli_query($link, $sql);
          if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
              $title = $row['title'];
              $year = $row['year'];
              $genre = $row['genre'];
              $desc = $row['description'];
              $imgpath = 'images/'.$row['cover'];
            }
          }else{
            header("location:?page=home-admin");
          }
        }

        if(isset($_POST['btn-edit-anime'])){
          $id = $_POST['id'];
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

          if(strlen($foto)>0){
            //delete old picture
            unlink('images/'.mysqli_fetch_assoc(mysqli_query($link, "SELECT cover FROM tb_anime WHERE id='$id'"))['cover']);

            $sql = "UPDATE tb_anime SET title='$title', year='$year', genre='$genre', description='$desc', cover='$fotobaru', username='$username' WHERE id='$id'";

          }else{
            $sql = "UPDATE tb_anime SET title='$title', year='$year', genre='$genre', description='$desc', username='$username' WHERE id='$id'";

            if(mysqli_query($link, $sql)){
              echo "
              <script>
              alert('Update Anime Success!');
              window.location ='?page=home-admin';
              </script>";
            }else{
              //update gagal
            }
          }

          // Proses upload
          if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Proses simpan ke Database
            if(mysqli_query($link,$sql)){
              //sukses menambah data
              echo "
              <script>
              alert('Update Anime Success!');
              window.location ='?page=home-admin';
              </script>";
            }else{
              echo "<div class='alert alert-danger'><p class='text-center' style='margin-bottom:0px;'>Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.</p></div>";
              echo mysqli_error($link);
            }
          }else{
            echo "<div class='alert alert-danger'><p class='text-center' style='margin-bottom:0px;'>Maaf, Gambar gagal untuk diupload.</p></div>";
          }
        }
      ?>

      <form method="post"  enctype="multipart/form-data">
        <input type="text" name="id" value="<?=$id;?>" style="display:none">
        <div class='form-group'>
          <label>Title</label>
          <input type="text" name="title" class="form-control" value="<?=$title;?>" required>
        </div>
        <div class='form-group'>
          <label>Release Year</label>
          <input type="text" name="year" class="form-control" value="<?=$year;?>" required>
        </div>
        <div class='form-group'>
          <label>Genre</label>
          <input type="text" name="genre" class="form-control" value="<?=$genre;?>" required>
          <small class="form-text text-muted">Separate with a coma</small>
        </div>
        <div class='form-group'>
          <label>Description</label>
          <textarea class="form-control" name='description' style='height:272px;' required><?=str_replace('\\','',$desc );?></textarea>
        </div>
        <div class="form-group">
          <label>New anime cover</label>
          <input type="file" id="fileName" onchange="validateFileType()" accept=".jpg,.jpeg,.png" name="cover" class="form-control-file">
        </div>
        <div class="form-group">
          <label>Current cover</label>
          <div class='thumbnail-img'>
            <img src="<?=$imgpath;?>" alt='..' height="200px" width="200px">
          </div>
        </div>
        <button type="submit" class='btn btn-secondary' style="float:left" name='btn-edit-anime'>Edit Anime</button>
        <a href="?page=home-admin" style="float:right;margin-bottom:40px;" class="btn btn-dark">BACK</a>
      </form>
    </div>
