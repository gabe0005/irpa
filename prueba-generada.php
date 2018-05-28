<!doctype html>
<html lang="es">
<?php include('_head.php') ?>
<body>
    <div class="grid-main-container">
        <header class="top-header flex center">
            <div class="grow">
                <h1>Prueba generada</h1>
                <div class="breadcrumbs">
                    <span>Definir reglas</span>
                    <span>Añadir preguntas</span>
                    <span class="current">Prueba generada</span>
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
                    <h2><em>1.</em> Definir formato para pdf</h2>
                    <div class="grid g2">
                        <div>
                            <h3>Cursos</h3>
                            <div class="multiselect">
                                <div class="multiselect-field">Seleccionar...</div>
                                <div class="options">
                                    <label class="checkbox flex v-center">
                                        <input type="checkbox" value="Curso I">
                                        <div class="selector"></div>
                                        <span>Curso I</span>
                                    </label>
                                    <label class="checkbox flex v-center">
                                        <input type="checkbox" value="Curso III">
                                        <div class="selector"></div>
                                        <span>Curso II</span>
                                    </label>
                                    <label class="checkbox flex v-center">
                                        <input type="checkbox" value="Curso III">
                                        <div class="selector"></div>
                                        <span>Curso III</span>
                                    </label>
                                </div>
                                <div class="tag-list">
                                    <div class="tag"><span>III medio A</span><i class="material-icons">close</i></div>
                                    <div class="tag"><span>II medio B</span><i class="material-icons">close</i></div>
                                </div>
                            </div>
                        </div>
                        <div class="formas">
                            <h3>Formas</h3>
                            <label class="radio flex v-center">
                                <input type="radio" name="formas" checked>
                                <div class="selector"></div>
                                <span>Sin formas</span>
                            </label>
                            <label class="radio flex v-center">
                                <input type="radio" name="formas">
                                <div class="selector"></div>
                                <span>A y B</span>
                            </label>
                            <label class="radio flex v-center">
                                <input type="radio" name="formas">
                                <div class="selector"></div>
                                <span>A, B y C</span>
                            </label>
                            <label class="radio flex v-center">
                                <input type="radio" name="formas">
                                <div class="selector"></div>
                                <span>A, B, C y D</span>
                            </label>
                        </div>
                        <div>
                            <h3>Formato</h3>
                            <div class="grid g2">
                                <div>
                                    <h4>Tamaño de hoja</h4>
                                    <select>
                                        <option selected disabled>Seleccionar...</option>
                                        <option>hoja carta</option>
                                        <option>hoja oficio</option>
                                    </select>
                                </div>
                                <div>
                                    <h4>Tamaño de letra</h4>
                                    <select>
                                        <option selected disabled>Seleccionar...</option>
                                        <option>10 pt</option>
                                        <option>12 pt</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="grid-self-end text-right">
                            <a class="btn inline">Generar vista previa</a>
                        </div>
                    </div>
                </div>
                <div class="card vista-previa">
                    <h2><em>2.</em> Vista previa</h2>
                    <div class="preview-list">
                        <a class="preview">
                            <img src="img/icon_preview.svg"/>
                            <span>Forma A</span>
                        </a>
                        <a class="preview disabled">
                            <img src="img/icon_preview.svg"/>
                            <span>Forma B</span>
                        </a>
                        <a class="preview disabled">
                            <img src="img/icon_preview.svg"/>
                            <span>Forma C</span>
                        </a>
                        <a class="preview disabled">
                            <img src="img/icon_preview.svg"/>
                            <span>Forma D</span>
                        </a>
                    </div>
                    <p>Haz clic en "generar vista previa" para obtener los archivos para descargar.</p>
                    <div class="text-right">
                        <a class="btn inline disabled">
                            <i class="material-icons">done_all</i>
                            <span>generar pruebas para imprimir y evaluar</span>
                        </a>
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
    <?php include('modals/modal_grupo.php'); ?>
</body>
</html>
