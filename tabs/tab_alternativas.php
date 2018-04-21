
                    <div class="tab-content" id="tc-alternativa">
                        <header class="flex v-center between wrap">
                            <div class="flex v-center botonera">
                                <a class="btn flat">
                                    <i class="material-icons">add</i><span>Pregunta</span>
                                </a>
                                <a class="btn flat">
                                    <i class="material-icons">add</i><span>grupo</span>
                                </a>
                            </div>
                            <div class="flex opciones">
                                <div class="flex v-center">
                                    <span>Número máximo de<br>alternativas en cada pregunta</span>
                                    <div class="number">
                                        <button class="btn-number res"><i class="material-icons">remove</i></button>
                                        <input type="number" value="0">
                                        <button class="btn-number sum"><i class="material-icons">add</i></button>
                                    </div>
                                </div>
                                <div class="flex v-center">
                                    <span>Ordenar<br>aleatoriamente</span>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever">
                                                <i class="material-icons">check</i>
                                                <i class="material-icons">close</i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="preguntas">
                            <div class="pregunta-grupo collapse"  draggable="true">
                                <header class="flex v-center">
                                    <div class="num">1</div>
                                    <div class="grow">
                                        <span>Grupo de preguntas de alternativas</span>
                                        <h3>Grupo de preguntas</h3>
                                    </div>
                                    <a class="col-indicator">
                                        <span>Preguntas</span>
                                    </a>
                                </header>
                                <div class="grupo-body col-body">
                                    <div class="enunciado">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
                                        <div class="img-container"><img src="img/old-map-england.jpg"/>
                                        </div>
                                    </div>
                                    <div class="lista-preguntas">
                                        <?php include('preguntas/tipo_alternativa.php'); ?>
                                    </div>
                                </div>
                                <div class="grupo-footer">
                                    <div class="grow">
                                        <strong>2 preguntas - Total 20 pts.</strong>
                                        <br>
                                        <span class="small">Modificado el 28 de Marzo, 15:30</span>
                                    </div>
                                    <div class="botonera">
                                        <a class="btn light">
                                            <i class="material-icons">delete_forever</i>
                                            <span>Eliminar</span>
                                        </a>
                                        <a class="btn light">
                                            <i class="material-icons">edit</i>
                                            <span>Editar</span>
                                        </a>
                                        <a class="btn light">
                                            <i class="material-icons">add</i>
                                            <span>Agregar pregunta</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php include('preguntas/tipo_alternativa.php'); ?>
                        </div>
                    </div>