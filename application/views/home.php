<section>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="mobile-wallpaper"></div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('public/assets/images/sierras.jpg'); ?>" class="d-block w-100 carrousel-img" alt="Inmobiliaria-terrazas">
            </div>
        </div>
        <div class="opacity-layer">
            <h3 class="textP">
                Más de 35 años acompañándote
            </h3>
            <a href="<?php echo base_url('/filterSystem'); ?>">
                <button class="btn btn-search mobile-only" type="button">
                    Ver Propiedades
                </button>
            </a>

            <div class="logo-dw">
                <svg width="80" height="80" viewBox="0 0 1371 1371" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1371 685.5C1371 1064.09 1064.09 1371 685.5 1371C306.909 1371 0 1064.09 0 685.5C0 306.909 306.909 0 685.5 0C1064.09 0 1371 306.909 1371 685.5ZM562.73 206.168L1212.62 804.713L1081.31 799.79L422.755 200.921C422.755 200.921 422.755 200.921 493.362 203.568L562.73 206.168ZM551.672 1135.61C642.413 1135.61 723.896 1095.17 779.756 1030.99V1135.61H965.694V725.705L779.756 557.961V617.954C723.896 553.775 642.413 513.336 551.672 513.336C383.259 513.336 246.734 652.636 246.734 824.472C246.734 996.307 383.259 1135.61 551.672 1135.61ZM575.224 1029C688.184 1029 779.756 934.102 779.756 817.034C779.756 699.967 688.184 605.065 575.224 605.065C462.264 605.065 370.692 699.967 370.692 817.034C370.692 934.102 462.264 1029 575.224 1029ZM740.089 743.899H643.39V771.3H674.482L633.287 901.82L591.83 771.3H624.754H624.873V743.899H624.754H528.173H528.055V771.3H528.173H559.147L517.952 901.82L476.495 771.3H509.538V743.899H412.838V771.3H448.613L498.815 929.837H536.561L575.451 807.626L614.15 929.836L651.896 929.837L702.345 771.3H740.089V743.899ZM779.756 225.752H965.694L1027.67 225.752V332.356H965.694L965.694 332.956V363.985V364.585L965.694 367.065V367.665V398.694V399.294V401.773V402.373V433.402V434.002L965.694 436.482V437.082V468.111V468.711L965.694 471.19V471.79V502.819V503.419V538.127L887.989 468.711H887.979L852.574 437.082L851.902 436.482H851.911L779.979 372.222L779.756 372.023V364.585V363.985V332.956V332.356H717.777V225.752L779.756 225.752Z" fill="#D6AB55" />
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Our propertys-->
<section class="section-space gray-color">
    <div class="our-props-title">
        <h3 class="header-text">Nuestras Propiedades</h3>
        <p class="subTitle-text">Elija la propiedad ideal para usted y su familia</p>
    </div>
    <div class="home-cards-container">
        <?= $cards ?>
    </div>
    <div class="button-center">
        <a class="see-more-link" href="<?php echo base_url('/filterSystem'); ?>">
            <button class="btn-dw button-center margin-btn">Ver Más</button>
        </a>
    </div>
</section>


