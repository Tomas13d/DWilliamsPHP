<div class="card">
            <div class="top-box">En Venta</div>
            <div id="<?php echo "card".$cardId?>" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('public/assets/images/San_Luis1.jpg');?>"
                            class="d-block w-100 card-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('public/assets/images/San_Luis1.jpg');?>"
                            class="d-block w-100 card-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('public/assets/images/San_Luis1.jpg');?>"
                            class="d-block w-100 card-img" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="<?php echo "#card".$cardId?>"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="<?php echo "#card".$cardId?>"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="info-container">
                <h5 class="card-title"><strong>Casa Potrero de los Funes</strong>
                    <h5>
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Vel, veritatis.</p>
                        <div class="icons-container">
                            <i class="bi bi-bounding-box-circles icon-text"> 150m2</i>
                            <i class="bi bi-lamp icon-text"> 3 Habitaciones</i>
                            <i class="bi bi-door-closed icon-text"> 2 Baños</i>
                            <i class="bi bi-car-front icon-text"> Cochera</i>
                        </div>
            </div>

        </div>