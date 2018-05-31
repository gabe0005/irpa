<!doctype html>
<html lang="es">
<?php include('_head.php') ?>
<body>
    <div class="grid-main-container">
        <header class="top-header flex center">
            <div class="grow">
                <h1>Prueba lista</h1>
                <div class="breadcrumbs">
                    <span>Definir reglas</span>
                    <span>Añadir preguntas</span>
                    <span>Prueba generada</span>
                    <span class="current">Prueba lista</span>
                </div>
            </div>
            <div class="logo">
                <img src="img/IRPA-logo.png"/>
            </div>
        </header>
        <?php include('sidebar.php') ?>
        <section class="grid content">
            <div class="page-title">
                <h2>Prueba coeficiente 2</h2>
                <div>
                    <span>III Medio - Historia y Geografía - Autor: Guillermo Palma</span>
                </div>
                <a>2 unidades</a>
            </div>
            <div class="page-content">
                <div class="card">
                    <h2>PDF listos para imprimir</h2>
                    <div class="pdf-list">
                        <a class="pdf">
                            <img src="img/icon_pdf.svg"/>
                            <span>Forma A</span>
                        </a>
                        <a class="pdf disabled">
                            <img src="img/icon_pdf.svg"/>
                            <span>Forma B</span>
                        </a>
                        <a class="pdf disabled">
                            <img src="img/icon_pdf.svg"/>
                            <span>Forma C</span>
                        </a>
                        <a class="pdf disabled">
                            <img src="img/icon_pdf.svg"/>
                            <span>Forma D</span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <h2>Escala <a><i class="material-icons">edit</i>Editar</a></h2>
                    <ul>
                        <li>Tipo de escala: <span>Estándar</span></li>
                        <li>Tipo de escala: <span>Estándar</span></li>
                        <li>Tipo de escala: <span>Estándar</span></li>
                    </ul>
                </div>
                <div class="card">
                    <h2>Ingresar respuestas</h2>
                    <div class="respuestas">
                        <div class="grid g2">
                            <div class="flex evenly import v-center">
                                <a class="box">
                                    <img src="img/icon_importar_respuestas.svg"/>
                                    <p><b>Importar hoja de respuestas</b></p>
                                </a>
                                <a class="box">
                                    <img src="img/icon_editar_respuestas.svg"/>
                                    <p><b>Ingresar/Editar respuestas</b></p>
                                </a>
                            </div>
                            <div class="status">
                                <h4><span>Importación pendiente</span> <i class="material-icons">warning</i></h4>
                                <p>Importa las hojas de respuestas o ingrésalas manualmente para poder calcular notas</p>
                                <ul>
                                    <li class="check"><span>13 hojas importadas correctamente</span></li>
                                    <li class="warning"><span>4 hojas no legibles</span></li>
                                    <li class="error">2 número de ruts no encontrados</li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-end v-center">
                            <div class="box-warning">
                                <i class="material-icons">warning</i>
                                <span>Existen cambios en las respuestas desde la última vez que se calcularon las notas</span>
                            </div>
                            <a class="btn">calcular notas</a>
                        </div>
                    </div>
                    <div class="resultados">
                        <p>Resultado del cálculo procesado el <b>17-05-2018 a las 14:30 hrs</b></p>
                        <div class="flex evenly">
                            <a class="box">
                                <i class="material-icons">assignment_returned</i>
                                <h4>Descargar notas</h4>
                            </a>
                            <a class="box disabled">
                                <i class="material-icons">assignment_turned_in</i>
                                <h4>Descargar respuestas</h4>
                            </a>
                            <a class="box disabled">
                                <i class="material-icons">assignment</i>
                                <h4>Descargar informes</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="card page-sidenav">
                <div class="guardar-prueba">
                    <a class="btn flat">Duplicar prueba</a>
                </div>
                <div>
                    <a class="btn flat">Vista previa</a>
                </div>
                <div class="info-preguntas">
                    <hgroup>
                        <h2>30</h2>
                        <h4>preguntas</h4>
                    </hgroup>
                    <div>
                        <div><span>Desarrollo (8)</span></div>
                        <div><span>Alternativas (8)</span></div>
                        <div><span>Verdadero/falso (8)</span></div>
                        <div><span>Respuesta corta (8)</span></div>
                    </div>
                    <div class="flex center total">
                        <h3>200</h3>
                        <p>Puntos en total</p>
                    </div>
                </div>
                <div class="diagrama">
                    <div class="grafico flex center"><!-- aquí debieran remplazar la imagen por el diagrama que ustedes generan -->
                        <img src="img/diagrama.png" alt="diagrama"/>
                    </div>
                    <div class="leyenda">
                        <div class="tag ama">Analizar</div>
                        <div class="tag roj">Aplicar</div>
                        <div class="tag pur">Entender</div>
                        <div class="tag azu">Recordar</div>
                        <div class="tag cel">Crear</div>
                        <div class="tag ver">Evaluar</div>
                    </div>
                </div>
            </aside>
        </section>
    </div>
    <?php include('modals/modal_advertencia.php'); ?>
</body>
</html>
