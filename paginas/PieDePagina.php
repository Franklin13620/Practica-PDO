<!--footer-->
        <footer>
            <div class="row">
                <div class="col">
                <div class="card mt-3">
                <div class="card-header">UNIVERSIDAD GERARDO BARRIOS</div>
                    <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>MISIÓN | Somos la universidad que gestiona el conocimiento por nuestra
                            contribución con el desarrollo científico, económico y social de El Salvador, enfocada 
                            a satisfacer las necesidades de estudiantes, comunidades profesionales y empresas, 
                            mediante la docencia, investigación y proyección social.</p>
                        <footer class="blockquote-footer">Conocen nuestra
                        <cite title="Filosofía Institucional">Filosofía Institucional</cite></footer>
                        <a href="https://ugb.edu.sv/inicio/filosofia-institucional.html">Filosofía Institucional
                        </a>
                    </blockquote>
                    </div>
                    <!-- Obtener fecha -->
                    <h5>
                        <?php
                        date_default_timezone_set('America/El_Salvador');
                        setlocale(LC_ALL,'es_SV.UTF-8'); 
                        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre",
                        "Octubre","Noviembre","Diciembre");
                        echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')."</br> Hora actual: ".date('h:i A') ;                                
                        ?>
                    </h5>
                </div>
                </div>
            </div>
            <div class="row">
            <div class="col marco">
                <p>&copy;2020 Universidad Gerardo Barrios. Derechos Reservados</p>
            </div>
            </div>
        </footer>
    </div>
</div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/funciones.js"></script>
    </body>
</html>