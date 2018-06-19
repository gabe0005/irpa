<!doctype html>
<html lang="es">
<?php include('_head.php') ?>
<body>
    <div class="grid-main-container">
        <header class="top-header flex center">
            <div class="grow">
                <h1>Mi Perfil</h1>
            </div>
            <div class="logo">
                <img src="img/logo-irpa2.png"/>
            </div>
        </header>
        <?php include('sidebar.php') ?>
        <section class="grid content">
            <div class="page-content cfull card perfil">
                <div class="flex center">
                    <div>
                        <div class="img-perfil">
                            <img src="img/default_avatar.png" />
                        </div>
                        <div class="nombre-perfil">
                            <h2>Nombre de Usuario</h2>
                            <h4>Institución o colegio</h4>
                            <span>Departamento</span>
                        </div>
                    </div>
                </div>
                <div class="seccion datos-perfil">
                    <h4>Nombre completo</h4>
                    <input type="text">
                    <div class="grid g2">
                        <div>
                            <h4>Email</h4>
                            <input type="text">
                        </div>
                        <div>
                            <h4>Teléfono</h4>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="seccion configuracion">
                    <div class="grid g2">
                        <div>
                            <h3>Formato por omisión</h3>
                            <div class="grid g2">
                                <div>
                                    <h4>Tamaño de hoja</h4>
                                    <select>
                                        <option selected="" disabled="">Seleccionar...</option>
                                        <option>hoja carta</option>
                                        <option>hoja oficio</option>
                                    </select>
                                </div>
                                <div>
                                    <h4>Tamaño de letra</h4>
                                    <select>
                                        <option selected="" disabled="">Seleccionar...</option>
                                        <option>10 pt</option>
                                        <option>12 pt</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="formas">
                            <h3>Formas por omisión</h3>
                            <label class="radio flex v-center">
                                <input type="radio" name="formas" checked="">
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
                    </div>
                </div>
                <div class="seccion contrasena">
                    <h3>Cambiar contraseña</h3>
                    <div class="grid g2">
                        <div>
                            <h4>Contraseña actual</h4>
                            <input type="password">
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <h4>Nueva contraseña</h4>
                            <input type="password">
                        </div>
                        <div>
                            <h4>Repetir contraseña</h4>
                            <input type="password">
                        </div>
                    </div>
                </div>
                <div class="error-msj">
                    <i class="material-icons">error</i>
                    <p>Hay campos sin completar</p>
                </div>
                <div class="seccion submit autogrid center">
                    <a class="btn flat">Cancelar</a>
                    <button class="btn">Guardar</button>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
