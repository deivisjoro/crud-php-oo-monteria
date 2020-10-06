<?php
    function form_ingresar_estudiantes($datos){
        if(empty($datos)){
            $datos = new stdClass();
            $datos->id = null;
            $datos->nombre = null;
            $datos->nota1 = null;
            $datos->nota2 = null;
            $datos->nota3 = null;
        }
        return '
        <form action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre.." value="'.$datos->nombre.'">
                        <input type="hidden" name="id" value="'.$datos->id.'">
                    </div>
                    <div class="form-group">
                        <label for="nota1">Nota 1</label>
                        <input type="text" name="nota1" class="form-control" placeholder="nota 1.." value="'.$datos->nota1.'">
                    </div>
                    <div class="form-group">
                        <label for="nota2">Nota 2</label>
                        <input type="text" name="nota2" class="form-control" placeholder="nota 2.." value="'.$datos->nota2.'">
                    </div>
                    <div class="form-group">
                        <label for="nota3">Nota 3</label>
                        <input type="text" name="nota3" class="form-control" placeholder="nota 3.." value="'.$datos->nota3.'">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="guardar" value="guardar">Guardar</button>
                        </div>
                        <div class="col-md-6">
                            <a href="?modulo=estudiantes" class="btn btn-danger btn-block">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        ';    
    }
?>