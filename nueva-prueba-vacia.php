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
            <div class="card page-content grid g9">
            </div>
            <aside class="card page-sidenav flex center">
                <div>
                    <a class="btn flat disabled">Guardar</a>
                    <a class="btn flat disabled">Vista previa</a>
                    <a class="btn disabled">Generar prueba</a>
                </div>
            </aside>
        </section>
    </div>
</body>
</html>
