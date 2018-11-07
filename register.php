<div class='col-sm-4' style="margin:30px auto 0 auto;">
  <?php
  if(isset($_SESSION['user-session'])){
    header("location:?page=home-admin");
  }
    if(isset($_POST['btn-register'])){
      $username = $_POST['username'];
      $nama = $_POST['nama'];
      $password = $_POST['password'];
      $new_pw = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO tb_user VALUES('$username','$nama','$new_pw','1')";

      if(mysqli_query($link,$sql)){
        echo "<div class='alert alert-info'><p class='text-center' style='margin-bottom:0px;'>REGISTER BERHASIL</p></div>";
      }else{
        echo "<div class='alert alert-danger'><p class='text-center' style='margin-bottom:0px;'>REGISTER GAGAl</p></div>";
      }
    }
  ?>
  <h3>Register Here!</h3>
  <form method="post">
    <div class='form-group'>
      <label>Username</label>
      <input type="text" name="username" class="form-control" placeholder="Enter username" required>
    </div>
    <div class='form-group'>
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" placeholder="Enter your name" required>
    </div>
    <div class='form-group'>
      <label>Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password">
      <small class="form-text text-muted">Already have account ? Sign in <a href="?page=login">here</a></small>
    </div>
    <button type="submit" class='btn btn-primary' name='btn-register'>Register</button>
  </form>
</div>
