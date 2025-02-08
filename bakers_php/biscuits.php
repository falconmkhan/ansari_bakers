<?php
include "./startlinks.php";
include "../bakers_php/crud/config.php";

$select = $conn->prepare("SELECT * FROM bisc_cookies");
$select->execute();

$fetch = $select->fetchAll();
?>

<div class="chocolate_section2 mt-5">
  <div class="container">
   
    <div class="row">
      
    <?php
      foreach($fetch as $bisc_cookies){
    ?>
    
      <div class="col-sm-6 col-md-4">
        <div class="box shadow" data-aos="fade-up">
        <div class="img-box">
          <img src="../bakers_php/crud/images/<?php echo $bisc_cookies['image'] ?>" alt="">
        </div>
        <div class="detail-box1">
          <h5>
           <span><?php echo $bisc_cookies['name'] ?></span>
          </h5>
          <h6>
          <?php echo $bisc_cookies['descr'] ?>
          </h6>
          <h5>ONLY RS<?php echo $bisc_cookies['price'] ?></h6>
          <a href="">
            BUY NOW
          </a>
        </div>
        </div>
      </div>

    <?php
      }
    ?>

    </div>

  </div>
</div>

<?php
include "./endlinks.php";
?>