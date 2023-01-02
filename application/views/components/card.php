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
            <a class="nav-link link-letters general-text" aria-current="page"
                href="<?php echo base_url("individualProp?estate=$estate->rel");?>">
                <!-- recorre las imagenes para el carrousel -->
                <?php if(count($estate->images) > 0) {
                 foreach (($estate->images) as $index => $image) {  ?>
                <div class="<?php echo ($image->def === "1" ? "carousel-item active" : "carousel-item")?>">
                    <img src="../../../images/estate/<?= $image->image?>" class="d-block w-100 card-img"
                        alt="<?= $estate->title?>">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="<?php echo "#card".$cardId?>"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next icons-carrousel" type="button"
                    data-bs-target="<?php echo "#card".$cardId?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon icons-carrousel" aria-hidden="true"></span>
                </button>
                <?php }} else { ?>
                <img src="<?php echo base_url('public/assets/images/notImage.png'); ?>" class="d-block w-100 card-img"
                    alt="<?= $estate->title?>">
                <?php } ?>
            </a>
        </div>

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