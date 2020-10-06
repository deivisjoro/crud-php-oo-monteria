<div class="container p-5">
    <div class="alert alert-primary">
        <a class="btn btn-primary" href="?modulo=estudiantes&accion=add">Ingresar</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>N</th>
                <th>Estudiante</th>
                <th colspan="3">Nota</th>
                <th>Promedio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(count($datos)>0){
                    foreach($datos as $i => $estudiante){
                    ?>
                    <tr>
                        <td><?=($i+1); ?></td>
                        <td>[<?=$estudiante->nombre; ?>]</td>
                        <td><?=$estudiante->nota1; ?></td>
                        <td><?=$estudiante->nota2; ?></td>
                        <td><?=$estudiante->nota3; ?></td>
                        <td>
                            <?php
                                $promedio = ($estudiante->nota1+$estudiante->nota2+$estudiante->nota3)/3;
                                echo $promedio;
                            ?>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="?modulo=estudiantes&accion=edit&id=<?=$estudiante->id; ?>">Editar</a>
                            <a class="btn btn-danger btn-eliminar" href="?modulo=estudiantes&accion=delete&id=<?=$estudiante->id; ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                }
                else{
                ?>
                <tr>
                    <td colspan="7">
                        <div class="alert alert-warning text-center">
                        No se encontraron registros
                        </div>
                    </td>
                </tr>
                <?php    
                }
            ?>
        </tbody>
    </table>
</div>