<div class='col-sm-4' style="margin:30px auto 0 auto;">
  <?php
  if(isset($_SESSION['user-session'])){
    header("location:?page=home-admin");
  }
  if(isset($_POST['btn-login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username='$username'";
    $result = mysqli_query($link,$sql);

    if(mysqli_num_rows($result)>0){
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $password_db = $row['password'];
        if(password_verify($password,$password_db)){
          $_SESSION['user-session'] = $username;
          header('location:?page=home-admin');
        }else{
          $pesan = "YOUR PASSWORD IS NOT VALID!";
        }
      }
    }else{
      $pesan = "WRONG USERNAME!";
    }
  }
  ?>
  <h3>Login into Your Account</h3>
  <?php
  if(isset($pesan)){
    echo "<div class='alert alert-danger'>$pesan</div>";
  }
  ?>
  <form method="POST">
    <div class='form-group'>
      <label>Username</label>
      <input type="text" name="username" class="form-control" placeholder="Enter username">
    </div>
    <div class='form-group'>
      <label>Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password">
      <small class="form-text text-muted">Didn't have account ? Register <a href="?page=register">here</a></small>
    </div>
    <button type="submit" class='btn btn-primary' name='btn-login'>Login</button>
  </form>
</div>
