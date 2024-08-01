<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>GN Odontología | Nuestros Profesionales</title>
</head>

<body>

    <main>
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
        <div class="portadaProfesionales position-relative">
            <?php include("template/header.php") ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 align-self-center">
                        <div class="mb-3 mt-3">
                            <div class="col-sm-6 col-md-12 mt-3 paddingHome">
                                <h1 class="text-center text-md-start animate__fadeInLeft animate__animated animate__faster animate__slower textPrincipalHome">
                                    Nuestros Profesionales
                                </h1>
                                <div class="col-sm-12 d-none d-md-flex col-md-5">
                                    <p class="subText" style="color: var(--text-link) !important;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Facere optio esse fugit aspernatur, a nesciunt quisquam dolorum laudantium dolore?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="col-sm-12">
                <div class="row paddingTop paddingBottom">
                    <div id="image1" class="col-12 col-md-6 d-flex justify-content-center align-items-center p-0 m-0 mb-3 mb-md-0">
                        <img class="imgProfesional" src="./public/img/imgCovers/IMG-PROFESIONAL-2.jpg" alt="Imagen 1">
                    </div>
                    <div id="text1" class="col-12 col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
                        <div class="text-center">
                            <p class="textProfesional" style="color: var(--color3) !important;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis molestiae blanditiis
                                nemo error animi facilis eum maiores. Eveniet ad ea quas asperiores id eius neque qui nulla.
                                Provident, necessitatibus ratione!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row paddingTop paddingBottom">
                    <div id="image2" class="col-12 col-md-6 order-md-2 d-flex justify-content-center align-items-center p-0 m-0 mb-3 mb-md-0">
                        <img class="imgProfesional" src="./public/img/imgCovers/IMG-PROFESIONAL-1.jpg" alt="Imagen 1">
                    </div>
                    <div id="text2" class="col-12 col-md-6 order-md-1 d-flex justify-content-center align-items-center p-0 m-0">
                        <div class="text-center">
                            <p class="textProfesional" style="color: var(--color3) !important;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis molestiae blanditiis
                                nemo error animi facilis eum maiores. Eveniet ad ea quas asperiores id eius neque qui nulla.
                                Provident, necessitatibus ratione!
                            </p>
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
                                    <div class="col-sm-12 justify-content-end text-end paddingForm mb-3">
                                        <button type="submit" class="btn2">SOLICITA EL TURNO VIA WHATSAPP
                                            <i class="ps-1 fab fa-whatsapp" style="color: var(--color2) !important;"></i>
                                        </button>
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
            // Definir los pares de imagen y texto
            const imageTextPairs = [{
                    image: '#image1 img',
                    text: '#text1 .subText'
                },
                {
                    image: '#image2 img',
                    text: '#text2 .subText'
                }
            ];

            function animateText(textElement) {
                anime({
                    targets: textElement,
                    opacity: [0, 1],
                    scale: [0.8, 1], // Efecto de escala para un pequeño "pop"
                    translateY: [10, 0], // Desplazamiento para hacer el texto "subir"
                    duration: 300, // Duración corta
                    easing: 'easeOutCubic', // Easing suave
                });
            }

            // Aplicar animaciones solo en desktop
            if (window.innerWidth >= 768) {
                imageTextPairs.forEach(pair => {
                    const image = document.querySelector(pair.image);
                    const text = document.querySelector(pair.text);

                    if (image && text) { // Verificar si los elementos existen
                        image.addEventListener('mouseover', () => {
                            animateText(text);
                        });

                        // Mantener el texto visible después de hacer hover
                        image.addEventListener('mouseleave', () => {
                            anime({
                                targets: text,
                                opacity: 1,
                                translateY: 0,
                                duration: 400,
                                easing: 'easeOutCubic',
                            });
                        });
                    } else {
                        console.error('Elemento de imagen o texto no encontrado');
                    }
                });
            }
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