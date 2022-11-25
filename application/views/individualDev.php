<section class="vision-sect">
    <div class="title-sub">
        <h5 class="header-text individaul-title"><strong>Villa Magdalena</strong></h5>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide  carrousel-margin" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('public/assets/images/Terrazas_del_Portezuelo.jpg');?>"
                    class="d-block w-100 dev-img-carousel" alt="Potrero de los Funes">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('public/assets/images/Terrazas_del_Portezuelo.jpg');?>"
                    class="d-block w-100 dev-img-carousel" alt="Potrero de los Funes">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('public/assets/images/Terrazas_del_Portezuelo.jpg');?>"
                    class="d-block w-100 dev-img-carousel" alt="Potrero de los Funes">
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

    <div class="general-individual-info-cont row justify-content-between">
        <div class="description-and-details-cont col col-8">
            <div class="description-cont individual-view-cont">
                <div class="title-sub">
                    <h5 class="subTitle-text"><strong>Descripción</strong></h5>
                </div>
                <p class="general-text description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                    eligendi similique, ad excepturi, voluptatibus praesentium exercitationem pariatur dicta ea nobis
                    ipsam. Labore nam animi quos voluptatum accusantium qui laudantium hic!</p>
            </div>
            <div class="details-cont individual-view-cont">
                <div class="title-sub">
                    <h5 class="subTitle-text"><strong>Detalles</strong></h5>
                </div>
            </div>
        </div>
        <div class="more-properties-cont individual-view-cont col col-4">
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
                <h4 class="general-text margin-item-develo"><strong>Dirección:</strong> <i>Los Paraísos, San Luis</i>
                <h4>
                <h4 class="general-text margin-item-develo"><strong>Ciudad:</strong> <i>San Luis</i>
                            <h4>
                    
                        </div>
                        <div class="second-location-box">
                        <h4 class="general-text margin-item-develo"><strong>Zona:</strong> <i>Potrero de los Funes</i>
                    <h4>
                            
            </div>
        </div>
        <div class="mapouter round-borders">
            <div class="gmap_canvas round-borders"><iframe class="gmap_iframe round-borders" width="100%"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?q=villa%20magdalena%20potrero%20de%20los%20funes&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe><a
                    href="https://piratebay-proxys.com/">Piratebay</a></div>
        </div>
    </div>



</section>