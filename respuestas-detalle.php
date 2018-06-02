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
                    <span>Prueba lista</span>
                    <span class="current">Detalle de respuestas</span>
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
            <div class="page-content cfull card tabbed">
                <div class="tabbed-content">
                    <h2>Respuestas de la prueba</h2>
                    <div class="grid g2">
                        <div class="autogrid">
                            <span>Seleccionar curso</span>
                            <select>
                                <option selected disabled>Seleccionar...</option>
                                <option>Curso 1</option>
                                <option>Curso 2</option>
                            </select>
                        </div>
                        <div class="autogrid flex-end">
                            <a class="btn flat">Cancelar y volver</a>
                            <a class="btn">Actualizar respuestas</a>
                        </div>
                    </div>
                </div>
                <div class="curso">
                    <div class="alumnos">
                        <div class="header">
                            <h4>Alumno</h4>
                        </div>
                        <ul class="tab-alumnos-header">
                            <li class="tab active" data-tab="tab1">
                                <div>
                                    <p>Castro Vergara Cristobal Eduardo</p>
                                    <p>Rut: 18.456.345-1</p>
                                </div>
                            </li>
                            <li class="tab warning" data-tab="tab2">
                                <div>
                                    <p>Castro Vergara Cristobal Eduardo</p>
                                    <p>Rut: 18.456.345-1</p>
                                </div>
                                <div class="tooltiped" data-tooltip="8 respuestas no pudieron ser leídas"><i class="material-icons">warning</i></div>
                            </li>
                            <li class="tab" data-tab="tab3">
                                <div>
                                    <p>Castro Vergara Cristobal Eduardo</p>
                                    <p>Rut: 18.456.345-1</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="set-respuesta">
                        <div class="header autogrid between">
                            <hgroup>
                                <h4>Respuestas</h4>
                                <h5>Cristobal Vergara</h5>
                            </hgroup>
                            <select>
                                <option selected>Forma A</option>
                                <option>Forma B</option>
                                <option>Forma C</option>
                            </select>
                        </div>
                        <div class="tab-alumnos-body">
                            <div id="tab1" class="alumn-tab">
                                <ul class="tabs flex">
                                    <li id="tab-check-desarrollo" class="tab">
                                        <a href="#tc-desarrollo" class="tab-info">
                                            <span>Desarrollo</span>
                                        </a>
                                    </li>
                                    <li id="tab-check-alternativa" class="tab">
                                        <a href="#tc-alternativa" class="tab-info">
                                            <span>Alternativa</span>
                                        </a>
                                    </li>
                                    <li id="tab-check-vf" class="tab">
                                        <a href="#tc-vf" class="tab-info">
                                            <span>Verdadero/Falso</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-container">
                                    <div class="tab-content" id="tc-desarrollo">
                                        <?php include('others/lista_respuestas_desarrollo.php'); ?>
                                    </div>
                                    <div class="tab-content" id="tc-alternativa">
                                        <?php include('others/lista_respuestas_alternativas.php'); ?>
                                    </div>
                                    <div class="tab-content" id="tc-vf">
                                        <?php include('others/lista_respuestas_vf.php'); ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="alumn-tab">
                                <span>Mismo contenido para todos los alumnos</span>
                            </div>
                            <div id="tab3" class="alumn-tab">
                                <span>Mismo contenido para todos los alumnos</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabbed-content">
                    <div class="autogrid flex-end">
                        <a class="btn flat">Cancelar y volver</a>
                        <a class="btn">Actualizar respuestas</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include('modals/modal_preview.php'); ?>
</body>
</html>
