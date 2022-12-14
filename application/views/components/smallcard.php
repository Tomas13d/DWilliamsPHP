<div class="small-card" id="<?= "card".$cardId?>">
    <img class="small-card-img" src="<?php echo base_url('public/assets/images/San_Luis1.jpg');?>" />
    <div class="small-card-info">
        <h5 class="small-card-title general-text"><?= $estate->title ?></h5>
        <h6 class="small-card-price"><?php 
        if($estate->price){
            echo "$$estate->price";
        } else {
            echo 'Consultar';
        }
         ?></h6>
        <div class="small-card-description col">
                <i class="<?php
                if($estate->extraIcons && $estate->extraIcons[0]->icon ){
                    echo $estate->extraIcons[0]->icon;
                } else {
                    echo '';
                }?> icon-text"></i><strong><?php
                if($estate->extraIcons && $estate->extraIcons[0]->name){
                    echo $estate->extraIcons[0]->name;
                } else {
                    echo '';
                }?></strong>
        </div>
    </div>
</div>