<?php
include "./startlinks.php";
include "../bakers_php/crud/config.php";

$select = $conn->prepare("SELECT * FROM sweets");
$select->execute();

$fetch = $select->fetchAll();
?>

<div class="chocolate_section2 mt-5">
  <div class="container">
   
    <div class="row">
      
    <?php
      foreach($fetch as $sweets){
    ?>
    
      <div class="col-sm-6 col-md-4">
        <div class="box shadow" data-aos="fade-up">
        <div class="img-box">
          <img src="../bakers_php/crud/images/<?php echo $sweets['image'] ?>" alt="">
        </div>
        <div class="detail-box1">
          <h5>
           <span><?php echo $sweets['name'] ?></span>
          </h5>
          <h6>
          <?php echo $sweets['descr'] ?>
          </h6>
          <h5><?php echo $sweets['price'] ?></h5>
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