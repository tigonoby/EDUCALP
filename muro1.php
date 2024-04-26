<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- NAVBAR -->

<?php include('header.php') ?>

<!-- FIN NAVBAR -->

     <nav class="top-bar">
      <div class="container">
        <div class="row">
        <div class="col-sm-4 hidden-xs">
            <span class="nav-text">
            <?#class="fa fa-phone"?>
                <i class="" aria-hidden="true"></i>  1000536756
                <i class="fa fa-envelope" aria-hidden="true"></i> Juan Diego Flórez Londoño</span>
            </div>
        <div class="col-sm-4 text-center">

            </div>
        <div class="col-sm-4 text-right hidden-xs">
                <ul class="tools">                    
               
                    
                <li class="dropdown">
                 <a class="" href="#"><i class="fa fa-user" aria-hidden="true"></i> Mi Cuenta</a>                  
                </li>
                    
                            
                </ul>
              </div>
        </div>
      </div>
    </nav>   <!--TOP-NAVBAR-END-->

	
    
    
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        
<nav class="navbar navbar-light bg-white">
     
              

         
    </nav>




    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5">@Tigonoby</div>
                        
                        <div class="h7">Youtuber y TikToker del tercer mundo
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Seguidores   </div>
                            <div class="h5">100000</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Siguiendo</div>
                            <div class="h5">6758</div>
                        </li>
                        <li class="list-group-item">Disponible</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 gedf-main">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Hacer una Punblicación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Subir Archivo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">Enviar</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Subir imagen</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">Compartir</button>
                            </div>
                            <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Publico</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Amigos</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Privado</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@Anita</div>
                                    <div class="h7 text-muted">Competitiva</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuracion</div>
                                        <a class="dropdown-item" href="#">Guardar</a>
                        
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Trabajo en Equipo grado 11</h5>
                        </a>

                        <p class="card-text">
                            neccesito un equipo para mi trabajo de ciencias, ¿alguien se apunta?.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> A punto</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Commentar</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                    </div>
                </div>
                <!-- Post /////-->


                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@Pepe</div>
                                    <div class="h7 text-muted">Compañerista</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuracion</div>
                                        <a class="dropdown-item" href="#">guardar</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 20 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"> Trabajo de mateticas</h5>
                        </a>

                        <p class="card-text">
                          las guias de mateticas que pusieron la semana pasada, por si a alguien se le perdio. Puntuame :).
                        <div>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> A punto</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Commentar</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                    </div>
                </div>
                <!-- Post /////-->


                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@Carlos</div>
                                    <div class="h7 text-muted">Profesor</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuracion</div>
                                        <a class="dropdown-item" href="#">Guardar</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 40 min</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Guias semana de refuerzo</h5>
                        </a>

                        <p class="card-text">
                          Buenas tardes muchachos, les envio el link para que puedan descargar las presentes
                            guias de la semana 22, si alguien tiene problemas me comenta. OK
                            <a href="https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU" target="_blank">https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> A punto</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Commentar</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                    </div>
                </div>
                <!-- Post /////-->



            </div>
            <div class="col-md-3">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Mision Semanal</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Solo puedes cambiar tu mision 2 veces</h6>
                        <p class="card-text">Juega con al menos con 2 de tus amigos y gana en un duelo de ¡preguntas!</p>
                        <a href="#" class="card-link">A punto</a>
                        <a href="#" class="card-link">Cambiar</a>
                    </div>
                </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <h5 class="card-title">Mision Semanal</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Solo puedes cambiar tu mision 1 veces</h6>
                            <p class="card-text">¡Ayuda a un amigo y dale un aventon!</p>
                            <a href="#" class="card-link">A punto</a>
                            <a href="#" class="card-link">Cambiar</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>