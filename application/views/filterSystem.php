<section class="vision-sect">
    <div class="title-sub">
        <div class="d-flex justify-content-between align-middle">
            <h5 class="header-text individaul-title"><strong> Nuestras Propiedades</h5>
            <div class="header-options">
                <i class="bi bi-list-task items-space filter-header-size"></i>
                <h4 class="items-space general-text results">20 Resultados</h4>
            </div>
        </div>
    </div>
    <div class="section-filter-cont">
        <div class="option-filter-cont">
            <nav class="sidebar general-text">
                <ul class="nav flex-column accordion" id="nav_accordion">

                    <!-- ACTIVE FILTERS -->
                    <li class="nav-item">
                        <div class="title-sub">
                            <h5 class="general-text option-filter no-margin"><strong>Filtros Activos</h5>
                        </div>
                        <div class="chip-cont">
                        </div>

                        <p class="text-filter no-filters">No hay filtros activos</p>
                    </li>

                    <!-- OPERATION -->
                    <li class="nav-item has-submenu">
                        <a class="nav-link no-decoration title-sub" href="#"> Operacion <i class="bi bi-caret-right hola"></i></a>
                        <ul class="submenu collapse">
                            <li><input type="checkbox" class="form-check-input" id="venta" value="Venta" data-rel="1" accesskey="op">
                                <label class="form-check-label text-filter" for="exampleCheck1">Venta</label>
                            </li>
                            <li><input type="checkbox" class="form-check-input" id="alquiler" value="Alquiler" data-rel="2" accesskey="op">
                                <label class="form-check-label text-filter" for="exampleCheck1">Alquiler</label>
                            </li>
                            <li><input type="checkbox" class="form-check-input" id="alquiler-venta" value="Alquiler y Venta" data-rel="3" accesskey="op">
                                <label class="form-check-label text-filter" for="exampleCheck1">Alquiler y Venta</label>
                            </li>
                        </ul>
                    </li>

                    <!-- ESTATE TYPE -->
                    <li class="nav-item has-submenu">
                        <a class="nav-link no-decoration title-sub" href="#"> Tipo de Propiedad <i class="bi bi-caret-right"></i></a>
                        <ul class="submenu collapse">
                            <?php
                            foreach ($estateTypes as $index => $type) { ?>
                                <li>
                                    <input type="checkbox" class="form-check-input" value=<?= str_replace(" ", "-", $type->name); ?> data-rel=<?= $type->rel ?> accesskey="categoryRel">
                                    <label class="form-check-label text-filter"><?= $type->name ?></label>
                                </li>
                            <?php
                            }; ?>
                        </ul>
                    </li>

                    <!-- DORMITORIOS -->
                    <li class="nav-item">
                        <a class="nav-link no-decoration title-sub"> Subcategoria <i class="bi bi-caret-right"></i></a>
                        <ul class="submenu collapse">
                            <?php
                            foreach ($estateSubtypes as $index => $category) { 
                                ?>
                                    <h4 class="title-subcategory general-text text-filter-title"><?=$index?></h4>
                                <?php foreach( $category as $index => $subtype){
                                    ?>
                                <li>
                                    <input type="checkbox" class="form-check-input" value=<?= str_replace(" ", "-", $subtype->name) ?> data-rel=<?= $subtype->rel ?> accesskey="subcategoryRel">
                                    <label class="form-check-label text-filter"><?= $subtype->name ?></label>
                                </li>
                                <?php
                            }}; ?>
                           

                        </ul>
                    </li>

                    <!-- ZONA -->
                    <li class="nav-item">
                        <a class="nav-link no-decoration title-sub" href="#"> Zona <i class="bi bi-caret-right"></i></a>
                    </li>

                </ul>
            </nav>

        </div>
    </div>

<div>
    <?= $filterEstates ?>
</div>



</section>

<script type="text/javascript" src="<?= base_url('public/assets/js/filter.js') ?>"></script>