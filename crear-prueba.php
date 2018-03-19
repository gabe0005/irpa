<!doctype html>
<html lang="es">
<?php include('_head.php') ?>
<body>
    <div class="grid-main-container">
        <header class="top-header flex center">
            <div class="grow">
                <h1>Nueva prueba</h1>
                <div class="breadcrumbs">
                    <span class="current">Definir reglas</span>
                    <span>Añadir preguntas</span>
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
                            <div class="flex v-center">
                                <label class="check-status all"><!-- check-status es distinto al checkbox de abajo ya que tiene 3 estados: todos, algunos y ninguno checkqueado, alternen entre las clases "all", "none" y "some" para hacer el cambio de look -->
                                    <input type="checkbox"/>
                                    <div class="selector"></div>
                                </label>
                                <h4>Unidad 1</h4>
                            </div>
                            <a class="flex center">
                                <span>(0/3)</span>
                                <div class="arrow-collapse"></div>
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
                        <dt class="panel-head flex v-center between">
                            <div class="flex v-center">
                                <label class="check-status none">
                                    <input type="checkbox"/>
                                    <div class="selector"></div>
                                </label>
                                <h4>Unidad 2</h4>
                            </div>
                            <a class="flex center">
                                <span>(0/3)</span>
                                <div class="arrow-collapse"></div>
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
                        <dt class="panel-head flex v-center between">
                            <div class="flex v-center">
                                <label class="check-status some">
                                    <input type="checkbox"/>
                                    <div class="selector"></div>
                                </label>
                                <h4>Unidad 3</h4>
                            </div>
                            <a class="flex center">
                                <span>(0/3)</span>
                                <div class="arrow-collapse"></div>
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
