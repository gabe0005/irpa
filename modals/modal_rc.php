
    
    <div id="modal-rc" class="modal modal-preg">
        <div class="flex center">
            <div class="modal-container">
                <div class="modal-header flex v-center">
                    <h2>Nueva pregunta de Respuestas cortas</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-options">
                        <div class="modal-sidebar">
                            <div class="option">
                                <div class="title flex v-center">
                                    <i class="material-icons">school</i>
                                    <h4>Objetivo de aprendizaje</h4>
                                </div>
                                <select class="select-oa">
                                    <option selected disabled>Seleccionar...</option>
                                    <option>Opción 1</option>
                                    <option>Opción 2</option>
                                    <option value="otro">Otro</option>
                                </select>
                                <div class="oa-detalle">
                                    <h5>Habilidad cognitiva</h5>
                                    <select>
                                        <option selected disabled>Seleccionar...</option>
                                        <option>Opción 1</option>
                                        <option>Opción 2</option>
                                        <option>Opción 3</option>
                                    </select>
                                    <h5>Unidad</h5>
                                    <select>
                                        <option selected disabled>Seleccionar...</option>
                                        <option>Opción 1</option>
                                        <option>Opción 2</option>
                                        <option>Opción 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option">
                                <div class="title flex v-center">
                                    <i class="material-icons">add</i>
                                    <h4>Puntaje</h4>
                                </div>
                                <div class="number">
                                    <button class="btn-number res"><i class="material-icons">remove</i></button>
                                    <input type="number" value="0">
                                    <button class="btn-number sum"><i class="material-icons">add</i></button>
                                </div>
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
                            </div>
                            <textarea class="enunciado"></textarea>
                            <div class="title">
                                <h3>Tabla de respuestas</h3>
                            </div>
                            <div class="tabla-rc">
                                <div class="header flex v-center between">
                                    <div class="flex v-center">
                                        <span>Número de filas<br>para la tabla</span>
                                        <div class="number">
                                            <button class="btn-number res"><i class="material-icons">remove</i></button>
                                            <input type="number" value="0">
                                            <button class="btn-number sum"><i class="material-icons">add</i></button>
                                        </div>
                                        <span>Número de columnas<br>para la tabla</span>
                                        <div class="number">
                                            <button class="btn-number res"><i class="material-icons">remove</i></button>
                                            <input type="number" value="0">
                                            <button class="btn-number sum"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                    <a class="btn">Generar tabla</a>
                                </div>
                                <div class="body">
                                    <div class="info flex v-center">
                                        <img src="img/switch.png"/>
                                        <span>Activa las celdas que debe contestar el alumno, no serán impresas en la prueba generada</span>
                                    </div>
                                    <div class="table-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                    <td><?php include('others/rc_box.php'); ?></td>
                                                </tr>
                                                <tr>
                                            </tbody>
                                        </table>
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