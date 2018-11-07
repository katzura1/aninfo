<?php
  if(!isset($_SESSION['user-session'])){
    header("location:?page=login");
  }

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sqlSelect = "SELECT * FROM tb_anime WHERE id='$id'";
    $result = mysqli_query($link, $sqlSelect);
    if(mysqli_num_rows($result)>0){
      //output each row
      while($row = mysqli_fetch_assoc($result)){
        //delete row from database
        $sqlDelete = "DELETE FROM tb_anime WHERE id='$id'";
        if(mysqli_query($link,$sqlDelete)){
          echo "<script>
          alert('Anime has been deleted!');
          window.location ='?page=home-admin';
          </script>";
          //get path of image
          $imgpath = 'images/'.$row['cover'];
          //delete image from folder images
          unlink($imgpath);
        }else{
          $pesan = mysqli_error($link);
        }
      }
    }
  }
?>
    <div class='col-sm-9' style='margin:10px auto 0 auto;'>
      <?php
      if(isset($pesan)){
      ?>
      <div class="alert alert-info">
        <?php echo '<b>ERROR :</b> '.$pesan ?>
      </div>
      <?php
      }
      ?>

      <a href='?page=input-anime' class='btn btn-secondary' style="margin-bottom:30px;">Add New Anime</a>

      <table class="table table-striped table-bordered" style="width:100%" id="table-anime">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">Genre</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM tb_anime";
          $result = mysqli_query($link, $sql);

          $i=1;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              //print row
              echo "
              <tr scope='row'>
                <td>$i</td>
                <td>{$row['title']}</td>
                <td>{$row['year']}</td>
                <td>{$row['genre']}</td>
                <td>".substr($row['description'],0,200)."...</td>
                <td><center>
                <a class='btn btn-secondary' style='margin-bottom:5px;' href='?page=edit-anime&id={$row['id']}'>Edit</a>
                <a class='btn btn-dark' href='?page=home-admin&delete={$row['id']}'>Delete</a></center></td>
              </tr>
              ";
              $i++; //increment number of row
            }
          }
          ?>
        </tbody>
      </table>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#table-anime').DataTable();
        } );
      </script>
    </div>
