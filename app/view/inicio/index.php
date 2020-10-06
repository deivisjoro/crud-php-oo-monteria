<div class="p-5 text-center">

    <h1>Pagina principal</h1>
    <div class="container p-5">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header text-center bg-dark text-white">
                <h4>Iniciar Sesion</h4>
            </div>
            <form action="?modulo=inicio&accion=login" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="ingrese usuario..">                        
                    </div>
                    <div class="form-group">
                        <label for="nombre">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="ingrese password..">                        
                    </div>
                </div>
                <div class="card-footer">                    
                  <button class="btn btn-primary btn-block" name="entrar" value="entrar">Entrar</button>                    
                </div>
            </form>
        </div>
    </div>
</div>

</div>