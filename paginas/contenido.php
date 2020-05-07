<?php
require("conectar.php");
include("cabecera.php");
include("menu.php");
?>
<section>
    <article>
        <div class="row mt-1">
            <div class="col col-md-3">
                <div class="card" style="width: 16.5rem;">
                    <img src="../img/estudiantes-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ingeniería en Sistemas
                        </h5>
                        <p class="card-text">Director y administrador de su propia empresa de consultora,
                            desarrolladora de software y proveedora de servicios de redes informáticas, telecomunicación,
                            Interner.
                            Un Ingeniero en Sistemas en un Desarrolador de software, y una persona auto didacta
                        </p>
                        <a href="#" class="btn btn-primary">
                            Go somewhere
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card" style="width: 16.5rem;">
                    <img src="../img/estudiantes-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Licenciatura en Idiomas</h5>
                        <p class="card-text">Podrán desempeñarse en las siguientes áreas de trabajo:
                            Director de Centros Educativos Bilingües,Docente de Idioma inglés para Tercer Ciclo y
                            bachillerato.demás, contarás con habilidad para comunicarte con precisión.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card" style="width: 16.5rem;">
                    <img src="../img/estudiantes-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ingeniería Civil</h5>
                        <p class="card-text">Director y administrador de su propia empresa de consultorías
                            en las diferentes ramas de Ingeniería Civil, Director y administrador de su propia empresa, realizando
                            gestión, formulación y evaluación de proyectos para todo el pais de una manera eficiente.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card" style="width: 16.5rem;">
                    <img src="../img/estudiantes-4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Licenciatura en Ciencias Jurídicas</h5>
                        <p class="card-text">Ejercer la Judicatura.Colaborador/a Jurídico/a y Secretario/a
                            en las diferentes instancias de la Corte Suprema de Justicia.Procurador/a Privado/a
                            de la Republica, e internacionalmente.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- End:row -->
            </div>
    </article>
</section>
<!-- Nueva seccion para los videos -->
<!-- Ejemplos: -->
<section>
    <article>
        <div class="row mt-3">
            <div class="col col-md-6">
                <figure>
                    <h6>Video de Youtube - Grandes temas de las Matematicas</h6>
                    <iframe class="card" style="width:500px; height:290px;" src="https://www.youtube.com/embed/OpnWTKYTQ8Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </figure>
            </div>
            <div class="col col-md-6">
                <figure>
                    <h6>Video del Proyecto - Motivacional</h6>
                    <video style="width:500px; height:290px;" src="../video/Video.mp4" type="video/mp4" poster="../img/video-proyecto.png" controls>
                    </video>
                </figure>
            </div>
            <div class="col col-md-3">
                <h6>Reproducción de audio: Mp3</h6>
                <figure>
                    <audio src="../audio/HieloArdienteSeniora.mp3" controls></audio>
                    <figcaption>Canción: Hielo Ardiente Se&ntildeora</figcaption>
                </figure>
            </div>
        </div>
        <article>
            <section>
                <?php include('piedepagina.php'); ?>