<!-- Services Separator 1-->
<section class="service-section">
    <div class="item-serv-cont">
        <svg class="service-icons" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M39.5833 4.16675H10.4167C8.11875 4.16675 6.25 6.0355 6.25 8.33341V33.3334C6.25 35.6313 8.11875 37.5001 10.4167 37.5001H17.8875L25 44.6126L32.1125 37.5001H39.5833C41.8812 37.5001 43.75 35.6313 43.75 33.3334V8.33341C43.75 6.0355 41.8812 4.16675 39.5833 4.16675ZM39.5833 33.3334H30.3875L25 38.7209L19.6125 33.3334H10.4167V8.33341H39.5833V33.3334Z" fill="#D6AB55" />
            <path d="M19.9729 23.1295L18.6071 29.0438C18.5648 29.2229 18.5775 29.4106 18.6435 29.5823C18.7096 29.7541 18.8259 29.9019 18.9772 30.0066C19.1286 30.1112 19.308 30.1678 19.492 30.1689C19.676 30.17 19.8561 30.1155 20.0087 30.0127L24.9999 26.6852L29.9912 30.0127C30.1473 30.1164 30.3315 30.1697 30.5189 30.1656C30.7062 30.1615 30.8879 30.1001 31.0393 29.9897C31.1908 29.8793 31.3048 29.7252 31.366 29.548C31.4272 29.3709 31.4327 29.1792 31.3818 28.9989L29.7052 23.1322L33.8632 19.3904C33.9964 19.2705 34.0915 19.1141 34.1367 18.9408C34.182 18.7674 34.1755 18.5845 34.1179 18.4148C34.0604 18.2451 33.9544 18.096 33.813 17.9859C33.6716 17.8758 33.501 17.8096 33.3224 17.7954L28.0964 17.3792L25.835 12.3733C25.7629 12.2121 25.6457 12.0752 25.4975 11.9792C25.3493 11.8831 25.1765 11.832 24.9999 11.832C24.8234 11.832 24.6505 11.8831 24.5024 11.9792C24.3542 12.0752 24.237 12.2121 24.1649 12.3733L21.9034 17.3792L16.6775 17.7945C16.5019 17.8084 16.3341 17.8726 16.194 17.9794C16.054 18.0862 15.9477 18.2311 15.8878 18.3967C15.828 18.5624 15.8171 18.7418 15.8565 18.9134C15.8959 19.0851 15.984 19.2418 16.1101 19.3647L19.9729 23.1295ZM22.5882 19.164C22.7518 19.1511 22.909 19.0944 23.0431 18.9999C23.1773 18.9054 23.2836 18.7765 23.3509 18.6268L24.9999 14.9775L26.649 18.6268C26.7163 18.7765 26.8226 18.9054 26.9567 18.9999C27.0909 19.0944 27.2481 19.1511 27.4117 19.164L31.0527 19.4527L28.0543 22.1514C27.7939 22.386 27.6904 22.7472 27.7857 23.0845L28.9343 27.1041L25.5096 24.8207C25.3593 24.7198 25.1824 24.6659 25.0013 24.6659C24.8203 24.6659 24.6433 24.7198 24.493 24.8207L20.9144 27.2068L21.8769 23.0396C21.9122 22.8864 21.9074 22.7266 21.8631 22.5757C21.8188 22.4248 21.7364 22.2878 21.6239 22.178L18.839 19.4628L22.5882 19.164Z" fill="#D6AB55" />
        </svg>
        <p class="description-icon general-text">35 años de experiencia</p>
    </div>
    <div class="item-serv-cont">
        <svg class="service-icons" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M43.7397 14.3751C43.705 14.025 43.5821 13.6894 43.3825 13.3997C43.1828 13.1101 42.9129 12.8758 42.598 12.7189L25.9313 4.38553C25.6419 4.24069 25.3227 4.16528 24.999 4.16528C24.6754 4.16528 24.3562 4.24069 24.0667 4.38553L7.40008 12.7189C7.08607 12.8767 6.81699 13.1112 6.61777 13.4008C6.41856 13.6903 6.29567 14.0254 6.2605 14.3751C6.23758 14.598 4.25842 36.8064 24.1542 45.6543C24.4201 45.7742 24.7084 45.8363 25.0001 45.8363C25.2917 45.8363 25.5801 45.7742 25.8459 45.6543C45.7417 36.8064 43.7626 14.6001 43.7397 14.3751ZM25.0001 41.4522C10.898 34.6355 10.2313 20.0876 10.3459 15.9064L25.0001 8.57927L39.6438 15.9022C39.7209 20.0459 38.9605 34.6897 25.0001 41.4522Z" fill="#D6AB55" />
            <path d="M22.9168 26.2209L18.1397 21.4438L15.1938 24.3896L22.9168 32.1125L34.8063 20.2229L31.8605 17.2771L22.9168 26.2209Z" fill="#D6AB55" />
        </svg>
        <p class="description-icon general-text">Seguridad para tu proyecto</p>
    </div>

    <div class="item-serv-cont">
        <svg class="service-icons" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28.5562 4.7771C28.3629 4.58346 28.1333 4.42984 27.8806 4.32502C27.6278 4.22021 27.3569 4.16626 27.0833 4.16626C26.8097 4.16626 26.5387 4.22021 26.286 4.32502C26.0333 4.42984 25.8037 4.58346 25.6104 4.7771L13.4437 16.9438C13.4124 16.9417 13.3833 16.925 13.352 16.925C13.0784 16.9247 12.8074 16.9785 12.5547 17.0833C12.3019 17.188 12.0723 17.3417 11.8791 17.5354L8.93328 20.4813C8.35162 21.0609 7.8905 21.75 7.57655 22.5087C7.2626 23.2675 7.10203 24.0809 7.10412 24.9021C7.10412 26.5729 7.7562 28.1438 8.93537 29.3208L10.4083 30.7938L5.98745 35.2146C5.40441 35.7871 4.94269 36.4713 4.62985 37.2262C4.31701 37.981 4.15947 38.7912 4.16662 39.6083C4.15678 40.5238 4.35034 41.43 4.73331 42.2615C5.11629 43.093 5.67913 43.8291 6.3812 44.4167C7.46245 45.3313 8.8562 45.8333 10.3083 45.8333C12.0458 45.8333 13.7541 45.1229 14.9958 43.8813L19.2458 39.6333L20.7187 41.1042C23.0812 43.4646 27.1958 43.4667 29.5562 41.1063L32.5041 38.1604C32.6979 37.9672 32.8515 37.7376 32.9563 37.4849C33.061 37.2321 33.1148 36.9611 33.1145 36.6875C33.1145 36.6333 33.0875 36.5833 33.0833 36.5292L45.2229 24.3896C45.4165 24.1963 45.5701 23.9667 45.6749 23.714C45.7798 23.4612 45.8337 23.1903 45.8337 22.9167C45.8337 22.6431 45.7798 22.3721 45.6749 22.1194C45.5701 21.8667 45.4165 21.6371 45.2229 21.4438L28.5562 4.7771ZM26.6083 38.1604C26.2114 38.5394 25.6837 38.7507 25.1349 38.7503C24.5862 38.7499 24.0588 38.5379 23.6624 38.1583L20.7166 35.2146C20.5233 35.021 20.2937 34.8673 20.041 34.7625C19.7882 34.6577 19.5173 34.6038 19.2437 34.6038C18.9701 34.6038 18.6992 34.6577 18.4464 34.7625C18.1937 34.8673 17.9641 35.021 17.7708 35.2146L12.0499 40.9333C11.589 41.3981 10.9629 41.6618 10.3083 41.6667C9.85737 41.674 9.41861 41.5204 9.07078 41.2333C8.83205 41.0358 8.64154 40.7863 8.51374 40.504C8.38594 40.2217 8.32422 39.9139 8.33328 39.6042C8.3311 39.336 8.38292 39.0702 8.48564 38.8225C8.58837 38.5749 8.7399 38.3504 8.9312 38.1625L14.8249 32.2688C15.0186 32.0755 15.1722 31.8459 15.277 31.5931C15.3818 31.3404 15.4358 31.0695 15.4358 30.7958C15.4358 30.5222 15.3818 30.2513 15.277 29.9986C15.1722 29.7458 15.0186 29.5162 14.8249 29.3229L11.877 26.375C11.6833 26.1824 11.5297 25.9531 11.4253 25.7006C11.3208 25.4481 11.2676 25.1774 11.2687 24.9042C11.2687 24.3458 11.4854 23.8229 11.8791 23.4292L13.352 21.9563L28.0833 36.6896L26.6083 38.1604ZM30.5437 33.1771L16.8229 19.4563L27.0833 9.19585L40.8041 22.9167L30.5437 33.1771Z" fill="#D6AB55" />
        </svg>
        <p class="description-icon general-text">Servicios de apoyo</p>
    </div>

    <div class="item-serv-cont">
        <svg class="service-icons" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.4646 24.2521L25 24.7104L24.5333 24.2521C23.6662 23.396 22.4966 22.916 21.2781 22.916C20.0595 22.916 18.89 23.396 18.0229 24.2521C17.5925 24.6661 17.2501 25.1628 17.0163 25.7123C16.7824 26.2618 16.6619 26.8528 16.6619 27.45C16.6619 28.0472 16.7824 28.6383 17.0163 29.1878C17.2501 29.7373 17.5925 30.2339 18.0229 30.6479L25 37.5L31.9771 30.6479C32.4074 30.2339 32.7498 29.7373 32.9837 29.1878C33.2175 28.6383 33.3381 28.0472 33.3381 27.45C33.3381 26.8528 33.2175 26.2618 32.9837 25.7123C32.7498 25.1628 32.4074 24.6661 31.9771 24.2521C31.1095 23.3959 29.9397 22.9158 28.7208 22.9158C27.5019 22.9158 26.3321 23.3959 25.4646 24.2521Z" fill="#D6AB55" />
            <path d="M45.2228 23.5271L26.4728 4.7771C26.2795 4.58346 26.0499 4.42984 25.7972 4.32502C25.5444 4.22021 25.2735 4.16626 24.9999 4.16626C24.7263 4.16626 24.4553 4.22021 24.2026 4.32502C23.9499 4.42984 23.7203 4.58346 23.527 4.7771L4.77696 23.5271C4.4857 23.8185 4.28735 24.1896 4.207 24.5937C4.12665 24.9978 4.16791 25.4166 4.32555 25.7972C4.4832 26.1778 4.75016 26.5032 5.09268 26.7321C5.4352 26.961 5.8379 27.0833 6.24988 27.0833H8.33322V41.6667C8.33322 43.9646 10.202 45.8333 12.4999 45.8333H37.4999C39.7978 45.8333 41.6665 43.9646 41.6665 41.6667V27.0833H43.7499C44.1619 27.0833 44.5646 26.961 44.9071 26.7321C45.2496 26.5032 45.5166 26.1778 45.6742 25.7972C45.8319 25.4166 45.8731 24.9978 45.7928 24.5937C45.7124 24.1896 45.5141 23.8185 45.2228 23.5271ZM37.502 41.6667H12.4999V21.6979L24.9999 9.19793L37.4999 21.6979V31.25L37.502 41.6667Z" fill="#D6AB55" />
        </svg>

        <p class="description-icon general-text">Administración y Contabilidad</p>
    </div>
