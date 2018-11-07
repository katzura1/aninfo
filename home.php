  <div class="col-sm-11" style="margin:0 auto 0 auto;height:700px;">
    <h3 style="border-bottom:2px solid black;padding-bottom:10px;">New Anime Added</h3>
    <?php
    $halaman = 6;
    $page = isset($_GET["p"]) ? (int)$_GET["p"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($link,"SELECT * FROM tb_anime"); //select all row
    $total = mysqli_num_rows($result); //get nums of rows
    $pages = ceil($total/$halaman);   //total / page = num page

    $sql = mysqli_query($link,"select * from tb_anime ORDER BY id DESC LIMIT $mulai, $halaman")or die(mysql_error);


    //$sql = "SELECT * FROM tb_anime ORDER BY id DESC LIMIT 0,6";
    $result = $sql;
    if(mysqli_num_rows($result)>0){
      //output each row
      while($row = mysqli_fetch_assoc($result)){?>
      <div class='anime-post'>
        <div class='img-post'>
          <?php $imgpath = 'images/'.$row['cover'];?>
          <a href="?page=info-anime&id=<?=$row['id']?>">
          <img src="<?=$imgpath?>">
          </a>
        </div>
        <div class="list-group">
          <a href="?page=info-anime&id=<?=$row['id']?>" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1"><?=($row['title'])?></h5>
              <small class="text-muted"><?=($row['year'])?></small>
            </div>
            <p><?=$row['description'];?></p>
            <small class="text-muted"><b>Genre:</b> <?=$row['genre']?></small>
          </a>
        </div>
      </div>
    <?php
      }
    }
    ?>
    <!--pagination-->
    <div class="btn-group mr-2" style="clear:both;margin-top:15px;display:block"role="group" aria-label="First group">
      <a href="#" class="btn btn-secondary disabled">Page</a>
      <?php
      for($i=0;$i<$pages;$i++){
        if(($i+1)==(int)$page){
          echo "<a href='index.php?p=".($i+1)."' class='btn btn-secondary' style='background-color:#212529;'>".($i+1)."</a>";
        }else{
          echo "<a href='index.php?p=".($i+1)."' class='btn btn-secondary'>".($i+1)."</a>";
        }
      }
      ?>
    </div>
  </div>
