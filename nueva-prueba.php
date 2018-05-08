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
                    <a data-modal="modal-alternativa" class="modal-trigger btn">Generar prueba</a>
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
    
    <div id="modal-alternativa" class="modal modal-preg">
        <div class="flex center">
            <div class="modal-container">
                <div class="modal-header flex v-center">
                    <h2>Nueva pregunta de alternativas</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-options">
                        <div class="modal-sidebar">
                            <div class="option">
                                <div class="title flex v-center">
                                    <i class="material-icons">school</i>
                                    <h4>Objetivo de aprendizaje</h4>
                                </div>
                                <select>
                                    <option selected disabled>Seleccionar...</option>
                                    <option>Opción 1</option>
                                    <option>Opción 2</option>
                                </select>
                            </div>
                            <div class="option">
                                <div class="title flex v-center">
                                    <i class="material-icons">add</i>
                                    <h4>Puntaje</h4>
                                </div>
                                <select>
                                    <option selected disabled>Seleccionar...</option>
                                    <option>5</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="option">
                                <div class="title flex v-center">
                                    <i class="material-icons">image</i>
                                    <h4>Imagen para el enunciado:</h4>
                                </div>
                                <div class="img-enunciado">
                                    <div>
                                        <img id="img-load" src="img/img-bg-enunciado.png"/>
                                        <div class="submit-file">
                                            <input id="btn-file" type="file"  accept="image/*">
                                            <label id="subir-img" for="btn-file" class="flex center">
                                                <i class="material-icons">add</i>
                                                <span>Añadir</span>
                                            </label>
                                        </div>
                                        <button id="borrar-img" class="btn-borrar">
                                            <div class="flex center">
                                                <i class="material-icons">delete</i>
                                                <span>Borrar</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="txtimg-enunciado">Sin imagen adjunta</div>
                                </div>
                                <div class="img-tam">
                                    <h5>Tamaño</h5>
                                    <div class="flex between tams-default">
                                        <div class="tam">
                                            <div>
                                                <input id="tam1" class="inputsize" type="radio" name="sizes">
                                                <label for="tam1"><i class="material-icons">image</i></label>
                                            </div>
                                            <p>Min</p>
                                        </div>
                                        <div class="tam">
                                            <div class="med">
                                                <input id="tam2" class="inputsize" type="radio" name="sizes">
                                                <label for="tam2"><i class="material-icons">image</i></label>
                                            </div>
                                            <p>Med</p>
                                        </div>
                                        <div class="tam">
                                            <div class="grande">
                                                <input id="tam3" class="inputsize" type="radio" name="sizes">
                                                <label for="tam3"><i class="material-icons">image</i></label>
                                            </div>
                                            <p>Grande</p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="tam otro no-shrink">
                                            <div>
                                                <input id="tam-otro" class="inputsize" type="radio" name="sizes">
                                                <label for="tam-otro"><i class="material-icons">crop_free</i></label>
                                            </div>
                                            <p>Otro</p>
                                        </div>
                                        <div id="otro-tam" class="otro-tam grow disable">
                                            <label>
                                                <span>Ancho</span>
                                                <input type="number" disabled>
                                                <span>px</span>
                                            </label>
                                            <label>
                                                <span>Alto</span>
                                                <input type="number" disabled>
                                                <span>px</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-content">
                            <div class="flex between v-center title">
                                <h3>Enunciado</h3>
                                <a class="btn">
                                    <i class="material-icons">content_paste</i>
                                    <span>Pegar desde word</span>
                                </a>
                            </div>
                            <textarea class="enunciado"></textarea>
                            <div class="lista-alternativas">
                                <div class="alt-row flex">
                                    <div><span>a)</span></div>
                                    <textarea class="grow" placeholder="Escribe la alternativa aquí"></textarea>
                                    <div>
                                        <input id="radio1" type="radio" name="alt"/>
                                        <label for="radio1"><i class="material-icons">check</i></label>
                                    </div>
                                </div>
                                <div class="alt-row flex">
                                    <div><span>b)</span></div>
                                    <textarea class="grow" placeholder="Escribe la alternativa aquí"></textarea>
                                    <div>
                                        <input id="radio2" type="radio" name="alt"/>
                                        <label for="radio2"><i class="material-icons">check</i></label>
                                    </div>
                                </div>
                                <div class="alt-row flex">
                                    <div><span>c)</span></div>
                                    <textarea class="grow" placeholder="Escribe la alternativa aquí"></textarea>
                                    <div>
                                        <input id="radio3" type="radio" name="alt"/>
                                        <label for="radio3"><i class="material-icons">check</i></label>
                                    </div>
                                </div>
                                <div class="alt-row flex">
                                    <div><span>d)</span></div>
                                    <textarea class="grow" placeholder="Escribe la alternativa aquí"></textarea>
                                    <div>
                                        <input id="radio4" type="radio" name="alt"/>
                                        <label for="radio4"><i class="material-icons">check</i></label>
                                    </div>
                                </div>
                                <div class="alt-row flex">
                                    <div><span>e)</span></div>
                                    <textarea class="grow" placeholder="Escribe la alternativa aquí"></textarea>
                                    <div>
                                        <input id="radio5" type="radio" name="alt"/>
                                        <label for="radio5"><i class="material-icons">check</i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-preview bottom-out"><!-- dentro de este div debieran dejar el preview de la prueba-->
                        <div class="preview-test"><!-- esto es solo para simular la hoja blanca, pero ustedes deberían reemplazarlo por el div real -->
                            Preview
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex between">
                    <div>
                        <a class="btn white modal-close">Cancelar</a>
                    </div>
                    <div class="flex v-center">
                        <a class="btn-editor btn white">Vista previa</a>
                        <a class="btn">Guardar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
