<!doctype html>
<html lang="es">
<?php include('_head.php') ?>
<body>
    <div class="grid-main-container">
        <header class="top-header flex center">
            <div class="grow">
                <h1>Mis Pruebas</h1>
                <div class="breadcrumbs">
                    <span class="current">Dashboard</span>
                </div>
            </div>
            <div class="logo">
                <img src="img/IRPA-logo.png"/>
            </div>
        </header>
        <?php include('sidebar.php') ?>
        <section class="grid full-content g2">
                <div class="card cfull">
                    <div class="flex between v-center title">
                        <h2>Últimas pruebas en proceso</h2>
                        <a class="btn big"><i class="material-icons">add</i><span>Nueva prueba</span></a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre prueba</th>
                                <th>Autor</th>
                                <th>Curso</th>
                                <th>Tipo</th>
                                <th>Nº de preguntas</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a>Prueba para cuartos medio</a></td>
                                <td>José</td>
                                <td>II Medio</td>
                                <td>Pauta</td>
                                <td>15 preguntas</td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Borrar"><i class="material-icons">delete_forever</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Duplicar prueba"><i class="material-icons">content_copy</i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a>Comprensión de lectura</a></td>
                                <td>José</td>
                                <td>II Medio</td>
                                <td>Pauta</td>
                                <td>15 preguntas</td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Borrar"><i class="material-icons">delete_forever</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Duplicar prueba"><i class="material-icons">content_copy</i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a>SIMCE</a></td>
                                <td>José</td>
                                <td>II Medio</td>
                                <td>Pauta</td>
                                <td>15 preguntas</td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Borrar"><i class="material-icons">delete_forever</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Duplicar prueba"><i class="material-icons">content_copy</i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex center">
                        <a class="btn flat">Ver todas</a>
                    </div>
                </div>
                <div class="card">
                    <div class="title">
                        <h2>Pruebas generadas</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre prueba</th>
                                <th>Puntaje</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a>Prueba para cuarto medio</a></td>
                                <td>35 pts.</td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Duplicar prueba"><i class="material-icons">content_copy</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Vista previa"><i class="material-icons">find_in_page</i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a>Prueba coeficiente 2</a></td>
                                <td>35 pts.</td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Duplicar prueba"><i class="material-icons">content_copy</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Vista previa"><i class="material-icons">find_in_page</i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a>SIMCE</a></td>
                                <td>35 pts.</td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Duplicar prueba"><i class="material-icons">content_copy</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Vista previa"><i class="material-icons">find_in_page</i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex center">
                        <a class="btn flat">Ver todas</a>
                    </div>
                </div>
                <div class="card">
                    <div class="title">
                        <h2>Notas e informes</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre prueba</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a>Prueba para cuarto medio</a></td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Descargar prueba"><i class="material-icons">insert_drive_file</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Ver notas"><i class="material-icons">assignment</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Ver informes"><i class="material-icons">assessment</i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a>Prueba para cuarto medio</a></td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Descargar prueba"><i class="material-icons">insert_drive_file</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Ver notas"><i class="material-icons">assignment</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Ver informes"><i class="material-icons">assessment</i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a>Prueba para cuarto medio</a></td>
                                <td>
                                    <div class="flex evenly">
                                        <a class="btn-icon tooltipped" data-tooltip="Descargar prueba"><i class="material-icons">insert_drive_file</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Ver notas"><i class="material-icons">assignment</i></a>
                                        <a class="btn-icon tooltipped" data-tooltip="Ver informes"><i class="material-icons">assessment</i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex center">
                        <a class="btn flat">Ver todas</a>
                    </div>
                </div>
        </section>
    </div>
</body>
</html>
