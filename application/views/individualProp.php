<section class="vision-sect">
    <div class="title-sub">
        <h5 class="header-text individaul-title"><strong><?=$individualEstate->title?></strong></h5>
    </div>
    <div class="row justify-content-between carrousel-contact-info-cont">
        <div class="col col-9 description-and-details-cont">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('public/assets/images/Terrazas_del_Portezuelo.jpg');?>"
                            class="d-block w-100 prop-img-carousel" alt="Potrero de los Funes">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('public/assets/images/Terrazas_del_Portezuelo.jpg');?>"
                            class="d-block w-100 prop-img-carousel" alt="Potrero de los Funes">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('public/assets/images/Terrazas_del_Portezuelo.jpg');?>"
                            class="d-block w-100 prop-img-carousel" alt="Potrero de los Funes">
                    </div>
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
        </div>
        <div class="col col-3 individual-view-cont contact-individual">
        <div class="title-sub">
                    <h5 class="subTitle-text"><strong>Contactanos</strong></h5>
                </div>
                <div class="row contact-cont-ind">
                    <h4 class="general-text col col-12"><i class="bi bi-telephone-inbound contact-inv-icons"></i> <?=$contactInfo->phone?></h4>
                    <h4 class="general-text col col-12"><i class="bi bi-geo-alt contact-inv-icons"></i> <?=$contactInfo->address?></h4>
                </div>
        </div>
    </div>


    <div class="general-individual-info-cont row">
        <div class="description-and-details-cont col col-9">
            <div class="description-cont individual-view-cont">
                <div class="title-sub">
                    <h5 class="subTitle-text"><strong>Descripción</strong></h5>
                </div>
                <p class="general-text description">
                <?php
                if($individualEstate->details){
                    echo $individualEstate->details;
                } else {
                    echo 'No hay descripción';
                }?></p>
            </div>
            <div class="details-cont individual-view-cont">
                <div class="title-sub">
                    <h5 class="subTitle-text"><strong>Detalles</strong></h5>
                </div>
                <div class="icons-container row d-flex justify-content-between">
                    <div class="col col-3">
                        <h4 class="general-text"><i class="bi bi-key"></i> Operacion:</h4>
                        <div class="extras-box-maker">
                            <p class="general-text"> <?php
    switch($individualEstate->op){
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
    ?></p>
                        </div>
                        <h4 class="general-text"><i class="bi bi-tag"></i> Precio:</h4>
                        <div class="extras-box-maker">
                            <p class="general-text"> <?php
                if($individualEstate->price){
                    echo "$individualEstate->currency $individualEstate->price";
                } else {
                    echo 'Consultar';
                }?></p>
                        </div>

                    </div>
                    <div class="col col-9">
                        <div class="row">

                            <?php
               foreach (($individualEstate->extraIcons) as $index => $icon){ ?>
                            <div class="col col-4 extra-invidual">
                                <h4 class="general-text"><i class="<?= $icon->icon?>"></i> <?= $icon->name?></h4>
                            </div>
                            <?php    
           };?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="more-properties-cont individual-view-cont col col-3">
            <div class="title-sub">
                <h5 class="subTitle-text"><strong>Más Propiedades</strong></h5>
            </div>

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
        <div class="location-box row">
            <div class="col col-6">
                <h4 class="general-text margin-item-develo"><strong>Dirección:</strong> <i><?php
                if($individualEstate->address){
                    echo $individualEstate->address;
                } else {
                    echo 'Consultar';
                }?></i>
                    <h4>
                        <h4 class="general-text margin-item-develo"><strong>Ciudad:</strong> <i><?php
                if($individualEstate->state && $individualEstate->state->name){
                    echo $individualEstate->state->name;
                } else {
                    echo 'Consultar';
                }?></i>
                            <h4>

            </div>
            <div class="second-location-box col col-6">
                <h4 class="general-text margin-item-develo"><strong>Localidad:</strong> <i>
                        <?php
                if($individualEstate->city && $individualEstate->city->name){
                     echo $individualEstate->city->name;
                } else {
                    echo 'Consultar';
                }?>
                    </i>
                </h4>
                <h4 class="general-text margin-item-develo"><strong>Zona:</strong> <i>
                        <?php
                if($individualEstate->disctrict && $individualEstate->disctrict->name){
                        echo $individualEstate->disctrict->name; 
                } else {
                    echo 'Consultar';
                }?></i>
                </h4>
            </div>
        </div>
        <div class="mapouter round-borders">

            <?php
            if($individualEstate->coordinates){
            ?>
            <div class="gmap_canvas round-borders"><iframe class="gmap_iframe round-borders" width="100%"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src=<?="https://maps.google.com/maps?q=$individualEstate->coordinates&hl=es;z=14&amp;output=embed"?>>;
                </iframe>
            </div>
            <?php
            }else {
                ?>
            <div class="no-available-map">
                <p>Mapa No disponible</p>
            </div>

            <?php
            }
                ?>
        </div>
    </div>




</section>