</section>

<!-- Our Developments -->
<section class="section-space">
    <div class="our-props-title">
        <h3 class="header-text">Conoce nuestros desarrollos</h3>
        <p class="subTitle-text">Zonas residenciales y nuevos centros urbanos</p>
    </div>
    <div class="development-card">
        <img class="dev-img" src="<?php echo base_url('public/assets/images/altosdelCerro.jpg'); ?>" alt="altos del cerro">
        <div class="dev-info">
            <p class="dev-description general-text">A solo 5 minutos de la ciudad con ágil acceso por
                autopistas y vista panorámica a las sierras.
                Actualmente este desarrollo de 35 lotes se a convertido en una avanzada zona residencial y
                foco urbanístico.
            </p>
            <a class="see-more-link" href="<?php echo base_url('/IndividualDev?desarrollo=altos-del-cerro'); ?>">
                <button class="btn-dw button-center margin-dev-btn">Ver Más</button>
            </a>
        </div>
    </div>
    <div class="development-card reverse">
        <img class="dev-img-reverse" src="<?php echo base_url('public/assets/images/Villa.jpg'); ?>" alt="villa magdalena">
        <div class="dev-info-reverse">
            <p class="dev-description-reverse general-text">A solo 5 minutos de la ciudad con agil acceso
                por autopistas y vista panoramica a las sierras.
                Actualmente este desarrollo de 35 lotes se a convertido en una avanzanda zona residencial y
                foco urbanistico.</p>

            <a class="see-more-link" href="<?php echo base_url('/IndividualDev?desarrollo=Villa-magdalena'); ?>">
                <button class="btn-dw button-center margin-dev-btn">Ver Más</button>
            </a>
        </div>
    </div>
