<!doctype html>
<html lang="es">
<?php include('_head.php') ?>
<body>
    <div class="grid-main-container">
        <header class="top-header flex center">
            <div class="grow">
                <h1>Nueva prueba</h1>
                <div class="breadcrumbs">
                    <span>Definir reglas</span>
                    <span class="current">Añadir preguntas</span>
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
            <div class="page-info flex stretch">
                <div class="flex flex-column stretch">
                    <div>
                        <strong>Puntaje total</strong>
                    </div>
                    <div class="flex center grow page-info-text">
                        <span>250</span>
                    </div>
                </div>
                <div class="separator"></div>
                <div class="flex flex-column stretch">
                    <div>
                        <strong>Nº de preguntas</strong>
                    </div>
                    <div class="flex center grow page-info-text">
                        <span>35</span>
                    </div>
                </div>
            </div>
            <div class="card tabbed page-content">
                <div class="top-tabs flex between">
                    <ul class="tabs flex">
                        <li id="tab-check-desarrollo" class="tab">
                            <a href="#tc-desarrollo" class="tab-info">
                                <span class="place">1</span>
                                <span>Desarrollo</span>
                            </a>
                        </li>
                        <li id="tab-check-alternativa" class="tab">
                            <a href="#tc-alternativa" class="tab-info">
                                <span class="place">2</span>
                                <span>Alternativa</span>
                            </a>
                        </li>
                        <li id="tab-check-vf" class="tab">
                            <a href="#tc-vf" class="tab-info">
                                <span class="place">3</span>
                                <span>Verdadero/Falso</span>
                            </a>
                        </li>
                        <li id="tab-check-rc" class="tab">
                            <a href="#tc-rc" class="tab-info">
                                <span class="place">4</span>
                                <span>Respuesta corta</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tour-container">
                        <button id="add-type" class="btn">
                            <i class="material-icons">add</i>
                        </button>
                        <div class="type-menu">
                            <label id="check-desarrollo" class="checkbox">
                                <input type="checkbox" checked/>
                                <div class="selector"></div>
                                <span>Desarrollo</span>
                            </label>
                            <label id="check-alternativa" class="checkbox">
                                <input type="checkbox" checked/>
                                <div class="selector"></div>
                                <span>Alternativas</span>
                            </label>
                            <label id="check-vf" class="checkbox">
                                <input type="checkbox" checked/>
                                <div class="selector"></div>
                                <span>Verdadero/Falso</span>
                            </label>
                            <label id="check-rc" class="checkbox">
                                <input type="checkbox" checked/>
                                <div class="selector"></div>
                                <span>Respuesta corta</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="tab-container">
                    <?php include('tabs/tab_desarrollo.php'); ?>
                    <?php include('tabs/tab_alternativas.php'); ?>
                    <?php include('tabs/tab_vf.php'); ?>
                    <?php include('tabs/tab_rc.php'); ?>
                </div>
            </div>
            <aside class="card page-sidenav">
                <div class="guardar-prueba">
                    <a class="btn flat">Guardar</a>
                    <p>Último guardado el 23 Dic 2017 ( 23:17)</p>
                </div>
                <div>
                    <a class="btn flat">Vista previa</a>
                </div>
                <div>
                    <a class="btn">Generar prueba</a>
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
</body>
</html>
