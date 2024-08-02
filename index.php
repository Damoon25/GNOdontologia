<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>GN Odontología | Home</title>
</head>

<body>

    <main>
        <div class="home">
            <div class="custom-banner mb-1">
                <div class="container-fluid">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="d-flex">
                            <a href="https://www.facebook.com/tuperfil" target="_blank" class="text-white mx-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/tuperfil" target="_blank" class="text-white mx-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+1234567890" class="text-white me-1">+123 456 7890</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portadaHome position-relative">
                <?php include("template/header.php") ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="mb-3 mt-3">
                                <div class="col-sm-6 col-md-12 mt-3 paddingHome">
                                    <h1 class="text-center text-md-start animate__fadeInLeft animate__animated animate__faster animate__slower textPrincipalHome">
                                        En GN Odontología, <br>
                                        Cuidamos la sonrisa
                                    </h1>
                                    <div class="col-sm-12 d-none d-md-flex col-md-5">
                                        <p class="subText" style="color: var(--text-link) !important;">
                                            Trabajamos diariamente para ser la mejor opción
                                            enfocándonos en que la atención
                                            a nuestros pacientes sea una experiencia placentera.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 paddingTop paddingBottom">
                <div class="row justify-content-center aling-items-center">
                    <div class="col-md-5 col-sm-12 mb-4">
                        <div class="card custom-card" style=" height: 26rem !important;">
                            <div class="card-body p-4">
                                <img src="./public/img/icons/calidad.png" width="20%">
                                <h3 class="titleSection2" style="color: var(--link) !important;">ODONTOLOGÍA <br> DE CALIDAD</h3>
                                <p class="subText fw-lighter" style="color: var(--link) !important;">
                                    Trabajamos diariamente enfocándonos en que la atención a nuestros pacientes sea una experiencia placentera.
                                </p>
                                <div class="d-flex justify-content-end mt-3">
                                    <a href="quienesSomos.php" class="btn btn-link">
                                        <i class="fa-solid fa-circle-plus" style="color: var(--link) !important;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 mb-4">
                        <div class="card custom-card" style="height: 26rem !important;">
                            <div class="card-body p-4">
                                <img src="./public/img/icons/profesionales.png" width="20%">
                                <h3 class="titleSection2" style="color: var(--link) !important;">NUESTROS <br> PROFESIONALES</h3>
                                <p class="subText fw-lighter" style="color: var(--link) !important;">
                                    Contamos con profesionales especializados en cada campo de la odontología moderna.
                                </p>
                                <div class="d-flex justify-content-end mt-3">
                                    <a href="profesionales.php" class="btn btn-link">
                                        <i class="fa-solid fa-circle-plus" style="color: var(--link) !important;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="instalaciones" class="container mt-0 mb-4">
                <div class="col-sm-12 text-center text-md-start">
                    <h2 class="titleSection mb-5">
                        NUESTRAS INSTALACIONES
                    </h2>
                </div>
                <div class="col-sm-12 paddingBottom">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 align-self-center">
                            <P class="subText" style="color: var(--color3) !important;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Natus, dolorem dignissimos fugit at, maiores exercitationem,
                                praesentium placeat eum repudiandae architecto labore facere quis nulla.
                                Veritatis recusandae atque ut molestiae possimus
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Natus, dolorem dignissimos fugit at, maiores exercitationem,
                                praesentium placeat eum repudiandae architecto labore facere quis nulla.
                                Veritatis recusandae atque ut molestiae possimus
                            </P>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-1.jpg" class="d-block w-100" alt="Imagen 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-2.jpg" class="d-block w-100" alt="Imagen 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-3.jpg" class="d-block w-100" alt="Imagen 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-4.jpg" class="d-block w-100" alt="Imagen 4">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 text-center text-md-start">
                    <h2 class="titleSection mb-5">
                        TRATAMIENTOS
                    </h2>
                </div>
                <div class="col-sm-12 paddingBottom ">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento.png" class="card-img-top fixed-dimensions" alt="Lorem Ipsum">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Blanqueamiento</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora...
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora,
                                        voluptas maiores exercitationem dignissimos, dolore quam quas autem.
                                        Eos laboriosam repellat debitis dolorem odio!. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Assumenda labore voluptate facere eius? Perferendis facere magni neque officia
                                        cupiditate iure earum ipsum, incidunt minima facilis vero delectus animi sed dolores.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/ortodoncia4.jpg" class="card-img-top fixed-dimensions" alt="Lorem Ipsum">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Ortodoncia</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora...
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora,
                                        voluptas maiores exercitationem dignissimos, dolore quam quas autem.
                                        Eos laboriosam repellat debitis dolorem odio!. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Assumenda labore voluptate facere eius? Perferendis facere magni neque officia
                                        cupiditate iure earum ipsum, incidunt minima facilis vero delectus animi sed dolores.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento2.jpg" class="card-img-top fixed-dimensions" alt="Lorem Ipsum">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Implantes</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora...
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora,
                                        voluptas maiores exercitationem dignissimos, dolore quam quas autem.
                                        Eos laboriosam repellat debitis dolorem odio!. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Assumenda labore voluptate facere eius? Perferendis facere magni neque officia
                                        cupiditate iure earum ipsum, incidunt minima facilis vero delectus animi sed dolores.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-md-5">
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento.png" class="card-img-top fixed-dimensions" alt="Lorem Ipsum">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Lorem Ipsum</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora...
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora,
                                        voluptas maiores exercitationem dignissimos, dolore quam quas autem.
                                        Eos laboriosam repellat debitis dolorem odio!. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Assumenda labore voluptate facere eius? Perferendis facere magni neque officia
                                        cupiditate iure earum ipsum, incidunt minima facilis vero delectus animi sed dolores.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento.png" class="card-img-top fixed-dimensions" alt="Lorem Ipsum">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Lorem Ipsum</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora...
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora,
                                        voluptas maiores exercitationem dignissimos, dolore quam quas autem.
                                        Eos laboriosam repellat debitis dolorem odio!. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Assumenda labore voluptate facere eius? Perferendis facere magni neque officia
                                        cupiditate iure earum ipsum, incidunt minima facilis vero delectus animi sed dolores.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento.png" class="card-img-top fixed-dimensions" alt="Lorem Ipsum">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Lorem Ipsum</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora...
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora,
                                        voluptas maiores exercitationem dignissimos, dolore quam quas autem.
                                        Eos laboriosam repellat debitis dolorem odio!. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Assumenda labore voluptate facere eius? Perferendis facere magni neque officia
                                        cupiditate iure earum ipsum, incidunt minima facilis vero delectus animi sed dolores.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-md-5">
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento.png" class="card-img-top fixed-dimensions" alt="Lorem Ipsum">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Lorem Ipsum</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora...
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora,
                                        voluptas maiores exercitationem dignissimos, dolore quam quas autem.
                                        Eos laboriosam repellat debitis dolorem odio!. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Assumenda labore voluptate facere eius? Perferendis facere magni neque officia
                                        cupiditate iure earum ipsum, incidunt minima facilis vero delectus animi sed dolores.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento.png" class="card-img-top fixed-dimensions" alt="Lorem Ipsum">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Lorem Ipsum</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora...
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Provident temporibus nisi saepe laudantium sint sequi tempora,
                                        voluptas maiores exercitationem dignissimos, dolore quam quas autem.
                                        Eos laboriosam repellat debitis dolorem odio!. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Assumenda labore voluptate facere eius? Perferendis facere magni neque officia
                                        cupiditate iure earum ipsum, incidunt minima facilis vero delectus animi sed dolores.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portadaContact">
                <div class="container">
                    <div class="section col-sm-12 text-center text-md-start justify-content-center justify-content-md-start paddingTop paddingBottom">
                        <div class="container containerContact">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 align-self-start paddingTop paddingBottom mt-2">
                                    <img class="imgContact mb-4 mb-md-0" src="./public/img/imgCovers/IMG-CONTACT.png" alt="Contacto">
                                </div>
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <div class="container">
                                        <div class="col-sm-12 text-center text-md-start mt-3">
                                            <h2 class="titleSection">
                                                SOLICITA UN TURNO
                                            </h2>
                                        </div>
                                        <p class="subText mb-4" style="color: var(--color3) !important;">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Nobis tempora, maiores commodi possimus facere non,
                                            deleniti quia quibusdam veniam quod at voluptatum tenetur ratione voluptatem.
                                            Quisquam assumenda vel dolorum optio.
                                        </p>
                                        <div class="col-sm-12 justify-content-end text-end mb-3">
                                            <a href="https://wa.me/1234567890" target="_blank">
                                                <button type="submit" class="btn2">SOLICITA EL TURNO VIA WHATSAPP
                                                    <i class="ps-1 fab fa-whatsapp" style="color: var(--color2) !important;"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include("template/footer.php") ?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.custom-card2');

            cards.forEach(card => {
                card.addEventListener('mouseover', () => {
                    anime({
                        targets: card,
                        scale: 1.05, // Escala ligeramente la tarjeta
                        boxShadow: '0px 10px 20px rgba(0, 0, 0, 0.2)', // Aumenta la sombra
                        duration: 300, // Duración de la animación
                        easing: 'easeOutCubic'
                    });
                });

                card.addEventListener('mouseleave', () => {
                    anime({
                        targets: card,
                        scale: 1, // Vuelve al tamaño original
                        boxShadow: '0px 4px 8px rgba(0, 0, 0, 0.1)', // Sombra inicial
                        duration: 300,
                        easing: 'easeOutCubic'
                    });
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.custom-card2 .open-modal');

            buttons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevenir la acción predeterminada del enlace

                    // Encuentra la tarjeta correspondiente al botón clicado
                    const card = this.closest('.custom-card2');

                    // Extrae los datos de la tarjeta
                    const title = card.querySelector('h3').innerText;
                    const fullText = card.querySelector('.full-text').innerText;
                    const imageSrc = card.querySelector('.card-img-top').src;

                    // Muestra el modal con SweetAlert2
                    Swal.fire({
                        title: `<h3 class="titleModal" style="color: var(--link);">${title}</h3>`,
                        html: `<img src="${imageSrc}" alt="${title}" style="max-width: 100%; margin-bottom: 15px; border-radius: 10px;">
                       <p class="minText text-start" style="color: var(--link) !important;">${fullText}</p>`,
                        background: 'var(--color2)',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: true,
                        confirmButtonText: 'Cerrar',
                        customClass: {
                            popup: 'custom-modal',
                            confirmButton: 'custom-modal-button'
                        },
                        backdrop: `
                                rgba(0, 0, 0, 0.6)
                                left top
                                no-repeat
                    `,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    });
                });
            });
        });
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Control de Responsive Design !-->
<script>
    AOS.init();
</script>

</html>