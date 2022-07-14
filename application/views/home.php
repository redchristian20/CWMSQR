<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {if($key == 0){?>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./uploads/<?= $val['workshop_poster_link']?>" alt="<?= $val['workshop_name']?>">
                </div>
            <?php }else{?>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./uploads/<?= $val['workshop_poster_link']?>" alt="<?= $val['workshop_name']?>">
                </div>
<?php           }
            }
        }
?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class='m-3'>
    <h2>Hello!</h2>
    <p>Welcome to UC-Certification Management System (UC-CMS) where you can manage workshops and certificates</p>
</div>

        <div class="row m-3">
<?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
              <div class="col-sm">
                <img class="d-block w-100" src="./uploads/<?= $val['workshop_poster_link']?>" alt="<?= $val['workshop_name']?>">
                <p><?= $val['workshop_name']?></p>
                <form action="show_workshop/<?=$val['id']?>" class="d-flex justify-content-center" method="post">
                    <input type="submit" class="btn btn-success btn-block" name="show_workshop" value="View">
                </form>
              </div>
<?php         
            }
        }
?>
        </div>