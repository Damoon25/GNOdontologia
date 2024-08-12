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
        <?php include("banner.php") ?>
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
                                        Todo nuestro equipo, tiene más de 20 años de trayectoria,
                                        trabajando en diversos consultorios e instituciones de salud.
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
                <div class="row paddingTop mb-4 mb-md-0">
                    <div id="image1" class="col-12 col-md-6 d-flex justify-content-center align-items-center p-0 m-0 mb-3 mb-md-0">
                        <img class="imgProfesional" src="./public/img/icons/professional-icon.png" alt="Imagen 1">
                    </div>
                    <div id="text1" class="col-12 col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
                        <div class="text-start text-div-slide">
                            <h3 class="text1" style="color: var(--text-link) !important;">
                                Gladys Nicklin
                            </h3>
                            <p class="subText" style="color: var(--text-link) !important;">
                                Odontóloga
                            </p>
                            <p></p>
                            <p class="textProfesional" style="color: var(--color3) !important;">
                                Fundadora de GN Odontología. Especialista en Ortodoncia. Con 22 años de trayectoria que avalan su experiencia,
                                atiende a sus pacientes y dirige el consultorio de la ciudad de La Plata y
                                gerencia los consultorios de CABA.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row paddingTop paddingBottom">
                    <div id="image2" class="col-12 col-md-6 order-md-2 d-flex justify-content-center align-items-center p-0 m-0 mb-3 mb-md-0">
                        <img class="imgProfesional" src="./public/img/icons/professional-icon.png" alt="Imagen 1">
                    </div>
                    <div id="text2" class="col-12 col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
                        <div class="text-start text-div-slide">
                            <h3 class="text1" style="color: var(--text-link) !important;">
                                Eduardo Miranda
                            </h3>
                            <p class="subText" style="color: var(--text-link) !important;">
                                Odontólogo
                            </p>
                            <p></p>
                            <p class="textProfesional" style="color: var(--color3) !important;">
                                Asociado. Especialista en Implantología y Ortodoncia - Con más de 20 años de trayectoria,
                                maneja fundamentalmente el área de implantes y cirugías.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("contact.php") ?>
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
                    text: '#text1 .text-div-slide'
                },
                {
                    image: '#image2 img',
                    text: '#text2 .text-div-slide'
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