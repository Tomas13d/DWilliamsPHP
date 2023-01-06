<section class="vision-sect">
    <div class="title-sub">
        <h5 class="header-text-2 individaul-title"><strong><?= especialCharactersFix($individualEstate->title) ?></strong></h5>
    </div>
    <div class="row justify-content-between carrousel-contact-info-cont">
        <div class="col col-9 description-and-details-cont">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <?php if (count($individualEstate->images) > 0) {
                        foreach (($individualEstate->images) as $index => $image) {  ?>
                            <div class="<?php echo $image->def === "1" ? "carousel-item active" : "carousel-item" ?>">
                                <img src="../../images/estate/<?= $image->image ?>" class="d-block w-100 prop-img-carousel" alt="<?= $individualEstate->title ?>">
                            </div>
                           
                        <?php }?>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        
                        <?php } else { ?>
                        <img src="<?php echo base_url('public/assets/images/notImage.png'); ?>" class="d-block w-100  prop-img-carousel" alt="<?= especialCharactersFix($estate->title) ?>">
                    <?php } ?>

                </div>

            </div>
        </div>
        <div class="col col-3 individual-view-cont contact-individual">
            <div class="title-sub">
                <h5 class="subTitle-text"><strong>Contactanos</strong></h5>
            </div>
            <div class="row contact-cont-ind">
                <a class="no-decoration" href=<?php echo "tel:" . substr($contactInfo->phone, 0, strrpos($contactInfo->phone, '/')); ?>>
                    <h4 class="general-text col col-12 info-contact-header"><i class="bi bi-telephone-inbound contact-inv-icons"></i> <?php echo substr($contactInfo->phone, 4, strrpos($contactInfo->phone, "/") - 4); ?></h4>
                </a>
                <a class="no-decoration" href=<?php echo "tel:" . substr($contactInfo->phone, strrpos($contactInfo->phone, '/') + 2, strlen($contactInfo->phone)); ?>>
                    <h4 class="general-text col col-12 info-contact-header"><i class="bi bi-telephone-inbound contact-inv-icons"></i> <?php echo substr($contactInfo->phone, strrpos($contactInfo->phone, '/') + 2, strlen($contactInfo->phone)); ?></h4>
                </a>
                <a class="no-decoration" href="https://www.instagram.com/dwilliamsbienesraices/" target="_blank">
                    <h4 class="general-text col col-12 info-contact-header"><i class="bi bi-instagram contact-inv-icons"></i> Instagram</h4>
                </a>
                <a class="no-decoration" href="https://www.facebook.com/dwilliamsbr" target="_blank">
                    <h4 class="general-text col col-12 info-contact-header"><i class="bi bi-facebook contact-inv-icons"></i> Facebook</h4>
                </a>
                <a class="no-decoration" href="<?php echo base_url('/contacto#ubication-map'); ?>">
                    <h4 class="general-text col col-12 info-contact-header"><i class="bi bi-geo-alt contact-inv-icons"></i> <?= $contactInfo->address ?></h4>
                </a>
                <a class="no-decoration consult-buton-link" href="<?php echo base_url('/tasaciones#form-contact'); ?>">
                    <button class="btn-asesor">Envianos tu</br> Consulta</button>
                </a>

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
                    if ($individualEstate->details !== "") {
                        echo especialCharactersFix($individualEstate->details);
                    } else {
                        echo 'No hay descripción';
                    } ?></p>
            </div>
            <div class="details-cont individual-view-cont">
                <div class="title-sub">
                    <h5 class="subTitle-text"><strong>Detalles</strong></h5>
                </div>
                <div class="icons-container row d-flex justify-content-between">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <h4 class="general-text"><i class="bi bi-key"></i> Operacion:</h4>
                        <div class="extras-box-maker">
                            <p class="general-text"> <?php
                                                        switch ($individualEstate->op) {
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
                                                        if ($individualEstate->price) {
                                                            echo "$individualEstate->currency $individualEstate->price";
                                                        } else {
                                                            echo 'Consultar';
                                                        } ?></p>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="row">

                            <?php
                            foreach (($individualEstate->extraIcons) as $index => $icon) { ?>
                                <div class="col-sm-12 col-md-12 col-lg-4 extra-invidual">
                                    <h4 class="general-text"><i class="<?= $icon->icon ?>"></i> <?= especialCharactersFix($icon->name) ?></h4>
                                </div>
                            <?php
                            }; ?>
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
                                                                                            if ($individualEstate->address) {
                                                                                                echo especialCharactersFix($individualEstate->address);
                                                                                            } else {
                                                                                                echo 'Consultar';
                                                                                            } ?></i>
                    <h4>
                        <h4 class="general-text margin-item-develo"><strong>Ciudad:</strong> <i><?php
                                                                                                if ($individualEstate->state && $individualEstate->state->name) {
                                                                                                    echo $individualEstate->state->name;
                                                                                                } else {
                                                                                                    echo 'Consultar';
                                                                                                } ?></i>
                            <h4>

            </div>
            <div class="second-location-box col col-6">
                <h4 class="general-text margin-item-develo"><strong>Localidad:</strong> <i>
                        <?php
                        if ($individualEstate->city && $individualEstate->city->name) {
                            echo $individualEstate->city->name;
                        } else {
                            echo 'Consultar';
                        } ?>
                    </i>
                </h4>
                <h4 class="general-text margin-item-develo"><strong>Zona:</strong> <i>
                        <?php
                        if ($individualEstate->disctrict && $individualEstate->disctrict->name) {
                            echo $individualEstate->disctrict->name;
                        } else {
                            echo 'Consultar';
                        } ?></i>
                </h4>
            </div>
        </div>
        <div class="mapouter round-borders">

            <?php
            if ($individualEstate->coordinates) {
            ?>
                <div class="gmap_canvas round-borders"><iframe class="gmap_iframe round-borders" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=<?= "https://maps.google.com/maps?q=$individualEstate->coordinates&hl=es;z=14&amp;output=embed" ?>>;
                    </iframe>
                </div>
            <?php
            } else {
            ?>
                <div class="no-available-map">
                    <p>Mapa No disponible</p>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
    <div class="consult-buton-link-2">
        <a class="no-decoration" href="<?php echo base_url('/contacto#info-contact'); ?>">
            <button class="btn-final">Contactanos</button>
        </a>
    </div>





</section>