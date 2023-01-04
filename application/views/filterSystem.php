<section class="vision-sect row">
    <div class="title-sub col-12">
        <div class="d-flex justify-content-between align-middle item-filter-system">
            <h5 class="header-text individaul-title">Nuestras Propiedades</h5>
            <div class="header-options">
                <a class="btn btn-add-filters no-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                    <i class="bi bi-funnel filter-header-size"></i>
                </a>
                <h4 class="items-space general-text results"><?php echo $estatesResult . " " . "Resultados" ?></h4>
            </div>
        </div>
    </div>

    <div class="option-cards-cont" >
        <div class="section-filter-cont" id="mobile-or-desktop">
            <div class="option-filter-cont" id="#replaceble">
                <nav class="sidebar general-text" id="navFilters">
                    <ul class="nav flex-column accordion" id="nav_accordion">

                        <!-- ACTIVE FILTERS -->
                        <li class="nav-item">
                            <div class="title-sub">
                                <h5 class="general-text option-filter no-margin"><strong>Filtros Activos</strong></h5>
                            </div>
                            <div class="chip-cont">
                            </div>

                            <p class="text-filter no-filters">No hay filtros activos</p>
                        </li>

                         <!-- ZONA -->
                         <li class="nav-item">
                            <a class="nav-link no-decoration title-sub"> Zona <i
                                    class="bi bi-caret-right"></i></a>
                            <ul class="submenu collapse">
                                <?php
                                foreach ($activeZones as $index => $city) {
                                ?>
                                <h4 class="title-subcategory general-text text-filter-title"><?= $index ?></h4>
                                <?php foreach ($city as $index => $zone) {
                                    ?>
                                <li>
                                    <input type="checkbox" class="form-check-input"
                                        value=<?= str_replace(" ", "-", $zone->disctrict) ?> data-rel=<?= $zone->rel ?>
                                        accesskey="cityID">
                                    <label class="form-check-label text-filter"><?= $zone->disctrict ?></label>
                                </li>
                                <?php
                                    }
                                }; ?>
                            </ul>
                        </li>

                        <!-- OPERATION -->
                        <li class="nav-item has-submenu">
                            <a class="nav-link no-decoration title-sub" href="#"> Operacion <i
                                    class="bi bi-caret-right hola"></i></a>
                            <ul class="submenu collapse">
                                <li><input type="checkbox" class="form-check-input" id="venta" value="Venta"
                                        data-rel="1" accesskey="op">
                                    <label class="form-check-label text-filter" for="exampleCheck1">Venta</label>
                                </li>
                                <li><input type="checkbox" class="form-check-input" id="alquiler" value="Alquiler"
                                        data-rel="2" accesskey="op">
                                    <label class="form-check-label text-filter" for="exampleCheck1">Alquiler</label>
                                </li>
                                <li><input type="checkbox" class="form-check-input" id="alquiler-venta"
                                        value="Alquiler y Venta" data-rel="3" accesskey="op">
                                    <label class="form-check-label text-filter" for="exampleCheck1">Alquiler y
                                        Venta</label>
                                </li>
                            </ul>
                        </li>

                        <!-- ESTATE TYPE -->
                        <li class="nav-item has-submenu">
                            <a class="nav-link no-decoration title-sub" href="#"> Tipo de Propiedad <i
                                    class="bi bi-caret-right"></i></a>
                            <ul class="submenu collapse">
                                <?php
                                foreach ($estateTypes as $index => $type) { ?>
                                <li>
                                    <input type="checkbox" class="form-check-input"
                                        value=<?= str_replace(" ", "-", $type->name); ?> data-rel=<?= $type->rel ?>
                                        accesskey="categoryRel">
                                    <label class="form-check-label text-filter"><?= $type->name ?></label>
                                </li>
                                <?php
                                }; ?>
                            </ul>
                        </li>

                        <!-- Subcategoria -->
                        <li class="nav-item">
                            <a class="nav-link no-decoration title-sub"> Subcategoria <i
                                    class="bi bi-caret-right"></i></a>
                            <ul class="submenu collapse">
                                <?php
                                foreach ($estateSubtypes as $index => $category) {
                                ?>
                                <h4 class="title-subcategory general-text text-filter-title"><?= $index ?></h4>
                                <?php foreach ($category as $index => $subtype) {
                                    ?>
                                <li>
                                    <input type="checkbox" class="form-check-input"
                                        value=<?= str_replace(" ", "-", $subtype->name) ?> data-rel=<?= $subtype->rel ?>
                                        accesskey="subcategoryRel">
                                    <label class="form-check-label text-filter"><?= $subtype->name ?></label>
                                </li>
                                <?php
                                    }
                                }; ?>
                            </ul>
                        </li>

                       

                    </ul>
                </nav>
            </div>

        </div>

        <?php
        if ($estatesResult > 0) { ?>

        <div class="cards-container-filter">
            <?= $filterEstates ?>
            <div class="pagination">
                <?= $pagination ?>
            </div>

        </div>
        <?php } else { ?>
        <div class="no-property-message">
            <p class="general-text">Lo sentimos, no sea han encontrado propiedades con esas caracteristicas.</p>
        </div>
        <?php } ?>
    </div>





</section>

<script type="text/javascript" src="<?= base_url('public/assets/js/filter.js') ?>"></script>