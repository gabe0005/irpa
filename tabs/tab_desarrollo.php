<div class="tab-content" id="tc-desarrollo">
                        <header class="flex v-center">
                            <a class="btn flat">
                                <i class="material-icons">add</i><span>Pregunta</span>
                            </a>
                            <a class="btn flat">
                                <i class="material-icons">add</i><span>grupo</span>
                            </a>
                        </header>
                        <div class="preguntas">
                            <div class="pregunta-grupo collapse"  draggable="true">
                                <header class="flex v-center">
                                    <div class="num">1</div>
                                    <div class="grow">
                                        <span>Grupo de preguntas de desarrollo</span>
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
                                        <?php include('preguntas/tipo_desarrollo.php'); ?>
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
                            <?php include('preguntas/tipo_desarrollo.php'); ?>
                        </div>
                    </div>