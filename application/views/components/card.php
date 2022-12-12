<div class="card">
    <div class="top-box"><?php
    switch($estate->op){
        case "1": 
            echo "En Venta";
            break;
        case "2": 
            echo "En Aquiler";
            break;
        case "3": 
            echo "Venta|Alquiler";
            break;
    }
    ?></div>
    <div id="<?php echo "card".$cardId?>" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('public/assets/images/San_Luis1.jpg');?>" class="d-block w-100 card-img"
                    alt='<?= $estate->title ?>'>
            </div>
            <!-- recorre las imagenes para el carrousel -->
            <?php
               
                        foreach (($estate->images) as $index => $image){ ?>
            <div class="carousel-item">
                <img src="../../../../images/cropImage.php?image=estate/<?= $image->image?>&t=0&l=0&w=300&h=200"
                    class="d-block w-100 card-img" alt="<?= $estate->title?>">
            </div>
            <?php
                    };?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="<?php echo "#card".$cardId?>"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="<?php echo "#card".$cardId?>"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    <div class="info-container">
        <h5 class="card-title"><strong><?= $estate->title ?></strong>
        </h5>
        <div class="card-description-cont">
            <p class="card-description"><?= $estate->details ?></p>
        </div>
        <div class="icons-container row">
            <?php
               foreach (($estate->extraIcons) as $index => $icon){ ?>
            <div class="col col-6">
                <i class="<?= $icon->icon?> icon-text"></i><strong><?= $icon->name?></strong>
            </div>
            <?php    
           };?>

        </div>
    </div>

</div>