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
                        <span class="none"><i class="material-icons">remove</i></span>
                    </div>
                </div>
                <div class="separator"></div>
                <div class="flex flex-column stretch">
                    <div>
                        <strong>Nº de preguntas</strong>
                    </div>
                    <div class="flex center grow page-info-text">
                        <span class="none"><i class="material-icons">remove</i></span>
                    </div>
                </div>
            </div>
            <div class="card page-content">
                <header class="flex between">
                    <div class="flex v-center">
                        <span>Agregar preguntas</span>
                        <div class="number">
                            <button class="btn-number res"><i class="material-icons">remove</i></button>
                            <input type="number" value="0">
                            <button class="btn-number sum"><i class="material-icons">add</i></button>
                        </div>
                    </div>
                    <div>
                        <a class="btn flat">Agregar</a>
                    </div>
                </header>
                <div class="pautas">
                    <div class="row header">
                        <h4 class="r1">Nº</h4>
                        <h4 class="r2">Respuesta</h4>
                        <h4 class="r3">Rúbrica</h4>
                        <h4 class="r4">Unidad</h4>
                        <h4 class="r5">Puntaje</h4>
                        <div class="r6">&nbsp;</div>
                    </div>
                    <?php include('others/lista_respuestas_pauta.php'); ?>
                    <?php include('others/lista_respuestas_pauta.php'); ?>
                    <?php include('others/lista_respuestas_pauta.php'); ?>
                    <div class="preguntas vacio">
                            <span>Parte agregando el número de preguntas que deseas para la prueba</span>
                    </div>
                </div>
            </div>
            <aside class="card page-sidenav">
                <div class="guardar-prueba">
                    <a class="btn flat disabled">Guardar</a>
                    <p>Último guardado el 23 Dic 2017 ( 23:17)</p>
                </div>
                <div>
                    <a class="btn modal-trigger" data-modal="modal-cursos">Generar prueba</a>
                </div>
            </aside>
        </section>
    </div>
    <?php include('modals/modal_cursos.php'); ?>
</body>
</html>
