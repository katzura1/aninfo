<?php
  if(!isset($_GET['id'])){
    header("location:index.php");
  }else{
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_anime WHERE id='$id'";
    $result = mysqli_query($link, $sql);

    $data = mysqli_fetch_assoc($result);
    $title = $data['title'];
    $year = $data['year'];
    $genre = $data['genre'];
    $desc = $data['description'];
    $imgpath = 'images/'.$data['cover'];
    $username = $data['username'];
  }
?>
<div class="col-sm-8" style="margin:0 auto;">
  <h4><?=$title?></h4>
  <span>Posted by : <?=$username?></span>
  <div class='anime-info'>
    <div class="img-thumbnail" style="float:left;margin-right:10px;">
      <img src="<?=$imgpath?>">
    </div>
    <span>
    <b>Description</b>:<br> <?=$desc?>
    </span>
    <div class="anime-detail">
      <h5>Information</h5>
      <ul style="list-style-type:none;margin-left:-30px;">
        <li><b>Title</b>: <?=$title?></li>
        <li><b>Release Year</b>: <?=$year?></li>
        <li><b>Genre</b>: <?=$genre?></li>
      </ul>
    </div>
  </div>
  <a class="btn btn-secondary btn-lg btn-block" href="index.php">SEE ALL ANIME</a>
</div>
