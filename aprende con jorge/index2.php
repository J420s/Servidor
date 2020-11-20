<?php include_once "handleForm.php"?>


<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container-fluid">
        <div class="row gray justify-content-center">
            <div class="col-8 align-self-center ">
                
                <form method="POST" action="">
                    <!--------row---------->
                    <div class="form-row">
                      <div class="form-group col-md-6 ">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"> 
                      </div>
                      <div class="form-group col-md-6 ">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos"  placeholder="Apellidos"> 
                      </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Teléfono</label>
                          <input type="text" class="form-control" name="telefono" id="dni"  placeholder="Teléfono"> 
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">DNI</label>
                          <input type="text" class="form-control" name="dni" id="dni" placeholder="DNI"> 
                        </div>
                    </div>
                    <!--------/row---------->

                    
                    
                    <!--------row---------->
                    <div class="form-row ">
                      <div class="form-group col-md-7">
                        <label for="">Foto</label>
                          <input type="file" class="form-control-file" id="foto" names="foto"> 
                      </div>
                      <div class="form-group col-md-3 ">
                        <label for="">Afición</label>
                        <select id="aficion" name="aficion" class="form-control ">
                            <option name="lectura" value="lectura" selected>Lectura</option>
                            <option name="musica" value="musica" >Música</option>
                            <option name="deporte" value="deporte">Deporte</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2 ">
                        <label for="">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad">
                      </div>
                    </div>
                    <!--------/row---------->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="check" id="check" value="hombre">
                                    <label class="form-check-label" for=" ">Hombre</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="check" id="check" value="mujer">
                                    <label class="form-check-label" for="">Mujer</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 offset-3">
                            <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Sign in</button>
                        </div>
                    </div>   
                  </div>
                </form>
                <div class="w-100"></div>
                <div class="row">
                  <div class="col">
                    <?= showData()?>
                    <?php saveData()?>

                  </div>
                </div>  
            </div><!--/col--->
            
        </div><!--/row-->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>