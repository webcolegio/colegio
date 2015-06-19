<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="{SET_NOT}" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group"> 
                                <select name="asignatura" class="form-control">
                                    {opciones}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Nombre</label>
                                </div>
                                <div>
                                    <div class="col-lg-2">
                                        <label>NOTA 1</label>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>NOTA 2</label>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>NOTA 3</label>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>NOTA 4</label>
                                    </div>
                                </div>
                            </div>
                            {estudiantes}   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>