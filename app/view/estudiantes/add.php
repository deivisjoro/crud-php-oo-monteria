<div class="container p-5">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header text-center bg-dark text-white">
                <h4>Ingresar Estudiante</h4>
            </div>
            <?php
                include_once('app/lib/form.php');
                echo form_ingresar_estudiantes(null);
            ?>
        </div>
    </div>
</div>