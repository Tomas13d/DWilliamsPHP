<div class="small-card" id="<?= "card".$cardId?>">
<a class="nav-link link-letters general-text" aria-current="page"
                href="<?php echo base_url("individualProp?estate=$estate->rel");?>">
    <img class="small-card-img" src="<?=($estate->images && $estate->images[0] && $estate->images[0]->image) ? "../../../images/estate/".$estate->images[0]->image : base_url('public/assets/images/notImage.png') ?>" />
</a> 
    <div class="small-card-info">
        <h5 class="small-card-title general-text"><?= especialCharactersFix($estate->title) ?></h5>
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
                    echo especialCharactersFix($estate->extraIcons[0]->name);
                } else {
                    echo '';
                }?></strong>
        </div>
    </div>
</div>