</section>

<!-- Separator 2 -->
<section class="separator2-home">
    <p class="eslogan-1">Brindar a nuestros clientes la tranquilidad, transparencia y el asesoramiento
        profesional que la inversión de su capital requiere</p>
</section>

<!-- Contacto -->
<section class="section-space gray-color">
    <div class="our-props-title">
        <h3 class="header-text">Nuestras Oficinas</h3>
        <p class="subTitle-text">Estamos a su servicio</p>
    </div>
    <div class="contact-container">
        <div class="mapouter round-borders">
            <div class="gmap_canvas round-borders"><iframe class="gmap_iframe round-borders" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1197&amp;height=240&amp;hl=en&amp;q=9 de julio 748&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div>
        </div>
        <div class="contact-info">
            <div class="info-cont-data">
                <h4 class="general-text"><i class="bi bi-geo-alt gold-color icon-contact"> </i>Ubicación:
                </h4>
                <p>9 de Julio 748<br> San Luis - Argentina</p>
            </div>
            <div class="info-cont-data">
                <h4 class="general-text"><i class="bi bi-clock gold-color icon-contact"> </i>Horarios de
                    Atención:
                </h4>
                <p>Lunes a viernes: 9 a 17hs<br> Sábados: cerrado</p>

            </div>
            <div class="info-cont-data">
                <h4 class="general-text"><i class="bi bi-envelope gold-color icon-contact"> </i>Email:</h4>
                <p>info.inmobiliaria@dwilliams.com.ar</p>
            </div>
            <div class="info-cont-data">
                <h4 class="general-text"><i class="bi bi-telephone gold-color icon-contact"> </i>Teléfono:
                </h4>
                <p>0266-4422515</p>
            </div>
        </div>
    </div>

</section>