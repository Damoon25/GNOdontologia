<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>GN Odontología | Quiénes Somos</title>
</head>

<body>

    <main>
        <?php include("banner.php") ?>
        <div class="portadaQuienesSomos position-relative">
            <?php include("template/header.php") ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 align-self-center">
                        <div class="mb-3 mt-3">
                            <div class="col-sm-6 col-md-12 mt-3 paddingHome">
                                <h1 class="text-center text-md-start animate__fadeInLeft animate__animated animate__faster animate__slower textPrincipalHome">
                                    Conoce mas <br>
                                    Sobre nosotros
                                </h1>
                                <div class="col-sm-12 d-none d-md-flex col-md-5">
                                    <p class="subText" style="color: var(--text-link) !important;">
                                        Aquí debajo te contamos nuestra visión y misión...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-12 text-center text-md-start paddingTop">
                <h2 class="titleSection mb-5">
                    POR QUÉ ELEGIR GN ODONTOLOGIA?
                </h2>
            </div>
            <div class="col-sm-12 paddingBottom">
                <div class="row">
                    <div class="col-sm-12 col-md-6 align-self-center">
                        <P class="subText" style="color: var(--color3) !important;">
                            Porque en 2008, abrimos nuestro primer consultorio en la ciudad de La Plata,
                            con la firme convicción de darte la mejor atención y
                            las mejores propuestas estéticas para que luzcas tu sonrisa!
                            Trabajamos día a día en pos de no perder la calidad y confianza lograda con nuestros pacientes,
                            y brindando todo el profesionalismo que ellos merecen.
                        </P>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img class="imgQuienesSomos" src="./public/img/imgCovers/IMG-QUIENESSOMOS.jpg" alt="Quienes somos">
                    </div>
                </div>
            </div>
        </div>
        <?php include("contact.php") ?>
    </main>
    <footer>
        <?php include("template/footer.php") ?>
    </footer>
    <script>
        const text = "GN Odontología ";
        const speed = 150; // Velocidad de escritura en milisegundos
        const pauseTime = 1500; // Tiempo de pausa en milisegundos después de completar el texto

        let i = 0;
        let reverse = false; // Variable para controlar si se está escribiendo o borrando

        function typeWriter() {
            if (!reverse && i < text.length) {
                document.getElementById("typedText").innerHTML += text.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            } else {
                setTimeout(resetText, pauseTime);
            }
        }

        function resetText() {
            if (!reverse) {
                reverse = true;
                setTimeout(typeWriter, speed);
            } else {
                if (i > 0) {
                    document.getElementById("typedText").innerHTML = text.substring(0, i - 1);
                    i--;
                    setTimeout(resetText, speed);
                } else {
                    reverse = false;
                    setTimeout(typeWriter, speed);
                }
            }
        }

        window.onload = function() {
            typeWriter();
        };
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