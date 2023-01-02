<section class="vision-sect">
    <div class="title-sub">
        <h5 class="header-text individaul-title"><strong><?= $singleDevelopment->title?></strong></h5>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide carrousel-margin" data-bs-ride="true">
        <div class="carousel-inner">
        <?php  foreach (($singleDevelopment->images) as $index => $image) {  ?>
                            <div class="<?php echo $index === 0 ? "carousel-item active" : "carousel-item" ?>">
                                <img src="../../public/assets/images/desarrollos/<?=$image ?>.jpg" class="d-block w-100 dev-img-carousel" alt="<?= $singleDevelopment->title ?>">
                            </div>
                        <?php } ?>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="general-individual-info-cont row justify-content-between">
        <div class="description-and-details-cont col col-9">
            <div class="description-cont individual-view-cont">
                <div class="title-sub">
                    <h5 class="subTitle-text"><strong>Descripción</strong></h5>
                </div>
                <p class="general-text description"><?= $singleDevelopment->description?></p>
            </div>
            <div class="details-cont individual-view-cont">
                <div class="title-sub">
                    <h5 class="subTitle-text"><strong>Detalles</strong></h5>
                </div>
                <div class="icons-container row d-flex justify-content-between">
                <?php
                            foreach (($singleDevelopment->details) as $index => $icon) { ?>
                                <div class="col-sm-12 col-md-12 col-lg-4 extra-invidual">
                                    <h4 class="general-text"><i class="<?= $icon->icon ?>"></i> <?= $icon->name ?></h4>
                                </div>
                            <?php
                            }; ?>
                </div>
            </div>
        </div>
        <div class="more-properties-cont individual-view-cont col col-3">
            <h5 class="subTitle-text"><strong>Más Propiedades</strong></h5>
            <div class="small-card-cont">
            <?= $smallCards ?>
            </div>
        </div>
    </div>

    <!-- other -->
    <div class="ubication-cont individual-view-cont">
        <div class="title-sub">
            <h5 class="subTitle-text"><strong>Ubicación</strong></h5>
        </div>
        <div class="location-box">
            <div>
                <h4 class="general-text margin-item-develo"><strong>Dirección:</strong> <i><?= $singleDevelopment->direction?></i>
                <h4>
                <h4 class="general-text margin-item-develo"><strong>Ciudad:</strong> <i><?= $singleDevelopment->city?></i>
                            <h4>
                    
                        </div>
                        <div class="second-location-box">
                        <h4 class="general-text margin-item-develo"><strong>Zona:</strong> <i><?= $singleDevelopment->zone?></i>
                    <h4>
                            
            </div>
        </div>
        <div class="mapouter round-borders">
            <div class="gmap_canvas round-borders"><iframe class="gmap_iframe round-borders" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=<?="https://maps.google.com/maps?q=$singleDevelopment->coordinates&hl=es;z=14&amp;output=embed" ?>>;
                </iframe>
            </div>
    </div>



</section>