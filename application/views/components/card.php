<div class="card custom-card">
    <div class="top-box <?php
    echo $estate->op === "2" ? "gold" : "redbrown"
    ?>"><?php
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
                        alt="<?= especialCharactersFix($estate->title)?>">
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
                    alt="<?= especialCharactersFix($estate->title)?>">
                <?php } ?>
            </a>
        </div>

    </div>
    <div class="info-container">
    <a class="no-decoration" href="<?php echo base_url("individualProp?estate=$estate->rel");?>">
        <h5 class="card-title"><?=especialCharactersFix($estate->title)?>
        </h5>
                </a>
        <p class="card-price"><?php
                                                if ($estate->price) {
                                                            echo "$estate->currency $estate->price";
                                                        } else {
                                                            echo 'Consultar';
                                                        } ?></p>
                                                        <div class="icons-container row">
            <?php
               foreach (($estate->extraIcons) as $index => $icon){ ?>
            <div class="col col-6">
                <i class="<?= $icon->icon?> icon-text"></i><?= $icon->name?>
            </div>
            <?php    
           };?>

        </div>
    </div>

</div>