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
            <div class="card page-content grid g9">
                <div class="box-select">
                    <div class="title">
                        <i class="material-icons">assignment</i>
                        <h3>Tipo de prueba</h3>
                    </div>
                    <select>
                        <option selected disabled>Seleccionar...</option>
                        <option>Prueba IRPA</option>
                        <option>Prueba de pauta</option>
                    </select>
                </div>
                <div class="box-info">
                    <h3>Nombre</h3>
                    <input type="text" />
                </div>
                <div class="box-select">
                    <h3>Asignatira</h3>
                    <select>
                        <option selected disabled>Seleccionar...</option>
                        <option>Asignatura</option>
                        <option>Asignatura 2</option>
                    </select>
                </div>
                <div class="box-select">
                    <h3>Nivel</h3>
                    <select>
                        <option selected disabled>Seleccionar...</option>
                        <option>Nivel 1</option>
                        <option>Nivel 2</option>
                    </select>
                </div>
                <div class="box-select">
                    <h3>Taxonomía de evaluación</h3>
                    <select>
                        <option selected disabled>Seleccionar...</option>
                        <option>Taxonomía 1</option>
                        <option>Taxonomía 2</option>
                    </select>
                </div>
                <div class="box-info unidades-evaluacion">
                    <div class="title">
                        <h3>Unidades de evaluación</h3>
                        <span>(2 seleccionadas)</span>
                    </div>
                    
                    <dl class="accordion">
                        <dt class="panel-head flex v-center between">
                            <div>
                                <div class="check-status"></div>
                                <h4>Unidad 1</h4>
                            </div>
                            <a class="flex center">
                                <span>(0/3)</span>
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                        </dt>
                        <dd>
                            <label class="checkbox flex v-center">
                                <input type="checkbox"/>
                                <div class="selector"></div>
                                <span>Ítem 1</span>
                            </label>
                            <label class="checkbox flex v-center">
                                <input type="checkbox"/>
                                <div class="selector"></div>
                                <span>Ítem 2</span>
                            </label>
                        </dd>
                        <dt class="pane-head">
                            <a href="">Panel 2</a>
                        </dt>
                        <dd>
                            Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                        </dd>
                        <dt><a href="">Panel 3</a></dt>
                        <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</dd>
                    </dl>
                </div>
            </div>
            <aside class="card page-sidenav flex center">
                <div>
                    <a class="btn flat">Guardar</a>
                    <a class="btn">Siguiente paso</a>
                </div>
            </aside>
        </section>
    </div>
</body>
</html>
